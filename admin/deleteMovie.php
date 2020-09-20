<?php
include_once 'includes/connection.php';
$sql = "DELETE FROM filmovi WHERE f_id='" . $_GET["f_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<p>Uspjesno obrisano</p>";
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
header("Refresh:0; url=manageMovie.php");
mysqli_close($conn);
?>