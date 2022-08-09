<?php session_start();
require("../php/Conexion.php");
 ?>
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
                                                <img class="img-responsive" src="images/carta.png" alt="#" />
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
    <!-- *************products gallery -->
    <div class="row">
        <div class="col-md-12">
            <!-- **************************** -->
    <div class="container">
   <h3 style="color: white;" class="title"> Productos  </h3>
<!-- img product containe-->
   <div class="products-container">
    <?php 
         $consult_Product = mysqli_query($connect, "SELECT * FROM productos");
         $data_Product =mysqli_num_rows($consult_Product);
         if($data_Product > 0){
          while  ($fila = mysqli_fetch_array($consult_Product)){?>
        <div class="product">
         <img src="<?php echo $fila['Imagen_Producto']; ?>" alt="">
         <h3><?php echo $fila['Nombre_Producto']; ?></h3>
         <div class="price"><?php echo $fila['Precio_producto']; ?>
         </div>
         <div >
             <?php $p = $fila['Id_Producto']; echo "<div onclick='comprar($p);'><button class='p btn btn-info' data-name='p-1'>Comprar</button></div>"; ?>
         </div>
        </div>
    <?php                 
            }
         }
    ?>
   </div>
   <!-- end img product container -->
</div>
<!-- ************************************************88 -->

<div class="products-preview">
   <div class="preview" data-target="p-1">
      <i class="fa fa-times"></i>
      <div id="Imagen_Producto_Modal"> 
      </div>
      <h3 id="Nombre_Producto_Modal"></h3>
      <div class="stars">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <div class="price">precio</div>
       <!-- elemento input cantidad -->
      <div class="bees-product-qty">
        <button onclick="menos();" class="bees-button qty-button-minus is-round is-secondary" type="button"><span>-</span></button>
        <label>
            <span class="visually-hidden"> </span>
            <input id="result" name="quantity" class="requested-qty" type="text" min="0" max="9999" value="">
        </label>
        <button onclick="mas();" class="bees-button qty-button-plus is-round is-secondary" type="button"><span>+</span></button>
    </div>
      <input id="idProductoTemp" type="text" value="hola" name="">
      <!-- end element input cantidad -->
      <div class="buttons">
         <a href="#" class="buy">Cancelar</a>
         <a class="cart" onclick="Agregar();">Agregar</a>
      </div>
   </div>
</div>

        </div>
    </div>
    <!-- ******products gallery -->
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



        function comprar(id){
            $.post(
                'framentsPhp/ConsultarProductoXID.php',
                {id:id},
                function(product){
                    var dataPhp = JSON.parse(product);
                    $('#Nombre_Producto_Modal').html(dataPhp.Nombre_Producto);
                     $('#Imagen_Producto_Modal').html("<img src="+dataPhp.Imagen_Producto+" alt='hola mundo'>");
                     $('.price').html(dataPhp.Precio_producto);
                     $('#idProductoTemp').val(dataPhp.Id_Producto);
                 }
                );
        }

        function menos(){
            let result = $('#result').val();
            if(result > 0 ){
                result--;
                $('#result').val(result);
            }
            
        }

        function mas(){
            let  result = $('#result').val();
            if(result < 9999999999999){
                result++;
                $('#result').val(result);
            }

        }


function Agregar(){
    var result = $('#result').val();
    var idProductoTemp = $('#idProductoTemp').val();
    $.post(
        'framentsPhp/AgregarProductoTemp.php',
        {result:result,
            idProductoTemp:idProductoTemp},
        function(agregar){
            var ventaAgregada = $('#ventaAgregada').html("+");
            alert("Producto Agregado");
        }
        );
}

    </script>
    <style>
          .bees-product-qty {
    /*display: flex;*/
    height: 32px;
}
.bees-product-card .bees-button {
    outline: none;
}
.bees-button.is-secondary, .bees-button.is-tertiary {
    background-color: #fff;
    color: #000;
    border-color: #000;
}
.bees-button.is-round {
    border-radius: 100%;
    width: 36px;
    padding: 6px;
}
.bees-product-qty button {
    border-width: thin;
    display: inline-block;
    height: 32px!important;
    width: 32px!important;
}
.bees-button {
    -webkit-appearance: none;
    align-items: center;
    background-color: #000;
    border: 2px solid transparent;
    border-radius: 50px;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: flex;
    font-family: var(--default-font),"Verdana","Arial",sans-serif;
    font-weight: 500;
    letter-spacing: normal;
    margin: 0;
    text-align: center;
    white-space: nowrap;
    word-spacing: 0;
    height: 36px;
    font-size: 16px;
    padding: 8px 16px;
    line-height: 16px;
    text-transform: lowercase!important;
}
.bees-product-card .requested-qty {
    border-radius: 4px;
    border: 1px solid #b9bcc1;
    font-weight: 500;
    outline: none;
    width: 40px;
}
.bees-product-qty input {
    border: thin solid #b9bcc1;
    border-radius: 4px;
    font-size: 14px;
    margin: 0 8px;
    padding: 0;
    text-align: center;
    width: 43px;
    height: 32px;
}
user agent stylesheet
input[type="text" i] {
    padding: 1px 2px;
}
      </style>