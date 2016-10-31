<style>
  .error{
    color:red;
  }
  .errors{
    color:red;
  }
</style>
<?php
  function validateText($text){
    return (strlen($text) >= 4);
  }
  function validatePassword($password){
    $pattern = '/^.*(?=.{7,})(?=.*\d)(?=.*[a-z]).*$/';
    return (strlen($password) >= 7 && preg_match($pattern, $password));
  }
  function confirmPassword($password, $passwordConfirm){
    return ($password === $passwordConfirm);
  }
  function userExists($user){
    global $db;
    $sql = "SELECT * FROM person WHERE username=:user";
    $statement = $db->prepare($sql);
    $statement->bindValue(':user', $user);
    $statement->execute();
    $row_count = $statement->rowCount();
    $statement->closeCursor();
    return $row_count;
  }
  function get_login_user(){
    global $db;
            
    if (isset($_POST['myusername']) && isset($_POST['mypassword'])){
      $myusername = filter_input(INPUT_POST, 'myusername', FILTER_SANITIZE_STRING);
      $mypassword = filter_input(INPUT_POST, 'mypassword', FILTER_SANITIZE_STRING);
      $sql = "SELECT * FROM person WHERE username='$myusername'";
      $result = $db->query($sql);
      $row = $result->fetch();
      if (password_verify($mypassword, $row['password'])){
        return $row;
      }
      else{
        return "";
      }
            
    } 
  }
  function login($row){
    global $db;
    $user = $row['username'];
    $pass = $row['password'];
    $sql = "SELECT * FROM person WHERE username=:user";
    $statement = $db->prepare($sql);
    $statement->bindValue(':user', $user);
    $statement->execute();
    $row_count = $statement->rowCount();
    $statement->closeCursor();
        
    return $row_count;   
  }
  function register($myuser, $mypass, $mypassConfirm){
    global $db;
    if(userExists($myuser) > 0) {return "This username is in use. Please choose another one."; }
    if(validatePassword($mypass) === FALSE){ return "Password must be at least 7 characters and contain a number."; }
    if(confirmPassword($mypass, $mypassConfirm) === FALSE){ return "Passwords don't match. Try Again."; }
        
    if (empty($myuser) || empty($mypass)){
      return "All fields are required!";
    }
    $mypassHash = password_hash($mypass, PASSWORD_DEFAULT);
        
    $sql = "INSERT INTO person (username, password) VALUES ('" . $myuser . "', '" . $mypassHash . "')";
    $result_count = $db->exec($sql);
    return "";
  }
  function get_user(){
    global $db;
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM person WHERE id='$id'";
    $result = $db->query($sql);
    $row = $result->fetch();
    return $row;
  }
  function getFeed($feed_url) {
    $content = file_get_contents($feed_url);
    $x = new SimpleXmlElement($content);

    // echo "<ul>";
    foreach($x->channel->item as $entry) {
      $description = $entry->description;
      $time = "";
      $location = "";
      $strlen = strlen($description);

      for($i = 0; $i < $strlen; $i++) {
        $char = substr($description, $i, 1);
        echo "<p>H" . $char . "H</p>";
        if (strcmp($char, "-") === 0) {
          $time = substr($description, 0, $i);
          $description = substr($description, $i + 2);
          break;
        }
      }

      $strlen = strlen($description);
      for($j = 0; $j < $strlen; $j++) {
        $char = substr($description, $j, 1);
        if (strcmp($char, ":") === 0) {
          $location = substr($description, 0, $j);
          $description = substr($description, $j + 2);
          break;
        }
      }
      if (strlen($location) === 0) {
        $location = $description;
        $description = "";
      }
      echo "<h3>" . $entry->title . "</h3>";
      echo "<p>location" . $entry->location . "location</p>";
      echo "<p>time" . $entry->time . "time</p>";
      // echo "<p>" . $entry->description . "</p>";
    }
    // echo "</ul>";
  }
?>
