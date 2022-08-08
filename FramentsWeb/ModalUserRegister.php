	<div class="modal fade " id="exampleModal" tabindex="-1"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">
						<i class="fa fa-floppy-o" aria-hidden="true"></i> Registro
					</h5>
					<button style="background-color: red;" type="button"
						class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="col-sm-10">
						<label style="color: black">Escribe tus nombres</label> 
						<input
							id="name" class="form-control" type="text"
							onkeypress="return blockSpecialChar(event)" maxlength="20">
					</div>
					<div class="col-sm-10">
						<label style="color: black">Escribe tus apellidos</label> <input
							id="lastname" class="form-control" type="text"
							onkeypress="return blockSpecialChar(event)" 
							maxlength="20">
					</div>
					<div class="col-sm-10">
						<label style="color: black">Escribe tu email</label> <input
							id="email" class="form-control" type="text" name=""><input
							id="valid" type="hidden" name="" maxlength="50">
					</div>
					<div class="col-sm-10">
						<label style="color: black">Escribe una contraseña</label> <input
							id="password" class="form-control" type="password"
							onkeypress="return blockSpecialChar(event)" maxlength="10">
					</div>
					<div class="col-sm-10">
						<label style="color: black">Repite la contraseña</label> <input
							id="repassword" class="form-control" type="password"
							onkeypress="return blockSpecialChar(event)" maxlength="10">
					</div>
					<div class="col-sm-10">
						<label style="color: black">Selecciona el tipo de perfil</label>
             <?php
            include_once ("php/Conexion.php");
            $consult = mysqli_query($connect, "SELECT * FROM perfiles");
            $dataInt = mysqli_num_rows($consult);
            ?>
            <select maxlength="1" id="profile" class="form-control">
							<option value="0" maxlength="1">Seleccione un perfil</option>
                <?php
                if ($dataInt > 0) {
                    while ($fila = mysqli_fetch_array($consult)) {
                        ?>
                <option value="<?php echo $fila['Id_Perfil']; ?>"><?php echo $fila['Perfil_Users']; ?></option>
                <?php } } ?>
            </select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary"
						data-bs-dismiss="modal">Close</button>
					<button onclick="saveData();" type="button" class="btn btn-primary">Guardar
						Datos</button>
				</div>
			</div>
		</div>
		<style>
div.col-sm-10 {
	width: 100% !important;
	max-width: 100% !important;}

.modal.show .modal-dialog {
    transform: none;
    max-height: 80%!important;

}
</style>
	</div>