<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
$nameErr = "";
$name  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!preg_match("/^[a-zA-Z]*$/",$name)) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Required</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo $name;
echo "<br>";
?>

</body>
</html>