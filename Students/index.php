<html>
<head>
</head>
<body>
<center>
<h1> Students Information</h1>
<a href="addStudentDetails.php"><button>Add student</button></a>
<table>
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Action</th>
        <th>Delete</th>
    </tr>

<?php 
 $conn = new mysqli("localhost","root", "","institute");

 if($conn->connect_error){
     die("connection error");
 }

 $query = "select * from students";
 $result = $conn->query($query);

 while($row= $result->fetch_assoc()){
     $id = $row['id'];
     $name = $row['name'];
     $address = $row['address'];

     echo "<tr>";
     echo "<td>$name</td>";
     echo "<td>$address</td>";
     echo "<td><a href='editStudent.php?id=$id&name=$name&address=$address'>Edit</a></td>";
     echo "<td><a href='deleteStudent.php?id=$id'>Delete</a></td>";
     echo "</tr>";
 }
  


?>
</table>
</center>
</body>
</html>