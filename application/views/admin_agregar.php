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
    <title>Crear Cuenta</title>
    
</head>
<body>    
    
    <main>

        <h1>Registro de Administradores</h1>

        <form role="form" action="<?php echo site_url('usuario/agregarUsuariobd');?>" class="formulario" id="formulario" method="post">

            <?php
                echo form_open_multipart('usuario/agregarUsuariobd');
            ?>   

            <div class="formulario__grupo" id="grupo__nombres">
                <label for="nombres" class="formulario__label">Nombres</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="nombres" id="nombres" placeholder="John" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El nombre no puede llevar Numeros</p>
            </div>

            <div class="formulario__grupo" id="grupo__primerApellido">
                <label for="primerApellido" class="formulario__label">Primer Apellido</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="primerApellido" id="primerApellido" placeholder="Doe" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El apellido no puede llevar numeros</p>
            </div>            

            <div class="formulario__grupo" id="grupo__segundoApellido">
                <label for="segundoApellido" class="formulario__label">Segundo Apellido</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="segundoApellido" id="segundoApellido" placeholder="">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error"></p>
            </div>

            <div class="formulario__grupo" id="grupo__ci">
                <label for="ci" class="formulario__label">Carnet de Identidad</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="ci" id="ci" placeholder="">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error"></p>
            </div>

            <div class="formulario__grupo" id="grupo__sexo">
                <label for="sexo" class="formulario__label">Sexo</label>
                <div class="formulario__grupo-input">
                <input type="radio" class="form-check-input" name="sexo" id="sexo" value="F" checked> Femenino &nbsp; &nbsp; &nbsp;
				<input type="radio" class="form-check-input" name="sexo" id="sexo" value="M"> Masculino	
                </div>                
            </div>

            <div class="formulario__grupo" id="grupo__celular">
                <label for="celular" class="formulario__label">Celular</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="celular" id="celular" placeholder="4491234567" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El celular no tiene que contener letras</p>
            </div>

            <div class="formulario__grupo" id="grupo__fechaNacimiento">
                <label for="fechaNacimiento" class="formulario__label">Fecha de Nacimiento</label>
                <div class="formulario__grupo-input">
                <input type="date" class="form-control" name="fechaNacimiento" aria-describedby="helpId" required>
                </div>                
            </div>

            <div class="formulario__grupo" id="grupo__direccion">
                <label for="direccion" class="formulario__label">Direccion</label>
                <div class="formulario__grupo-input">
                    <input type="textarea" class="formulario__input" name="direccion" id="direccion" placeholder="Av. Jordan Esq. Ayacucho" required>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>                
            </div>

            <div class="formulario__grupo" id="grupo__vacio">

            </div>

            <div class="formulario_-grupo" id="grupo__terminos">
                <label class="formulario__label">
                    <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
                    Acepto los Terminos y Condiciones
                </label>
            </div>

            <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor llena el formulario correctamente. </p>
            </div>

            <div class="formulario__grupo formulario__grupo-btn-enviar" >
                <button type="submit" class="formulario__btn" id="crear">Crear Cuenta</button><br>
                <a class="formulario__btn-cancelar" href="<?php echo site_url('usuario/listaAdmin');?>">Cancelar</a>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Cuenta Creada Exitosamente</p>
            </div>

            <?php
				echo form_close();
			?>

        </form>
    </main>
    
    <script src="<?php echo base_url(); ?>bootstrap/js/scriptformulario.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>