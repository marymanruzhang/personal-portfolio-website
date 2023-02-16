<?php
$title = 'Subscription Confirmation Form';

$nav_home_class = '';
$nav_citations_class = '';
$nav_cooking_class = '';
$nav_flowershop_class = 'active_page';

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
