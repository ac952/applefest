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
  <!-- https://1stwebdesigner.com/php-contact-form-html/ -->
  <div class="form">
    <h1 id="contactheading">CONTACT</h1>
    <p>Please submit this form to get in touch:</p><br>
    <form id="formSubmit" action="success.php" method="post" novalidate>
      <div id="input-container">
        <div id="title">
          <p>Title (optional)</p>
          <!-- https://www.w3schools.com/tags/tag_option.asp -->
          <select id="select-style" name="options">
            <option value="Mr.">Mr.</option>
            <option value="Ms.">Ms.</option>
            <option value= "Mrs.">Mrs.</option>
            <option value="N/A">N/A</option>
          </select>
        </div>
        <div>
          <p>First Name* </p>
          <input class="input" id="fname" placeholder="First Name" type="text" name="fname" required/>
          <span class="error hidden" id="fnameError">
            Required*
          </span>
        </div>

        <div>
          <p>Last Name* </p>
          <input class="input" id ="lname" type="text" placeholder="Last Name" name="lname" required/>
          <span class="error hidden" id="lnameError">
            Required*
          </span>
        </div>
      </div>
      <p>Are you a: (optional)</p>
      <input type="radio" name="radio" value="Student"> Student<br>
      <input type="radio" name="radio" value="Resident"> Ithaca Resident<br>
      <input type="radio" name="radio" value="0ther"> Other

      <p>Your Email* </p>
      <input class="input2" placeholder="Your Email" type="email" id="email" name="email" required/>
      <span class="error hidden" id="emailError">
        Invalid Email Address*
      </span>
      <p>Subject*</p>
      <input class="input2" placeholder="Your Subject" type="text" id="subject" name="subject" required/>
      <span class="error hidden" id="subjectError">
        Subject can't be empty*
      </span>
      <p>Your Message* </p>
      <textarea name="message" placeholder="Your Message" id="message" rows="13" cols="55" required></textarea>
      <span class="error hidden" id="textError">
        Message can't be empty*
      </span>
      <p><input id="submitbutton" type="submit" value="Send">
        <input id="clearbutton" type="reset" value="Clear"></p>

      </form>
    </div>
  </body>
  </html>
