<html>
  <head>

  </head>
  <body>
  <center>
    <h1>Add Students</h1>
    <form method="post" action="">
      <input name="name" type="text" placeholder="enter name"/>
      <input name="address" type="text" placeholder="enter address"/>
      <input name="submit" type="submit" value="add student" />
    </form>

    <a href="retrieve.php">
      <button>
        View all students
      </button>
    </a> 
    
    <?php
    if(isset($_POST['submit'])){
      $host = "localhost";
      $username = "root";
      $password = "";
      $db = "institute";

      $conn = new mysqli($host, $username, $password, $db);

      if($conn->connect_error){
        die("connection failed");
      }

      $add_students_query = "insert into students(name, address) values('".$_POST['name']."','".$_POST['address']."');";
      if($conn->query($add_students_query)){
        echo " operation success";
      }else{
        echo " operation failed";
      }

      $conn->close();
    }
    ?>
  </center>
  </body>
</html>