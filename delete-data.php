<?php 
include('database.php');
// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id > 0";

if (mysqli_query($connect, $sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>