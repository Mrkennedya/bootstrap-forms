<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> I Was Affected By - Insert New Listings  </title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div id="container">

    <h1>I Was Affected By: Insert New Listing</h1>
  </p>What disaster have you been affected by? Fill out the form and submit below.</p>

  <p class="middle"><a href="listing_updates.php">View All Listings</p>

  <div id="listing">

    <form id="listingForm" method="post" autocomplete="off">

      <label for="name">Name</label>
        <input type="text" name="name" id="name" maxlength="40" required>

      <label for="city">City</label>
        <input type="text" name="city" id="city" maxlength="40" required>

      <label for="state">State</label>
        <input type="text" name="state" id="state" maxlength="40" required>

        <label for="disaster">Disaster</label>
          <input type="text" name="disaster" id="disaster" maxlength="40" required>

        <label for="description">Description (140 Characters or Less)</label>
          <input type="text" name="description" id="description" maxlength="140" required>

        <label for="link">Additional Links (Bit.ly preffered)</label>
          <input type="text" name="link" id="link" maxlength="140">

          <input type="submit" id="submit" value="Submit">
      </form>

    </div>

    <div id="response">
      <p class="announce">You have successfully posted! Thanks for your new listing!</p>
      <p class="middle"><a href="enter_new_listing.php">Create another listing</a></p>
      <p class="middle"><a href="listing_updates.php">View All Listings</p>
    </div>

    </div> <!-- close container -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
      <script src="js/enter.js"></script>
    </body>
</html>
