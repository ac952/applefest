<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" type="text/css" href="styles/navbar.css" media="all" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
  <script type = "text/javascript" src="scripts/site.js"></script>
  <title>Project 3 Milestone 3</title>
</head>

<body>
  <?php
   include "includes/navigation.php";
 ?>
  <!-- content -->
  <div id="content">
    <div class="eventsnav">
      <div id = "events">
        <h2>GORGES</h2>
      </div>
      <div id = "apple">
        <a href="#buttermilkfalls">Buttermilk Falls</a>
      </div>
      <div id="gift">
        <a href="#cascgorge">Cascadilla Gorge</a>
      </div>
      <div id="finger">
        <a href="#taughannock">Taughannock Falls</a>
      </div>
    </div>

    <div class="gorges">
      <h1 id="bl"><a name="buttermilkfalls"></a>Buttermilk Falls</h1>
      <p>Buttermilk Falls State Park takes its name from the foaming cascade formed
        by Buttermilk Creek as it flows down the steep valley side toward Cayuga Lake.
        The upper park has a small lake, hiking trails through woodlands and
        along the gorge and rim, picnic areas and playing fields.
        The lower park has a campground, natural pool and playing fields,
        beyond which is Larch Meadows. Larch Meadows is a wetland area
        through which a nature trail winds.
        <a class="takemethere" href="transportation.html">
        <strong><em>Take me there!</em></strong></a></p>
        <p>Information and image from:
        <a href="https://parks.ny.gov/parks/151/details.aspx">
              https://parks.ny.gov/parks/151/details.aspx</a></p>

        <img id ="blimages" alt="buttermilk" src="images/buttermilk.jpg" >

        <h1 id="cg"><a name="cascgorge"></a>Cascadilla Gorge</h1>
        <p>Want to visit a gorge near the Cornell Campus? Look no further.
        Cascadilla gorge is right at the heart of collegetown.
        Just walk down the stairs near the Schwartz Center.
        <a class="takemethere" href="transportation.html">
        <strong><em>Take me there!</em></strong></a></p>
        <p>More information and picture from:
        <a href="http://nyfalls.com/waterfalls/cascadilla-gorge/">
        http://nyfalls.com/waterfalls/cascadilla-gorge/</a></p>
        <img id="cgimages" alt="casc" src="images/cascadilla.jpg">

        <h1 id="tf"><a name="taughannock"></a>Taughannock Falls</h1>
        <p>Pronounced (Tuh-GA-nick). This 215ft wonder is three stories taller than Niagara Falls! </p>
        <p>If you're looking to enjoy some of the recreational activities near Ithaca,
        come to Taughannock Falls for fishing and swimming.</p>
        <p>Taughannock Falls State Park's namesake waterfall is one of
        the outstanding natural attractions of the Northeast. Taughannock Falls
        plunges 215 feet past rocky cliffs that tower nearly 400 feet above the
        gorge. Gorge and rim trails offer spectacular views from above the
        falls and from below at the end of the gorge trail. Campsites and
        cabins overlook Cayuga Lake, with marina, boat launch and beach nearby.
        A multi-use trail--hiking, cross-country skiing--winds past sledding slopes
        and natural skating ponds. The park offers organized activities including tours
        through the Taughannock Gorge and summer concerts along the lakefront.
        <a class="takemethere" href="transportation.html">
        <strong><em>Take me there!</em></strong></a></p>
        <p>More information and picture from:
        <a href="http://www.visitithaca.com/attractions/taughannock-falls-state-park">
        http://www.visitithaca.com/attractions/taughannock-falls-state-park</a></p>
        <img id="tfimages" alt="taugh" src="images/taugh.jpg" >
      </div>
    </div>
  </body>
</html>
