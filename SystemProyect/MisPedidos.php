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
   <script src="js/

   .js" defer></script>
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
           /* padding: 0!important;*/
        }
        .products-preview .preview img {
    height: 20rem!important;
}
    </style>
    <!-- *************products gallery -->
    <div class="">
        <div class="col-md-12">
            <!-- **************************** -->
    <div class="">
   <h3 style="color: white; margin-bottom: unset;" class="title"> Orden De compra  </h3>
<!-- img product containe-->
   <div style="height: 20%;" class="">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<div style="overflow-x:auto; height: 400px;">
<div id="containerProductTemp" class="container mt-3">
  <table style="font-size: 15pt;" class="table table-hover table-sm table-dark table-bordered border-light">
    <thead>
      <tr class="table-info">
        <th>Numero De Orden</th>
        <th>Nombre Producto</th>
        <th>Tipo Producto</th>
        <th>Cantidad Producto</th>
        <th>Precio A Pagar</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
        <?php 
        $User = $_SESSION['Id_User'];
        $consult_Producto_Temp = mysqli_query($connect,"SELECT * FROM productos p 
            JOIN venta_temporal v ON p.Id_Producto = v.Id_Producto 
            JOIN categorias c ON p.Id_Categoria = c.Id_Categorias 
            JOIN usuarios u ON u.Id_User = p.Id_User 
            WHERE v.Id_User = '$User'");
        ?>
        <?php 
           $data_Product_Temp = mysqli_num_rows($consult_Producto_Temp);
         ?>
         <?php 
         if($data_Product_Temp > 0){
            while($fila_Producto_Temp = mysqli_fetch_array($consult_Producto_Temp)){
          ?>
      <tr>
        <td><?php echo $fila_Producto_Temp['Id_venta_Temp']; ?></td>
        <td><?php echo $fila_Producto_Temp['Nombre_Producto']; ?></td>
        <td><?php echo $fila_Producto_Temp['Nombre_Categoria']; ?></td>
        <td><?php echo $fila_Producto_Temp['New_Cantidad_Temp']; ?></td>
        <td><?php echo $fila_Producto_Temp['Precio_Final']; ?></td>
        <td onclick="deleteProductTemp();"><i style="color: red; text-align: center;" class="fa fa-trash" aria-hidden="true"></i></td>
      </tr>
  <?php             
           }
         }else{
         ?>
         <tr>
              <td colspan="5" class="table-active"><p style="color: red; text-align: center;">No hay Informacion De Orden</p></td>
         </tr>
        <?php
            }
        ?>

        <?php 
          $sumValor = mysqli_query($connect, "SELECT SUM(Precio_Final) AS p FROM venta_temporal WHERE Id_User = '$User'");
          $dataSum = mysqli_num_rows($sumValor);
          if($dataSum > 0){
            $arraDataSum = mysqli_fetch_array($sumValor);
         ?>
        <tr id="valorTotal">
            <td>Valor Total</td>
             <td colspan="5" class="table-active"><input readonly="readonly"  style="border: transparent;background-color: transparent;cursor: default;text-align: center;width: 100%;color: white;" id="valor" value="<?php echo $arraDataSum['p']; ?>"></td>
        </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
</div>

   </div>
   <!-- end img product container -->
</div>
<!-- ************************************************88 -->

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



         $(document).ready(function(){
            var valor = $('#valor').val();
            if(valor === ''){
              $('#valorTotal').hide('');
            }
         })
      </script>

</body>

</html>

<script>
    function salir(){
        window.location = "salir.php";
    }
    function deleteProductTemp(){
            $(".table").load(window.location.href + " .table" );
            $('#containerProductTemp').load();
    }
</script>