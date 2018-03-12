<?php include 'index2.php'?>

<html>
<head>
    <meta charset="utf-8">
    <title>Documento Nuevo</title>
</head>
<body>
<style>
    
    .borde{border: solid 1px; text-align: center; height: 50px;}
    .color1{ background-color: brown; }
    .color2{ background-color: cornflowerblue;}
    .color3{ background-color:  crimson;}
    .color4{ background-color:  darkmagenta;}
    .color5{ background-color: darkgray;}
    
</style>
   
<div class="container-fluid">

    <div class="row">
        
            <div class="col-sm-12 col-md-12 borde color1">HEADER</div>
    </div>
    
    <div class="row">
            <div class="col-sm-6 col-md-4 d-none d-sm-block borde color2">IZQUIERDA</div>
            <div class="col-sm-6 col-md-4 borde color3">CONTENIDO</div>
            <div class="col-sm-12 col-md-4 borde color4">DERECHA</div>
    </div>
    
    <div class="row">
            <div class="col-sm-12 col-md-12 borde color5">FOOTER</div>
            
        </div>
        
</div>    
    

   
   
   
</body>
</html>
