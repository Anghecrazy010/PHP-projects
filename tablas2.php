<table border="1">
<?php

for ($i=1; $i <= $_GET['txtRenglones']; $i++)
{
echo '<tr>';
for($c = 1; $c <= $_GET['txtColumnas']; $c++)
echo "<td></td>";
echo '</tr>';
}
?>
</table>
