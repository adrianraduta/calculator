
<?php
include 'config.php';
include 'import.php';
echo "Connection to DB: $message";


?>

<html>

<div class="table-responsive">
<table class="table">
<thead>
<tr><th>ID</th>
<th>Nume</th>
<th>Email</th></tr></thead>
<tbody>
<tr><td> <?php echo $row["ID"] ?> </td>
<td><?php echo $row["Nume"] ?></td>
<td><?php echo $row["Email"] ?></td></tr><tr></tr></tbody></table></div>

</html>