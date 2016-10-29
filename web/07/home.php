<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>CS 313</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#all_events">All Events</a></li>
    <li><a data-toggle="tab" href="#my_events">My Events</a></li>
  </ul>
  <div class="tab-content">
    <div id="all_events" class="tab-pane fade in active">
      <h3>Welcome <?= $row["username"]; ?></h3>
    </div>
    <div id="my_events" class="tab-pane fade">
      <h3>My Events</h3>
      <p>Here will be all of my events</p>
    </div>
  </div>
</div>

</body>
</html>
