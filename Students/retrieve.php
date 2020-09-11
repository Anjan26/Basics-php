<html>
<head>
  <style>
    td{
      border: 1px solid black;
    }
  </style>
</head>
<body>
<center>
<h1>View Students</h1>
<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "institute";

$conn = new mysqli($host, $username, $password, $db);

if($conn->connect_error){
  die("connection failed");
}

$students_query = "select * from students;";
$students_result = $conn->query($students_query);
echo "<table>";
while($row = $students_result->fetch_assoc()){
  echo "<tr>";
  echo "<td>".$row["name"]."</td>";
  echo "<td>".$row["address"]."</td>";
  echo "</tr>";
}
echo "</table>";

echo '    
  <a href="addStudentDetails.php">
    <button>
      Add student
    </button>
  </a>'; 

  echo '    
  <a href="index.php">
    <button>
      Home
    </button>
  </a>'; 


$conn->close();

?>
</center>
</body>
</html>