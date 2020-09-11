<html>
<head></head>
<body>
<form method="POST" action="dropdownresult.php">
<?php
$conn = new mysqli("localhost", "root", "", "institute");

if($conn->connect_error){
  die("connection failed");
}

$query = "select * from students;";
$result = $conn->query($query);

echo "<select name='studentid'>";
while($row = $result->fetch_assoc()){
    $id = $row['id'];
    echo "<option value='$id'>";
    echo $row['name'];
    echo "</option>";
}
echo"</select>";
?>
<input type="submit" value="GO">
</form>


<!-- <?php
if(isset($_POST['studentid'])){
    $id = $_POST['studentid'];
    $exam_query = "select * from exams where studentid=$id";
    $exam_result = $conn->query($exam_query);

    while($row = $exam_result->fetch_assoc()){
        echo $row['subject']."-".$row['score']."<br/>";
    }
}
?> -->

</body>
</html>