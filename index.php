<?php 
error_reporting(0);
session_start();
if (!empty($_SESSION['active'])){
    header('location: http://localhost/front-end/SystemProyect/');
  }
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
<title>Tienda Ovalle</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php require("FramentsWeb/links.php"); ?>
</head>
<!-- body -->
<body class="main-layout">
	<!-- loader  -->
			<div class="loader_bg">
		<div class="loader">
			<img src="images/loading.gif" alt="" />
		</div>
	</div>
	<div class="wrapper">
		<!-- end loader -->
    !-- menu -->
<?php require("FramentsWeb/menu.php"); ?>
<!-- end menu  -->
		<!-- start slider section -->
		<!-- section -->
		<!-- about -->
		<style>
			#sidebar ul li a {
    padding: 10px 25px;
    font-size: 1.3em;
    display: block;
    font-weight: 300;
    font-weight: 900;
    color: blue;
}
		</style>
		<div id="content-web">
			<div>
				<!--slider-->
				<div id="carouselExampleIndicators" class="carousel slide"
					data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img id="imgslider"
								src="https://img.freepik.com/psd-gratis/maqueta-botella-cerveza_358694-2090.jpg?w=2000"
								class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img id="imgslider"
								src="https://img.freepik.com/psd-gratis/maqueta-botella-cerveza-fria_358694-3882.jpg?w=2000"
								class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img id="imgslider"
								src="https://img.freepik.com/psd-gratis/maqueta-concepto-arreglo-cerveza-artesanal_23-2148735340.jpg?w=2000"
								class="d-block w-100" alt="...">
						</div>
					</div>
					<button class="carousel-control-prev" type="button"
						data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button"
						data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
				<!-- end slider-->
			</div>
			<!-- end Our Client -->
		</div>
		<!-- footer -->
		<!-- footer -->
    <?php require("FramentsWeb/footer.php"); ?>
  <!-- end content web -->
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
	<script>
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
#owl-demo .item {
	margin: 3px;
}

#owl-demo .item img {
	display: block;
	width: 100%;
	height: auto;
}
</style>
	<style>
/*new code img background*/
img#imgslider {
	margin-bottom: -6% !important;
	margin-top: 4% !important;
	height: 96vh;
	width: 100%;
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center center;
	background-size: 10rem;
}
</style>
	<!-- modal register User -->
	<?php require("FramentsWeb/ModalUserRegister.php"); ?>
	<!-- modal login user -->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Acceso al sistema de ventas</h5>
        <button style="background-color: red;" type="button"
						class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="col-sm-10">
						<label style="color: black">Escribe correo</label> 
						<input
							id="emailLogin" class="form-control" type="email" name=""><input
							id="validLogin" type="hidden" name="" maxlength="50">
					</div>
					<div class="col-sm-10">
						<label style="color: black">Escribe contrasena</label> <input
							id="passLogin" class="form-control" type="password"
							onkeypress="return blockSpecialCharLogin(event)" 
							maxlength="10">
					</div>
					<!-- checkbox que nos permite activar o desactivar la opcion -->
					<div class="col-sm-10">
                                      <input style="margin-top: -66px;" type="checkbox" onclick="mostrarContrasena();" title="clic para mostrar contraseña"/>
                                      &nbsp;&nbsp;Mostrar Contraseña
                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="accederlogin();">Acceder</button>
      </div>
    </div>
  </div>
</div>
	<script src="FramentsWeb/js/caracternoLogin.js"></script>
	<script type="text/javascript"
		src="FramentsWeb/js/NoCaracterEspeciales.js"></script>
	<!-- end modal register -->
</body>
<script>
$(document).ready(function(){
	if(navigator.onLine) {
		// alert("conectado a internet");
		Swal.fire(
			{
			html: '<p style="color:red;">conectado a internet<i class="fa fa-times"></i></p>',
			backdrop: true,
			maxlength: 1,
			toast: true,//alert mas peque
			popup: 'swal2-show',
  backdrop: 'swal2-backdrop-show',
  icon: 'swal2-icon-show',
  confirmButton: false,
  cancelButton: false,
  timer: 3000,
  timerProgressBar: true,
  showConfirmButton: false,
			position: 'top-end',didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }}
			);

    // el navegador está conectado a la red
} else {
	alert("no hay internet");
    // el navegador NO está conectado a la red
}
})
</script>
<style>
	.swal2-popup{
		background-color: black !important;
		color: red;
		max-height: 40%;
	}
</style>
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</html>

