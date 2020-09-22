<!DOCTYPE html>
<html lang="en">
<head>
  <title>Famevida Admin</title>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="../../css/fullcalendar.css" />
  <link rel="stylesheet" href="../../css/maruti-style.css" />
  <link rel="stylesheet" href="../../css/maruti-media.css" class="skin-color" />
  <link rel="stylesheet" href="../../css/global.css" class="skin-color" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

  <!--Header-part-->
  <div id="header">
    <h1><a href="dashboard.html">Famevida Admin</a></h1>
  </div>
  <!--close-Header-part--> 

  <!--top-Header-messaages-->
  <div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
  <!--close-top-Header-messaages--> 

  <!--top-Header-menu-->
  <div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
      <li class="" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Profile</span></a></li>
      <li class=" dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a class="sAdd" title="" href="#">new message</a></li>
          <li><a class="sInbox" title="" href="#">inbox</a></li>
          <li><a class="sOutbox" title="" href="#">outbox</a></li>
          <li><a class="sTrash" title="" href="#">trash</a></li>
        </ul>
      </li>
      <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
      <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
    </ul>
  </div>
    <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Inicio</a><ul>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Inicio</span> <span class="label label-important">3</span></a>

    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Secciones de la pagina</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Crear sesión de pagina</a></li>
        <li><a href="form-common.html">Modificar sesión de pagina</a></li>

      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Administración de blog</span> <span class="label label-important">3</span></a>
      <ul>
       <li><a href="#" id="btn-blog1">Crear publicación</a></li>
       <li><a href="#" id="btn-blog2">Ver publicaciones</a></li>
       

     </ul>
   </li>
   
   <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Administración multimedia</span> <span class="label label-important">3</span></a>
    <ul>
      <li><a href="formulario_carga.php" id="subir-archivos-servidor">Subir archivos al servidor</a></li>
      <li><a href="#" id="listar-archivos-servidor">Listar archivos multimedia</a></li>

    </ul>
  </li>







</ul>
</div>