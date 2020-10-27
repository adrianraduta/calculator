<? php
include 'config.php';

$query = "SELECT * FROM Senders";

if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $field1name = $row["col1"];
        $field2name = $row["col2"];
        $field3name = $row["col3"];
        $field4name = $row["col4"];


        echo $field1name.'<br />';
        echo $field2name.'<br />';
        echo $field3name.'<br />';
        echo $field4name.'<br />';
    }

$result->free();
