<?php $page_title = 'Contact me'; ?>
<?php $title = 'Contact'; ?>
<?php $sub_title = ': For more inquiry, please fill out the form'; ?>

<?php
$nav_home_class = '';
$nav_college_class = '';
$nav_contact_class = 'active_page';
$nav_highschool_class = '';
$nav_club_class = '';
?>

<!DOCTYPE html>
<html lang="en">

<body>
  <?php include('includes/content-header.php'); ?>
  <?php include('includes/nav-bar.php'); ?>

  <div class = "name">
    <p>Email:</p>
  </div>
  <p>mz479@cornell.edu</p>

  <div class = "name">
    <p>Phone number:</p>
  </div>
  <p>607-319-9280</p>


<section>

  <div class = "name">
    <p>Subcription Form</p>
  </div>

  <p>Thank you for visiting my portfolio site. Feel free to fill out the form below for updates on my work and feel free to leave some feedback regarding either the site or my portfolio</p>

  <main class="form">
      <form method="post" action="subscription-confirmation.php" novalidate>

        <div class="label-input">
          <label for="name_field">Your Name:</label>
          <input id="name_field" type="text" name="name" />
        </div>

        <div class="label-input">
          <label for="phone_field">Contact Phone:</label>
          <input id="phone_field" type="tel" name="phone" />
        </div>

        <div class="label-input">
          <label for="email_field">Contact Email:</label>
          <input id="email_field" type="email" name="email" />
        </div>

        <div class="form-group label-input" role="group" aria-labelledby="bouquet_head">
          <div id="bouquet_head">Do you want to subscribe to my website conten:</div>

          <div>
            <div>
              <input type="radio" id="yes_input" name="subscribe" value="yes" />
              <label for="yes_input">Yes</label>
            </div>
          </div>
        </div>

        <div class="align-right">
          <input type="submit" value="Submit" />
        </div>
      </form>
</section>
</main>
</body>

</html>
