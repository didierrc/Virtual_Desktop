<?php

/* Definicion de la clase Record */
class Record{

    private $server;
    private $user;
    private $pass;
    private $dbname;

    public function __construct(){
        $this->server = "localhost";
        $this->user = "DBUSER2023";
        $this->pass = "DBPSWD2023";
        $this->dbname = "records";
    }


}

// Comprobamos que el usuario ha enviado los datos correspondientes
if(count($_POST) > 0){
    $recordUsuario = new Record(); // Creamos un nuevo record
    

}



?>



<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Datos que describe el documento -->
    <title>Escritorio Virtual - Juegos</title>

    <meta charset="UTF-8">
    <meta name="author" content="Didier Yamil Reyes Castro">
    <meta name="description" content="Documento con el juego Crucigrama Matemático.">
    <meta name="keywords" content="juegos,matemática,razonamiento,agilidad">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
    <link rel="stylesheet" type="text/css" href="estilo/layout.css">
    <link rel="stylesheet" type="text/css" href="estilo/juegos.css">
    <link rel="stylesheet" type="text/css" href="estilo/crucigrama.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/crucigrama.js"></script>

    <link rel="icon" href="multimedia/favicon-spidey.ico">
</head>

<body>
    <!-- Seccion Header que agrupa la cabezera de la página web (Cosas que se repiten en todas las páginas Web) -->
    <header>
        <h1>Escritorio Virtual</h1>

        <!-- Seccion Nav que agrupa enlaces a otras páginas web -->
        <nav>
            <a title="Página principal" href="index.html" accesskey="I" tabindex="1">Inicio</a>
            <a title="Sobre mi" href="sobremi.html" accesskey="S" tabindex="2">Sobre mi</a>
            <a title="Noticias relevantes" href="noticias.html" accesskey="N" tabindex="3">Noticias</a>
            <a title="Agenda" href="agenda.html" accesskey="A" tabindex="4">Agenda</a>
            <a title="Meteorología" href="meteorologia.html" accesskey="M" tabindex="5">Meteorología</a>
            <a title="Viajes" href="viajes.html" accesskey="V" tabindex="6">Viajes</a>
            <a title="Juegos" href="juegos.html" accesskey="J" tabindex="7">Juegos</a>
        </nav>
    </header>

    <!-- Section que representa la barra de navegacion a los diferentes juegos. Fuera del main ya que lo
     comparten los distintos HTML que componen los juegos -->
    <section>
        <h2>Juegos:</h2>
        <nav>
            <a title="Juego de memoria" href="memoria.html" accesskey="E" tabindex="8">Memoria</a>
            <a title="Sudoku" href="sudoku.html" accesskey="D" tabindex="9">Sudoku</a>
            <a title="Crucigrama" href="crucigrama.php" accesskey="C" tabindex="10">Crucigrama matemático</a>
            <a title="Ejemplo de uso de APIs" href="api.html" accesskey="P" tabindex="11">Aplicacion con APIs</a>
        </nav>
    </section>

    <h3>Crucigrama matemático</h3>
    <main>
    </main>

</body>

<script>
    juego.paintMathword();
    window.addEventListener("keydown", (event) => {

        var isANum = event.keyCode >= 49 && event.keyCode <= 57
        var isADiv = event.keyCode === 111;
        var isAMult = event.keyCode === 106;
        var isASum = event.keyCode === 107;
        var isASub = event.keyCode === 109;

        // Teclas aceptadas
        if (isANum || isADiv || isAMult || isASum || isASub) {

            if (!juego.isACellClicked) {
                alert("A cell must be selected!!");
            } else {
                juego.introduceElement(event.key);
            }

        }


    });
</script>


</html>