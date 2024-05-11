<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "csed02");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $name = $_POST['username'];
        $pass = $_POST['password'];
        //$gender = $_REQUEST['gender'];
        //$address = $_REQUEST['address'];
        //$email = $_REQUEST['email'];
        
        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO game VALUES ('$name',
            '$pass')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
        

           // echo nl2br("\n$first_name\n $last_name\n ");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>

