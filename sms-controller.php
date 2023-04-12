<?php
include('database.php');
if(isset($_POST["submit"]))
{

if($_FILES['file']['name'])
 {
$filename = explode(".", $_FILES['file']['name']);

$handle = fopen($_FILES['file']['tmp_name'], "r");
while($data = fgetcsv($handle))//handling csv file 
{
$item1 = mysqli_real_escape_string($connect, $data[0]);  
$item2 = mysqli_real_escape_string($connect, $data[1]);
//insert data from CSV file 
$query = "INSERT into excel(name, number) values('$item1','$item2')";
mysqli_query($connect, $query);
fclose($handle);
}
echo "File sucessfully imported";
}
}
?>