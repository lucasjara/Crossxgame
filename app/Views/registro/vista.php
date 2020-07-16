<?php ?>
<style>
    body{
        background-color: #F8F8F8;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6" style="margin-bottom: 2%;margin-top: 2%;">

            <form method="POST" class="contact-form" id="miForm">
                
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h2>Registro</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre</label>
                                <input id="txtNombre" name="nombre" type="text" class="form-control" minlength="3" required placeholder="Ingrese su Nombre...">
                           
                        
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Apellido</label>
                                <input id="txtApellido" name="apellido" type="text" class="form-control" required placeholder="Ingrese su Apellido...">
                          
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Rut</label>
                                <input id="txtRut" type="text" name="rut"  class="form-control" placeholder="11111111-1">
                                 <div class="valid-feedback">Valid.</div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input id="txtEmail" name="email" type="email" class="form-control" placeholder="Email">
                                <div class="valid-feedback">Valid.</div>
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label for="inputAddress">Region</label>
                            <select id="selectRegion" class="form-control" style="border-radius: 1em">
                                <option selected="">Seleccione Region...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Ciudad</label>
                            <select id="selectCiudad" class="form-control" style="border-radius: 1em">
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
                        <div class="form-check">
                            <div class="row">
                                <div class="col-1">
                                    <input type="checkbox" class="form-control-sm" style="height: 70%;" id="exampleCheck1">
                                </div>
                                <div class="col-11">
                                    <label class="form-check-label" for="exampleCheck1">Acepto los terminos y condiciones.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-right">
                            <button type="button" class="btn btn-primary" id="btnRegistrar">Registrar</button>
                            <button type="reset" class="btn btn-success" id="btnLimpiar">Limpiar</button>
                        </div>
                    </div>
                </div>

            </form>
           
        </div>
    </div>
</div>
<script type="text/javascript">
    function envia_ajax_servidor(url, data) {
    var variable = $.ajax({
        url: url,
        method: 'POST',
        data: data,
        'dataSrc': 'data',
        dataType: 'json'
    })
    return variable;
    }

    function limpiarFormulario() {
    document.getElementById("miForm").reset();
  }


    $("#btnRegistrar").on("click",function(){
        var array = {
            nombre: $("#txtNombre").val(),
            apellido: $("#txtApellido").val(),
            rut: $("#txtRut").val(),
            email: $("#txtEmail").val()
           
        };
        
        var request = envia_ajax_servidor('/Crossxgame/public/Registro/guardar', array);

        limpiarFormulario();

        request.done(function (data){
            console.log(data);

        });
        
    });

    
</script>