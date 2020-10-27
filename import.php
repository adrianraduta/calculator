<? php
$username = "ispdec3h1kmywx58";
$password = "wffu1yoh6mc2dqy2";
$database = "t2szimexkozly7rg";

$mysqli = new mysqli("localhost", $username, $password, $database);

$query = "SELECT * FROM Senders";

if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $field1name = $row["ID"];
        $field2name = $row["Nume"];
        $field3name = $row["Email"];
        $field4name = $row["CreatedAt"];


        echo $field1name.'<br />';
        echo $field2name.'<br />';
        echo $field3name.'<br />';
        echo $field4name.'<br />';
    }

$result->free();
