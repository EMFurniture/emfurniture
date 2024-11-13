<!DOCTYPE html>
<html ng-app="myApp">
<head>
  <title>EM Furniture</title>
  <link rel="stylesheet" href="style.css" type="text/css">
  <link rel="favicon" href="favicon.ico" type="x/favicon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Julee|Koulen' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
</head>
<body>
  <?php include 'conn/conn.php'; ?>
  <div class="wrapper">
    <main></main>
    <navigation></navigation>

  </div>

  <!-- Dependencies -->
  <script src="js/app.js"></script>
  <script src="js/mainController.js"></script>
  <script src="js/navigation.js"></script>
</body>
</html>