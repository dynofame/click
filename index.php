<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>I Frame</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
$websiteErr = "";
$website = "";

if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    } 
    
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Website: <input type="text" name="website">
  <span class="error">* <?php echo $websiteErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
<center>
<h3>clickjacking vulnerability</h3>
<iframe src="echo $website;" height="400px" width="400px"></iframe></center>
?>

</body>
</html>
