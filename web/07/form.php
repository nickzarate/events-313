<?php
require('db_connection.php');

  $title = $time = $location = $description = "";
  $titleErr = $timeErr = $locationErr = $descriptionErr = "";

  if (isset($_POST) && !empty($_POST)){
    if($_POST['form'] == 'form1') {
      if(empty($_POST["title"])){
        $titleErr = "Title is required";
      }
      else{
        $title = $_POST["title"];
      }
      if(empty($_POST["time"])){
        $timeErr = "Time is required";
      }
      else{
        $time = $_POST["time"];
      }
      if(empty($_POST["location"])){
        $locationErr = "Location is required";
      }
      else{
        $location = $_POST["location"];
      }
      if(empty($_POST["description"])){
        $descriptionErr = "Description is required";
      }
      else{
        $description = $_POST["description"];
      }

      if($titleErr == "" && $timeErr == "" && $locationErr == "" && $descriptionErr == ""){

        $db->exec("INSERT INTO events (title, time, location, description) VALUES ('$title', '$time', '$location', '$description')");

        $title = $time = $location = $description = "";
        $titleErr = $timeErr = $locationErr = $descriptionErr = "";

      } else if ($titleErr == "" && $timeErr == "" && $locationErr == "") {
        $db->exec("INSERT INTO events (title, time, location, description) VALUES ('$title', '$time', '$location', NULL)");

        $title = $time = $location = $description = "";
        $titleErr = $timeErr = $locationErr = $descriptionErr = "";
      }
    }
  }
?>
<html>
  <head>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#addForm").submit(function(e) {
          $.ajax({
            type: "POST",
            url: "https://serene-badlands-90671.herokuapp.com/07/form.php",
            data: $(this).serialize()
          }).done(function(data) {
            $("#results").html(data);
          });
          e.preventDefault();
        });
      });
    </script>
    <style>
      #addForm {
        float: left;
        padding-top: 30px;
        margin-left: 40px;
        position: fixed;
        height: 92vh;
        overflow-y: auto;
        padding-right: 40px;
      }
      #scriptures{
        float: right;
        width: 65%;
      }
    </style>
  </head>
<body>
  <div id="results">
    <form action="" method="post" id="addForm">
      <b>Title: </b><span><?= $titleErr;?></span><br>
      <input type="text" name="title" value="<?=$title?>"><br><br>
      <b>Time: </b><span><?= $timeErr;?></span><br>
      <input type="text" name="time" value="<?=$time?>"><br><br>
      <b>Location: </b><span><?= $locationErr;?></span><br>
      <input type="text" name="location" value="<?=$location?>"><br><br>
      <b>Description: </b><span><?= $descriptionErr;?></span><br>
      <textarea cols="30" rows="4" name="description"><?=$description?></textarea>
      <br><br>
      <input type="hidden" name="form" value="form1" />
      <input type="submit" value="Submit">
      <br><br>
    </form>
  </div>
</body>
</html>

