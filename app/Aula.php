<?php

namespace App;

Class Aula {

    public function extrairinformacoes()
    {
        $tudo = scandir("aulas");

        foreach($tudo as $pasta);{
            $valor = substr(file_get_contents(__DIR__."/../aulas/aula1/aula.js"), 18);
            $valor = json_decode($valor);
            $imports = $valor->imports;
            $aulas = array('aulas' => array());
        }
        
        foreach ($imports as $import) {
            $num = substr(file_get_contents(__DIR__."/../aulas/aula1/" .$import), 14, -1);
            $num = json_decode($num);
            $id = $num->id;
            $tipo = $num->tipo;
            echo "ID: " .$id;
            echo "<br><br>";
            echo "Tipo: " .$tipo;
            echo "<br><br>";
            echo "<hr>";
            
            $aulas['aulas'][] = array(
                'id' => $id,
                'tipo' => $tipo
            );
        }
        
        $aulas = json_encode($aulas);
        $arquivo_json = 'aulas.json';
        file_put_contents($arquivo_json, $aulas);
    }
}