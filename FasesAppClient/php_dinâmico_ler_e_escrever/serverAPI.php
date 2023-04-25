<?php /*REFS: https://www.php.net/manual/en/book.json.php*/
$arr = array(
    'Laboratório de TI'=>'Será realizado um laboratório de Tecnologias de informação como principal objetivo de mostrar como funcionam as aplicações na internet.<br>
    Este laboratório vai passar por 2 fases, onde numa delas será configurada a infraestrutura de rede e na outra será desenvolvida uma aplicação para a internet.',
    '“Mechanical Operators – Assemblage and Mechanisms”' => "Está patente durante a “Semana do Agrupamento”, a exposição de trabalhos de alunos da disciplina de artes “Mechanical Operators – Assemblage and Mechanisms”, no Agrupamento Gil Paes – Escola Manuel Figueiredo.
    Este projeto/instalação resultou da exploração dos conteúdos sobre movimento e mecanismos de modo a fomentar aprendizagens sobre processos de transmissão e de transformação do movimento, representar e desenvolver mecanismos simples.
    Houve necessidade de sensibilizar os alunos para a sustentabilidade ambiental no uso de recursos reutilizáveis, transformando-os em peças de arte.", 
);

if(isset($_GET['intent'])){
    if($_GET['intent'] == "getAllArticles"){
        echo json_encode(readFileArray());
    }
}

if(isset($_POST['title']) && isset($_POST['article'])){
    $arr = readFileArray();
    $arr[$_POST['title']] = $_POST['article'];
    $jsonData = json_encode($arr);
    saveInFile($jsonData);
    echo $jsonData;
    header("Location: ./index.php");
}

function saveInFile($data){
    $myfile = fopen("DB.json", "w") or die("Unable to open file!");
    fwrite($myfile, $data);
    fclose($myfile);
}

function readFileArray(){
    $myfile = fopen("DB.json", "r") or die("Unable to open file!");
    $data = fread($myfile,filesize("DB.json"));
    $resources = json_decode($data, true);
    fclose($myfile);
    return $resources;
}

?>