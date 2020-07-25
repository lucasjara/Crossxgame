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

            <form  class="contact-form" id="miForm">
                
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
                            <label for="inputAddress" >Region</label>
                            <select id="selectRegion" onchange="ShowSelected();" class="form-control" style="border-radius: 1em">
                                <option value="0" selected>Seleccione Region...</option>
                                <?php
                                //print_r($arrProfesiones);
                                foreach ($arrProfesiones as $i => $region_nombre)
                                    echo '<option values="',$i,'">',$region_nombre,'</option>';
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Comuna</label>
                            <select id="selectComuna" class="form-control" style="border-radius: 1em">
                                <option selected="">Seleccione Comuna...</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Direccion</label>
                            <input id="txtDireccion" name="direccion" type="text" class="form-control" placeholder="Ingrese su Direccion">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Fecha de nacimiento</label>
                            <input id="txtFechaNacimiento" name="fnacimiento" type="date"  placeholder="00/00/0000" value="<?php echo date("Y-m-d");?>">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Contraseña</label>
                                <input id="txtContraseña" name="contrasenia" type="password" class="form-control" placeholder="Contraseña">
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
            email: $("#txtEmail").val(),
            comuna: $("#selectComuna").val(),
            direccion: $("#txtDireccion").val(),
            fnacimiento: $("#txtFechaNacimiento").val(),
            contrasenia: $("#txtContraseña").val()
        };
        var request = envia_ajax_servidor('/Crossxgame/public/Registro/guardar', array);
       
        request.done(function (data){
             limpiarFormulario();
            console.log(data);
        });
    });
</script>


<script type="text/javascript">
function ShowSelected(){
    var combo = document.getElementById("selectRegion").selectedIndex; 
    if(combo != ''){
        $.ajax({
            url:"/Crossxgame/public/Registro/ObtenerComuna",
            method:"POST",
            data:{combo:combo},
            success:function(data){  
                var comunas = "<option value='0'>Seleccionar comuna</option>";
               for (var i = 0; i < data.length; i++) {
                    var id = data[i].comuna_id;
                    var nombre = data[i].comuna_nombre;
                    comunas = comunas.concat("<option value='"+id+"'>"+nombre+"</option>");
               }
               $('#selectComuna').html(comunas);
            }               
        });
    }else{
        $('#selectComuna').html('<option value="">Select State</option>');
    }    
 }
</script>
