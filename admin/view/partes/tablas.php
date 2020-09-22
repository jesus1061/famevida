<?php
include_once "../../controller/blog/blog_controller.php";
$instancia = new Blog_controller();
$peticion_controller = $instancia->listar_blogs_controller();

?>
<div class="row-fluid">
  <div class="span12">
    <div class="widget-box">
      <div class="widget-title">
       <span class="icon"><i class="icon-th"></i></span> 
       <h5>Publicaciones realizadas:</h5>
     </div>
     <div class="widget-content nopadding">
      <table class="table table-bordered data-table">
        <thead>
          <tr>
            <th class="encabezados-tabla">FECHA PUBLICACIÓN</th>
            <th class="encabezados-tabla">TITULO DE PUBLICACIÓN</th>
            <th class="encabezados-tabla">EDITAR PUBLICACIÓN</th>
            <th class="encabezados-tabla">ELIMINAR PUBLICACIÓN</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach($peticion_controller as $publicaciones){
            echo ' <tr class="gradeX">
            <td class="item-table"><center>'.$publicaciones['fecha_pub'].'</center></td>
            <td class="item-table"><center>'.$publicaciones['titulo_pub'].'</center>
            </td>
            <td class="item-table"><center><i class=" fa fa-pencil" id="pencil"></i></center></td>
            <td class="item-table"><center><i class="fa fa-trash" id="trash"></i></center></td>
          </tr>'; 
          }
         
          ?>







        </tbody>
      </table>
    </div>
  </div>
