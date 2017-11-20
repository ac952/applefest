<?php
// PHP FORM VALIDATION AND STICKY FORM
// get parameters from HTTP request

$submit = $_REQUEST["submit"];

if (isset($submit)) {
  $fname = $_REQUEST["fname"];
  $lname = $_REQUEST["lname"];
  $email = $_REQUEST["email"];
  $subject = $_REQUEST["subject"];
  $message = $_REQUEST["message"];

  $radio = $_REQUEST["radio"];
  $options = $_REQUEST["options"];

  error_log("form was submitted");

  $isEmailEmpty = empty($email);
  $isEmailAddress = filter_var($email, FILTER_VALIDATE_EMAIL);
  $isFirstEmpty = empty($fname);
  $isLastEmpty = empty($lname);
  $isSubjectEmpty = empty($subject);
  $isMessageEmpty = empty($message);
  $isRadioEmpty = empty($radio);
  $isOptionsEmpty = empty($options);

  // log to the PHP console
  error_log("email empty? " . ($isEmailEmpty ? 'T' : 'F'));
  error_log("email address? " . ($isEmailAddress ? 'T' : 'F'));
  error_log("first empty? " . ($isFirstEmpty ? 'T' : 'F'));
  error_log("last empty? " . ($isLastEmpty ? 'T' : 'F'));
  error_log("subject empty? " . ($isSubjectEmpty ? 'T' : 'F'));
  error_log("message empty? " . ($isMessageEmpty ? 'T' : 'F'));
  error_log("radio empty? " . ($isRadioEmpty ? 'T' : 'F'));
  error_log("options empty? " . ($isOptionsEmpty ? 'T' : 'F'));

  $isEmailValid = !$isEmailEmpty && $isEmailAddress;
  $isFirstValid = !$isFirstEmpty;
  $isLastValid = !$isLastEmpty;
  $isSubjectValid = !$isSubjectEmpty;
  $isMessageValid = !$isMessageEmpty;
  $isRadioValid = !$isRadioEmpty;
  $isOptionsValid = !$isOptionsEmpty;

  // log to the PHP console
  error_log("email valid? " . ($isEmailValid ? 'T' : 'F'));
  error_log("first valid? " . ($isFirstValid ? 'T' : 'F'));
  error_log("last valid? " . ($isLastValid ? 'T' : 'F'));
  error_log("subject valid? " . ($isSubjectValid ? 'T' : 'F'));
  error_log("message valid? " . ($isMessageValid ? 'T' : 'F'));
  error_log("radio valid? " . ($isRadioValid ? 'T' : 'F'));
  error_log("options valid? " . ($isOptionsValid ? 'T' : 'F'));

  if ($isEmailValid && $isFirstValid && $isLastValid && $isSubjectValid
  && $isMessageValid && $isRadioValid && $isOptionsValid) {
    // create session to pass values to redirected page
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
    $_SESSION['message'] = $message;
    $_SESSION['subject'] = $subject;
    $_SESSION['radio'] = $radio;
    $_SESSION['options'] = $options;
    // redirect to the submit page
    header("Location: success.php");
    return;
  }
} else {
  $isEmailValid = true;
  error_log("form was not submitted");
}
?>

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
    <form id="formSubmit" action="contact.php" method="post" novalidate>
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
          <input class="input" id="fname" placeholder="First Name" type="text" name="fname"
          value="<?php echo($fname);?>" required/>
          <span class="error hidden <?php if ($isFirstValid) { echo("hidden"); } ?>" id="fnameError">
            Required*
          </span>
        </div>

        <div>
          <p>Last Name* </p>
          <input class="input" id ="lname" type="text" placeholder="Last Name" name="lname"
            value="<?php echo($lname);?>" required/>
          <span class="error hidden <?php if ($isLastValid) { echo("hidden"); } ?>" id="lnameError">
            Required*
          </span>
        </div>
      </div>
      <p>Are you a: (optional)</p>
      <input type="radio" name="radio" value="Student"> Student<br>
      <input type="radio" name="radio" value="Resident"> Ithaca Resident<br>
      <input type="radio" name="radio" value="0ther"> Other

      <p>Your Email* </p>
      <input class="input2" placeholder="Your Email" type="email" id="email" name="email"
      value = "<?php echo($email);?>" required/>
      <span class="error hidden <?php if ($isEmailValid) { echo("hidden"); } ?>" id="emailError">
        Invalid Email Address*
      </span>
      <p>Subject*</p>
      <input class="input2" placeholder="Your Subject" type="text" id="subject" name="subject"
      value = "<?php echo($subject);?>" required/>
      <span class="error hidden <?php if ($isEmailValid) { echo("hidden"); } ?>" id="subjectError">
        Subject can't be empty*
      </span>
      <p>Your Message* </p>
      <textarea name="message" placeholder="Your Message" id="message" rows="13" cols="55"
        value = "<?php echo($message);?>" required></textarea>
      <span class="error hidden <?php if ($isEmailValid) { echo("hidden"); } ?>" id="textError">
        Message can't be empty*
      </span>
      <p><input id="submitbutton" type="submit" value="Send">
        <input id="clearbutton" type="reset" value="Clear"></p>

      </form>
    </div>
  </body>
  </html>
