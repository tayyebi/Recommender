<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '123';
$db = 'recommender';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if(! $conn ) {
  die('Could not connect: ' . mysql_error());
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Recommender System</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SRS</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Post new!</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Auth</li>
                  <li><a href="#">Login</a></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Use recommender <span class="sr-only">(current)</span></a></li>
              <li><a href="../navbar-static-top/">Show last</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="jumbotron">
        <h1>What is a recommender system?</h1>
        <p>A recommender system or a recommendation system is a subclass of information filtering system that seeks to predict the "rating" or "preference" a user would give to an item. -Wikipedia</p>
        <p>
          <a class="btn btn-lg btn-primary" href="https://en.wikipedia.org/wiki/Recommender_system" role="button">Read more &raquo;</a>
        </p>
        <form class="form-inline">
          <select class="form-control" name="User">
            <option value="1">Rexa</option>
            <option value="2">Abbas</option>
            <option value="3">Shaghayegh</option>
            <option value="4">Administrator</option>
          </select>
          <input class="form-control" type="submit" value="Change user (FAKE LOGIN)" />
        </form>
      </div>
    </div>

    <main class="container">
      <div class="list-group">
<?php
$sql = 'SELECT * FROM posts limit 100';
$retval = mysqli_query( $conn, $sql );

if(! $retval ) {
  die('Could not get data: ' . mysql_error());
}

while($row = mysqli_fetch_assoc($retval)) {

echo '<div href="#" class="list-group-item list-group-item-action flex-column align-items-start">
<div class="d-flex w-100 justify-content-between">
  <h5 class="mb-1">' . $row['Category'] . '</h5>
  <small>Id: ' . $row['Id'] . '</small>
</div>
<p class="mb-1">' . $row['Content'] . '</p>
<small>' . $row['From'] . '</small>
<a href="#" class="btn btn-lg btn-danger">Liked</a>
</div>';
}
?>
      </div>
    </main>

    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
  </body>
</html>

<?php
mysqli_close($conn);
?>