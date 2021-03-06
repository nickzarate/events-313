<!DOCTYPE html>

<html lang="en">
<head>
  <title>BYU-Idaho Events</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Welcome <?= $row['username']; ?>!</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#school_events">School Events</a></li>
    <li><a data-toggle="tab" href="#public_events">Public Events</a></li>
    <li><a data-toggle="tab" href="#create_event">Create An Event</a></li>
  </ul>
  <div class="tab-content">
    <div id="school_events" class="tab-pane fade in active">
      <?php
        getFeed("https://calendar.byui.edu/RSSFeeds.aspx?data=tq9cbc8b%2btuQeZGvCTEMSP%2bfv3SYIrjQ3VTAXA335bE0WtJCqYU4mp9MMtuSlz6MRZ4LbMUU%2fO4%3d");
      ?>
    </div>
    <div id="public_events" class="tab-pane fade">
      <?php
        foreach ($db->query('SELECT * FROM events') -> fetchAll() as $events) {
          echo '<h3>' . $events['title'] . '</h3>' . '<p>' . $events['time'] . '</p>' . '<p>' . $events['location'] . '</p>' . '<p>' . $events['description'] . '</p>';
        }
      ?>
    </div>
    <div id="create_event" class="tab-pane fade">
      <h3>Create An Event!</h3>
      <?php
        include("form.php");
      ?>
    </div>
  </div>
</div>

</body>
</html>
