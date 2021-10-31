
<?php

switch ($msg){
case'1':
    $mensaje="Error de ingreso";
    break;
case'2':
    $mensaje="Acceso no valido";
    break;
case'3':
    $mensaje="Gracias por usar el Sistema";
    break;
default:
    $mensaje="Ingrese sus datos";
    break;
}

?>
    <!---<h1>Bienvenido a: </h1>------>

    <div class="container">
        <div class="cover">
            <div class="front">
                <img src="<?php echo base_url(); ?>/images/logo.jpg" alt="">
                <div class="text">                    
                </div>
            </div>
        </div>
        <form role="form" action="<?php echo site_url('login/validarlogin');?>" method="post">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <p class="login-box-msg"><?php echo $mensaje; ?></p>

                    <?php
                    echo form_open_multipart('login/validarlogin');

                    ?>

                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="userName" name="userName" placeholder="Ingresa tu Nombre de Usuario"  required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Ingresa tu Contraseña" required>
                        </div>
                        <div class="text"><a href="#">¿Has olvidado tu contraseña?</a></div>
                        <div class="button input-box">                            
                            <input type="submit" value="Ingresar">
                        </div>
                    </div>                    
                    <div class="login-text">¿No tienes una cuenta? <label for="" ><a href="<?php echo site_url('usuario/agregarCliente');?>">Registrate Ahora</a></label></div>
                </div>                
            </div>
        </form>

        <?php
        echo form_close();

        ?>

    </div>
