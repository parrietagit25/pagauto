<?php 
session_start();
include '../conn/conn.php';
$mensaje = "";
if (!isset($_SESSION["tipo_usuario"])) {
  header("Location: ../index.php");
}

$conn = conectarDB();

    if (isset($_POST['atc_vendedor'])) {

        $stmt = $conn->query("UPDATE team_pcr SET nombre = '".$_POST['nombre']."', 
                                                  sucursal = '".$_POST['sucursal']."', 
                                                  cargo = '".$_POST['cargo']."', 
                                                  correo = '".$_POST['correo']."', 
                                                  celular = '".$_POST['telefono']."', 
                                                  redSocial = '".$_POST['redsocial']."', 
                                                  stat = '".$_POST['status']."' 
                              WHERE 
                              id = '".$_POST['id_vendedor']."'");

        if(isset($_FILES["foto_vendedor"]) && $_FILES["foto_vendedor"]["error"] !== UPLOAD_ERR_NO_FILE) {

            $archivo_nombre = $_FILES["foto_vendedor"]["name"];
            $archivo_temporal = $_FILES["foto_vendedor"]["tmp_name"];
            $archivo_tamano = $_FILES["foto_vendedor"]["size"];
            $archivo_tipo = $_FILES["foto_vendedor"]["type"];
            $archivo_error = $_FILES["foto_vendedor"]["error"];
        
            if($archivo_error > 0) {
                echo "Error al subir la imagen: " . $archivo_error;
            } else {

                $directorio_destino = "../../../../public/assets/media/team/";
                $ruta_destino = $directorio_destino . $archivo_nombre;

                if(move_uploaded_file($archivo_temporal, $ruta_destino)) {
                    //echo "La imagen se ha subido correctamente.";

                    $ruta_destino = "assets/media/team/". $archivo_nombre;

                    $stmt = $conn->query("UPDATE team_pcr SET photo = '".$ruta_destino."'
                                          WHERE 
                                          id = '".$_POST['id_vendedor']."'");
                    
                } else {
                    echo "Error al subir la imagen.";
                }
            }
        } else {
            //echo "No se ha enviado ninguna imagen.";
        }
        
        $mensaje .= '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> Registro Actualizado</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';

    }

    if(isset($_POST['reg_vendedor'])){

        $stmt = $conn->query("INSERT INTO team_pcr(nombre, sucursal, cargo, correo, celular, redSocial, stat)VALUES
                                                 ('".$_POST['r_nombre']."', '".$_POST['r_sucursal']."', '".$_POST['r_cargo']."', '".$_POST['r_correo']."', '".$_POST['r_telefono']."', '".$_POST['r_redsocial']."', '".$_POST['r_status']."')");

        $stmt = $conn->query("SELECT max(id) as max_id FROM team_pcr");

        $ultimo_id == "";
        while ($ult_id = $stmt->fetch_assoc()) {
            $ultimo_id = $ult_id['max_id'];
        }

        if(isset($_FILES["r_foto_vendedor"]) && $_FILES["r_foto_vendedor"]["error"] !== UPLOAD_ERR_NO_FILE) {

            $archivo_nombre = $_FILES["r_foto_vendedor"]["name"];
            $archivo_temporal = $_FILES["r_foto_vendedor"]["tmp_name"];
            $archivo_tamano = $_FILES["r_foto_vendedor"]["size"];
            $archivo_tipo = $_FILES["r_foto_vendedor"]["type"];
            $archivo_error = $_FILES["r_foto_vendedor"]["error"];
        
            if($archivo_error > 0) {
                echo "Error al subir la imagen: " . $archivo_error;
            } else {

                $directorio_destino = "../../../../public/assets/media/team/";
                $ruta_destino = $directorio_destino . $archivo_nombre;

                if(move_uploaded_file($archivo_temporal, $ruta_destino)) {
                    //echo "La imagen se ha subido correctamente.";

                    $ruta_destino = "assets/media/team/". $archivo_nombre;

                    $stmt = $conn->query("UPDATE team_pcr SET photo = '".$ruta_destino."'
                                            WHERE 
                                            id = '".$ultimo_id."'");
                    
                } else {
                    echo "Error al subir la imagen.";
                }
            }
        } else {
            //echo "No se ha enviado ninguna imagen.";
        }

        $mensaje .= '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> Registrado</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
    }

    if (isset($_POST['id_eliminar_vendedor'])) {

        $stmt = $conn->query("DELETE FROM team_pcr WHERE id = '".$_POST['id_eliminar_vendedor']."'");

        $mensaje .= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong> Eliminado</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
        
    }

?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <?php include '../includes/head.php'; ?>
  <body class="align-items-center py-4 bg-body-tertiary" style="color:black; background-color:white !important;">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <?php include '../includes/menu.php'; ?>
    <div class="container pt-5">
      <?php // <form action="" method="post"> ?>
        <div class="container">
            <?php echo $mensaje; ?>
            <div class="container text-left">
              <div class="row">
                <div class="col-12">
                    <br>
                    <h2>Nuestro Equipo de Automarket</h2>
                    <br>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Registrar 
                    </button>
                    <br>
                    <br>
                    <!-- Modal Registrar-->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <label for="">Foto</label>
                                        <input type="file" name="r_foto_vendedor" accept="image/*" class="form-control">
                                        <br>
                                        <label>Nombre y apellido</label>  <br>
                                        <input class="form-control" type="text" name="r_nombre" value="">
                                        <label>Cargo</label>  <br>
                                        <input class="form-control" type="text" name="r_cargo" value="">
                                        <label for="">Sucursal</label> <br>
                                        <select name="r_sucursal" id="" class="form-control">
                                        <option value="">Seleccionar</option>
                                        <option value="Panamá Oeste">Panamá Oeste</option>
                                        <option value="Panamá">Panamá</option>
                                        <option value="Chiriquí">Chiriquí</option>
                                        </select>
                                        <label>Telefono</label>  <br>
                                        <input class="form-control" type="text" name="r_telefono" value="">
                                        <label>Correo</label>  <br>
                                        <input class="form-control" type="text" name="r_correo" value="">
                                        <label>Instagram</label>  <br>
                                        <input class="form-control" type="text" name="r_redsocial" value="">
                                        <label>Estado</label>  <br>
                                        <span style="color:green;">ON</span><input type="radio" name="r_status" value="1" id=""> <br>
                                        <span style="color:red;">OFF</span><input type="radio" name="r_status" value="0" id="">
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="regitrar_vendedor" value="1">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary" name="reg_vendedor">Registrar</button>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>


                    <?php $ultimo = $conn -> query("SELECT * FROM team_pcr");
                            while ($lista = $ultimo->fetch_assoc()) {
                    ?>
                    
                    <div class="col-lg-3 col-md-6" data-bs-toggle="modal" data-bs-target="#equipo<?php echo $lista['id']; ?>" style="float:left; border: 1px solid black;">
                        <div class="b-team">
                            <div class="b-team__media">
                                <div class="b-team__img">
                                    <?php if($lista['photo'] == ''){ ?>
                                        <img class="img-fluid" width="263" height="280" src="<?php echo '../../../../public/assets/media/team/18.png'; ?>" alt="Foto">
                                    <?php }else{ ?>
                                        <img class="img-fluid" width="263" height="280" src="<?php echo '../../../../public/'.$lista['photo']; ?>" alt="Foto">
                                    <?php } ?>
                                </div>
                                <ul class="b-team__soc list-unstyled">

                                    <li class="b-team__soc-item"><a class="b-team__soc-link" href="https://www.instagram.com/<?php echo $lista['redSocial']; ?>/"><i class="ic fab fa-instagram"></i></a></li>
                                                                    
                                </ul>
                            </div>
                            <div class="b-team__inner">
                                <div class="b-team__name"><?php echo utf8_encode($lista['nombre']); ?></div>
                                <div class="b-team__category"><?php echo utf8_encode($lista['cargo']); ?></div>
                                <div class="b-team__category"><?php if($lista['stat']==1){ echo '<b style="color:green;">ON</b>'; }else{ echo '<b style="color:red;">OFF</b>'; } ?></div>
                            </div>
                            <div class="b-team__footer"><!--<a class="b-team__phone" href="tel:+507"><i class="ic text-primary icon-call-end"></i> +507 </a>-->
                                <a class="b-team__soc-link" href="https://www.instagram.com/<?php echo $lista['redSocial']; ?>/"><i class="ic fab fa-instagram"></i> <?php echo $lista['redSocial']; ?></a>
                                <br>
                                <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar<?php echo $lista['id']; ?>">Eliminar</a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal eliminar -->
                    <div class="modal fade" id="eliminar<?php echo $lista['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color:red;">Eliminar a <?php echo utf8_encode($lista['nombre']); ?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">

                                        <?php if($lista['photo'] == ''){ ?>
                                            <img class="img-fluid" src="<?php echo '../../../../public/assets/media/team/18.png'; ?>" alt="Foto">
                                        <?php }else{ ?>
                                            <img class="img-fluid" src="<?php echo '../../../../public/'.$lista['photo']; ?>" alt="Foto">
                                        <?php } ?>
                                        <br>
                                        <label for="">Cambiar foto</label>
                                        <input type="file" name="foto_vendedor" accept="image/*" class="form-control">
                                        <br>
                                        <label>Nombre y apellido</label>  <br>
                                        <input class="form-control" type="text" name="nombre" value="<?php echo utf8_encode($lista['nombre']); ?>">
                                        <label>Cargo</label>  <br>
                                        <input class="form-control" type="text" name="cargo" value="<?php echo utf8_encode($lista['cargo']); ?>">
                                        <label for="">Sucursal</label> <br>
                                        <select name="sucursal" id="" class="form-control">
                                        <option value="">Seleccionar</option>
                                        <option value="Panamá Oeste" <?php if(utf8_encode($lista['sucursal']) == 'Panamá Oeste'){ echo 'selected'; } ?>>Panamá Oeste</option>
                                        <option value="Panamá" <?php if(utf8_encode($lista['sucursal']) == 'Panamá'){ echo 'selected'; } ?>>Panamá</option>
                                        <option value="Chiriquí" <?php if(utf8_encode($lista['sucursal']) == 'Chiriquí'){ echo 'selected'; } ?>>Chiriquí</option>
                                        </select>
                                        <label>Telefono</label>  <br>
                                        <input class="form-control" type="text" name="telefono" value="<?php echo utf8_encode($lista['celular']); ?>">
                                        <label>Correo</label>  <br>
                                        <input class="form-control" type="text" name="correo" value="<?php echo utf8_encode($lista['correo']); ?>">
                                        <label>Instagram</label>  <br>
                                        <input class="form-control" type="text" name="redsocial" value="<?php echo utf8_encode($lista['redSocial']); ?>">
                                        <label>Estado</label>  <br>
                                        <span style="color:green;">ON</span><input type="radio" name="status" value="1" id="" <?php if($lista['stat']==1){ echo 'checked'; } ?>> <br>
                                        <span style="color:red;">OFF</span><input type="radio" name="status" value="0" id="" <?php if($lista['stat']==0){ echo 'checked'; } ?>>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="id_eliminar_vendedor" value="<?php echo $lista['id']; ?>">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-danger" name="eliminar_vendedor">Eliminar</button>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>

                    <!-- Modal editar -->
                    <div class="modal fade" id="equipo<?php echo $lista['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar a <?php echo utf8_encode($lista['nombre']); ?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">

                                        <?php if($lista['photo'] == ''){ ?>
                                            <img class="img-fluid" src="<?php echo '../../../../public/assets/media/team/18.png'; ?>" alt="Foto">
                                        <?php }else{ ?>
                                            <img class="img-fluid" src="<?php echo '../../../../public/'.$lista['photo']; ?>" alt="Foto">
                                        <?php } ?>
                                        <br>
                                        <label for="">Cambiar foto</label>
                                        <input type="file" name="foto_vendedor" accept="image/*" class="form-control">
                                        <br>
                                        <label>Nombre y apellido</label>  <br>
                                        <input class="form-control" type="text" name="nombre" value="<?php echo utf8_encode($lista['nombre']); ?>">
                                        <label>Cargo</label>  <br>
                                        <input class="form-control" type="text" name="cargo" value="<?php echo utf8_encode($lista['cargo']); ?>">
                                        <label for="">Sucursal</label> <br>
                                        <select name="sucursal" id="" class="form-control">
                                        <option value="">Seleccionar</option>
                                        <option value="Panamá Oeste" <?php if(utf8_encode($lista['sucursal']) == 'Panamá Oeste'){ echo 'selected'; } ?>>Panamá Oeste</option>
                                        <option value="Panamá" <?php if(utf8_encode($lista['sucursal']) == 'Panamá'){ echo 'selected'; } ?>>Panamá</option>
                                        <option value="Chiriquí" <?php if(utf8_encode($lista['sucursal']) == 'Chiriquí'){ echo 'selected'; } ?>>Chiriquí</option>
                                        </select>
                                        <label>Telefono</label>  <br>
                                        <input class="form-control" type="text" name="telefono" value="<?php echo utf8_encode($lista['celular']); ?>">
                                        <label>Correo</label>  <br>
                                        <input class="form-control" type="text" name="correo" value="<?php echo utf8_encode($lista['correo']); ?>">
                                        <label>Instagram</label>  <br>
                                        <input class="form-control" type="text" name="redsocial" value="<?php echo utf8_encode($lista['redSocial']); ?>">
                                        <label>Estado</label>  <br>
                                        <span style="color:green;">ON</span><input type="radio" name="status" value="1" id="" <?php if($lista['stat']==1){ echo 'checked'; } ?>> <br>
                                        <span style="color:red;">OFF</span><input type="radio" name="status" value="0" id="" <?php if($lista['stat']==0){ echo 'checked'; } ?>>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="id_vendedor" value="<?php echo $lista['id']; ?>">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary" name="atc_vendedor">Guardar</button>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                </div>
              </div>
          </div>
        </div>
      <?php // </form> ?>
    </div>

    <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php include '../includes/foo.php'; ?>
    </body>
</html>

