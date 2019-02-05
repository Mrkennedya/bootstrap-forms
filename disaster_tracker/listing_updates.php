<?php
	include 'database.php';
	$query = "SELECT * FROM listings ORDER BY name";
	$socks = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> I Was Affected By: Individuals Listed </title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/table.css">
</head>

<body>
<div id="container">

<h1>Individuals Affected by Natural Disasters</h1>

<p class="middle"><a href="enter_new_listing.php">Add a New Disaster Listing</a></p>

<!-- this form is handled by the PHP file named in the action attribute -->
<form class="smallform" method="post" autocomplete="off">
<table>
	<!-- table column headings -->
	<tr>
	  <th>Name</th>
	  <th>City</th>
	  <th>State</th>
	  <th>Disaster</th>
	  <th>Description</th>
	  <th>Link</th>
	  <th>Updated</th>
	</tr>

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
	   Each time it loops, it writes ONE ROW -->
<?php while ($row = mysqli_fetch_assoc($listings)) :  ?>

<tr>
  <td><input type="radio" name="id" id="<?php echo $row['id']; ?>" value="<?php echo $row['id']; ?>"></td>
	<!-- notice how, above, the database record id becomes
		 the id and value of the radio button -->
  <td><?php echo stripslashes($row['name']); ?></td>
  <td><?php echo $row['city']; ?></td>
  <td><?php echo $row['state']; ?></td>
  <td><?php echo $row['disaster']; ?></td>
  <td><?php echo $row['description']; ?></td>
  <td><?php echo $row['link']; ?></td>
	<td><?php echo $row['updated']; ?></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<input type="submit" id="submit" value="Submit One Row for Editing">
</form>
<!-- close the form -->

<p class="middle"><a href="enter_new_listing.php">Add a New Disaster Listing.</a></p>

</div> <!-- close container -->
</body>
</html>
