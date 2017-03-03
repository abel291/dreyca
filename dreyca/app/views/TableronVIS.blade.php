<!DOCTYPE html>
<html>
<head>
	<title>Tablero de Administracion</title>
	@include('todo.head')
</head>
<body   style="background:url('http://4.bp.blogspot.com/-IeBunDvbMuo/WDsdl3XfytI/AAAAAAAAALc/P0CrT5AhuO45OzGu3wZB--_KpPdk8uVOACK4B/s1600/bb.jpg');">
  <div class="div-cargando" style="position: absolute;display: table; width: 100%;top: 0px; bottom: 0px; height: 100%;background: #fff; z-index: 999999;">  
    <div class="center" style="width: 100%;height: 100%; display: table-cell; vertical-align: middle; ">
      <img  src="imagenes/cargando.gif"><br><label>Cargando Datos</label>
    </div>
  </div>
  @include('todo.MenuTablero')
  <br>
  <br>
  <br>
<div class="container "  >
	<br><br><br>
	<div class="col-xs-12 col-md-9  ">      
        <div class="panel panel-default">
            <div class="panel-heading color_temaa">       
                <h3>  Servicios</h3>
                <div class="text-right"> <a href="/insert"><b>Agregar servicio</b></a></div>              
            </div>        
            <div class="panel-body"  >
              <table class="table table-hover">            
                    <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Color</th>
                          <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 18px;">            
                       	<?php echo $item; ?>
                                        
                    </tbody>              
                </table>                       
            </div><!--/panel body-->
        </div><!--/panel-->    
    </div><!--/col-->    

	<div class="col-xs-12 col-sm-6 col-md-3">      
        <div class="panel panel-default">
            <div class="panel-heading color_temaa">       
                <h4><span class="glyphicon glyphicon-user"></span> Informacion de Contactos</h4>               
            </div>        
            <div class="panel-body " style="position: relative;">
                <div class="contacc"><?php echo $contactos;?></div>
                <button style="position: absolute; top: 10px;right:10px;" class='btn btn-succes contactos_modifi' data-toggle='modal' data-target='#modal'><span class="glyphicon glyphicon-pencil"></span></button>        
            </div>  <!--/panel body-->
             <!--/panel body-->
        </div><!--/panel-->    
    </div><!--/col--> 
</div><!--/container--> 
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////--> 
<div class="modal fade bs-example-modal-lg  fade" id='modal' tabindex="-1" role="dialog" ">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>               
                <h4 class="modal-title" style="font-weight: bold;"></h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer"></div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal --> 

@include('todo.scrip')
<script type="text/javascript">    
   jQuery(document).ready(function($) {
        //$('.container-fluid,.container,.navbar').hide();

        $('.div-cargando').fadeOut().delay(1000).hide();
        /*$(window).load(function () {
           $('.container-fluid,.container,.navbar').show();
           $('.div-cargando').fadeOut();

        });*/
////////////////////////////////////////////////////////////////////////////   
        $(document).on('click ','.contactos_modifi', function (e1) {
            e1.preventDefault();
            $('.modal-title').text('Cargando datos');
            $('.modal-body').html('<center><img src="/imagenes/cargando.gif" ></center>'); 
            $('.modal-footer').html('');
            $.ajax({
                url: '/tablero/contacto/',
                type: 'get',
                dataType: 'json',                 
            }).done(function(da) {
                $('.modal-title').html('<span class="glyphicon glyphicon-user"></span> Datos de contactos');
                $('.modal-body').html(da);
                $('.modal-footer').html(
                '<button  type="button" id="guardar_contactos" disabled class="btn" style="background: #212121;color: white;">Guardar Cambios</button>' +
                '<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>')                
             })
             .fail(function(dataa) {
                $('.modal-title').html('Error');
                $('.modal-body').html('Error');
                $('.modal-footer').html(''); 
             })            
        }); //mostrar formulario  
////////////////////////////////////////////////////////////////////////////
        $(document).on('click ','#guardar_contactos', function (e2) {
            e2.preventDefault();
            $('.modal-title').text('Guardando datos');
            var data=$('#formuploadajax').serialize();
            $('.modal-body').html('<center><img src="/imagenes/cargando.gif" ></center>');
            $('.modal-footer').html('');  
            $.ajax({
                 url: '/tablero/guardaconta',
                type: 'post',
                dataType: 'json', 
                data: data,                
            }).done(function(daa) {
                $('.modal-title').html('<span class="glyphicon glyphicon-user"></span> Datos de contactos guardados');
                $('.modal-body').html('<div class="center" ><span class="glyphicon glyphicon-ok-sign" style="font-size: 70px ;color:#4CAF50;"></span><br>Listo</div>');
                $('.modal-footer').html('<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>'); 
                $('.contacc').html(daa);               
             }).error(function() {
                $('.modal-title').html('Error');
                $('.modal-body').html('Error');
                $('.modal-footer').html('');
             });
        });//guardar formulario */
////////////////////////////////////////////////////////////////////////////         
        $(document).on('keyup','#formuploadajax,#formulario_serv', function() {

            $('.guardar-cambios,#guardar_contactos').removeAttr('disabled');
        });
        $(document).on('change','#formuploadajax,#formulario_serv', function() {

            $('.guardar-cambios,#guardar_contactos').removeAttr('disabled');
        });   
////////////////////////////////////////////////////////////////////////////
        $(document).on('click','.modifi_servi', function() {
          $('.modal-title').html('Cargando datos de servicio');
          $('.modal-body').html('<center><img src="/imagenes/cargando.gif" ></center>');
          $('.modal-footer').html('');
          var id= $(this).attr('id');
          $.ajax({
             url: '/tablero/formularioservicio/',
             type: 'GET',
             dataType: 'json',
             data: {id:id},             
           })
           .done(function(data) {
              $('.modal-title').html(data.id);
              $('.modal-body').html(data.formulario);
              $('.modal-footer').html(
                '<button  type="button" id="'+id+'" disabled class="btn guardar-cambios" style="background:#212121;color:white;">Guardar Cambios</button>' +
                '<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>');
           })
           .fail(function() {
            $('.modal-title').html('ERROR');
            $('.modal-body').html('ERROR');
           })  
        });  //modifi_servi 
////////////////////////////////////////////////////////////////////////////
        $(document).on('click ','.guardar-cambios', function (e9) {
            e9.preventDefault();
            var data=$('#formuploadajax').serialize();
            $('.modal-body').html('<center><img src="/imagenes/cargando.gif" ></center>');            
            var id= $(this).attr('id');            
            $('.modal-footer').html('');  
            $.ajax({
                 url:'/tablero/guardarserv/'+id,
                type:'post',
                dataType:'json', 
                data:data,           
            }).done(function(dasa) {
                $('.modal-title').html('<span class="glyphicon glyphicon-user"></span> Datos de servicio guardados ');
                $('.modal-body').html('<div class="center" ><span class="glyphicon glyphicon-ok-sign" style="font-size: 70px ;color:#4CAF50;"></span><br>'+dasa+'</div>');
                 $('.modal-footer').html('<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>'); 
                              
             }).error(function(jqXHR, textStatus, errorThrown ) {
                $('.modal-title').html('Error');
                $('.modal-body').html(jqXHR+'<br>'+ textStatus+'<br>'+ errorThrown );
                $('.modal-footer').html('');
             });
        });//guardar formulario */ 
////////////////////////////////////////////////////////////////////////////
        $(document).on('click ','.borrar', function (borrar) {
            borrar.preventDefault();
            var id= $(this).attr('id');
            $('.modal-title').html('Seguro que desea borrar el servicio de: <b>'+id+'.</b>');
            $('.modal-body').html();
            $('.modal-footer').html(
                  '<button  type="button" id="confirm-'+id+'" class="btn btn-danger borrar_confirm" > <span class="glyphicon glyphicon-trash"></span>Borrar</button>' +
                  '<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>');
        });
////////////////////////////////////////////////////////////////////////////
        $(document).on('click ','.borrar_confirm', function (borrar2) {
            borrar2.preventDefault();
            var id= $(this).attr('id');
            $('.modal-title').html('Borrando: <b>'+id+'.</b>');
            $('.modal-body').html('<center><img src="/imagenes/cargando.gif" ></center>'); 
            $('.modal-footer').html('');
            $.ajax({
              url: '/tablero/borrarservicio/',
              type: 'get',
              dataType: 'json',
              data: {id: id},
            })
            .done(function(dasa) {
              $(dasa).parents('tr').remove();
              $('.modal-title').html('Listo');
              $('.modal-body').html('<div class="center"><span class="glyphicon glyphicon-ok-sign" style="font-size:90px;color:#4CAF50;"></span><br>Listo</div>');
              $('.modal-footer').html('<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>');
            })
            .fail(function() {
              console.log("error");
            })
          
          
        });   
    });//#jquery

</script> 

</body>
</html>