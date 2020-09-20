<?php
include_once 'includes/connection.php';
$sql = "DELETE FROM user_pass WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    
echo 'Korisnik izbrisan';
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
header("Refresh:0; url=manageUsers.php");
mysqli_close($conn);
