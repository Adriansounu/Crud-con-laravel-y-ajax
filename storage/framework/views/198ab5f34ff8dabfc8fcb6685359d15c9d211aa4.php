<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Docentes UTC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Docentes</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Funciones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Horario</a>
          <a class="dropdown-item" href="#">Alumnos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Calificaciones</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
<div class="container">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Lista Escuela</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Nuevo Docente</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <h3>Lista de la escuela</h3>
    <table id="tabla-escuela" class="table table-hover">
<thead>
    <td>ID del Curso</td>
    <td>Título del Curso</td>
    <td>Nombre Instructor</td>
    <td>Número de Horas</td>
    <td>Fecha de Inicio</td>

</thead>
    </table>
    </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h3></h3>
                <br>
                <form id="registro-escuela">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Curso</label>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Instructor</label>
                    <input type="text" class="form-control" id="txtInstructor" name="txtInstructor" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                <div class="form-group">
                    <label for="exampleInputEmail1">Horas</label>
                    <input type="number" class="form-control" id="txtHoras" name="txtHoras" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Fecha</label>
                    <input type="date" class="form-control" id="txtFecha" name="txtFecha" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
                </form>



            </div>

        </div>
<!-- Modal -->
<div class="modal fade" id="escuelaa_edit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar docente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="escuela_edit_form">

      <div class="modal-body">


                <?php echo csrf_field(); ?>

                <input type="hidden" id="txtId2" name="txtId2">
                <div class="form-group">
                    <label for="exampleInputEmail1">curso</label>
                    <input type="text" class="form-control" id="txtNombre2" name="txtNombre2" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Instructor</label>
                    <input type="text" class="form-control" id="txtInstructor2" name="txtNombre2" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Horas</label>
                    <input type="number" class="form-control" id="txtHoras2" name="txtNombre2" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Fecha</label>
                    <input type="date" class="form-control" id="txtFecha2" name="txtNombre2" aria-describedby="emailHelp">
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
      </form>

    </div>
  </div>
</div>

<!-- Modal eliminar -->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Desea eliminar el registro seleccionado?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="btnEliminar" name="btnEliminar" class="btn btn-danger">Eliminar</button>
      </div>
    </div>
  </div>
</div>
</div>
<script>
//LISTAR REGISTROS CON DATATABLE
$(document).ready(function(){
    var tablaEscuela = $('#tabla-escuela').DataTable({
        processing:true,
        serverSide:true,
        ajax:{
            url: "<?php echo e(route('escuela.index')); ?>",
        },
        columns:[
            {data: 'id'},
            {data: 'Curso'},
            {data: 'Instructor'},
            {data: 'Horas'},
            {data: 'Fecha'},
            {data: 'action', orderable: false}
        ]
    });
});
</script>
<script>
// REGISTRAR
    $('#registro-escuela').submit(function(e){
        e.preventDefault();
        var Curso = $('#txtNombre').val();
        var Instructor = $('#txtInstructor').val();
        var Horas = $('#txtHoras').val();
        var Fecha = $('#txtFecha').val();
        var _token = $("input[name=_token]").val();
        $.ajax({
            url: "<?php echo e(route('escuela.registrar')); ?>",
            type: "POST",
            data:{
                Curso: Curso,
                Instructor: Instructor,
                Horas: Horas,
                Fecha: Fecha,
                _token:_token
            },
            success:function(response){
                if(response){
                    $('#registro-escuela')[0].reset();
                    toastr.success('El registro se ingreso correctamente.', 'Nuevo Registro', {timeOut:3000});
                    $('#tabla-escuela').DataTable().ajax.reload();
                }
            }
        });
    });
</script>
<script>
// ELIMINAR UN REGISTRO
var esc_id;
$(document).on('click', '.delete', function(){
    esc_id = $(this).attr('id');
    $('#confirmModal').modal('show');
});
$('#btnEliminar').click(function(){
    $.ajax({
        url:"escuela/eliminar/"+esc_id,
        beforeSend:function(){
            $('#btnEliminar').text('Eliminando...');
        },
        success:function(data){
            setTimeout(function(){
                $('#confirmModal').modal('hide');
                toastr.warning('El registro fue eliminado correctamente.', 'Eliminar Registro', {timeOut:3000});
                $('#tabla-escuela').DataTable().ajax.reload();
            }, 2000);
            $('#btnEliminar').text('Eliminar');
        }
    });
});
</script>
<script>
//EDITAR UN REGISTRO
    function editarEscuela(id) {
        $.get('escuela/editar/'+id, function(escuela){
          $('#txtId2').val(escuela[0].id);
            $('#txtNombre2').val(escuela[0].Curso);
            $('#txtInstructor2').val(escuela[0].Instructor);
            $('#txtHoras2').val(escuela[0].Horas);
            $('#txtFecha2').val(escuela[0].Fecha);
            $("input[name=_token]").val();
            $('#escuelaa_edit').modal('toggle');
        })
    }
</script>
<script>
//ACTUALIZAR UN REGISTRO
$('#escuela_edit_form').submit(function(e){
    e.preventDefault();
    var id2 = $('#txtId2').val();
    var Curso2= $('#txtNombre2').val();
    var Instructor2 = $('#txtInstructor2').val();
    var Horas2 = $('#txtHoras2').val();
    var Fecha2= $('#txtFecha2').val();
    var _token2 = $("input[name=_token]").val();
    $.ajax({
        url: "<?php echo e(route('escuela.actualizar')); ?>",
        type: "POST",
        data:{
          Curso: Curso2,
                Instructor: Instructor2,
                Horas: Horas2,
                Fecha: Fecha2,
                _token:_token2
        },
        success:function(response){
            if(response){
                $('#escuelaa_edit').modal('hide');
                toastr.info('El registro fue actualizado correctamente.', 'Actualizar Registro', {timeOut:3000});
                $('#tabla-escuela').DataTable().ajax.reload();
            }
        }
    })
});
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\miescuela\resources\views/escuela/index.blade.php ENDPATH**/ ?>