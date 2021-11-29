<?php

  echo "<table border='2px solid black'>";

  for($col=1; $col<=100; $col++){
      echo "<tr>";

      for($row=1; $row<=100; $row++){
        echo "<td>";
        echo $col * $row;
        echo "</td>";

      }
      echo "</tr>";
  }


  echo "</table>";
?>
