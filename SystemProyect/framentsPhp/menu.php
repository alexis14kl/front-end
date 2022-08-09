
     <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <?php ?>
                <div id="dismiss">
                     <i class="fa fa-times"></i>
                </div>
                        <input id="profileObtenidoDb" type="hidden" value="<?php echo  $_SESSION['Id_User'] ?>">
                        <p style="color: red; margin-top: 10%;margin-bottom: -10%;" id="perfiljava"></p>
                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">Mis Pedidos</a>
                    </li>
                    <li>
                        <a href="recipe.html">Recipe</a>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="salir.php">Contact Us</a>
                    </li>
                </ul>

            </nav>
    </div>

    <div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="index.html"><img src="logo.png" alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                <li class="dinone">Contact Us : <img style="margin-right: 15px;margin-left: 15px;" src="images/phone_icon.png" alt="#"><a href="#">987-654-3210</a></li>
                                <li class="dinone"><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#"><a href="#">demo@gmail.com</a></li>
                                <li class="dinone"><img style="margin-right: 15px;height: 21px;position: relative;top: -2px;" src="images/location_icon.png" alt="#"><a href="#">104 New york , USA</a></li>
                                <li class="button_user"><a class="button active" href="#"><?php echo  $_SESSION['Name_User']; ?></a><a style="background-color: red" class="button" onclick="salir();" href="#">Salir</a></li>
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="images/menu_icon.png" alt="#">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

