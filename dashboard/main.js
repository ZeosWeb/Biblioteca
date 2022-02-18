
 //### Tabla de Carga de Elementos con Data Tables

//Karde Datatable
$(document).ready(function(){
    tablaKarde = $("#tablaKarde").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditarKarde'>Editar</button><button class='btn btn-danger btnBorrarKarde'>Borrar</button></div></div>"  
       }],
        
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
});

//Autor Datatable
$(document).ready(function(){
    tablaAutor = $("#tablaAutor").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditarAutor'>Editar</button><button class='btn btn-danger btnBorrarAutor'>Borrar</button></div></div>"  
       }],
        
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
});

//Clasificaciones Datatable
$(document).ready(function(){
    tablaClasif = $("#tablaClasif").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditarClasif'>Editar</button><button class='btn btn-danger btnBorrarClasif'>Borrar</button></div></div>"  
       }],
        
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
});


//Editoriales Datatable
$(document).ready(function(){
    tablaEditorial = $("#tablaEditorial").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditarEditorial'>Editar</button><button class='btn btn-danger btnBorrarEditorial'>Borrar</button></div></div>"  
       }],
        
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
});

//Materias Datatable
$(document).ready(function(){
    tablaMateria = $("#tablaMateria").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditarMateria'>Editar</button><button class='btn btn-danger btnBorrarMateria'>Borrar</button></div></div>"  
       }],
        
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
});

//Cds Datatable
$(document).ready(function(){
    tablaCd = $("#tablaCd").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditarCd'>Editar</button><button class='btn btn-danger btnBorrarCd'>Borrar</button></div></div>"  
       }],
        
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
});

//Tabloides Datatable
$(document).ready(function(){
    tablaTabloide = $("#tablaTabloide").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditarTabloide'>Editar</button><button class='btn btn-danger btnBorrarTabloide'>Borrar</button></div></div>"  
       }],
        
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
});

//Revistas Datatable
$(document).ready(function(){
    tablaRevista = $("#tablaRevista").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditarRevista'>Editar</button><button class='btn btn-danger btnBorrarRevista'>Borrar</button></div></div>"  
       }],
        
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
});

//Periodico Datatable
$(document).ready(function(){
    tablaPeriodico = $("#tablaPeriodico").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditarPeriodico'>Editar</button><button class='btn btn-danger btnBorrarPeriodico'>Borrar</button></div></div>"  
       }],
        
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
});

//Libro Datatable
$(document).ready(function(){
    tablaLibro = $("#tablaLibro").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-success btnVerLibro'>Ver</button><button class='btn btn-primary btnEditarLibro'>Editar</button><button class='btn btn-danger btnBorrarLibro'>Borrar</button></div></div>"  
       }],
        
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
});

 //### Botones para crear nuevos Formularios

//Botones Nuevo karde
$("#btnNuevoKarde").click(function(){
    $("#formKarde").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo Karde");            
    $("#modalKarde").modal("show");        
    id=null;
    opcion = 1; //alta
}); 

//Botones Nuevo Autor
$("#btnNuevoAutor").click(function(){
    $("#formAutor").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo Autor");            
    $("#modalAutor").modal("show");        
    id=null;
    opcion = 1; //alta
});

//Botones Nueva Clasificación
$("#btnNuevoClasif").click(function(){
    $("#formClasif").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva Clasificación");            
    $("#modalClasif").modal("show");        
    id=null;
    opcion = 1; //alta
});      

//Botones Nueva Editorial
$("#btnNuevoEditorial").click(function(){
    $("#formEditorial").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo Editorial");            
    $("#modalEditorial").modal("show");        
    id=null;
    opcion = 1; //alta
}); 

//Botones Nueva Materia
$("#btnNuevoMateria").click(function(){
    $("#formMateria").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo Materia");            
    $("#modalMateria").modal("show");        
    id=null;
    opcion = 1; //alta
});

//Botones Nuevo Cds
$("#btnNuevoCd").click(function(){
    $("#formCd").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo Cd");            
    $("#modalCd").modal("show");        
    id=null;
    opcion = 1; //alta
}); 

//Botones Nuevo Tabloide
$("#btnNuevoTabloide").click(function(){
    $("#formTabloide").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo Tabloide");            
    $("#modalTabloide").modal("show");        
    id=null;
    opcion = 1; //alta
}); 

//Botones Nueva Revista
$("#btnNuevoRevista").click(function(){
    $("#formRevista").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo Revista");            
    $("#modalRevista").modal("show");        
    id=null;
    opcion = 1; //alta
});

//Botones Nueva Periodico
$("#btnNuevoPeriodico").click(function(){
    $("#formPeriodico").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo Periódico");            
    $("#modalPeriodico").modal("show");        
    id=null;
    opcion = 1; //alta
});
//Botones Nueva Libro
$("#btnNuevoLibro").click(function(){
    $("#formLibro").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo Libro");            
    $("#modalLibro").modal("show");        
    id=null;
    opcion = 1; //alta
});



var fila; //capturar la fila para editar o borrar el registro
    

 //### Botones para crear Editar Formularios

//Karde Editar
$(document).on("click", ".btnEditarKarde", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    nombre = fila.find('td:eq(1)').text();
    numero_karde = parseInt(fila.find('td:eq(2)').text());
    
    $("#idKarde").val(id);
    $("#nombre").val(nombre);
    $("#numero_karde").val(numero_karde);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Karde");            
    $("#modalKarde").modal("show");  
    
});

//Autor Editar
$(document).on("click", ".btnEditarAutor", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    nombres = fila.find('td:eq(1)').text();
    apellido1 = fila.find('td:eq(2)').text();
    apellido2 = fila.find('td:eq(3)').text();
    nacionalidad = fila.find('td:eq(4)').text();
    bio = fila.find('td:eq(5)').text();
    
    $("#idAutor").val(id);
    $("#nombres").val(nombres);
    $("#apellido1").val(apellido1);
    $("#apellido2").val(apellido2);
    $("#nacionalidad").val(nacionalidad);
    $("#bio").val(bio);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Autor");            
    $("#modalAutor").modal("show");  
    
});

//Clasificaciónes  Editar
$(document).on("click", ".btnEditarClasif", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    clase = fila.find('td:eq(1)').text();
    lengua = fila.find('td:eq(2)').text();
    genero = fila.find('td:eq(3)').text();
    clasificacion = fila.find('td:eq(4)').text();
    
    $("#idClasif").val(id);
    $("#clase").val(clase);
    $("#lengua").val(lengua);
    $("#genero").val(genero);
    $("#clasificacion").val(clasificacion);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Clasificación");            
    $("#modalClasif").modal("show");  
    
});

//Editoriales Editar
$(document).on("click", ".btnEditarEditorial", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    nombre = fila.find('td:eq(1)').text();
    descripcion = fila.find('td:eq(2)').text();
    
    $("#idEditorial").val(id);
    $("#nombre").val(nombre);
    $("#descripcion").val(descripcion);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Editoriales");            
    $("#modalEditorial").modal("show");  
    
});

//Materias Editar
$(document).on("click", ".btnEditarMateria", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    materia = fila.find('td:eq(1)').text();
    descripcion = fila.find('td:eq(2)').text();
    
    $("#idMateria").val(id);
    $("#materia").val(materia);
    $("#descripcion").val(descripcion);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Materia");            
    $("#modalMateria").modal("show");  
    
});

//Cds Editar
$(document).on("click", ".btnEditarCd", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    numero = parseInt(fila.find('td:eq(1)').text());
    descripcion = fila.find('td:eq(2)').text();
    
    $("#idCd").val(id);
    $("#numero").val(numero);
    $("#descripcion").val(descripcion);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Cds");            
    $("#modalCd").modal("show");  
    
});

//Tabloides Editar
$(document).on("click", ".btnEditarTabloide", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    titulo = fila.find('td:eq(1)').text();
    numero = parseInt(fila.find('td:eq(2)').text());
    
    $("#idTabloide").val(id);
    $("#titulo").val(titulo);
    $("#numero").val(numero);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Tabloide");            
    $("#modalTabloide").modal("show");  
    
});

//Revista Editar
$(document).on("click", ".btnEditarRevista", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    id_karde = parseInt(fila.find('td:eq(1)').text());
    numero = parseInt(fila.find('td:eq(2)').text());
    anio = parseInt(fila.find('td:eq(3)').text());
    descripcion = fila.find('td:eq(4)').text();
    
    $("#idRevista").val(id);
    $("#id_karde").val(id_karde);
    $("#numero").val(numero);
    $("#anio").val(anio);
    $("#descripcion").val(descripcion);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Revista");            
    $("#modalRevista").modal("show");  
    
});

//Periódico Editar
$(document).on("click", ".btnEditarPeriodico", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    id_editorial = parseInt(fila.find('td:eq(1)').text());
    dia = parseInt(fila.find('td:eq(2)').text());
    mes = parseInt(fila.find('td:eq(3)').text());
    anio = parseInt(fila.find('td:eq(4)').text());
    descripcion = fila.find('td:eq(5)').text();
    
    $("#idPeriodico").val(id);
    $("#id_editorial").val(id_editorial);
    $("#dia").val(dia);
    $("#mes").val(mes);
    $("#anio").val(anio);
    $("#descripcion").val(descripcion);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Periódico");            
    $("#modalPeriodico").modal("show");  
    
});

//Libro Editar
$(document).on("click", ".btnEditarLibro", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    id_clasificacion  = parseInt(fila.find('td:eq(1)').text());
    imagen = fila.find('td:eq(3)').text();
    titulo = fila.find('td:eq(4)').text();
    id_autor = parseInt(fila.find('td:eq(5)').text());
    anio_pub = parseInt(fila.find('td:eq(6)').text());
    id_editorial = parseInt(fila.find('td:eq(7)').text());
    lugar_pub = fila.find('td:eq(8)').text();
    cantidad_ejemplares  = parseInt(fila.find('td:eq(9)').text());
    doi = fila.find('td:eq(10)').text();
    isbn = fila.find('td:eq(11)').text();
    
    $("#idLibro").val(id);
    $("#titulo").val(titulo);
    $("#id_autor").val(id_autor);
    $("#imagen").val(imagen);
    $("#anio_pub").val(anio_pub);
    $("#id_editorial").val(id_editorial);
    $("#lugar_pub").val(lugar_pub);
    $("#cantidad_ejemplares").val(cantidad_ejemplares);
    $("#id_clasificacion").val(id_clasificacion);
    $("#cantidad_ejemplares").val(cantidad_ejemplares);
    $("#doi").val(doi);
    $("#isbn").val(isbn);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Libro");            
    $("#modalLibro").modal("show");  
    
});

//Libro Ver Detalles
$(document).on("click", ".btnVerLibro", function(){   
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Ver Detalles del Libro");            
    $("#modalVerLibro").modal("show");  
    
});



 //### Botones para Eliminar Formularios

//Borrar karde
$(document).on("click", ".btnBorrarKarde", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "model/Karde.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaKarde.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});

//Borrar Autor
$(document).on("click", ".btnBorrarAutor", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "model/Autor.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaAutor.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});

//Borrar Autor
$(document).on("click", ".btnBorrarClasif", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "model/Clasificacion.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaClasif.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});

//Borrar Editorial
$(document).on("click", ".btnBorrarEditorial", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "model/Editoriales.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaEditorial.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});

//Borrar Materias
$(document).on("click", ".btnBorrarMateria", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "model/Materias.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaMateria.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});

//Borrar Cds
$(document).on("click", ".btnBorrarCd", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "model/Cds.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaCd.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});

//Borrar Tabloide
$(document).on("click", ".btnBorrarTabloide", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "model/Tabloides.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaTabloide.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});

//Borrar Revista
$(document).on("click", ".btnBorrarRevista", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "model/Revistas.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaRevista.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});

//Borrar Periodico
$(document).on("click", ".btnBorrarPeriodico", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "model/Periodicos.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaPeriodico.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
//Borrar Libro
$(document).on("click", ".btnBorrarLibro", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "model/Libros.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaLibro.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});

    
 //### Crear Modal con nuevos Formularios

//Submit Form Karde
$("#formKarde").submit(function(e){
    e.preventDefault();
    id = $.trim($("#idKarde").val());
    nombre = $.trim($("#nombre").val());
    numero_karde = $.trim($("#numero_karde").val());
    $.ajax({
        url: "model/Karde.php",
        type: "POST",
        dataType: "json",
        data: {id:id, nombre:nombre, numero_karde:numero_karde, opcion:opcion},
        success: function(data){
            id = data[0].id;            
            nombre = data[0].nombre;
            numero_karde = data[0].numero_karde;
            if(opcion == 1){tablaKarde.row.add([id,nombre,numero_karde]).draw();}
            else{tablaKarde.row(fila).data([id,nombre,numero_karde]).draw();}
            window.location.reload(true);           
        }        
    });
    $("#modalKarde").modal("hide");
    
});

//Submit Form Autor
$("#formAutor").submit(function(e){
    e.preventDefault();
    id = $.trim($("#idAutor").val());
    nombres = $.trim($("#nombres").val());
    apellido1 = $.trim($("#apellido1").val());
    apellido2 = $.trim($("#apellido2").val());
    nacionalidad = $.trim($("#nacionalidad").val());
    bio = $.trim($("#bio").val());
    $.ajax({
        url: "model/Autor.php",
        type: "POST",
        dataType: "json",
        data: {id:id, nombres:nombres, apellido1:apellido1 , apellido2:apellido2, nacionalidad:nacionalidad, bio:bio, opcion:opcion},
        success: function(data){
            id = data[0].id;            
            nombres = data[0].nombres;
            apellido1 = data[0].apellido1;
            apellido2 = data[0].apellido2;
            nacionalidad = data[0].nacionalidad;
            bio = data[0].bio;
            if(opcion == 1){tablaAutor.row.add([id, nombres, apellido1, apellido2, nacionalidad, bio]).draw();}
            else{tablaAutor.row(fila).data([id, nombres, apellido1, apellido2, nacionalidad, bio]).draw();}
            window.location.reload(true);            
        }        
    });
    $("#modalAutor").modal("hide");
});

//Submit Form Clasificacion
$("#formClasif").submit(function(e){
    e.preventDefault();
    id = $.trim($("#idClasif").val());
    clase = $.trim($("#clase").val());
    lengua = $.trim($("#lengua").val());
    genero = $.trim($("#genero").val());
    clasificacion = $.trim($("#clasificacion").val());
    $.ajax({
        url: "model/Clasificacion.php",
        type: "POST",
        dataType: "json",
        data: {id:id, clase:clase, lengua:lengua , genero:genero, clasificacion:clasificacion, opcion:opcion},
        success: function(data){
            id = data[0].id;            
            clase = data[0].clase;
            lengua = data[0].lengua;
            genero = data[0].genero;
            clasificacion = data[0].clasificacion;
            if(opcion == 1){tablaClasif.row.add([id, clase, lengua, genero, clasificacion]).draw();}
            else{tablaClasif.row(fila).data([id, clase, lengua, genero, clasificacion]).draw();}
            window.location.reload(true);            
        }        
    });
    $("#modalClasif").modal("hide");
});

//Submit Form Editorial
$("#formEditorial").submit(function(e){
    e.preventDefault();
    id = $.trim($("#idEditorial").val());
    nombre = $.trim($("#nombre").val());
    descripcion = $.trim($("#descripcion").val());
    $.ajax({
        url: "model/Editoriales.php",
        type: "POST",
        dataType: "json",
        data: {id:id, nombre:nombre, descripcion:descripcion, opcion:opcion},
        success: function(data){
            id = data[0].id;            
            nombre = data[0].nombre;
            descripcion = data[0].descripcion;
            if(opcion == 1){tablaEditorial.row.add([id,nombre,descripcion]).draw();}
            else{tablaEditorial.row(fila).data([id,nombre,descripcion]).draw();}
            window.location.reload(true);            
        }        
    });
    $("#modalEditorial").modal("hide"); 
});

//Submit Form Materias
$("#formMateria").submit(function(e){
    e.preventDefault();
    id = $.trim($("#idMateria").val());
    materia = $.trim($("#materia").val());
    descripcion = $.trim($("#descripcion").val());
    $.ajax({
        url: "model/Materias.php",
        type: "POST",
        dataType: "json",
        data: {id:id, materia:materia, descripcion:descripcion, opcion:opcion},
        success: function(data){
            id = data[0].id;            
            materia = data[0].materia;
            descripcion = data[0].descripcion;
            if(opcion == 1){tablaMateria.row.add([id,materia,descripcion]).draw();}
            else{tablaMateria.row(fila).data([id,materia,descripcion]).draw();}
            window.location.reload(true);            
        }        
    });
    $("#modalMateria").modal("hide");
});

//Submit Form Karde
$("#formCd").submit(function(e){
    e.preventDefault();
    id = $.trim($("#idCd").val());
    numero = $.trim($("#numero").val());
    descripcion = $.trim($("#descripcion").val());
    $.ajax({
        url: "model/Cds.php",
        type: "POST",
        dataType: "json",
        data: {id:id, numero:numero, descripcion:descripcion, opcion:opcion},
        success: function(data){
            id = data[0].id;            
            numero = data[0].numero;
            descripcion = data[0].descripcion;
            if(opcion == 1){tablaCd.row.add([id,numero,descripcion]).draw();}
            else{tablaCd.row(fila).data([id,numero,descripcion]).draw();}
            window.location.reload(true);            
        }        
    });
    $("#modalCd").modal("hide");
});

//Submit Form Karde
$("#formTabloide").submit(function(e){
    e.preventDefault();
    id = $.trim($("#idTabloide").val());
    titulo = $.trim($("#titulo").val());
    numero = $.trim($("#numero").val());
    $.ajax({
        url: "model/Tabloides.php",
        type: "POST",
        dataType: "json",
        data: {id:id, titulo:titulo, numero:numero, opcion:opcion},
        success: function(data){
            id = data[0].id;            
            titulo = data[0].titulo;
            numero = data[0].numero;
            if(opcion == 1){tablaTabloide.row.add([id,titulo,numero]).draw();}
            else{tablaTabloide.row(fila).data([id,titulo, numero]).draw();}  
            window.location.reload(true);          
        }        
    });
    $("#modalTabloide").modal("hide");
});

//Submit Form Revistas
$("#formRevista").submit(function(e){
    e.preventDefault();
    id = $.trim($("#idRevista").val());
    id_karde = $.trim($("#id_karde").val());
    numero = $.trim($("#numero").val());
    anio = $.trim($("#anio").val());
    descripcion = $.trim($("#descripcion").val());
    $.ajax({
        url: "model/Revistas.php",
        type: "POST",
        dataType: "json",
        data: {id:id, id_karde:id_karde, numero:numero , anio:anio, descripcion:descripcion, opcion:opcion},
        success: function(data){
            id = data[0].id;            
            id_karde = data[0].id_karde;
            numero = data[0].numero;
            anio = data[0].anio;
            descripcion = data[0].descripcion;
            if(opcion == 1){tablaRevista.row.add([id, id_karde, numero, anio, descripcion]).draw();}
            else{tablaRevista.row(fila).data([id, id_karde, numero, anio, descripcion]).draw();}
            window.location.reload(true);

        }

    });
    $("#modalRevista").modal("hide");
});

//Submit Form Periodicos
$("#formPeriodico").submit(function(e){
    e.preventDefault();
    id = $.trim($("#idPeriodico").val());
    id_editorial = $.trim($("#id_editorial").val());
    dia = $.trim($("#dia").val());
    mes = $.trim($("#mes").val());
    anio = $.trim($("#anio").val());
    descripcion = $.trim($("#descripcion").val());
    $.ajax({
        url: "model/Periodicos.php",
        type: "POST",
        dataType: "json",
        data: {id:id, id_editorial:id_editorial, dia:dia , mes:mes, anio:anio, descripcion:descripcion, opcion:opcion},
        success: function(data){
            id = data[0].id;            
            id_editorial = data[0].id_editorial;
            dia = data[0].dia;
            mes = data[0].mes;
            anio = data[0].anio;
            descripcion = data[0].descripcion;
            if(opcion == 1){tablaPeriodico.row.add([id, id_editorial, dia, mes, anio, descripcion]).draw();}
            else{tablaPeriodico.row(fila).data([id, id_editorial, dia, mes, anio, descripcion]).draw();}
            window.location.reload(true);

        }

    });
    $("#modalRevista").modal("hide");
});
//Submit Form Periodicos
$("#formLibro").submit(function(e){
    e.preventDefault();
    id = $.trim($("#idLibro").val());
    titulo = $.trim($("#titulo").val());
    id_autor = $.trim($("#id_autor").val());
    imagen = $.trim($("#imagen").val());
    anio_pub = $.trim($("#anio_pub").val());
    id_editorial = $.trim($("#id_editorial").val());
    lugar_pub = $.trim($("#lugar_pub").val());
    cantidad_ejemplares = $.trim($("#cantidad_ejemplares").val());
    id_clasificacion = $.trim($("#id_clasificacion").val());
    doi = $.trim($("#doi").val());
    isbn = $.trim($("#isbn").val());
    $.ajax({
        url: "model/Libros.php",
        type: "POST",
        dataType: "json",
        data: {id:id, titulo:titulo, id_autor:id_autor , imagen:imagen, anio_pub:anio_pub, id_editorial:id_editorial, lugar_pub:lugar_pub , cantidad_ejemplares:cantidad_ejemplares, id_clasificacion:id_clasificacion, doi:doi, isbn:isbn, opcion:opcion},
        success: function(data){
            id = data[0].id;            
            titulo = data[0].titulo;
            id_autor = data[0].id_autor;
            imagen = data[0].imagen;
            anio_pub = data[0].anio_pub;
            id_editorial = data[0].id_editorial;
            lugar_pub = data[0].lugar_pub;
            cantidad_ejemplares = data[0].cantidad_ejemplares;
            id_clasificacion = data[0].id_clasificacion;
            doi = data[0].doi;
            isbn = data[0].isbn;
            if(opcion == 1){tablaLibro.row.add([id, titulo, id_autor, imagen, anio_pub, id_editorial, lugar_pub, cantidad_ejemplares, id_clasificacion, doi, isbn]).draw();}
            else{tablaLibro.row(fila).data([id, titulo, id_autor, imagen, anio_pub, id_editorial, lugar_pub, cantidad_ejemplares, id_clasificacion, doi, isbn]).draw();}
            window.location.reload(true);

        }

    });
    $("#modalLibro").modal("hide");
});