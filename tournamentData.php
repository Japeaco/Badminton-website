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
      <a class="nav-link" href="leagueRules.php">League Rules</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="scoresheets.php">Score Sheets</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="tournamentData.php" style="color:#006680">Tournament Dates</a>
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

<h1 class="titleText">Tournament Dates</h1>

<div class="homeText" style="padding-bottom:1%">
  <p>This year's tournament will take place between Monday 15 April and Wednesday 8 May. We welcome entries from players both inside and outside the league. 
  The fee for each match will be £5 for adults and £3.50 for under 18's. For non-Bridlington League Players there will be an affiliation fee of £2.00.</p>
</div>

<div class="mx-auto embed-responsive embed-responsive-16by9" style="width:510px; height:300px;">
  <iframe class="embed-responsive-item" src="https://calendar.google.com/calendar/embed?src=7fbl46nqc3ikhs35pefl1ha7vs@group.calendar.google.com">
  </iframe>
</div>

<div class="homeText" style="padding-bottom:3%; padding-top:3%">
  <p>Application forms are below. Click the links below to download or print.</p>
  <a href="https://drive.google.com/file/d/1w2Wb4q1IpqTjsYt8RGFzcA7tNTR6jLix/view">Tournament Entry Form download link</a>
  <a href="tournament2019.pdf" download>
    <i class="fas fa-file-download"></i><br>
  </a>
</div>

</div>

</body>
</html>