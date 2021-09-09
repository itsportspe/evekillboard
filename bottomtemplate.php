<!-- bottom template -->
  <br><br><br><br>

    <div class="dropdown-divider"></div>
    <div class="container">
      <div class="row justify-content-between">
        <p class="text-white col-5">All <a href="#">EVE related materials</a> are property of CCP Games</p>
        <p class="text-white col-4"><a href="#">About</a> - <a href="#">Issues/feature requests</a> - <a href="#">Forum</a></p>
      </div>

      <div>
        <p class="text-white"><a href="#">CCP Copyright Notice</a></p>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <script>
      var i;
      function setBackgroundImage() {
        min = Math.ceil(1);
        max = Math.floor(17);
        i = Math.floor(Math.random() * (max - min)) + min;

            if (i < 10) {
              if (i === 2) {
                document.getElementById("bgbody").style.backgroundImage = 'url(images/0' + i + ".png)";

              }
              else if (i < 10) {
                document.getElementById("bgbody").style.backgroundImage = 'url(images/0' + i + '.jpg)';
              }
              }
            else if (i === 15 || i === 16 ) {
              document.getElementById("bgbody").style.backgroundImage = 'url(images/' + i + ".png)";
              }
            else if (i >= 10) {
              document.getElementById("bgbody").style.backgroundImage = "url(images/" + i + ".jpg)";
              }
        return i;
      }
    setBackgroundImage();
//    document.getElementById("bgbody").addEventListener("load", setBackgroundImage);
/*
if (i < 10){
    document.getElementById("bgbody").style.backgroundImage = 'url(images/0' + i + '.jpg)';
    i++;
  }

if (i >= 10) {
          if (i === 15 || i === 16 || i === 18) {

              document.getElementById("bgbody").style.backgroundImage = 'url(images/' + i + ".png)";
              i++;

            if (i >= 18) {
              i = 1; setBackgroundImage();
            }
          }

if (i != 15 || i != 16 || i != 18) {
          document.getElementById("bgbody").style.backgroundImage = "url(images/" + i + ".jpg)";
          i++;


setInterval(function() {
  document.getElementById("bgbody").style.backgroundImage = 'url(images/01.jpg)';
  document.getElementById("bgbody").style.backgroundImage = 'url(images/02.jpg)';
}, 5000); */

    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
