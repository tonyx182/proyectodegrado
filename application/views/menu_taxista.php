<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/stylemenu.css">  
        <!-- Boxiocns CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>

    <div class="sidebar close">        
        <div class="logo-details">
        <i class="bx bxs-taxi"></i>
        
        <span class="logo_name">Free Taxi</span>
        </div>
        <ul class="nav-links">
        <li>
            <a href="<?php echo site_url('usuario/menuTaxista');?>">
            <i class='bx bx-grid-alt' ></i>
            <span class="link_name">Inicio</span>
            </a>
            <ul class="sub-menu blank">
            <li><a class="link_name" href="<?php echo site_url('usuario/menuTaxista');?>">Inicio</a></li>
            </ul>
        </li>        
        <!------ <li>
            <div class="iocn-link">
            <a href="#">
                <i class='bx bx-plug' ></i>
                <span class="link_name">Plugins</span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
            <li><a class="link_name" href="#">Plugins</a></li>
            <li><a href="#">UI Face</a></li>
            <li><a href="#">Pigments</a></li>
            <li><a href="#">Box Icons</a></li>
            </ul>
        </li>    -----> 
        <li>
            <a href="#">
            <i class='bx bx-history'></i>
            <span class="link_name">Historial</span>
            </a>
            <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Historial</a></li>
            </ul>
        </li>
        <li>
            <a href="<?php echo site_url('conductor/modificar');?>">
            <i class='bx bx-cog' ></i>
            <span class="link_name">Configuración <br> de la Cuenta</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="<?php echo site_url('conductor/modificar');?>">Configuración Cuenta</a></li>
            </ul>
        </li>
        <?php
            echo form_open_multipart('login/logout');
        ?>
        <li>            
            <div class="logout">
                <a href="<?php echo site_url('login/logout');?>">
                    <i class='bx bx-log-out' ></i>
                    <span class="link_name">Cerrar Sesión</span>
                    </a>
                    <ul class="sub-menu blank">
                    <li><a class="link_name" href="<?php echo site_url('login/logout');?>">Cerrar Sesión</a></li>
                    </ul>
            </div>
        </li>
        <?php
            echo form_close();
        ?>	
    </ul>    
    </div>    
    <section class="home-section">
        <div class="home-content">
        <i class='bx bx-menu' ></i>
        <span class="text">INICIO</span>
        </div>            
            
        <div>

        </div>

    </section>    
    <script src="<?php echo base_url(); ?>bootstrap/js/scriptmenu.js"></script>   
</body>
</html>