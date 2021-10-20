<html>
<head>

<?php 

    include "statistics.php";
   

   class Examen extends Statistics{

    public $porcentaje1;
    public $porcentaje2;
    public $media;

   

    public $nombre, $numero, $puntuacion, $fecha;

    // function __construct($nombre, $numero, $puntuacion,$fecha, $game, $teamName, $teamMembers, $score, $won, $date){

    //     $this-> nombre = $nombre;
    //     $this-> numero= $numero;
    //     $this -> puntuacion = $puntuacion;
    //     $this -> fecha= $fecha;
    //     $this->game = $game;
    //     $this->teamName = $teamName;
    //     $this->teamMembers = $teamMembers;
    //     $this->score = $score;
    //     $this->won = $won;
    //     $this->date = $date;
    // }


     function mostrar(){

     }


     function arrayString($array_partida){
        $string_partida="";
                foreach ($array_partida as $key_nombre => $value) {
                    $string_partida.=$key_nombre." ; ".$value.";"; 
                }
                $string_partida=substr($string_partida,0,-1);
                return $string_partida;
     }

     function stringArray($string_partida,$array_partida){

        if($string_partida !=""){
            $a = explode(";",$string_partida);
            for($i=0;$i<count($a); $i++){
                $array_partida[$a[$i]=$a[$i+1]];
                $i++;
            }
        }
        
    }

    function validacion(){

    
    }


    function porcentajePorVideojuego(){

        
        

    }

    function porcentajePorVideojuegos(){


    }

    function MediaPuntuacion(){




    }
}

$Examen = new Examen();
$Examen -> validacion();

?>

</head>


<body>

<h2>Examen</h2>
<form method="POST" name="formulario">
    <label>Nombre:</label><input type="text" name="nombre" value="">
    <br>
    <br>
    <label>Numero de jugadores:</label><input type="text" name="jugadores" value="">
    <br>
    <br>
    <label>Puntuacion:</label><input type="text" name="puntuacion" value="">
    <br>
    <br>
    <label>Fecha:</label><input type="date" name="fecha" value="">
    <input type="hidden" value="">
</form>


<?php

    /****
    // EJEMPLO:
     
    $db = new DBManager();
    
    $stat = new Statistics("LoL", "unai", "4", 56, true, date("Y-m-d", strtotime("2020-03-01")));
    $db->insertStatistics($stat);

    $statsArray = $db->getStatistics();

    echo "<ul>";
    foreach ($statsArray as $stats){
        echo "<li>$stats</li>";
    }
    echo "<ul>";
    
    */

?>

</body>

</html>