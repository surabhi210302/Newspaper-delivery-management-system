<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style_log.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
*{margin:0; box-sizing:border-box,font-family: 'Mulish', sans-serif;}
a{
text-decoration:none;
color:white;
}

header{
width:100%;
height:100vh;
background-color:#1a52f9;
background-image:linear-gradient(19deg,#1a52f9 0%, #B721FF 84%);position:relative;
}

header:before{
content:"";
width:520px;
height:550px;
position:absolute;
left:0;
bottom:0;
background-image:url('main34.png');
background-size:100% 100%;
}

nav{
width:100%;
height:15vh;
display:flex;
justify-content:space-around;
align-items:center;
position:absolute;
}
.logo a{
color:white;
text-decoration:none;
font-size:1.6rem;
text-transform:uppercase;
font-weight:bold;
}

.menu ul li{
list-style:none;
display:inline-block;
padding:0 15px;
}

.menu ul li a{
text-transform:capitalize;
}
 
.active, ul li:hover{
border-top:2px solid #5dade2;
border-bottom:2px solid #5dade2;
}

.contact_btn a{
background-color:#d465ef;
padding:12px 26px;
font-style:14px;
font-weight:500;
border:1px solid transperent;
}

.contact_btn a:hover{
background:linear-gradient(to bottom, #615cfd 0%, #d465ef 100%);
}
 .center_content{
position:absolute;
top:50%;
left:50%;
transform:translate(-50%, -50%);
text-align:center;
}

 .center_content h1{
color:#fff;
font-size:70px;
text-transform:capitalize;
font-weight:700;
margin-bottom:10px;
z-index:1;

}

 .center_content h2{
font-size:25px;
font-weight:400;
color:#fff;
z-index:1;
}

 .center_content h2:before{
content:"";
width:120px;
height:auto;
border:2px solid #fff;
position:absolute;
left:40px;
bottom:0;
margin-bottom:10px;

}

.center_content a{
background-color:#d465ef;
padding:12px 26px;
font-style:14px;
font-weight:500;
border:1px solid transperent;
position:absolute;
margin-top:20px;

}
.center_content a:hover{
background:linear-gradient(to bottom, #615cfd 0%, #d465ef 100%);
}

.social_network{
width:100px;
height:auto;
position:absolute;
right:0;
top:40%;

}
.fa_icons{
width:40px;
height:40px;
border-radius:50%;
background:linear-gradient(to bottom, #615cfd 0%, #d465ef 100%);
display:flex;
justify-content:center;
align-items:center;
}
.fa_icons:nth-child(even){
margin:20px 0;
}

.fa_icons:hover{
background:linear-gradient(to bottom, #d465ef 0%, #615cfd 100%);
}
</style>
</head>
<body>
    


<header>
<nav class="navbar">
<div class="logo">
<a href="" target="_blank">ONDMS
</a>
</div>
<div class="menu">
<ul>
<li><a href="#" class="active">home</a></li>
<li><a href="services.html" >services</a></li>
<li><a href="#" >about us</a></li>
<li><a href="#" >contact us</a></li>
</ul>
</div>


<div class="contact_btn">
<a href="logout.php">Logout</a>
</div>
</nav>

<div class="center_content">


     <h1>Welcome to ONDMS, <?php echo $_SESSION['name']; ?> </h1>
<h2>Your Remaining Bill is..</h2>
<a href="index4.html">pay now</a>
</div>
<div class="social_network">

<div class="fa_icons">
<a href="#">
<i class="fa fa-facebook"></i></a>
</div>
<div class="fa_icons">
<a href="#">
<i class="fa fa-twitter"></i></a>
</div>
<div class="fa_icons">
<a href="#">
<i class="fa fa-instagram"></i></a></div>

<div class="fa_icons">
<a href="#">
<i class="fa fa-youtube"></i>
</a>
</div>
<div class="grid_sec">
<img src="">
</div>
</header>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>