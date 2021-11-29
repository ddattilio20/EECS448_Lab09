
<style>
<?php include 'style.css';?>
</style>
<?php

  $item1 = $_POST['item1'];
  $item2 = $_POST['item2'];
  $item3 = $_POST['item3'];

  $username = $_POST['username'];
  $password = $_POST['password'];

  $shipping = $_POST['shipping'];


  $item1Cost = $item1 * 2;
  $item2Cost = $item2 * 8;
  $item3Cost = $item3 * 14;

  $totalCost = $item1Cost + $item2Cost + $item3Cost + $shipping;



  echo "Thank you for shopping at my store! I hope you were satisfied with your purchase.";
  echo "<br>";
  echo "<br>";
  echo "Your password is: ";
  echo $password;
  echo "<br>";
  echo "<br>";


  echo '<table class="receipt">';



  echo "<tr>";
  echo "<td>";
  echo "</td>";
  echo "<td>";
  echo "Quantity";
  echo "</td>";
  echo "<td>";
  echo "Cost Per Item";
  echo "</td>";
  echo "<td>";
  echo "Sub Total";
  echo "</td>";
  echo "</tr>";


  echo "<tr>";
  echo "<td>";
  echo "Dr. Pepper";
  echo "</td>";
  echo "<td>";
  echo $item1;
  echo "</td>";
  echo "<td>";
  echo "$2";
  echo "</td>";
  echo "<td>";
  echo "$";
  echo $item1Cost;
  echo "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td>";
  echo "Chicken Pot Pie";
  echo "</td>";
  echo "<td>";
  echo $item2;
  echo "</td>";
  echo "<td>";
  echo "$8";
  echo "</td>";
  echo "<td>";
  echo "$";
  echo $item2Cost;
  echo "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td>";
  echo "Rotisserie Chicken";
  echo "</td>";
  echo "<td>";
  echo $item3;
  echo "</td>";
  echo "<td>";
  echo "$14";
  echo "</td>";
  echo "<td>";
  echo "$";
  echo $item3Cost;
  echo "</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td colspan='3'>";
  echo "Shipping";
  echo "</td>";
  echo "<td>";
  echo "$";
  echo $shipping;
  echo"</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td colspan='3'>";
  echo "Total Cost";
  echo "</td>";
  echo "<td>";
  echo "$";
  echo $totalCost;
  echo "</td>";
  echo "<tr>";


  echo "</table>"








































?>
