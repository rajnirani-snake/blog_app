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
$result = mysqli_query($con,"SELECT * FROM blog" );
echo '<table border="2" cellspacing="2" cellpadding="3"> 
      <tr> 
          <td> <font face="Arial">Title</font> </td> 
          <td> <font face="Arial">Body</font> </td> 
          <td> <font face="Arial">Created_at</font> </td> 
          <td> <font face="Arial">Updated_at</font> </td> 
         
      </tr>';
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $field1name = $row["title"];
    $field2name = $row["body"];
    $field3name = $row["created_at"];
    $field4name = $row["updated_at"];
    
    echo '<tr> 
    <td>'.$field1name.'</td> 
    <td>'.$field2name.'</td> 
    <td>'.$field3name.'</td> 
    <td>'.$field4name.'</td> 
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

<!-- echo "<div>
       <h1>Title:" .$row["title"]."</h1>
       <p>Body:" .$row["body"]."</p>    
       <p>Created_at:".$row["created_at"]."</p>
       <p>Updated_at:".$row["updated_at"]."</p>
       <hr>
       </div>"; -->