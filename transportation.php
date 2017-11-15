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

<!-- content -->
<div id="transportation">
  <h1 id="tcatheading">How Do I Get There?</h1>
  <p>Use the TCAT bus system to buy your bus passes! Click on the TCAT
    image below to learn more. Tight schedule? Download the app(Ride 14850)
     and you'll get the directions to your desired location in no time.</p>
<!-- https://www.tcatbus.com/ -->
  <a href="https://www.tcatbus.com/" >
    <img id="tcat" alt="transport" src="images/tcat.jpg"></a>

  <h1 id="directions">Directions starting from West Campus (Baker Flagpole)</h1>
  <h2 class="direct">Apple Festival:</h2>
    <p>Start at the bus stop on the same street of the flagpole. </p>
    <p>Take the 72 bus to Ithaca Commons. </p>
    <p>The stop will be displayed on the overhead of the bus.</p>
  <h2 class="direct">Buttermilk Falls:</h2>
    <p>Walk up Libe Slope</p>
    <p>Walk to Uris Hall (Brown cube-shaped building) and go across
      the street from it</p>
    <p>Take the 67 bus and debark at Elmira Road & Buttermilk Falls</p>
    <p><strong>Note:</strong> you might have to take another bus
      depending on what day and time you go</p>
  <h2 class="direct">Cascadilla Gorge:</h2>
    <p>Just walk to collegetown.</p>
    <p>Go down the stairs near the Schwartz Center.</p>
  <h2 class="direct">Taughannock Falls:</h2>
    <p>Start on baker flagpole(slope side)</p>
    <p>Take the 21 bus to Trumansburg Road & Taughannock Park Road</p>
    <p>Walk to the park (2.09 miles)</p>


<!-- </div>
<div id="instruction"> -->
  <h1 id="appheading">Download the TCAT App <em>(Ride 14850)</em>!</h1>
  <!-- image of app -->
  <img id="app" alt="app" src="images/app.jpg">
<!-- app images are taken from my phone -->
<div class="columns">
  <div class="col">
  <p><strong>Step 1:</strong> Open the app and enter your
    Start-End(Commons)Location</p>
  <img id="step1" alt="app1" src="images/step1.jpg">
</div>
<div class="col">
  <p><strong>Step 2:</strong> Press Go and get directions</p>
  <img id="step2" alt="app2" src="images/step2.jpg">
</div>
<div class="col">
  <p><strong>Step 3 (optional):</strong> Press on bus icon for
    more information on Bus Stop Location</p>
  <img id="step3" alt="app3" src="images/step3.jpg">
</div>
</div>

</div>
</body>
</html>
