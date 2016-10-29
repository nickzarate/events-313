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
    <li class="active"><a data-toggle="tab" href="#assignments">Assignments</a></li>
    <li><a data-toggle="tab" href="#about">About Me</a></li>
  </ul>

  <div class="tab-content">
    <div id="assignments" class="tab-pane fade in active">
      <h3>Assignments</h3>
      <h3>Welcome <?= $row["username"]; ?></h3>
      <ul>
        <li><a href="/">Assignment 01</a></li>
        <li><a href="/">Assignment 02</a></li>
        <li><a href="https://peaceful-dusk-28535.herokuapp.com/assignments/03/index.html">Assignment 03</a></li>
        <li><a href="/">Assignment 04</a></li>
        <li><a href="/">Assignment 05</a></li>
        <li><a href="/">Assignment 06</a></li>
        <li><a href="https://peaceful-dusk-28535.herokuapp.com/assignments/07/index.html">Assignment 07</a></li>
        <li><a href="/">Assignment 08</a></li>
        <li><a href="/">Assignment 09</a></li>
        <li><a href="/">Assignment 10</a></li>
        <li><a href="/">Assignment 11</a></li>
        <li><a href="/">Assignment 12</a></li>
      </ul>
    </div>
    <div id="about" class="tab-pane fade">
      <h3>My Personal Page</h3>
      <img src="https://peaceful-dusk-28535.herokuapp.com/images/profile-picture.jpg" width="150px" height="200px">
      <p>
        My name is Nick Zarate and I am from Ithaca New York! I was born in California, but moved to New York
        shortly after. I like to play tennis and soccer, and just sports in general. I am on a rec soccer team
        and rec ultimate frisbee team here in Rexburg this semester! I am studying Computer Science and have
        completed about 6 semesters so am a good ways into it. I want to get into machine learning and maybe
        eventually work on self-driving cars or something of that nature. I think machine learning is something
        that is so useful and pertinent to almost any field, and I love math so I think I would be really
        interested in it. Right now in my free time I am working on a mobile application for Android devices.
        It's an app for college students that helps connect students with the fun activities that are happening
        around their area. I love learning new things on my own and I love problem solving in general.
      </p>
    </div>
  </div>
</div>

</body>
</html>
