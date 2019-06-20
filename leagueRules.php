<!DOCTYPE html>
<html>
<head>
	<title>Badminton Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="badmintonStyle.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="badmintonJS.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<!-- side navigation -->
<nav class="nav">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" id="topList" href="home.php">Bridlington and District Badminton association</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="join.php">Join</a>
    </li>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">
	  Current League Tables
	</button>
	<div class="collapse" id="navbarToggleExternalContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a id="sideCollapsed" class="nav-link" href="levelDoubles.php">Level Doubles</a>
        </li>
        <li class="nav-item">
          <a id="sideCollapsed" class="nav-link" href="mixedFours.php">Mixed Fours</a>
        </li>
      </ul>
    </div>  
	<li class="nav-item">
      <a class="nav-link" href="previousLeagueTables.php">Previous League Tables</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="matches.php">Matches</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="leagueRules.php" style="color:#006680">League Rules</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="scoresheets.php">Score Sheets</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="tournamentData.php">Tournament Dates</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="racketServices.php">Racket Stringing Services</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="events.php">Events</a>
    </li>
  </ul>
</nav> 

<div class="main">

<h1 class="titleText">League Rules</h1>

<div class="homeText">
  <p>Rules etc.</p>
</div>

</div>

</body>
</html>