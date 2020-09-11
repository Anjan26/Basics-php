<?php
$conn = new mysqli("localhost", "root", "", "institute");

if($conn->connect_error){
  die("connection failed");
}

$query = "select * from students;";
$result = $conn->query($query);

if(isset($_POST['studentid'])){
    $id = $_POST['studentid'];
    $exam_query = "select * from exams where studentid=$id";
    $exam_result = $conn->query($exam_query);

    while($row = $exam_result->fetch_assoc()){
        echo $row['subject']."-".$row['score']."<br/>";
    }
}
?>