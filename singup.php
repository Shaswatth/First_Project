<?php 
session_start();
$message='';
if(isset($_SESSION['email_alert'])){
	$message='User Alredy Exist..!';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            background-image: url("../Day3/finalimage/mountain2.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .mart{
margin-top: 100px;
        }
        .radius{
            border-radius: 50%;
        }
        .form{display:block;width:100%;height:calc(1.5em + .75rem + 2px);padding:.375rem .75rem;
            background-color: rgba(255, 186, 140,0.1);
            font-size:1rem;font-weight:400;line-height:1.5;color:#495057;background-clip:padding-box;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}
            .btnn{ width:500px;height:55px;display:inline-block; box-shadow: 15px 15px 10px rgba(88, 87, 86, 0.9);font-weight:400;color:#212529;text-align:center;vertical-align:middle;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}
    ul .l{
    padding-left: 30px;
    }
    ul .r{
        padding-right: 20px;
    }
    .other li{
        padding-right: 10px;
    }
    .logo:hover{  
    transform: scale(1.05);
    }
.logo{
    text-indent: -999999px;
    background-image: url("../Day3/finalimage/logo1.png");
    width: 116px;
    height: 108px;
    border-radius: 30px;
    box-shadow: 10px 10px 20px rgba(14, 13, 13, 0.911);
    background-repeat: no-repeat;
}
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Sign UP</title>
</head>
<body class="container">
   <center>
   <div class="alert alert-default alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong><?php echo $message ?></strong>
</div>
   <div class="col-md-4 col-sm-4 col-lg-4 col mart">
        <div class="row p-5 ml-5"><h2 class="logo"style="color: white;">LOGO</h2></div>
		
<form action="insert.php" method="POST">

<div class="row p-3" ><input type="text" class="form-control p-4 rounded-pill bg " style="color:black" id="" placeholder="Username" name="username" ></div>
<div class="row p-3"><input type="password" class="form-control p-4 rounded-pill" id="" style="color:black" placeholder="password" name="password" required></div>
<div class="row p-3"><input type="number" class="form-control p-4 rounded-pill" id="" style="color:black" placeholder="age" name="age" required></div>
<div class="row p-3"><input type="text" class="form-control p-4 rounded-pill" id="" style="color:black" placeholder="fav game" name="favgame" required></div>
<div class="row p-3"><input type="emial" class="form-control p-4 rounded-pill" id="" style="color:black" placeholder="email id" name="email" required></div>
<div class="row p-3"><button type="submit" class="btnn  rounded-pill "  style="color: black; background-color:rgb(255, 186, 140); font-weight: 500;">SIGN UP</button></div>
</form>
		<div class="row">
            <ul class="remember" style="display:flex; list-style-type:none;">
           <li class="r"> <div class="form-check">
            <input type="checkbox" class="form-check-input" style="accent-color: rgb(255, 186, 140); border:none;" id="check2" name="option2" value="something">
            <label class="form-check-label" style=" color:rgb(255, 186, 140); font-weight: 1000;" for="check2">Remember me</label>
          </div></li>
        <li class="l" style="color:beige; font-weight: 1000;">click here</li>
        </ul>

        </div>
        <div class="row justify-content-center" style="font-weight: 500; color:beige">
            — Or —
        </div>
		<?php unset($_SESSION['email_alert']); ?>
<!--<div class="row" >
    <ul class="other" style="display:flex; list-style-type:none;">
    <li ><div class="row p-3"><button type="submit" class="btn  rounded p-3"  style="color: black; background-color:beige; font-weight: 500; width: 150px;">Facebook</button></div></li>
    <li> <div class="row p-3"><button type="submit" class="btn rounded p-3"  style="color: black; background-color:beige; font-weight: 500; width:150px">Twitter</button></div></li>
</div>
</ul> --> 
<div class="row justify-content-center mb-4" style="font-size: 20px; color:blanchedalmond">Already have an Account?<a href="login.php" style="color:rgb(255, 186, 140);">.    Sign In</a></div>
        </center>     
    
</div>
</body>
</html>
