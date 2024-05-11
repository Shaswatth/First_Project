<?php 
session_start();
error_reporting(0);


	         $message=$_SESSION['email_alert'];
  ?>

<!DOCTYPE html>
<!--divinectorweb.com-->
<html lang="en" data-bs-theme="dark">
<head>
	<meta charset="UTF-8">
	<title>Bootstrap 5 Slider With Text Animation</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * {
	font-family: 'Montserrat', sans-serif;
}
.bg-light {
	background-color: transparent !important;
}
.carousel-item {
	height: 100vh;
	min-height: 300px;
}
.carousel-caption {
	bottom: 220px;
}
.carousel-caption h5 {
	font-size: 45px;
	text-transform: uppercase;
	letter-spacing: 2px;
	margin-top: 25px;
}
.carousel-caption p {
	width: 60%;
	margin: auto;
	font-size: 18px;
	line-height: 1.9;
}
button{
    text-transform: uppercase;
	text-decoration: none;
	background: darkorange;
	padding: 10px 30px;
	display: inline-block;
	color: #000;
	margin-top: 15px;

}
.carousel-caption a {
	text-transform: uppercase;
	text-decoration: none;
	background: darkorange;
	padding: 10px 30px;
	display: inline-block;
	color: #000;
	margin-top: 15px;
}
.navbar-nav a {
	font-size: 15px;
	text-transform: uppercase;
	font-weight: bold;
}
.navbar-nav a:hover{
    background:#2196f3;
    box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
    transition-duration: 1s;
    
} 
.navbar-light .navbar-brand {
	color: #fff;
	font-size: 25px;
	text-transform: uppercase;
	font-weight: bold;
	letter-spacing: 2px;
}
.navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
	color: #fff;
}
.navbar-light .navbar-nav .nav-link {
	color: #fff;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
	color: #fff;
}
.w-100 {
	height: 100vh;
}
.navbar-toggler {
	padding: 1px 5px;
	font-size: 18px;
	line-height: 0.3;
	background: #fff;
}
@media only screen and (max-width: 767px) {
	.navbar-nav {
		text-align: center;
		background: rgba(0, 0, 0, 0.5);
	}
	.carousel-caption {
		bottom: 165px;
	}
	.carousel-caption h5 {
		font-size: 17px;
	}
	.carousel-caption a {
		padding: 10px 15px;
		font-size: 15px;
	}
}
.text{
    position: relative;
    top:50px;

}
.space1{
    position: absolute;
    top:700px;
}
.space2{
    position: absolute;
    top:925px;
}
.space3{
    position: absolute;
    top:1300px ;
}
.space4{
    position: absolute;
    top:1675px ;
}
.space5{
    position: absolute;
    top:2050px ;
}
.space6{
    position: absolute;
    top:2425px;
}
.footer{
    position: absolute;
    top:3000px;
}
.image1{
  transform:skew(160deg);
  transform-style: preserve-3d;
  border-radius: 32px;
  box-shadow:
    1px 1px 0 1px #f9f9fb,
    -1px 0 28px 0 rgba(34, 33, 81, 0.01),
    28px 28px 28px 0 rgba(34, 33, 81, 0.25);
  transition:
    .4s ease-in-out transform,
    .4s ease-in-out box-shadow;}

  .image1:hover {
    transform:
      translate3d(0px, -16px, 0px)
      rotatex(0deg)
      rotateZ(0deg);
    box-shadow:
      1px 1px 0 1px #f9f9fb,
      -1px 0 28px 0 rgba(34, 33, 81, 0.01),
      54px 54px 28px -10px rgba(34, 33, 81, 0.15);
      transition: 1s;
  }
  .download1{
    position: relative;
    top: 200px;
    right: 200px;
    transform: skew(150deg);
  }
  .para1{
    position: relative;
    top:50px;
    right:350px;
  }
  .para1:hover{
    position: relative;
    top:50px;
    right:350px;
    font-size: large;
    transition: 2s;
  }
  /*second */
  .image2{
  transform:skew(160deg);
  transform-style: preserve-3d;
  border-radius: 32px;
  box-shadow:
    1px 1px 0 1px #f9f9fb,
    -1px 0 28px 0 rgba(34, 33, 81, 0.01),
    28px 28px 28px 0 rgba(34, 33, 81, 0.25);
  transition:
    .4s ease-in-out transform,
    .4s ease-in-out box-shadow;}

  .image2:hover {
    transform:
      translate3d(0px, -16px, 0px)
      rotatex(0deg)
      rotateZ(0deg);
    box-shadow:
      1px 1px 0 1px #f9f9fb,
      -1px 0 28px 0 rgba(34, 33, 81, 0.01),
      54px 54px 28px -10px rgba(34, 33, 81, 0.15);
      
  }
  .download2{
    position: relative;
    top: 400px;
    right: 200px;
    transform: skew(150deg);
  }
  .para2{
    position: relative;
    top:100px;
    right:350px;
  }
  .para2:hover{
    position: relative;
    top:100px;
    right:350px;
    font-size: large;
    
  }
  h5{
    color: #fff;
  }
  p{
    color: #fff;
  }
  .font{
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  }
  h3{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-weight: 300;
  }
  .arcade p{
    display:;
  }
  .arcade p:hover{
    display:block;
  }
  


    </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand arcade" href="#">Aracde<p><?php echo $age?><br><?php echo $fgame?><br><?php echo $mail?></p></a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="#">
                            Home
                        </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../Day3/login,game/singlegame.html" target="_blank">Play</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../Day3/singup.php" target="_blank">Sign up</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../Day3/login.php" target="_blank">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php">Log out</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
        
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../Day3/finalimage/vc.jpg"  class="d-block" style="width:100%">
            <div class="carousel-caption">
                <h5 class="animated bounceInRight" style="animation-delay: 1s">WELCOME!<?php echo $message ?></h5>
                <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">The best site to download your favourite games</p>
                <p class="animated bounceInRight" style="animation-delay: 3s"><a href="#ex">Explore more</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../Day3/finalimage/apexc.jpg"  class="d-block" style="width:100%">
            <div class="carousel-caption">
                <h5 class="animated bounceInRight" style="animation-delay: 1s">ESCAPE REALITY AND PLAY GAMES</h5>
                <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">We dont like reality becasue the graphics is not good</p>
                <p class="animated bounceInRight" style="animation-delay: 3s"><a href="#ex">Explore more</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="../Day3/finalimage/codc.jpg"  class="d-block" style="width:100%">
            <div class="carousel-caption">
                <h5 class="animated bounceInRight" style="animation-delay: 1s">IT IS A NXT ERA OF GAMING</h5>
                <p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">Keep calm and do gaming!</p>
                <p class="animated bounceInRight" style="animation-delay: 3s"><a href="#ex">Explore more</a></p>
            </div>
          </div>
        </div>
        
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
      
    <div class="container mt-5 space1">
    <div class="row">
            <div class="col text top-1"><h1>NEWLY RELEASED GAMES</h1></div>
            <div class="col text top-2"><p>The newly released games from 2k's are rocking! stay tuned for further games from this era</p></div>
        </div></div>
        <div class="container-fluid mt-5 space2">
            <div class="row">
            <div class="col">
                <h1>PUBG-players unknown battlegrounds</h1>
            </div>
            
            </div>
            <div class="row" id="ex">
                <div class="col">
                    <img class="image1 img-fluid" src="../Day3/finalimage/pubg3d.jpg">
                </div>
                <div class="col">
                    <a class="btn btn-warning download1" href="../Day3/page 2/pubg - Copy.html" target="_blank">Download</a>
                </div>
                <div class="col">
                    <p class="para1">PUBG is a player versus player shooter game in which up to one hundred players fight in a battle royale, a type of large-scale last man standing deathmatch where players fight to remain the last alive. Players can choose to enter the match solo, duo, or with a small team of up to four people.</p>
                </div>
                
            </div>
        </div>
            <!--2-->
            

                <div class="container-fluid mt-5 space3">
                    <div class="row">
                        <div class="col">
                            <h1>VALORANT</h1>
                        </div>
                        
                        </div>
                        <div class="row">
                            <div class="col">
                                <img class="image1 img-fluid" src="../Day3/finalimage/valvo3d.jpg">
                            </div>
                            <div class="col">
                                <a class="btn btn-warning download1" href="../Day3/page 2/valorent - Copy.html" target="_blank">Download</a>
                            </div>
                            <div class="col">
                                <p class="para1">Valorant is an online multiplayer computer game, produced by Riot Games. It is a first-person shooter game, consisting of two teams of five, where one team attacks and the other defends. Players control characters known as 'agents', who all have different abilities to use during gameplay</p>
                            </div>
                    </div>
                </div>
            <!--3-->

            <div class="container-fluid mt-5 space4">
                <div class="row">
                    <div class="col">
                        <h1>CALL OF DUTY</h1>
                    </div>
                    
                    </div>
                    <div class="row">
                        <div class="col">
                            <img class="image1 img-fluid" src="../Day3/finalimage/cod3d.jpg">
                        </div>
                        <div class="col">
                            <a class="btn btn-warning download1" href="../Day3/page 2/cod - Copy.html" target="_blank">Download</a>
                        </div>
                        <div class="col">
                            <p class="para1">Call of Duty is a franchise of several multiplayer first-person shooter games published by Activision. The original game focused on the Second World War, but subsequent games have been set in different times and places, including futuristic worlds and outer space</p>
                        </div>
                </div>
            </div>
            <!--4-->
            <div class="container-fluid mt-5 space5">
                <div class="row">
                    <div class="col">
                        <h1>APEX LEGENDS</h1>
                    </div>
                    
                    </div>
                    <div class="row">
                        <div class="col">
                            <img class="image1 img-fluid" src="../Day3/finalimage/apex3d.jpg">
                        </div>
                        <div class="col">
                            <a class="btn btn-warning download1" href="../Day3/page 2/apex - Copy.html" target="_blank">Download</a>
                        </div>
                        <div class="col">
                            <p class="para1">Apex Legends is an online multiplayer battle royale game featuring squads of three players using pre-made characters with distinctive abilities, called "Legends", similar to those of hero shooters. Alternate modes have been introduced allowing for single and for two-player squads since the game's release.</p>
                        </div>
                </div>
            </div>
              <!--5-->
              <div class="container-fluid mt-5 space6">
                <div class="row">
                    <div class="col">
                        <h1>FREE FIRE</h1>
                    </div>
                    
                    </div>
                    <div class="row">
                        <div class="col">
                            <img class="image1 img-fluid" src="../Day3/finalimage/ff3d.jpg">
                        </div>
                        <div class="col">
                            <a class="btn btn-warning download1" href="../Day3/page 2/freefire - Copy.html" target="_blank">Download</a>
                        </div>
                        <div class="col">
                            <p class="para1">FREE FIRE is a player versus player shooter game in which up to one 50 players fight in a battle royale, a type of large-scale last man standing deathmatch where players fight to remain the last alive. Players can choose to enter the match solo, duo, or with a small team of up to four people.</p>
                        </div>
                </div>
            </div>
            <!--footer-->
            <div class="container-fluid bg-secondary footer rounded">
                <div class="font">
                <div class="row" id="c">
                    <div class="col">
                        <h3>ARCADE GAMERS</h3>
                        <p>This site is for downloading new games and plaiyng old games online<br>this era has destroyed arcade</p>
                    </div>
                    <div class="col">
                        <h3>CURRENTLY AVAILABLE GAMES</h3>
                        <P>1.PUBG</P>
                        <P>2.VALORANT</P>
                        <P>3.COD</P>
                        <P>4.APEX LEGENDS</P>
                        <P>5.FREE FIRE</P>
                    </div>
                    <div class="col">
                        <h3>STAY TUNED FOR NXT ERA</h3>
                        <p>Next era on cloud based gaming and vr wiht AI lets hope that will com ASAP</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col">

                    </div> 
                    <div class="col">

                    </div>
                    <div class="col">

                    </div>
                    <div class="col">
                        <img src="../Day3/finalimage/github-mark-white.png" width="30px">
                    </div>
                    <div class="col">
                        <img src="../Day3/finalimage/insta.jpeg" width="30px" style="border-radius: 10px;">
                    </div>
                    <div class="col">
                        <img src="../Day3/finalimage/twitter.png" width="30px"  style="border-radius: 10px;">
                    </div>
                    <div class="col">
                        <img src="../Day3/finalimage/fb.jpg" width="30px"  style="border-radius: 10px;">
                    </div>
                    <div class="col">
                        
                    </div>
                    <div class="col">
                       
                    </div>
                    <div class="col">
                        
                    </div>
                    <div class="col">
                        
                    </div>
                </div>
                <div class="container-fluid mt-3">
                    <center><p>©2024 All right reserved from steam and epic games</p></center>
                </div></div></div>
                



        
        

</body>

</html>
