<?php
session_start();
include('connection.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query(
$conn,
"SELECT * FROM `products` WHERE `code`='$code'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>










<!doctype html>
<html lang="en">
  <head>
          <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>FUSION</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Sofia" rel="stylesheet"/>
	<link href='https://css.gg/shopping-cart.css' rel='stylesheet'>
    <style>
      


      .product_wrapper {

	padding: 10px;
	text-align: center;
    
	}
.product_wrapper:hover {
	box-shadow: 0 0 0 2px #e5e5e5;
	cursor:pointer;
	}
.product_wrapper .name {
	font-weight:bold;
	}
.product_wrapper .buy {
	text-transform: uppercase;
	background:#1C193D ;
	border: 1px solid #1C193D;
	cursor: pointer;
	color: #fff;
	padding: 8px 40px;
	margin-top: 10px;
}
.product_wrapper .buy:hover {
	background:#2F3074 ;
	border-color: #2F3074;
}
.message_box .box{
	margin: 10px 0px;
	border: 1px solid #2b772e;
	text-align: center;
	font-weight: bold;
	color: #2b772e;
	}
.table td {
	border-bottom: #F0F0F0 1px solid;
	padding: 10px;
	}
.cart_div {
  margin-right: 15px;
	float:right;
	font-weight:bold;
	position:relative;
	}
.cart_div a {
	color:#000;
	}	
.cart_div span {
	font-size: 12px;
	line-height: 14px;
	background: #2F3074;
	padding: 2px;
	border: 2px solid #fff;
	border-radius: 50%;
	position: absolute;
	top: -1px;
	left: 13px;
	color: #fff;
	width: 20px;
	height: 20px;
	text-align: center;
	}
.cart .remove {
	background: none;
	border: none;
	color: #0067ab;
	cursor: pointer;
	padding: 0px;
	}
.cart .remove:hover {
	text-decoration:underline;
	}

img{
      /* width:200px;
	   height:300px;
       border: 2px solid black;
       border-radius: 8px;*/


}
.gg-shopping-cart {
    display: block;
    box-sizing: border-box;
    position: relative;
    transform: scale(var(--ggs,1));
    width: 20px;
    height: 21px;
    background:
        linear-gradient(
            to left,white  12px,
            transparent 0)
            no-repeat -1px 6px/18px 2px,
        linear-gradient(
            to left,white 12px,
            transparent 0)
            no-repeat 6px 14px/11px 2px,
        linear-gradient(
            to left,white 12px,
            transparent 0)
            no-repeat 0 2px/4px 2px,
        radial-gradient(
            circle,white 60%,
            transparent 40%)
            no-repeat 12px 17px/4px 4px,
        radial-gradient(
            circle,white 60%,
            transparent 40%)
            no-repeat 6px 17px/4px 4px
}
.gg-shopping-cart::after,
.gg-shopping-cart::before {
    content: "";
    display: block;
    position: absolute;
    box-sizing: border-box;
    width: 2px;
    height: 14px;
    background: white;
    top: 2px;
    left: 4px;
    transform: skew(12deg)
}
.gg-shopping-cart::after {
    height: 10px;
    top: 6px;
    left: 16px;
    transform: skew(-12deg)
}

body{
background-color: white;


}


.image:hover{
  
      /*height:40rem;
      width:30rem;*/
      height:35rem;
      width:25rem;


}
.image{
  width:20rem;
	   height:30rem;
       border: 2px solid black;
       
  border-top-left-radius:30px  ;
  border-top-right-radius: 30px;
  
}



         .cat{
            
           color:white;
           background-color: darkgrey;
           
          }
.item{

color: #58626C;


}
#navbarResponsive{



  color:grey;
}
*card slider css*/

.card{

border-radius:30px ;
margin:3rem 3rem;
height:35rem;
width:28rem;



}


.cartbtn{
background-color:#2F3074;
color:white;
height:3rem;
width:10rem;
margin-left:1rem ;
}
.cartbtn:hover{
background:#1C193D;
color:white;

}
.card-text{

font-size:30px;




}
.card-title,cartbtn{
  font-size:23px;
}
.card-box{
display:flex;
flex-direction:row;
justify-content: space-evenly;
align-items: space-evenly;

}



    </style>





</head>
  <body>
    
  
  <!--<div class="col" >
    <center>
     <h1><b> Fusion</b></h1> 
       </center>
    </div>
      <nav>
         <label class="logo">Fusion</label>
         <ul>-->
        
</nav>
 <!-- Navigation-->

 <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Fusion</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Catogaries
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Home</a></li>
                    
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="woman.php">women</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="girls.php">Girls</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
              
             <!--start cart icon .....-->
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div ">
<a href="cart.php"> <i class="gg-shopping-cart"></i><span>
<?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>
<!--end of cart icon-->           
       
        </nav>



 


          



        


                                  <!-- start of carousel-->
                                    <div id="slides" class="carousel slide" data-ride="carousel">  
                                                     <ol class="carousel-indicators">   
                                                   <li data-target="#slides" data-slide-to="0" class="active"></li>  
                                                                 <li data-target="#slides" data-slide-to="1" ></li>  
                                                                                <li data-target="#slides" data-slide-to="3" ></li>  
          
                                                              </ol>  
                                                        <div id="carouselExampleSlidesOnly" class=" carousel slide" data-ride="carousel">
                                                 <div class="carousel-inner">
                             <div class="carousel-item active">
                                  <img src="images/Luxury_Pret_b078cd3b-ea9b-4479-adbd-53383029a656.webp   " class="d-block w-100" alt="..."  >
                                        </div>
                                  <div class="carousel-item">
                                      <img src="images/Unstitched_8e966e97-9419-4e7a-9e0b-a43122ea8f61.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/UNSTITCHED-DESKRecoveredfinal.webp" class="d-block w-100" alt="..." >
    </div>
  </div>
</div>
  <!-- end of carousel-->


    <!-- start of navbar



    
    <ul class="nav justify-content-center">
  
  <li class="nav-item">
    <a class="nav-link" href="woman.php">Women</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Girls</a>
  </li><li class="nav-item">
    <a class="nav-link" href="#">Men</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Accessories</a>
  </li>
  
    </ul>
    end of navbar-->






<!-- start of adding product and display message in cart -->
<div class='container'>
<div class='row'>

<?php 
$result = mysqli_query($conn,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
echo "<div class='col-4'>
<div class ='card-box'>
<div class='product_wrapper' >
<form method='post' action=''>
<input type='hidden' name='code' value=".$row['code']." />
  <div class='image'><img  class='image'  src='".$row['image']."'/></div>
  <div class='card-body'>
  
  <div class='name'>".$row['name']."</div>
  <div class='price'>PKR- ".$row['price']."</div>
  <button type='submit' class='buy'>Add to cart</button>
  </div>
  </form>
  </div>
  </div>
  </div>";
}
mysqli_close($conn);
?>
</div>
</div>

  




 

<div style="clear:both;"></div>

<div class="message_box " style="margin:10px 0px;">
<?php echo $status; ?>
</div>
<! end of adding product-->
</div>
                <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">

                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Fusion Website 2022</div>
                    </div>
                </div>
            </div>
        </footer>
         








       <!-- Bootstrap core JS-->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>


  </body>
      </html>