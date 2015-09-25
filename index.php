<?php require("partials/header.php"); ?>

        <div class="row menuFiltros">
            <div class="filtro">
                <label>COMPLEJO</label>
                <select class="form-control">
                	
                </select>
            </div>
             <div class="filtro">
                <label>PELICULA</label>
                <select class="form-control"></select>
            </div> 
            <div class="filtro">
                <label>DIA</label>
                <select class="form-control"></select>
            </div>
             <div class="filtro">
                <label>HORARIO</label>
                <select class="form-control"></select>
            </div>
            <button type="submit" name="action" value="validar" class="btn btn-primary pull-right">Comprar Entrada</button>
        </div>
<<<<<<< HEAD

=======
>>>>>>> origin/master
        <div class="row">
            <div class="col-md-12 contenedorPeliculas">
                <img class="pelicula" src="assets/img/pelicula1.jpg">
                <img class="pelicula" src="assets/img/pelicula2.jpg">
<<<<<<< HEAD
				<a href="compraDesdeMosaico.php">
=======
<<<<<<< HEAD
				<a href="compraDesdeMosaico.php">
=======
				<a href="compraDesdeMosaico.html">
>>>>>>> origin/master
>>>>>>> origin/master
					<img class="pelicula" src="assets/img/pelicula3.jpg">
				</a>
                
                <img class="pelicula" src="assets/img/pelicula4.jpg">
                <img class="pelicula" src="assets/img/pelicula5.jpg">
                <img class="pelicula" src="assets/img/pelicula6.jpg">
                <img class="pelicula" src="assets/img/pelicula7.jpg">
                <img class="pelicula" src="assets/img/pelicula8.jpg">
                <img class="pelicula" src="assets/img/pelicula9.jpg">
                <img class="pelicula" src="assets/img/pelicula10.jpg">
                <img class="pelicula" src="assets/img/pelicula11.jpg">
            </div>
        </div>
<<<<<<< HEAD
	
<?php require("partials/footer.php"); ?>
<!-- Modal forms-->
<?php require("partials/login.php"); ?>	
<?php require("partials/registro.php"); ?>
=======
		
     
	<!-- Modal de login-->
	
	<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Ingresar a tu Cuenta</h4>
		  </div>
		  <div class="modal-body">
			<form method="post" action='' name="login_form">
				<div style="margin-bottom: 25px" class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Usuario">                                        
				</div>            
				<div style="margin-bottom: 25px" class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
				</div>
			 
			  
			  <p><button type="submit" class="btn btn-primary">Entrar</button>
				<a href="#">Olvidaste tu Contraseña?</a>
			  </p>
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>	
	
	<div class="modal fade" id="modalSignup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Registrate</h4>
		  </div>
		  <div class="modal-body">
			<form role="form" class="form-horizontal">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
					  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					</div>
			    </div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
					  <input type="email" class="form-control" id="inputEmail3" placeholder="Nombre">
					</div>
			    </div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Apellido</label>
					<div class="col-sm-10">
					  <input type="email" class="form-control" id="inputEmail3" placeholder="Apellido">
					</div>
			    </div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Fecha de nacimiento</label>
					<div class="col-sm-10">
					  <input type="date" name="date" id="date" class="form-control" placeholder="Fecha de nacimiento">
					</div>
			    </div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
					<div class="col-sm-10">
					  <input type="text" name="text" id="text" class="form-control" placeholder="Usuario">
					</div>
			    </div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
					  <input type="password" name="password" id="password" class="form-control" placeholder="Password">
					</div>
			    </div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Confirme password</label>
					<div class="col-sm-10">
					  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirma el Password">
					</div>
			    </div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
					  <input type="text" name="text" id="text" class="form-control" placeholder="+54 9 11 33333333">
					</div>
			    </div>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Genero</label>
					<div class="col-sm-10">
						<label class="radio-inline">
						  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Masculino
						</label>
						<label class="radio-inline">
						  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Femenino
						</label>
					</div>	
			    </div>			
			    <input type="submit" value="Registrar" class="btn btn-info btn-block">		
			</form>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		  </div>
		</div>
	  </div>
	</div>
	

<?php require("partials/footer.php"); ?>
>>>>>>> origin/master

<link rel="stylesheet" href="assets/css/paginaInicio.css">   
<script src="assets/js/vendor/jquery-1.11.3.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
