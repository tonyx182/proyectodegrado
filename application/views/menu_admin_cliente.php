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
        <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css">  
        
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
            <a href="<?php echo site_url('usuario/menuAdmin');?>">
            <i class='bx bx-grid-alt' ></i>
            <span class="link_name">Inicio</span>
            </a>
            <ul class="sub-menu blank">
            <li><a class="link_name" href="<?php echo site_url('usuario/menuAdmin');?>">Inicio</a></li>
            </ul>
        </li>        
        <li>
            <div class="iocn-link">
            <a href="#">
                <i class='bx bx-id-card' ></i>
                <span class="link_name">Administrar</span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
            <li><a class="link_name" href="#">Administrar</a></li>
            <li><a href="<?php echo site_url('usuario/listaAdmin');?>">Administradores</a></li>                 
            <li><a href="<?php echo site_url('usuario/listaClientes');?>">Clientes</a></li> 
            <li><a href="<?php echo site_url('usuario/listaTaxistas');?>">Taxistas</a></li>       
            <li><a href="<?php echo site_url('vehiculo/menuVehiculo');?>">Vehiculos</a></li>           
            </ul>
        </li>
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
            <a href="<?php echo site_url('login/modificarCuenta');?>">
            <i class='bx bx-cog' ></i>
            <span class="link_name">Configuraci??n <br> de la Cuenta</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="<?php echo site_url('login/modificarCuenta');?>">Configuraci??n Cuenta</a></li>
            </ul>
        </li>
        <?php
            echo form_open_multipart('login/logout');
        ?>
        <li>            
            <div class="logout">
                <a href="<?php echo site_url('login/logout');?>">
                    <i class='bx bx-log-out' ></i>
                    <span class="link_name">Cerrar Sesi??n</span>
                    </a>
                    <ul class="sub-menu blank">
                    <li><a class="link_name" href="<?php echo site_url('login/logout');?>">Cerrar Sesi??n</a></li>
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
            <div class="container">
            <div class="row">			
                <div class="col-md-12">                
                
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>   
                        <th scope="col">Nombre de Usuario</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Primer Apellido</th>
                        <th scope="col">Segundo Apellido</th>                        
                        <th scope="col">CI</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Direcci??n</th>  
                        <th scope="col">Estado</th>   
                        <th scope="col">Registrado el</th>                                     
                        </tr>
                    </thead>
                    <tbody>

                    
                        <?php
                        $indice=1;
                        foreach ($usuario->result() as $row) {                            				
                            
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $indice; ?></th>   

                                        <td><?php echo $row->userName; ?></td>
                                        <td><?php echo $row->nombres; ?></td>
                                        <td><?php echo $row->primerApellido; ?></td>
                                        <td><?php echo $row->segundoApellido; ?></td>                                
                                        <td><?php echo $row->ci; ?></td>
                                        <td><?php echo $row->sexo; ?></td>                                        
                                        <td><?php echo $row->fechaNacimiento; ?></td>
                                        <td><?php echo $row->celular; ?></td>
                                        <td><?php echo $row->direccion; ?></td> 
                                        <td><?php echo estado($row->estado); ?></td>
                                        <td><?php echo $row->fechaRegistro; ?></td>
                                        <td>
                                        <?php
                                            echo form_open_multipart('pasajero/inhabilitarbd');
                                        ?>
                                        <input type="hidden" name="idLogin" value="<?php echo $row->idUsuario; ?>">
                                        <button type="submit" class="btn btn-danger btn-xs" onclick="inhabilitarUser()">Dar de Baja</button>									
                                        <?php
                                            echo form_close();
                                        ?>							
                                </td> 
                                    
                                <?php
                                $indice++;
                                }   
                        ?>           
                        
                                

                    </tbody>
                    </table>

                </div>
            </div>
            </div>
        </div>

    </section>    
    <script src="<?php echo base_url(); ?>bootstrap/js/scriptmenu.js"></script>   
    <script src="<?php echo base_url(); ?>bootstrap/js/eliminarReg.js"></script> 
</body>
</html>