<!DOCTYPE html>
<html>
<head>
 <title></title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
  <?php
include 'conn.php';

$result = mysqli_query($con,"SELECT * FROM blog2" );

echo '<table border="2" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Title</font> </td> 
          <td> <font face="Arial">Body</font></td> 
          <td> <font face="Arial">Created_at</font> </td> 
          <td> <font face="Arial">Updated_at</font> </td> 
          <td> <font face="Arial">Edit</font> </td> 
          <td> <font face="Arial">Delete</font> </td> 
      </tr>';

         if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $field1name = $row["title"];
            $field2name = $row["body"];
            $field3name = $row["created_at"];
            $field4name = $row["updated_at"];
         
            echo '<tr> 
            <td>'.$field1name.'</td> 
            <td>'.$field2name.'</td>
            <td>'.$field3name.'</td> 
            <td>'.$field4name.'</td> 
            <td><a href="update.php?id='. $id .'">Edit</a></td>
            <td><a href="delete.php?id='. $id .'">Delete</a></td>

        </tr>';
          }
        } else {
          echo "0 results";
        }
?>
    <div class="container-fluid">
  
        <p>Welcome user<a href="blog1.php"> Create new blog </a></p>
     </div>

</body>
</html>

