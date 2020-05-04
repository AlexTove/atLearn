<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>atLearn.com</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/36d3ddbb90.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/style_home.css">
</head>

<body>
  <div id="header">
    <a href="../home.php">atLearn<span style='color: blue'>.com</span></a>
  </div>

  <div id="container">
    <div id="topnav">
      <div id="topnav-left">
        <a class="topnav-button active-topnav">HOME</a>
        <a href="cpppages/cppintro.php" class="topnav-button">C++</a>
      </div>
      <div id="topnav-right">

      </div>
    </div>
  </div>
  <div id="home-content">
    <div class="prog-lang">
      <div class="prog-left">
        <h1 class="lang-title">C++</h1>
        <p class="lang-descript">A powerful programming language</p>
        <a href="cpppages/cppintro.php" class="start-learn">Start learning</a>
      </div>
      <div class="prog-right">
        <img src="img/cpplogo.png";
      </div>
    </div>
  </div>

  <script>
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
      if (currentScrollPos == 0) {
        document.getElementById("header").style.display = "block";
        document.getElementById("container").style.marginTop = "55px"
      } else {
        document.getElementById("header").style.display = "none";
        document.getElementById("container").style.marginTop = "0px"
      }
    }
  </script>
</body>
</html>
