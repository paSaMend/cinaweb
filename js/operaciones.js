//--------------------------------Listar Cursos por Docente-----------------------------------------------
function ListarCurso(id){
//creamos los datos
  $.ajax({
  type: 'POST',
  url: 'controlador/listarCursoPorDocente.php',
  data:{'id':id},
          success:
              function(respuesta) {
              $('#ListaC').html(respuesta);

   }
  });
}

//--------------------------------Listar Cursos por Docente Para registrar Tema-----------------------------------------------
function ListarCursoT(id){
//creamos los datos
  $.ajax({
  type: 'POST',
  url: 'controlador/listarCursoPorDocente.php',
  data:{'id':id},
          success:
              function(respuesta) {
              $('#ListaCT').html(respuesta);

   }
  });
}


function ListarCursoT(id){
//creamos los datos
  $.ajax({
  type: 'POST',
  url: 'controlador/listarCursoPorDocente.php',
  data:{'id':id},
          success:
              function(respuesta) {
              $('#ListaCT').html(respuesta);

   }
  });
}

//--------------------------------Listar Periodos por Curso Para registrar Tema-----------------------------------------------
function listarPeriodosPorCursoDocente(){
  var idCurso=document.getElementById("ListaCT").value;

  $.ajax({
  type: 'POST',
  url: 'controlador/listarPeriodosPorCursoDocente.php',
  data:{'idCurso':idCurso},
          success:
              function(respuesta) {
              $('#ListaP').html(respuesta);

   }
  });
}

//--------------------------------Listar Periodos por Curso Para listar ova-----------------------------------------------
function listarPeriodosPorCursoDocenteOE(idCurso){

  $.ajax({
  type: 'POST',
  url: 'controlador/listarPeriodosPorCursoDocente.php',
  data:{'idCurso':idCurso},
          success:
              function(respuesta) {
              $('#ListaPE').html(respuesta);

   }
  });
}






//--------------------------------Listar Temas por Periodos Para registrar OVA-----------------------------------------------
function listarTemasPorPeriodos(){
  var idPeriodo=document.getElementById("ListaPE").value;
  $.ajax({
  type: 'POST',
  url: 'controlador/listarTemasPorPeriodos.php',
  data:{'idPeriodo':idPeriodo},
          success:
              function(respuesta) {
              $('#ListaT').html(respuesta);

   }
  });
}



//--------------------------------Listar Temas por Periodos Para registrar OVA-----------------------------------------------
function listarTemasPorPeriodosD(){
  var idPeriodo=document.getElementById("ListaP").value;

  $.ajax({
  type: 'POST',
  url: 'controlador/listarTemasPorPeriodos.php',
  data:{'idPeriodo':idPeriodo},
          success:
              function(respuesta) {
              $('#ListaTD').html(respuesta);

   }
  });
}





//--------------------------------Listar Periodos por Curso-----------------------------------------------
function ListarPeriodo(id){
//creamos los datos
  $.ajax({
  type: 'POST',
  url: 'controlador/listarCursoPorDocente.php',
  data:{'id':id},
          success:
              function(respuesta) {
              $('#ListaC').html(respuesta);

   }
  });
}



//--------------------------------Listar Estudiantes Para editar-----------------------------------------------
function ListarEstudiantes(estudiante){
//creamos los datos

  $.ajax({
  type: 'POST',
  url: 'controlador/listarEstudianteEditar.php',
  data:{'estudiante':estudiante},
          success:
              function(respuesta) {
              $('#EditEst').html(respuesta);


   }
  });
}


//--------------------------------Registrar Cursos-----------------------------------------------
function registrarCurso(){
//creamos los datos

var nombre=document.getElementById("nombre").value;
var grado=document.getElementById("grado").value;
var grupo=document.getElementById("grupo").value;


if (nombre!= ""){
  $.ajax({
  type: 'POST',
  url: 'controlador/registrarCurso.php',
  data:{'nombre':nombre,'grado':grado,'grupo':grupo},
          success:
              function(respuesta) {
            alert(respuesta);
            window.location.href='AdministrarCurso.php';
   }
  });
}
else{
  alert("para registrar una Curso debe de ingresar un nombre para el mismo");
}
}


//--------------------------------Registrar Estudiantes-----------------------------------------------
function registrarEstudiante(){
//creamos los datos

var curso=document.getElementById("ListaC").value;
var nombre=document.getElementById("nombre").value;
var apellido=document.getElementById("apellido").value;
var di=document.getElementById("di").value;
var nombreR=document.getElementById("nombreR").value;
var telefonoR=document.getElementById("telefonoR").value;
var password=document.getElementById("password").value;
var correo=document.getElementById("correo").value;


if (curso!= ""){
  if(nombre!="" && apellido!="" && di!="" && nombreR!="" && telefonoR!="" && password!="" && correo!=""){
  $.ajax({
  type: 'POST',
  url: 'controlador/registrarEstudiante.php',
  data:{'curso':curso,'nombre':nombre,'apellido':apellido,'di':di,'nombreR':nombreR,'telefonoR':telefonoR,'password':password,'correo':correo},
          success:
              function(respuesta) {
            alert(respuesta);
            window.location.href='AdministrarEstudiante.php';
   }
  });
}else{
    alert("Hay espacios en blanco. Para continuar digite todos los campos");
}
}
else{
  alert("para registrar un estudiante primero debe de registrar un curso y seleccionar ese curso en este formulario");
}
}




//--------------------------------Editar Estudiantes-----------------------------------------------
function editarEstudiantes(){
//creamos los datos

var curso=document.getElementById("ListaC").value;
var nombre=document.getElementById("nombreE").value;
var apellido=document.getElementById("apellidoE").value;
var di=document.getElementById("diE").value;
var nombreR=document.getElementById("nombreRE").value;
var telefonoR=document.getElementById("telefonoRE").value;
var password=document.getElementById("passwordE").value;
var correo=document.getElementById("correoE").value;
var idEstudiante=document.getElementById("idEst").value;


if (curso!= ""){
  if(nombre!="" && apellido!="" && di!="" && nombreR!="" && telefonoR!="" && password!="" && correo!=""){
  $.ajax({
  type: 'POST',
  url: 'controlador/editarEstudiante.php',
  data:{'curso':curso,'nombre':nombre,'apellido':apellido,'di':di,'nombreR':nombreR,'telefonoR':telefonoR,'password':password,'correo':correo,'idEstudiante':idEstudiante},
          success:
              function(respuesta) {
            alert(respuesta);
            window.location.href='AdministrarEstudiante.php';
   }
  });
}else{
    alert("Hay espacios en blanco. Para continuar digite todos los campos");
}
}
else{
  alert("para registrar un estudiante primero debe de registrar un curso y seleccionar ese curso en este formulario");
}
}







//--------------------------------Tabla Estudiantes-----------------------------------------------
$(document).ready(function() {
  $('#tablaestudiantes').DataTable( {
    "bDeferRender": true,
    "sPaginationType": "full_numbers",
    "ajax": {
      "url": "controlador/listarEstudiantesPorCurso.php",
          "type": "POST"
    },
    "columns": [
      { "data": "Curso" },
      { "data": "Nombre" },
      { "data": "Apellido" },
      { "data": "Documento" },
      { "data": "Responsable" },
      { "data": "Telefono" },
      { "data": "Correo" },
      { "data": "Acciones" }

      ],
    "oLanguage": {
            "sProcessing":     "Procesando...",
        "sLengthMenu": 'Mostrar <select>'+
            '<option value="5">5</option>'+
            '<option value="10">10</option>'+
            '<option value="15">15</option>'+
            '<option value="20">20</option>'+
            '<option value="25">25</option>'+
            '<option value="-1">All</option>'+
            '</select> registros',
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
        "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Filtrar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Por favor espere - cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":     "Último",
            "sNext":     "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
        }
  });
});






//--------------------------------Tabla General-----------------------------------------------
$(document).ready(function() {

  $('#tablageneral').DataTable( {
    "bDeferRender": true,
    "sPaginationType": "full_numbers",
    "ajax": {
      "url": "controlador/listadoGeneral.php",
          "type": "POST"
    },
    "columns": [
      { "data": "Curso" },
      { "data": "Grupo" },
      { "data": "PeriodoN" },
      { "data": "Tematica" },
      { "data": "SubTema" }

      ],
    "oLanguage": {
            "sProcessing":     "Procesando...",
        "sLengthMenu": 'Mostrar <select>'+
            '<option value="5">5</option>'+
            '<option value="10">10</option>'+
            '<option value="15">15</option>'+
            '<option value="20">20</option>'+
            '<option value="25">25</option>'+
            '<option value="-1">All</option>'+
            '</select> registros',
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
        "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Filtrar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Por favor espere - cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":     "Último",
            "sNext":     "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
        }
  });
});





//--------------------------------Tabla OVA-----------------------------------------------
$(document).ready(function() {

  $('#tablaOVA').DataTable( {
    "bDeferRender": true,
    "sPaginationType": "full_numbers",
    "ajax": {
      "url": "controlador/listarTablaOva.php",
          "type": "POST"
    },
    "columns": [
      { "data": "Curso" },
      { "data": "Periodo" },
      { "data": "Tema" },
      { "data": "subTema" },
      { "data": "OVA" },
      { "data": "Acciones" }

      ],
    "oLanguage": {
            "sProcessing":     "Procesando...",
        "sLengthMenu": 'Mostrar <select>'+
            '<option value="5">5</option>'+
            '<option value="10">10</option>'+
            '<option value="15">15</option>'+
            '<option value="20">20</option>'+
            '<option value="25">25</option>'+
            '<option value="-1">All</option>'+
            '</select> registros',
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
        "sInfoEmpty":      "Mostrando del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Filtrar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Por favor espere - cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":     "Último",
            "sNext":     "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
        }
  });
});





//--------------------------------Registrar Periodos-----------------------------------------------
function registrarPeriodo(){
//creamos los datos

var idCurso=document.getElementById("ListaC").value;
var unidad=document.getElementById("unidad").value;
var tematica=document.getElementById("tematica").value;
var dba=document.getElementById("DBA").value;
var estandares=document.getElementById("estandares").value


if (tematica != "" && dba!= "" && estandares != "" && idCurso!=""){
  $.ajax({
    type: 'POST',
    url: 'controlador/registrarPeriodo.php',
    data:{'idCurso':idCurso,'unidad':unidad,'tematica':tematica,'dba':dba,'estandares':estandares},
            success:
                function(respuesta) {
              alert(respuesta);
              window.location.href='AdministrarCurso.php';
     }
    });
}else{
  alert("para registrar un periodo todos los campos deben ser rellenados");
}
}



//--------------------------------Registrar Temas-----------------------------------------------
function registrarTema(){
//creamos los datos

var curso=document.getElementById("ListaCT").value;
var periodo=document.getElementById("ListaP").value;
var nombre=document.getElementById("nombreT").value;
if (curso!= ""){
  if(periodo!= ""){
    if(nombre!= ""){
  $.ajax({
  type: 'POST',
  url: 'controlador/registrarTema.php',
  data:{'curso':curso,'periodo':periodo,'nombre':nombre},
          success:
              function(respuesta) {
            alert(respuesta);
            window.location.href='AdministrarCurso.php';
   }
  });
    }else{
        alert("para registrar un tema debe de digitar un nombre para el mismo");
    }
  }else{
      alert("para registrar un tema primero debe de registrar un periodo y luego seleccionarlo en este formulario");
  }
}
else{
  alert("No hay cursos registrados");
}
}



//--------------------------------Registrar OVA-----------------------------------------------
function registrarOva(){
//creamos los datos

var curso=document.getElementById("ListaCT").value;
var periodo=document.getElementById("ListaP").value;
var tema=document.getElementById("ListaT").value;
var nombre=document.getElementById("nombreO").value;
var zip=document.getElementById("zip_file").name;
if (curso!= ""){
  if(periodo!= ""){
    if(tema != ""){
    if(nombre!= ""){

  $.ajax({
  type: 'POST',
  url: 'controlador/registrarOva.php',
  data:{'curso':curso,'tema':tema,'periodo':periodo,'nombre':nombre,'zip':zip},
          success:
              function(respuesta) {
            alert(respuesta);
            if(respuesta=="Registro Exitoso"){

                window.location.href='AdministrarOva.php';
            }

   }
  });
    }else{
        alert("para registrar un Ova debe de digitar un nombre para el mismo");
    }
  }else{
      alert("para registrar un Ova primero debe de registrar un tema y luego seleccionarlo en este formulario");
  }
  }else{
      alert("para registrar un Ova primero debe de registrar un periodo y luego seleccionarlo en este formulario");
  }
}
else{
  alert("No hay cursos registrados");
}
}
