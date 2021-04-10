<?php

include("db.php");

if(isset($_GET['id_usuario'])) {
    $id = $_GET['id_usuario'];
    $query = "SELECT*FROM datos_personales WHERE datos_personales.id = $id";
    $result = mysqli_query($connection, $query);
    if ($result) {

        $total = mysqli_num_rows($result);
    
    } else {
    
        die(mysqli_error($connection));    
    }
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $id_user = $row['id'];
            $name = $row['nombre'];
            $last_name = $row['apellido'];
            $email = $row['email'];
            $telephone = $row['telefono'];
            $direcction = $row['direccion'];
            $place = $row['lugar_nacimiento'];
        }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $name = $_POST['nombre_usuario'];
    $last_name = $_POST['apellido_usuario'];
    $email = $_POST['correo_usuario'];
    $telephone = $_POST['telefono_usuario'];
    $direcction = $_POST['direccion_usuario'];
    $place = $_POST['lugar_nacimiento_usuario'];
    $query = "UPDATE datos_personales SET nombre = '$name', apellido = '$last_name',email = '$email', 
                                          telefono = '$telephone', direccion = '$direcction', lugar_nacimiento = '$place' 
                                        WHERE datos_personales.id= $id";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query Failed.");
      }
    header('Location: admin.php');
}
?>
  <div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
        <div class="card card-body">
            <form action="edit_task.php?id=<?php echo $_GET['id_usuario']; ?>" method="POST">
                <div class="form-group">
                    <input type="text" name="nombre_usuario" class="form-control" value="<?php echo $name; ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="apellido_usuario" class="form-control" value="<?php echo $last_name; ?>">
                </div>
                <div class= "form-group">
                    <input type="text" name="correo_usuario" class="form-control" value="<?php echo $email; ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="telefono_usuario" class="form-control" value="<?php echo $telephone; ?>">
                </div>
                <div class= "form-group">
                    <input type="text" name="direccion_usuario" class="form-control" value="<?php echo $direcction; ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="lugar_nacimiento_usuario" class="form-control" value="<?php echo $place; ?>">
                </div>
                <button class="btn-success" name="update">
                    Update
                </button>
            </form>
        </div>
    </div>
  </div>
</div>

