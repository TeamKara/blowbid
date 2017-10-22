<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>BlowBid Board</title>
  	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript"> 
      function display_c(){
      var refresh=1000; // Refresh rate in milli seconds
      mytime=setTimeout('display_ct()',refresh)
      }

      function display_ct() {
      var strcount
      var x = new Date()
      document.getElementById('ct').innerHTML = x;
      tt=display_c();
      }
      function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('txt').innerHTML =
      h + ":" + m + ":" + s;
      var t = setTimeout(startTime, 500);
      }
      function checkTime(i) {
          if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
          return i;
      }
    </script>
  </head>

  <body onload="startTime();">
    <div class="context">
      <div class="headPanel">
        <?php
          echo '<p>Welcome Username! Your Julies: 105 <a href="logout.php">Logout</a></p>';
        ?>
      </div>
      <div class="headBanner">
        <p>BlowBid :)</p>
      </div>
      <div class="bids">
		<ul class="nav nav-tabs">
			<li><a href="live.php">Live Bids</a></li>
            <li class="active"><a href="closed.php">Closed Bids</a></li>
            <li><a href="pending.php">Pending Bids</a></li>
		<li><a href="upload.php">Upload Bids</a></li>
            <li><a href="logout.php">Log Out</a></li>
		</ul>

        <div class="miniBids">
          <div class="bidImage" style="background:url(images/kongaad2.jpg);">
            <!-- <img src="images/kongaad2.jpg" alt="Productx" /> -->
          </div>
          <div class="bidDescription">
            <div class="bidDescriptionInset">
              <p><i>This is an ad from Konga masters</i></p>
            </div>
            <div class="bidButton">
              <form action="" method="post"><input type="submit" name="bid" value="+"></form>
              <p align="center"><b>Bid Now!</b></p>
            </div>
          </div>
          <div class="bidPanel">
            <div class="bidTime">
              <p><b>Current Bid Time:</b></p>
              <?php
                //echo date("H:i:s");
              ?>
              <!--<div id="ct"></div>-->
              <div id="txt"></div>
              <hr/>
            </div>
            <div class="bidBidder">
              <p><em>Manaserra just bidded</em></p>
              <hr/>
            </div>
            <div class="bidCost">
              <p><b>Current Bid Price:</b></p>
              <h2>&#x20a6;24.05</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
