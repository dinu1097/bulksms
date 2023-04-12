<?php
include('database.php');

$sql = "SELECT id, name, number  FROM excel";
$result = mysqli_query($connect, $sql);



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="container">
        <h2>Record List</h2>            
        <table class="table">
            <thead>
      <tr>
          <th>Id</th>
        <th>Name</th>
        <th>Number</th>
    </tr>
</thead>
<tbody>
    <?php 
       if (mysqli_num_rows($result) > 0) {
           // output data of each row
           while($row = mysqli_fetch_assoc($result)) {
               ?> 
      <tr>
        <td><?php echo $row["id"];?></td>
        <td><?php echo $row["name"];?></td>
        <td><?php echo $row["number"];?></td>
      </tr>
      <?php 
        }
    } else {
        echo "0 results";
    }
      ?>
</tbody>
</table>
</div>
<?php mysqli_close($connect); ?>

</body>
</html>
