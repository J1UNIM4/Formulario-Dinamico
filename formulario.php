<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="formulario.css">
    <title>Forms</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1> Formulario</h1>
        </div>
        <form action="index.php" method="post">
            <div class="form">
                <div class="item1">
                    <label for="name" class="titulo">Nombre</label>
                    <input type="text" name="name" placeholder="escribe tu nombre">
                    <label for="date" class="titulo">Fecha de nacimiento</label>
                    <input type="date" name="date">
                    <label for="ocupation" class="titulo">Ocupacion</label>
                    <input type="text" name="ocupation" placeholder="ocupacion">
                    <label for="telefono" class="titulo">Telefono</label>
                    <input type="text" name="contact" placeholder="telefono">
                    <label for="contry" class="titulo">Nacionalidad</label>
                    <select name="country" >
                        <option value="Mexico">Mexico</option>
                        <option value="Peru">Peru</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Colombia">Colombia</option>
                    </select>
                    <label for="Nivel" class="titulo">Nivel de ingles</label>
                    <input list="Nivel" name="Nivel">
                    <datalist id="Nivel">
                        <option value="Basico">Basico</option>
                        <option value="Intermedio">Intermedio</option>
                        <option value="Avanzado">Avanzado</option>
                    </datalist>
                    <label for="language" class="titulo">Lenguajes</label>
                     <select name="language" id="language" size="3" multiple>
                         <option value="Espanol:Nativo">Espanol:Nativo</option>
                         <option value="Frances:Intermedio(B2)">Frances:Intermedio(B2)</option>
                         <option value="Ingles">Ingles</option>
                     </select>
                    <label for="perfil" class="titulo">Perfil</label>
                    <textarea name="perfil" id="" cols="30" rows="10"></textarea>
                 </div>
                 <div class="item2">
                    <label for="Aptitudes" class="titulo">Aptitudes</label>
                    <select name="Aptitudes" id="Aptitudes" size="5" multiple>
                        <option value="Inteligencia emocional">Inteligencia emocional</option>
                        <option value="Espiritu critico" name="a-2">Espiritu critico</option>
                        <option value="Trabajo en equipo" name="a-3">Trabajo en equipo</option>  
                        <option value="Capacidad analitica" name="a-4">Capacidad analitica</option>
                        <option value="Habilidades fisicas" name="a-5">Habilidades fisicas</option>
                    </select>
                    <label for="habilidades1" class="titulo">Habilidades</label>
                    Acondicionamiento fisico<input type="checkbox" id="habilidades1" name="habilidades1" value="Acondicionamiento fisico"><br>
                    Creacion de videos deportivos<input type="checkbox" id="habilidades2" name="habilidades2" value="Creacion de videos deportivos"><br>
                    Pack office<input type="checkbox" id="habilidades3" name="habilidades3" value="Pack office"><br>
                    <label for="Experiencia" class="titulo">Experiencia Laboral</label>
                    <div class="inicio_fin">
                        <label>Trabajo</label>
                        <input type="text" placeholder="inicio" name="experiencia-inicio1">
                        <input type="text" placeholder="fin" name="experiencia-fin1">
                    </div>
                    <div class="inicio_fin">
                        <label>Trabajo</label>
                        <input type="text" placeholder="inicio" name="experiencia-inicio2">
                        <input type="text" placeholder="fin" name="experiencia-fin2">
                    </div>
                    <div class="inicio_fin">
                        <label>Trabajo</label>
                        <input type="text" placeholder="inicio" name="experiencia-inicio3">
                        <input type="text" placeholder="fin" name="experiencia-fin3">
                    </div>
                    <label for="Formacion" class="titulo">Formacion</label>
                    <div class="formacion">
                        <input type="text" placeholder="Grado" name="grado1">
                        <input type="text" placeholder="Ciudad" name="ciudad1">
                    </div>
                    <div class="inicio_fin">
                        <input type="text" placeholder="inicio" name="formacion-inicio1">
                        <input type="text" placeholder="fin" name="formacion-fin1">
                    </div>
                    <div class="formacion">
                        <input type="text" placeholder="Grado" name="grado2">
                        <input type="text" placeholder="Ciudad" name="ciudad2">
                    </div>
                    <div class="inicio_fin">
                        <input type="text" placeholder="inicio" name="formacion-inicio2">
                        <input type="text" placeholder="fin" name="formacion-fin2">
                    </div>

                 </div>
            </div>              
            <input type="submit" value="Submit">
            </form>
        </div>
        
    </div>
    
</body>
</html>