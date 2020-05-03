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
