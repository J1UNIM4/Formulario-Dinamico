<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f83f617a48.js" crossorigin="anonymous"></script>


</head>
<body>
    <?php 
        $list_h = array($_POST["habilidades1"],$_POST["habilidades2"],$_POST["habilidades3"]);
    ?>

    <div class="grid-container">
        <div class="grid-area1">
            <div class="area1 img">
                <img src="https://editorial.tirant.com/cv/475116-jose_an.jpg" alt="" class="imagen">
            </div>
            <div class="area1-titulo">
                <h1 class="titulo-nombre"><?php echo $_POST["name"]?></h1>
                <h2 class="puesto">PUESTO OCUPADO/BUSCADO</h2>
            </div>
        </div>
        <div class="grid-area2">
            <div class="area2-contacto">
                <h2><u>Contacto</u></h2>
                <ul class="b">
                    <li><i class="fa-solid fa-phone"></i><?php echo $_POST["contact"]?></li>
                    <li><i class="fa-solid fa-envelope"></i>jose.martinez@gmail.com</li>
                    <li><i class="fa-solid fa-location-dot fa-beat-fade"></i><?php echo $_POST["country"]?> DF</li>
                    <li><i class="fa-brands fa-linkedin"></i>Linkedin.com/jose-martinez</li>
                </ul>
            </div>
            <div class="area2-idiomas">
                <h2><u>Idiomas</u></h2>
                    <ul class="a">
                        <li>Espanol:Nativo</li>
                        <li>Ingles:<?php echo $_POST["Nivel"]?></li>
                        <li>Frances:Intermedio(B2)</li>
                    </ul>
            </div>
                
            <div class="area2-aptitudes">
                <h2><u>Aptitudes</u></h2>
                    <ul class="a">
                        <li>Inteligencia emocional</li>
                        <li>Espiritu critico</li>
                        <li>Trabajo en equipo</li>
                        <li>Capacidad analitica</li>
                        <li>Habilidades fisicas</li>
                    </ul>
            </div>
            <div class="area2-habilidades">
                <h2><u>Habilidades</u></h2>
                    <ul class="a">
                        <?php 
                            foreach ($list_h as $value) {
                                echo "<li>$value</li>";
                              }
                        ?>
                        <li>Tenis</li>
                    </ul>
            </div>
            <div class="area2-intereses">
                <h2><u>Otros intereses</u></h2>
                    <ul class="a">
                        <li>Creador de yincanas</li>
                        <li>Paseos ecologicos grupales</li>
                        <li>Lectura grupal en ingles</li>
                    </ul>
           </div>

        </div>
        
        <div class="grid-area3">
            <h2><u>Perfil</u></h2>
            <p>
            <?php  
            if(strlen($_POST["perfil"])>30){
                echo $_POST["perfil"];
            }else{
                echo "Trabajador Social con 4 anios de experiencia en proyectos 
                     colectivos.Mi objetivo es lograr que los jovenes obtenga  acceso
                     a la educacion superior mediante logros deportivos.";
            }
            ?>
            </p>
                        
            <h2><u>Experiencia Laboral</u></h2> 
            <h4><?php echo $_POST['ocupation']?></h4>
            <h5><?php echo  $_POST['country']?> , <b class='blanquito'><?php echo $_POST['experiencia-inicio1'] . " - ". $_POST['experiencia-fin1'] ?></b></h5>
                <ul>
                <li>Coordinador y meditador entre los equipos de ayuda psicologica 
                    a jovenes y ninos en exclusion total.
                </li>
                <li>Velar por la salud mental del equipo y de miembros involucrados en 
                    proyectos.</li>
                <li>Mepeo y necesidades estrategicas y logicas para las diferentes areas.</li>
                <li>Monitor de ejercicios fisicos para adolecentes.</li>
                </ul>
                <h4><?php echo $_POST['ocupation']?></h4>
                <h5><?php echo  $_POST['country']?> , <b class='blanquito'><?php echo $_POST['experiencia-inicio2'] . " - ". $_POST['experiencia-fin2'] ?></b></h5>
                    <ul>
                        <li>Funciones para seguimientos de casos para jovenes con problemas
                           de adicciones.
                        </li>
                        <li>Capacitaciones e integracion vinculadas a medidas preventivas.</li>
                        <li>Recopilacion de evidencias para auditorias y programas sociales.</li>
        
                    </ul>
                <h4><?php echo $_POST['ocupation']?></h4>
                <h5><?php echo  $_POST['country']?> , <b class='blanquito'><?php echo $_POST['experiencia-inicio3'] . " - ". $_POST['experiencia-fin3'] ?></b></h5>
                    <ul>
                        <li>Profesor de lengua espaniola e inglesa para jovenes migrantes</li>
                        <li>Monitor de actividades ecologicas con adolecentes</li>
                    
                    </ul>
                
            
            <h2><u>Formacion</u></h2>
            <h4 class="negrita"><?php echo $_POST['grado1']?></h4>
            <h5 class="negrita"><?php echo $_POST['ciudad1']?> <b class="blanquito">|<?php echo $_POST['formacion-inicio1'] . " - ". $_POST['formacion-fin1'] ?></b></h5>
            <h4 class="negrita"><?php echo $_POST['grado2']?></h4>
            <h5 class="negrita"><?php echo $_POST['ciudad2']?><b class="blanquito">|<?php echo $_POST['formacion-inicio2'] . " - ". $_POST['formacion-fin2'] ?></b></h5>            
            
        </div>
        
    </div>
</body>
</html>