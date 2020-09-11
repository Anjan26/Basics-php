<html>
<body>
<center>
<h1>Edit Students</h1>
<a href="index.php">back to index</a>

<form method="post" action="">
    <input style='display:none'; type="text" name="id" value="<?php echo $_GET['id'];?>"/>
    Name: <input type="text" name="name" value="<?php echo $_GET['name'];?>"/>
    Address: <input type="text" name="address" value="<?php echo $_GET['address'];?>"/>
    <input type="submit" value="update">
</form>

<?php 
if (isset($_POST['id'])){
    $conn = new mysqli("localhost", "root","", "institute");

    if($conn->connect_error){
        die("connection error");
    }

        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $update = "update students set name='$name', address='$address' where id=$id";
        if($conn->query($update)){
            echo "student updated successfully";
        }else{
            echo "students update failed";
        }
}
?>
<center>
</body>
</html>