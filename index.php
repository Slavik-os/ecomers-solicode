<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/fc-3.2.2/fh-3.1.2/r-2.1.0/sc-1.4.2/datatables.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <title>ma39i3</title>
</head>
<body>
<style>
    body{
        font-family:'Arial' !important;
    }
    nav a {
        color : #fff;
        font-size : 13px;
    }
    form ul li a {
        color :#fff !important;
        font-size: 13px !important; 
    }

    #submit_change:hover{
      background : #fff !important;
      color :#000 !important;
      transition :0.5 !important;
    }
    .navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,102,203, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}
body {
    background : url('assets/2.png') no-repeat center center fixed ;
    background-size: cover;
}
.bg-layout {
    background : url('assets/2.png') no-repeat center center fixed ;
    background-size: cover;
    width: 100%;
    height: 100vh;
    animation : changeBg 8s infinite;
    animation-direction:alternate ;
    animation-delay: 2s;
}

@keyframes changeBg{
  10% {background-image: url("assets/15.png");background-size: cover ;}
  20% {background-image: url("assets/7.png");background-size: cover ;}
  40% {background-image: url("assets/10.png");background-size: cover ;}
  60% {background-image: url("assets/14.png");background-size: cover ;}
  80% {background-image: url("assets/16.png");background-size: cover ;}
  100% {background-image: url("assets/4.png");background-size: cover ;}
   /* 60% {background-image: url("assets/14.png");background-size: cover ;}
   65% {background-image: url("assets/15.png");background-size: cover ;}
   70% {background-image: url("assets/16.png");background-size: cover ;}
   75% {background-image: url("assets/17.png");background-size: cover ;}
   80% {background-image: url("assets/18.png");background-size: cover ;}
   85% {background-image: url("assets/19.png");background-size: cover ;}
   90% {background-image: url("assets/20.png");background-size: cover ;}
   95% {background-image: url("assets/21.png");background-size: cover ;}
   100% {background-image: url("assets/22.png");background-size: cover ;}  */

}

::placeholder{
  padding: 20px;
  color:#fff!important;
  font-size:12px;
}
</style>
<!-- nav-bar -->
<nav class="navbar navbar-expand-lg py-0 navbar-white bg-black">
  <a class="navbar-brand" href="#" style="font-family:'Arial'; font-weight:bold; font-size:13px;">RIOT HILL</a>
  <button class="navbar-toggler "  style="color :#fff;"type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon " style="color :#fff;"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOGIN
        </a>
        <div class="dropdown-menu pr-5 bg-black" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php">login</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="signup.php">signup.php</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="store.php">STORE</a>
      </li>
      <li class="nav-link disabled"><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
    </ul>
    </form>
  </div>
</nav>
<!-- nav-bar-end -->

<div class="container-flued bg-layout" style="position:absolute; z-index:1;">
</div>
<div class="container p-5" id="login_box" style="background-color:black;position:relative;margin-top:15%;z-index:3;">
        <i class="fa fa-times float-right" style="position:absolute; top:10px; color:#fff; font-size:20px;cursor:pointer" onclick="close_login()"></i>
        <div class="row" style="float: none; margin: 0 auto;">
                <div class="col-md-6" style="background:url('assets/login-background.webp') no-repeat center center ; background-size:contain"></div>
                <div class="col-md-6">
                  <div class="row">
                   <h1 style="font-size:15px;color:#fff; text-align:center">NEWSLETTER</h1>
                   <p style="font-size:10px;color:#fff;text-align:center"> Sign up for the RIOT HILL newsletter in order to receive our <br>
                     private sale discount codes exclusively for newsletter subscribers.</p>
                  </div>
                    <form class="mt-4" method="POST" action="inc/submit.php">
                        <div class="form-group">
                            <div class="col-md-9">
                            <input type="email" class="form-control input-login"  name="email_user" style="background-color : #000;color:#fff;border-radius:0;border:2px solid #fff" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                          </div>
                        <div class="form-group">
                            <div class="col-md-9">
                            <input type="password"  style="background-color : #000;color:#fff;border-radius:0;border:2px solid #fff" class="form-control input-login" name="password" id="exampleInputPassword1" placeholder="Password">
                            </div>
                          </div>
                          <div class="col-md-9">
                        <input type="submit" value="Submit" name="login" class="py-2 px-5"  id="submit_change" style="background:#000;border:2px solid #fff;color:#fff;">
			<br/>
			<p style="color :red">
				<?php
					if(isset($_GET['error'])){
						echo $_GET['error'];
					}
				?>
			</p>	
                        </div>
                        <div class="col-md-12 mt-3" style="color:#fff;font-size:12px">if you don't have an account <a href="signup.php" style="font-weight:bold">Sign up here ! </a></div>
                    </form>      
                </div>
    </div>
</div>
<div class="row" style="position:fixed ;z-index:2;bottom:0;width:100%">
    <div class="col-md-12">
      <p style="color:#fff; font-size:10px; text-align:center">
      All contents of this website are the property of RIOT HILL. No part of this site, including all text and <br>
      images, may be reproduced in any form without the prior written consent of RIOT HILL <br> <br> <br>
      Copyright &copy; 2021&nbsp; RIOT HILL. All Rights Reserved. <br> <br>
      <i class="fa-brands fa-facebook-f" style="font-size:20px"></i>   <i class="fa-brands fa-instagram  px-3" style="font-size:20px"></i> <i class="fa-brands fa-soundcloud  pr-3" style="font-size:20px"></i>
      </p>
    </div>
    </div>

    



<script src=" https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity=" sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin=" anonymous "></script>
<script src=" https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js " integrity=" sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/ " crossorigin=" anonymous "></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript">

let close_login = ()=>{
  console.log('working');
    document.getElementById("login_box").style.display="None";
}
</script>
</body>
</html>
