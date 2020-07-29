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
                        <?php if($rol){ ?>
                        <div class="form-group">
                            <label for="inputAddress">Rol</label>
                            <select id="selectRol" class="form-control" style="border-radius: 1em">
                                <option value="cliente">cliente</option>
                                <option value="admin">admin</option>
                            </select>
                        </div>
                        <?php }else{?>
                            <div hidden="" class="form-group">
                                <select hidden="" id="selectRol" class="form-control" style="border-radius: 1em">
                                <option value="cliente">cliente</option>
                                </select>
                            </div>
                        <?php } ?>    
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
        var rol = $("#selectRol").val();
        var array = {
            nombre: $("#txtNombre").val(),
            apellido: $("#txtApellido").val(),
            rut: $("#txtRut").val(),
            email: $("#txtEmail").val(),
            comuna: $("#selectComuna").val(),
            direccion: $("#txtDireccion").val(),
            fnacimiento: $("#txtFechaNacimiento").val(),
            contrasenia: $("#txtContraseña").val(),
            estado: "1",
            rol: rol,
        };
        var password = $("#txtContraseña").val();
        var passwordConf = $("#txtRepetirContraseña").val();
        if(array['nombre'] !="" && array['nombre'] != null && array['apellido'] !="" && array['apellido'] != null && array['rut'] !="" && array['rut'] != null && array['email'] !="" && array['email'] != null && array['comuna'] !="0" && array['direccion'] !="" && array['direccion'] != null && array['contrasenia'] !="" && array['contrasenia'] != null ){
            if(array['nombre'].length < '21' && array['nombre'].length > '4'){
                if(array['apellido'].length < '21' && array['apellido'].length > '1'){
                    if(array['rut'].length < '13' && array['rut'].length > '6'){
                        if(array['direccion'].length < '31' && array['direccion'].length > '4'){
                            if(array['contrasenia'].length < '21' && array['contrasenia'].length > '4'){
                                if(array['email'].length < '41'){
                                    if(password == passwordConf){
                                        var request = envia_ajax_servidor('/Crossxgame/public/Registro/guardar', array);
                                        alert("Se ha registrado exitosamente");
                                        request.done(function (data){

                                        window.location = "/Crossxgame/public/prueba";
            
                                        });
                                    }else{
                                    alert("Las contraseñas deben ser iguales");
                                    }
                                }else{
                                alert("El email debe cumplir con un máximo de 40 caracteres");
                                }
                            }else{
                                alert("Debe ingresar una contraseña de un máximo de 20 caracteres y con un mínimo de 5");
                            }    
                        }else{
                            alert("La dirección no puede superar la cantidad 30 caracteres y no sean menos de 5 ");
                        }
                    }else{
                         alert("El rut debe poseer un mínimo de 7 y un máximo de 12");
                    }
                }else{
                    alert("El apellido no puede superar la cantidad 20 caracteres y no sean menos de 2");
                }
            }else{
                 alert("El nombre no puede superar la cantidad 20 caracteres y no sean menos de 5");
            }
        }else{
             alert("No se deben dejar campos vacios");
         }
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
