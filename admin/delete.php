<?php
include_once 'includes/connection.php';
$sql = "DELETE FROM blog_objave WHERE b_id='" . $_GET["b_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Uspjesno obrisano";
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
header("Refresh:0; url=manage.php");
mysqli_close($conn);
?>