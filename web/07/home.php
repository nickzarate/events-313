<!DOCTYPE html>

<?php
require('db_connection.php');
?>

<html lang="en">
<head>
  <title>BYU-Idaho Events</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="./otherFunctions.js"></script>
</head>
<body>

<div class="container">
  <h2>Welcome <?= $row['username']; ?>!</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#all_events">All Events</a></li>
    <li><a data-toggle="tab" href="#my_events">My Events</a></li>
  </ul>
  <div class="tab-content">
    <div id="all_events" class="tab-pane fade in active">
      <button onClick="refreshEvents()">Refresh Events</button>
      <?php
        foreach ($db->query('SELECT * FROM event') -> fetchAll() as $events) {
          // if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['form'] == 'form2') {
          //   if ($_POST["books"] == $books["book"]) {
          //     $selected = "selected='selected'";
          //   } else {
          //     $selected = "";
          //   }
          // }
          echo '<h4>' . $events['title'] . '</h4>' . '<p>' . $events['description'] . '</p>';
        }
      ?>
      <p>Here will be all events in the database</p>
    </div>
    <div id="my_events" class="tab-pane fade">
      <h3>My Events</h3>
      <p>Here will be all of my events</p>
    </div>
  </div>
</div>

</body>
</html>
