<?php
$title = 'Subscription Confirmation Form';

$nav_home_class = '';
$nav_college_class = '';
$nav_contact_class = 'active_page';
$nav_highschool_class = '';
$nav_club_class = '';

$name = $_POST["name"]; // untrusted
$phone = $_POST["phone"]; // untrusted
$email = $_POST["email"]; // untrusted
$persona = $_POST["subscribe"]; // untrusted

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/site.css" media="all">
</head>

<body>
  <?php include('includes/content-header.php'); ?>
  <?php include('includes/nav-bar.php'); ?>




    <p>Thank you for your interest. I will keep you updated with new works!</p>

  <main class="form">

    <h3>Subscription Confirmation</h3>

    <dl>
      <dt>Business Name</dt>
      <dd><?php echo htmlspecialchars($name); ?></dd>

      <dt>Contact Phone</dt>
      <dd><?php echo htmlspecialchars($phone); ?></dd>

      <dt>Contact Email</dt>
      <dd><?php echo htmlspecialchars($email); ?></dd>

    </dl>

  </main>
</body>

</html>
