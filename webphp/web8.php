<html>
<head>
<style>
table, td, th {
  border: 1px solid black;
  width: 35%;
  text-align: center;
  background-color: gray;
}

table {
  margin: auto;
}

input,
p {
  text-align: right;
}
</style>
</head>
<body>
<form method="post">
  <table>
    <caption><h2> SIMPLE CALCULATOR </h2></caption>
    <tr>
      <td>First Number:</td>
      <td><input type="text" name="num1" /></td>
    </tr>
    <tr>
      <td>Second Number:</td>
      <td><input type="text" name="num2" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" value="calculate"></td>
    </tr>
  </table>
</form>
<?php
if (isset($_POST['submit'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  if (is_numeric($num1) && is_numeric($num2)) {
    echo "<table>";
    echo "<tr><td> Addition :</td><td><p>" . ($num1 + $num2) . "</p></td></tr>";
    echo "<tr><td> Subtraction :</td><td><p> " . ($num1 - $num2) . "</p></td></tr>";
    echo "<tr><td> Multiplication :</td><td><p>" . ($num1 * $num2) . "</p></td></tr>";
    echo "<tr><td> Division :</td><td><p> " . ($num1 / $num2) . "</p></td></tr>";
    echo "</table>";
  } else {
    echo "<script type='text/javascript'>alert('ENTER VALID NUMBER');</script>";
  }
}
?>
</body>
</html>
