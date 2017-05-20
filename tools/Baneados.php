<table border="1"><tr><th>ID</th><th>Name</th></tr>
<?php
//error_reporting(0);
include "../../incl/lib/connection.php";
$query = $db->prepare("SELECT userID,userName FROM users WHERE isBanned = 1 AND isRegistered = 1");
$query->execute();
$result = $query->fetchAll();
foreach($result as &$song){
	echo "<tr><td>".$song["userID"]."</td><td>".htmlspecialchars($song["userName"],ENT_QUOTES)."</td></tr>";
}
?>
</table>
