<?php 
    session_start();
    require 'db_connection.php';
    require 'functions.php';
if (isset($_POST['action'])){
    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
} 
else if(isset($_GET['action'])){
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}
else{
    $action = 'signIn';
}
switch($action){
/****** Account info *****/
    case 'signIn':
        $row = get_login_user();
        if($row == ""){
          $count = 0;
        }
        else{
          $count = login($row);
      }
        include ("signIn.php");
        break;
    
    case 'account':
        if($_SESSION['loggedin']){
            $row = get_user();
            include ("account.php");
            break; 
        }
        else{
            header("Location: /07/?action=signIn");
        }
    
    case 'signUp':
      $errorMatch = "";
        include("signUp.php");
        break;
}
?>
