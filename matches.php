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
	<script src="javascript.js" defer="true"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style>
    #matchesItem {
        color:#006680;
    }
    </style>
</head>
<body>
    
<div class="wrapper">

<!-- side navigation -->
<nav class="nav bg-dark" id="sidebar">
    <div class="sideNavigationBar" id="sideNavigationBar"></div>
</nav> 

<div class="collapseButton">
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <div class="container-fluid">
        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fa fa-bars"></i>
        </button>
    </div>
</nav>
</div>

<div class="main">

<h1 class="titleText">Matches</h1>

<div class="mx-auto embed-responsive embed-responsive-16by9" style="width:510px ; height:4000px">
  <iframe class="embed-responsive-item" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSYEdOaN-pEzphAV5EPZgVkKJ_WRFFrUFhbRwtxjy98f8b9ozOmt_fKvMoPZ3PIWqc1JnX3FmOggs05/pubhtml?gid=0&chrome=false&widget=false&range=Matches&single=true&headers=false">
  </iframe>
</div>

<div class="bottomFooter" id="bottomFooter"></div>

</div>
</div>

</body>
</html>
