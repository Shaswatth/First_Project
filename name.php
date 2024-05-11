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
            header("Location:login.php");
            
         
        }

        // Taking all 5 values from the form data(input)
        $name = $_REQUEST['username'];
        $p_name = $_REQUEST['password'];
       // $gender = $_REQUEST['age'];
       /// $faddress = $_REQUEST['favgame'];
       // $femail = $_REQUEST['email'];

        // We are going to insert the data into our sampleDB table
        $username = mysqli_real_escape_string($conn, $_REQUEST['username']);
        $pass = mysqli_real_escape_string($conn, $_REQUEST['password']);
       // $age = mysqli_real_escape_string($conn, $_REQUEST['age']);
       // $fgame = mysqli_real_escape_string($conn, $_REQUEST['favgame']);
        //$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
        // Formulate the query
        $query = "SELECT * FROM game WHERE username='$username' ";
        $querypass = "SELECT * FROM game WHERE password='$pass' ";

        // Execute the query
        $result = mysqli_query($conn, $query);
        $resultpass = mysqli_query($conn, $querypass);
        // Check if query was successful
        if($result || $resultpass){
            // Check if any rows were returned
           if(mysqli_num_rows($result) > 0){
            if(mysqli_num_rows($resultpass) > 0){
               // echo $age;
                $_SESSION['email_alert']=$username;
             //   $_SESSION['email_alert2']=$age;
              ////  $_SESSION['email_alert3']=$fgame;
             //   $_SESSION['email_alert']=$email;
                header("Location:home.php");
            }
               // header("Location:login.php");
            } else {
                header("Location:login.php");
               echo "user not exist";
            }
        }
       // error_reporting(0);
        // Close connection
        mysqli_close($conn);
        ?>
    </center
</body>

</html>