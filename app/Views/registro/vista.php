<?php ?>
<div class="container">
    <form style="align-content: center; margin-left: 20%; margin-right: 20% ;margin-top: 2%;">
  	<h1 style="text-align: center; margin-top: 2%; font-size: 30px; margin-bottom: 3%">Registro
  	</h1>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input id="txtEmail" type="email" class="form-control" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Rut</label>
      <input id="txtRut" type="text" class="form-control" placeholder="11111111-1">
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input id="txtNombre" type="email" class="form-control" placeholder="Ingrese su Nombre...">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Apellido</label>
      <input id="txtApellido" type="password" class="form-control" placeholder="Ingrese su Apellido...">
    </div>
  </div>
   <div class="form-group">
    <label for="inputAddress">Region</label>
    <select id="selectRegion" class="form-control">
        <option selected="">Seleccione Region...</option>
        <option>...</option>
      </select>
  </div>
  <div class="form-group">
    <label for="inputAddress">Ciudad</label>
    <select id="selectCiudad" class="form-control">
        <option selected="">Seleccione Ciudad...</option>
        <option>...</option>
      </select>
  </div>
  <div class="form-group">
    <label for="inputAddress">Direccion</label>
    <input id="txtDireccion" type="text" class="form-control" placeholder="Ingrese su Direccion">
  </div>
      <div class="form-group">
      <label for="inputAddress2">Fecha de nacimiento</label>
      <input id="txtFechaNacimiento" type="text" class="form-control" placeholder="00/00/0000">
    </div>
  <div class="form-row">
  	    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input id="txtContraseña" type="password" class="form-control" placeholder="Contraseña">
    </div>
        <div class="form-group col-md-6">
      <label for="inputPassword4">Repita su Contraseña</label>
      <input id="txtRepetirContraseña" type="password" class="form-control" placeholder="Contraseña">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gchTerminos">
      <label class="form-check-label" for="gridCheck">
        Acepto los terminos y condiciones..
      </label>
    </div>
    <div style="margin-top: 3%;transform: translateX(39%);">
  		<button style="margin-bottom: 3%;" type="submit" class="btn btn-primary" id="btnRegistrar">Registrar</button>
  		<button style="margin-bottom: 3%" type="submit" class="btn btn-secundary" id="btnLimpiar">limpiar</button>
  </div>
  </div>
</form>
  </div>