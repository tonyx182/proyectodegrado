<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/styleform.css">
    <title>Document</title>
    
</head>
<body>    
    
    <main>

        <h1>Formulario de Registro de Vehículos</h1>

        <form role="form" action="<?php echo site_url('vehiculo/agregarbd');?>" class="formulario" id="formulario" method="post">

            <?php
                echo form_open_multipart('vehiculo/agregarbd');
            ?>

            <div class="formulario__grupo" id="grupo__placa">
                <label for="placa" class="formulario__label">Placa</label>
                <div class="formulario__grupo-input">
                    <input type="textarea" class="formulario__input" name="placa" id="placa" placeholder="" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>                
            </div>

            <div class="formulario__grupo" id="grupo__marca">
                <label for="marca" class="formulario__label">Marca</label>
                <div class="formulario__grupo-input">
                    <input type="textarea" class="formulario__input" name="marca" id="marca" placeholder="" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
            </div>                     

            <div class="formulario__grupo" id="grupo__modelo">
                <label for="modelo" class="formulario__label">Modelo</label>
                <div class="formulario__grupo-input">
                    <input type="textarea" class="formulario__input" name="modelo" id="modelo" placeholder="" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
            </div>

            <div class="formulario__grupo" id="grupo__anioModelo">
                <label for="anioModelo" class="formulario__label">Año del Modelo</label>
                <div class="formulario__grupo-input">
                    <input type="textarea" class="formulario__input" name="anioModelo" id="anioModelo" placeholder="" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
            </div>

            <div class="formulario__grupo" id="grupo__color">
                <label for="color" class="formulario__label">Color</label>
                <div class="formulario__grupo-input">
                    <input type="textarea" class="formulario__input" name="color" id="color" placeholder="" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
            </div>

            <div class="formulario__grupo" id="grupo__nroChasis">
                <label for="nroChasis" class="formulario__label">Número de Chasis</label>
                <div class="formulario__grupo-input">
                    <input type="textarea" class="formulario__input" name="nroChasis" id="nroChasis" placeholder="" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>                
            </div>

            <div class="formulario__grupo" id="grupo__nroMotor">
                <label for="nroMotor" class="formulario__label">Número de Motor</label>
                <div class="formulario__grupo-input">
                    <input type="textarea" class="formulario__input" name="nroMotor" id="nroMotor" placeholder="" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>                
            </div>

            <div class="formulario__grupo" id="grupo__cilindradaMotor">
                <label for="cilindradaMotor" class="formulario__label">Cilindrada del Motor</label>
                <div class="formulario__grupo-input">
                    <input type="textarea" class="formulario__input" name="cilindradaMotor" id="cilindradaMotor" placeholder="" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
            </div>

            <div class="formulario_-grupo" id="grupo__terminos" visibility="hidden">
                <label class="formulario__label">
                    <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos" checkbox checked >
                    Acepto los Terminos y Condiciones
                </label>
            </div>

            <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor llena el formulario correctamente. </p>
            </div>

            <div class="formulario__grupo formulario__grupo-btn-enviar" >
                <button type="submit" class="formulario__btn" id="crear">Agregar Vehículo</button><br>
                <a class="formulario__btn-cancelar" href="<?php echo site_url('usuario/listaTaxistas');?>">Cancelar</a>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Cuenta Creada Exitosamente</p>
            </div>

            <?php
				echo form_close();
			?>

        </form>
    </main>
    
    
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>