<?php
    include "conexion.php";
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Agregar Productos</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="bgded overlay padtop" style="background-image:url('images/demo/backgrounds/fondo1.png');"> 
<header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
    <h1><a href="index.php">SC-INNOVASOFT</a></h1> </div>
    <nav id="mainav" class="fl_right"> 
    <ul class="clear">
        <li class="active"><a href="cuenta.php">Inicio</a></li>
        <i class="fas fa-house-blank"></i>
                  <li><a href="index.php">Log out<i class="fas fa-door-open"></i></a></li>
                  
                  </ul>
                  </nav>
  </header>
  <div class="wrapper row3">
  <main class="hoc container clear">
  <section id="services">
      <div class="sectiontitle">
             <p class="nospace font-x3">Drogueria JJ</p>
             <h6 class="heading"><br>Modulo producto</h6>
    </div>
    </section>
    <body>
    <div id="contenido">
    <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing; 10px 5px;">
    <span><h1> <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>    Nuevo Producto </h1> </span>
    <br>
    <form action="nuevo_prod2.php" method="POST" enctype="multipart/form-data" style="border-collapse: separate; border-spacing: 10px 5px;">
    <label>Codigo de Producto:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="id_producto" name="id_producto" required><br><br>
    <label>Producto:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="producto" name="producto" required><br><br></label>
    <label>Fecha de vencimiento:<input type="date" id="fecha" name="fecha" required><br></label>
    <br>
    <label>laboratorio:&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="laboratorio" name="laboratorio" required><br><br></label>
    <br>
    <label>Descripcion: </label>
    <textarea style="border-radius: 10px;" rows="3" cols="50" name="descripcion" required></textarea><br>

    <br>
    <button type="submit" class="btn btn-success">Guardar</button>
    <button type="submit" class="btn btn-success"><a href="index2.php">Editar</a></button>
    <button type="submit" class="btn btn-success"><a href="busq_prod1.php">Buscar</a></button>
</form>

</div>
</center>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>

<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <img src="images/logo.png" widht="100%" height="100%"><br>
      
      <br><h6 class="heading">SC-INNOVASOFT</h6>
      <p> Siguenos en nuestras redes [<a href="#">&hellip;</a>]</p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
      </ul>
    </div>
   <div class="one_quarter">
      <h6 class="heading">Informacion de contacto</h6>
      <ul class="nospace linklist">
        <li><a href="#">Direccion</a></li>
        <li><a href="#">Telefonos</a></li>
        <li><a href="#">correo electronico</a></li>
        </ul>
    </div>
    <div class="one_quarter">
    <img src="images/logo_drogueria.PNG" widht="100%" height="100%"><br>
    </div>
    <div class="one_quarter last">
       <ul class="nospace linklist">
        <li>
          <article>
            <h6 class="nospace font-x1"><a href="https://goo.gl/maps/3gJo95Cs3FgzjAYK9">Nuestro punto</a></h6><br>
            <iframe src="https://www.google.com/maps/embed?pb=!4v1655569656097!6m8!1m7!1sY-vTCCn-e56DzIDGo8FNlA!2m2!1d4.755641530248009!2d-74.115386074218!3f185.89242056083074!4f-0.5739634010684682!5f0.6924037366902054" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <time class="font-xs block btmspace-10"
           </article>
        </li>
      </ul>
    </div>

  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2022 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
</div>

<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>