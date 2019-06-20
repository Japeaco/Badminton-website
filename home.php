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
      <a class="nav-link" href="home.php" style="color:#006680">Home</a>
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

<div class="HeaderDiv">
  <img class="Header1" src="Header1-2.jpg" alt="Badminton Header" style="width:100%;"> 
  <h1 class="HeaderText">Welcome</h1>
</div>

<div class="homeText">
  <h3 class="homeHeader">Welcome to the Bridlington and District Badminton Association Website</h3>

  <p>The badminton club is based at the Bridlington CYP on Gypsey Road. Whether you want to play seriously, for fun, to keep fit, or to socialise, 
  come down and join us.</p>

  <p>There's a club for young players and several adult clubs for those that want to compete in teams against other clubs in the league. 
  There are currently seven clubs registered with the league with around 20 teams playing in doubles format.</p>

  <p>Badminton is a great way to keep fit. We try to make it fun and we welcome anyone. If you're not sure, come down on Thursday evenings at 8pm and join us for some free games. 
  After a few weeks, you can decide whether you want to join a club or just turn up every Thursday and pay a fixed fee of around £3 during the summer season or £4 during 
  the winter season. If you join a club, you benefit from lower fees and you can ask to join one of the teams to play in the league throughout the winter months.</p>
</div>

</div>

</body>
</html>