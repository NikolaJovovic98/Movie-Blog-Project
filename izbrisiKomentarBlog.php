<?php
include_once 'includes/connection.php';
$sql = "DELETE FROM komentari_blog WHERE kb_id='" . $_GET["kb_id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Uspjesno obrisano";
    
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
header("Refresh:0; url=index1.php");
mysqli_close($conn);

