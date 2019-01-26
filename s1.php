<!DOCTYPE html>
<html>
<body>

<p>Product:</p>

<p id="so1"></p>

<script>
var myObj = {"name":"basic t-shirt", "price":70000, "availablecolor":"red S,M,L"};
for (x in myObj) {
  document.getElementById("so1").innerHTML += myObj[x] + "<br>";
}
</script>

</body>
</html>
