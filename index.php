<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" type="text/css" href="styles/navbar.css" media="all" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
  <script type = "text/javascript" src="scripts/site.js"></script>
  <title>Project 3 Milestone 1</title>
</head>

<body>
  <?php
   include "includes/navigation.php";
 ?>

  <div id="content">
    <div class="eventsnav">
      <div id = "events">
        <h2>EVENTS</h2>
      </div>
      <div id = "apple">
        <a href="#ahf">Apple Harvest Festival</a>
      </div>
      <div id="gift">
        <a href="#goa">Gift of the Americas</a>
      </div>
      <div id="finger">
        <a href="#fl">Finger Lakes Comedy Festival</a>
      </div>
    </div>

    <div class="applefestival">
      <!-- information at:  -->
      <!-- http://downtownithaca.com/ithaca-events/Apple%20Harvest%20Festival%20Presented%20By%20Tompkins%20Trust -->
      <h1 id="appleheading"><a name="ahf"></a>Apple Harvest Festival</h1>
      <p>This is Ithaca's 34th Annual Apple Harvest Festival!
        Come to the commons for a three day celebration. If you
        enjoy eating apples, expect all kinds of street food vendors
        selling fresh baked produce. There will be many games,
        rides, and exciting live performances at the square. Don't miss out!
        <a class="takemethere" href="transportation.html">
          <strong><em>Take me there!</em></strong></a></p>
        <h3>Schedule:</h3>
        <p>Date: September 30- October 2</p>
        <p>Time: Friday 12-6pm, Saturday and Sunday 10-6pm</p>

        <h3>Performances at the Festival-<em>Bernie Milton Pavilion:</em></h3>

        <p>SATURDAY 10-10:45AM Punk Hands</p>
        <p>SATURDAY 11-11:45AM Danza Romani</p>
        <p>SATURDAY 12-12:45PM Vitamin L</p>
        <p>SATURDAY 1:00-1:45PM Riley Owens</p>
        <p>SATURDAY 1:45-2pm  GIVEAWAYS</p>
        <p>SATURDAY 2:00-2:45PM Sunny Weather</p>
        <p>SATURDAY 3:00-3:45PM Eems</p>
        <p>SATURDAY 4:00-4:45PM Alter</p>
        <p>SATURDAY 5:00-6:00pm Wailin' Brass Band</p>

        <p>More information at:</p>
        <a id="link"
        href="http://downtownithaca.com/ithaca-events/Apple%20Harvest%20Festival%20Presented%20By%20Tompkins%20Trust">
          http://downtownithaca.com/ithaca-events/</a>
        <h3>Photos</h3>
        <div class = "columns2">
          <div class = "col2">
            <img class = "images" alt="apple" src="images/apple.jpg" width="300">
            <p>Crates of apples</p>
          </div>
          <div class = "col2">
            <img class = "images" alt="brussel" src="images/brussel.jpg" width="300">
            <p>Brussel sprouts & Cider</p>
          </div>
          <div class = "col2">
            <img class = "images" alt="maple" src="images/maple.jpg" width="300">
            <p>Grade A Maple Syrup</p>
          </div>
          <div class = "col2">
            <img class = "images" alt="pumpkin" src="images/pumpkin.jpg" width="300">
            <p>Pumpkin and Squash</p>
          </div>
          <div class = "col2">
            <img class = "images" alt="moreapples" src="images/moreapples.jpg" width="300">
            <p>More apples</p>
          </div>
          <div class = "col2">
            <img class = "images" alt="cider" src="images/cider.jpg" width="300">
            <p>Apple Cider</p>
          </div>
        </div>
        <p>Source: my camera</p>

        <h1 id = "giftheading"><a name="goa"></a>Gift of the Americas</h1>
        <p>Want to experience some other fun activities? Come
          to the "Gift of the Americas" event at Dewitt Park.
          There will be entertaining and educational activities
          for people of all ages!</p>
          <h3>Schedule:</h3>
          <p>Date: Saturday October 1st</p>
          <p>Time: 11am-5pm</p>
          <h4>Check out their website here:<a href="http://multiculturalresourcecenter.org/">MulticulturalResourceCenter.org</a></h4>
        <img id ="giftimage" alt="gift_a" src="images/gift.jpg" width=500>

        <h1 id="fingerheading"><a name="fl"></a>Finger Lakes Comedy Festival</h1>
        <p>Not sure what to do after the apple festival? Check out
          the comedy events happening in the evening! Remember to purchase
           tickets in advance at the link below. </p>

           <h3>Schedule:</h3>
           <p>Date: September 29th- October 1st</p>
           <p>Time: 6pm-10pm on all three days</p>
           <h4>Check out their website here:
             <a href="http://www.2funnyent.com/">www.2funnyent.com</a></h4>

        <img id="fingerimage" alt="fing_l" src="images/finger.jpg" width=500>
      </div>

    </div>
  </body>
  </html>
