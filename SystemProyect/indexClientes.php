<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Ventas</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <!-- favicon web -->
<link rel="icon" type="image/x-icon" href="../images/favicon.ico">
<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- owl css -->
<link rel="stylesheet" href="css/owl.carousel.min.css">
<!-- style css -->
<link rel="stylesheet" href="css/style.css">
<!-- responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- awesome fontfamily -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- bootraps 5.1 v -->
<link href="css/bootstrapv5-1.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">
<script src="js/bootstrap5-1.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <!-- font-awesome funcional-->
<script src="js/8fc4b9031b.js"></script>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylep.css">
 <!-- custom js file link  -->
   <script src="js/script.js" defer></script>
</head>
<!-- body -->
<style>
    #sidebar ul li a {
    padding: 10px 25px;
    font-size: 1.3em;
    display: block;
    font-weight: 300;
    font-weight: 900;
    color: blue;
}
#sidebar ul li a {
    padding: 10px 25px;
    font-size: 17pt!important;
    display: block;
}
</style>
<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
    <!-- end loader -->
    <?php require("FramentsPhp/menu.php"); ?>
    <!-- end header -->
    <!-- start slider section -->
    <div class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3>Discover Restaurants<br>That deliver near You</h3>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                <a class="main_bt_border" href="#">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="slider_image full text_align_center">
                                                <img class="img-responsive" src="images/corona.png" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3>Discover Restaurants<br>hola mundo</h3>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                <a class="main_bt_border" href="#">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 full text_align_center">
                                            <div class="slider_image">
                                                <img class="img-responsive" src="images/carta.png" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                                <i class="fa fa-angle-up"></i>
                            </a>
                            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                                <i class="fa fa-angle-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->






 






    <!-- section -->
    <section class="resip_section">
        <div class="container">
            <div class="row">   
<div class="container">
    <style>
        .products-preview .preview.active {
            margin-top: 5%!important;
        }
        .container{
            padding: 0!important;
        }
        .products-preview .preview img {
    height: 20rem!important;
}
    </style>
    <div class="row">
        <div class="col-md-12">
                       <div class="container">

   <h3 style="color: white;" class="title"> organic products </h3>

   <div class="products-container">

      <?php 

           for ($i=0; $i <=12 ; $i++) { 
       ?>
<div class="product" data-name="p-1">
         <img src="images/c.png" alt="">
         <h3>strawberries</h3>
         <div class="price">$2.00</div>
      </div>

    <?php } ?>

      <div class="product" data-name="p-2">
         <img src="images/2.png" alt="">
         <h3>onions</h3>
         <div class="price">$2.00</div>
      </div>

      <div class="product" data-name="p-3">
         <img src="images/3.png" alt="">
         <h3>tomatoes</h3>
         <div class="price">$2.00</div>
      </div>

      <div class="product" data-name="p-4">
         <img src="images/4.png" alt="">
         <h3>brinjal</h3>
         <div class="price">$2.00</div>
      </div>

      <div class="product" data-name="p-5">
         <img src="images/5.png" alt="">
         <h3>broccoli</h3>
         <div class="price">$2.00</div>
      </div>

      <div class="product" data-name="p-6">
         <img src="images/6.png" alt="">
         <h3>potatoes</h3>
         <div class="price">$2.00</div>
      </div>

   </div>

</div>

<div class="products-preview">

   <div class="preview" data-target="p-1">
      <i class="fa fa-times"></i>
      <img src="images/1.png" alt="">
      <h3>organic strawberries</h3>
      <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
      <div class="price">$2.00</div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>

   <div class="preview" data-target="p-2">
      <i class="fas fa-times"></i>
      <img src="images/2.png" alt="">
      <h3>organic onions</h3>
      <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
      <div class="price">$2.00</div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>

   <div class="preview" data-target="p-3">
      <i class="fas fa-times"></i>
      <img src="images/3.png" alt="">
      <h3>organic tomatoes</h3>
      <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
      <div class="price">$2.00</div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>

   <div class="preview" data-target="p-4">
      <i class="fas fa-times"></i>
      <img src="images/4.png" alt="">
      <h3>organic brinjal</h3>
      <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
      <div class="price">$2.00</div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>

   <div class="preview" data-target="p-5">
      <i class="fas fa-times"></i>
      <img src="images/5.png" alt="">
      <h3>organic broccoli</h3>
      <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
      <div class="price">$2.00</div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>


<div class="preview" data-target="p-6">
      <i class="fas fa-times"></i>
      <img src="images/6.png" alt="">
      <h3>organic potatoes</h3>
      <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
      <div class="price">$2.00</div>
      <div class="buttons">
         <a href="#" class="buy">buy now</a>
         <a href="#" class="cart">add to cart</a>
      </div>
   </div>

</div>
        </div>
    </div>
</div>
</div>
</div>
</section>
    <!-- footer -->
    <?php require("FramentsPhp/footer.php"); ?>
    <!-- end footer -->

    </div>
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
     <script src="js/jquery-3.0.0.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>

     
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 5
               }
             }
           })
         })
      </script>

</body>

</html>

<script>
    function salir(){
        window.location = "salir.php";
    }

</script>

    <script>
        $(document).ready(function(){
            var idProfile= $('#profileObtenidoDb').val();
            $.post('http://localhost:8080/ProfileUser', {idProfile:idProfile},
             function(data) {
                    $('#perfiljava').html(data);
                /*optional stuff to do after success */
            });
        })
    </script>