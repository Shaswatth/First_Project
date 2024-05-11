<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <center>
        <?php
session_start();
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "csed02");

        // Check connection
        if($conn === false){
            echo "Server Offline...";
        } else {
            echo "Server Online....";
        }

        // Taking all 5 values from the form data(input)
        $name = $_POST['username'];
        $password = $_POST['password'];
        $fgame = $_POST['favgame'];
        $age = $_POST['age'];
        $mail = $_POST['email'];
        //$gender = $_REQUEST['gender'];
        //$address = $_REQUEST['address'];
        //$email = $_REQUEST['email'];

        // We are going to insert the data into our sampleDB table
        $username = mysqli_real_escape_string($conn, $_REQUEST['username']);
        
        // Formulate the query
        $query = "SELECT * FROM game WHERE username='$name' ";
        
        // Execute the query
        $result = mysqli_query($conn, $query);
        
        // Check if query was successful
        if($result){
            // Check if any rows were returned
           if(mysqli_num_rows($result) > 0){
               // echo "Username alredy exists";
                $_SESSION['email_alert']='1';
                header("Location:singup.php");
            } else {
                //echo "Username doesn't exist";
            
        
        //----
        $sql = "INSERT INTO game VALUES ('$name','$password','$fgame','$age','$mail')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            header("Location:login.php");

           // echo nl2br("\n$first_name\n $last_name\n ");
        }// else{
          //  echo "ERROR: Hush! Sorry $sql. "
          //      . mysqli_error($conn);
       // }
      //  
       }
        }
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>