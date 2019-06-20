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
          <a id="sideCollapsed" class="nav-link" href="levelDoubles.php" style="color:#006680">Level Doubles</a>
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

<h1 class="titleText">Level Doubles</h1>

<div class="mx-auto embed-responsive embed-responsive-16by9" style="width:510px ; height:300px">
  <iframe class="embed-responsive-item" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSYEdOaN-pEzphAV5EPZgVkKJ_WRFFrUFhbRwtxjy98f8b9ozOmt_fKvMoPZ3PIWqc1JnX3FmOggs05/pubhtml?gid=728064575&chrome=false&widget=false&range=LevelsDiv1&single=true&headers=false">
  </iframe>
</div>

<div class="mx-auto embed-responsive embed-responsive-16by9" style="width:510px ; height:300px">
  <iframe class="embed-responsive-item" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSYEdOaN-pEzphAV5EPZgVkKJ_WRFFrUFhbRwtxjy98f8b9ozOmt_fKvMoPZ3PIWqc1JnX3FmOggs05/pubhtml?gid=728064575&amp;chrome=false&amp;widget=false&amp;range=LevelsDiv2&amp;single=true&amp;widget=true&amp;headers=false">
  </iframe>
</div>

<div class="mx-auto embed-responsive embed-responsive-16by9" style="width:510px ; height:300px">
  <iframe class="embed-responsive-item" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSYEdOaN-pEzphAV5EPZgVkKJ_WRFFrUFhbRwtxjy98f8b9ozOmt_fKvMoPZ3PIWqc1JnX3FmOggs05/pubhtml?gid=728064575&amp;chrome=false&amp;widget=false&amp;range=LevelsDiv3&amp;single=true&amp;widget=true&amp;headers=false">
  </iframe>
</div>

</div>

</body>
</html>