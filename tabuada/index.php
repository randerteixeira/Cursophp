<h1 style="text-align: center;">Tabuada</h1>
<table border="1" cellpadding="0" cellspacing="0" style="margin: 0 auto;">
<?php
 for ( $i = 1; $i <= 9; $i++ ) {
 echo "<tr>";
 for ( $j = 1; $j <= 9; $j++ ) {
 echo "<td align=\"center\" width=\"50px\">" .$i * $j. "</td>";
 }
 echo "</tr>";
 }
?>
</table>