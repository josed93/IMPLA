<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="estilo.css">
    <script src=""></script>
</head>

<body>
   <?php
    echo '<div id="glo">';
        echo '<div id="ficha" style="text-align:center"><h1>FICHA DEL ALUMNO</h1></div>';
$alumnos=[array("DNI"=>"11111111A","Nombre"=> "David","Apellidos"=> "Malive","Dirección"=> "Gilgueros","Teléfono"=> "955478421","Correo Electrónico"=> "davidmalive@hotmail.com"),
         array("DNI"=>"22222222S","Nombre"=> "Juan Antonio","Apellidos"=> "Japon","Dirección"=> "Palomares","Teléfono"=> "958421548","Correo Electrónico"=> "jajapon@hotmail.com"),
         array("DNI"=>"33333333D","Nombre"=> "Jose Daniel","Apellidos"=> "de las Heras","Dirección"=> "Corral del Conde","Teléfono"=> "954117141","Correo Electrónico"=> "jose_d.93@hotmail.com"),
         array("DNI"=>"44444444F","Nombre"=> "Noelia","Apellidos"=> "Carrasco","Dirección"=> "Granada","Teléfono"=> "957884512","Correo Electrónico"=> "noelia_besos_doce@hotmail.com"),
         array("DNI"=>"55555555G","Nombre"=> "Caroline","Apellidos"=> "Nicolle","Dirección"=> "Sevilla","Teléfono"=> "989965412","Correo Electrónico"=> "caroline_nicolle@hotmail.com"),
         array("DNI"=>"66666666H","Nombre"=> "Antonio","Apellidos"=> "Merino","Dirección"=> "Pepito","Teléfono"=> "987654321","Correo Electrónico"=> "merino@hotmail.com"),
         array("DNI"=>"77777777J","Nombre"=> "Carlos","Apellidos"=> "Martinez","Dirección"=> "Pepino","Teléfono"=> "999666333","Correo Electrónico"=> "carloscmr@hotmail.com"),
                array("DNI"=>"88888888K","Nombre"=> "Daniel","Apellidos"=> "de la fuente","Dirección"=> "Cadiz","Teléfono"=> "987745632","Correo Electrónico"=> "delafuente@hotmail.com"),
                array("DNI"=>"99999999L","Nombre"=> "Adrian","Apellidos"=> "Casado","Dirección"=> "Antonio Machado","Teléfono"=> "955782897","Correo Electrónico"=> "acasado@hotmail.com"),
                array("DNI"=>"12345678Ñ","Nombre"=> "Jesus","Apellidos"=> "Ruiz","Dirección"=> "Crstobal","Teléfono"=> "955879633","Correo Electrónico"=> "jesusbranser@hotmail.com")];
        
$id=$_GET["id"];

    echo "<div id='ima'><img src='images//$id.jpg' style='width:100%;'/></div>";
    

 
$alumno=$alumnos[$id];

    $nom=$alumno["Nombre"];
    $ape=$alumno["Apellidos"];
    $email=$alumno["Correo Electrónico"];
    $tel=$alumno["Teléfono"];
    $dni=$alumno["DNI"];
    $dir=$alumno["Dirección"];

    echo '<div id="datos">';
        echo "<table id='name'><tr><th>$nom</th><th>$ape</th></tr></table>";
        echo "<i>&nbspEstudiante de Administración de Sistemas Informáticos en Red Segundo Año.</i>";
        echo "<table><tr><td colspan='2'><b>&nbsp&nbspInformación de Contacto</b></td></tr></table>";
        echo "<table><tr><td class='gold'><b>&nbsp&nbspDNI</b></td><td>$dni</td></tr></table>";
        echo "<table><tr><td class='gold'><b>&nbsp&nbspEmail</b></td><td><a href='' style='text-decoration:none'>$email</a></td></tr></table>";
        echo "<table><tr><td class='gold'><b>&nbsp&nbspDirección</b></td><td>$dir</td></tr></table>";
        echo "<table><tr><td class='gold'><b>&nbsp&nbspTeléfono</b></td><td>$tel</td></tr></table>";
        
        
    
    echo '</div>';
echo '</div>';
    ?>
    
    
    
    
    
</body>
</html>
