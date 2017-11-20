<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$full = $fname . " ". $lname;

$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$radio = $_POST["radio"];
$options = $_POST["options"];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" type="text/css" href="styles/navbar.css" media="all" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Project 3 Milestone 3</title>
</head>

<body>
  <?php
  include "includes/navigation.php";
  ?>
  <p id="thank"><strong>Thanks <?php echo ($full);?></strong> Your message has been sent.</p>
  <div id="formInfo">
    <table>
      <th>User Information</th>
      <tr>
        <td>Title:</td>
        <td><?php echo ($options);?></td>
      </tr>
      <tr>
        <td>Are you a..:</td>
        <td><?php echo ($radio); ?></td>
      </tr>
      <tr>
        <td>Email:</td>
        <td><?php echo (htmlspecialchars($email));?></td>
      </tr>
      <tr>
        <td>Subject:</td>
        <td><?php echo ($subject);?>!</td>
      </tr>
      <tr>
        <td>Message:</td>
        <td><?php echo ($message);?>!</td>
      </tr>
    </table>
 </div>

</body>
</html>
