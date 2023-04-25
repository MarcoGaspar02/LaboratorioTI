<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap5.0/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap5.0/bootstrap-grid.css">
    <link rel="stylesheet" href="./css/bootstrap5.0/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap5.0/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./css/bootstrap5.0/bootstrap-reboot.css">
    <link rel="stylesheet" href="./css/bootstrap5.0/bootstrap-reboot.min.css">

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header class="p-5 bg-dark text-white">
        <h1>O meu Jornal</h1>
        <h3>Aplicação para consultar e publicar notícias</h3>
    </header>

    <div id="main">
        <div class="asside bg-dark">
            <b><a class="menu-item" href="./index.php">Ver notícias</a>
            <a class="menu-item" href="./create.php">Publicar notícias</a></b>
        </div>
        <div class="content">
                <!--<div class="article card">
                    <ul class="list-group list-group-flush">
                    <li class="article-header list-group-item bg-primary text-white">Laboratório de TI</li>
                    <li class="article-body list-group-item">Será realizado um laboratório de Tecnologias de informação 
                        como principal objetivo de mostrar como funcionam as aplicações na internet.<br>Este laboratório 
                        vai passar por 2 fases, onde numa delas será configurada a infraestrutura de rede e na outra será
                        desenvolvida uma aplicação para a internet.</li>
                    </ul>
                </div>-->
                <?php 
                    $api_url = 'http://tilab.test/serverAPI.php?intent=getAllArticles';
                    $json_data = file_get_contents($api_url);
                    if(isset($json_data) && $json_data != null){
                        $response_data = json_decode($json_data);
                        $resources = json_decode($json_data, true);
                        foreach( $resources as $key=>$article) {
                            echo "<div class=\"article card\">
                                <ul class=\"list-group list-group-flush\">
                                <li class=\"article-header list-group-item bg-primary text-white\">".$key."</li>
                                <li class=\"article-body list-group-item\">".$article."</li>
                                </ul>
                            </div>";
                    }
                    }
                ?>
                <!--
                <div class="article card">
                    <ul class="list-group list-group-flush">
                    <li class="article-header list-group-item bg-primary text-white">“Mechanical Operators – Assemblage and Mechanisms”</li>
                    <li class="article-body list-group-item">Está patente durante a “Semana do Agrupamento”, a exposição de trabalhos de alunos da disciplina de artes 
                        “Mechanical Operators – Assemblage and Mechanisms”, no Agrupamento Gil Paes – Escola Manuel Figueiredo.<br>Este projeto/instalação resultou da 
                        exploração dos conteúdos sobre movimento e mecanismos de modo a fomentar aprendizagens sobre processos de transmissão e de transformação do 
                        movimento, representar e desenvolver mecanismos simples. <br>Houve necessidade de sensibilizar os alunos para a sustentabilidade ambiental no 
                        uso de recursos reutilizáveis, transformando-os em peças de arte.</li>
                    </ul>
                </div><div class="article card">
                    <ul class="list-group list-group-flush">
                    <li class="article-header list-group-item bg-primary text-white">Laboratórios Abertos – Semana do Agrupamento</li>
                    <li class="article-body list-group-item">É com grande satisfação que informamos que, em parceria com o Clube Ciência Viva, realizámos na semana 
                        do Agrupamento, um dia aberto nos laboratórios de Química 2 e de Física da Escola Maria Lamas, no dia 18 de abril.</li>
                    </ul>
                </div><div class="article card">
                    <ul class="list-group list-group-flush">
                    <li class="article-header list-group-item bg-primary text-white">A nova newsletter “RED: recursos educativos em destaque”</li>
                    <li class="article-body list-group-item">Foi divulgado o primeiro número da nova newsletter “RED: Recursos educativos em destaque”. Com esta
                         publicação, de periodicidade mensal, pretende-se divulgar os recursos da Web, bem como os cenários de aprendizagem produzidos pelos docentes 
                         com interesse para as várias disciplinas, de cariz transversal e para informação e lazer. Aguardamos o contributo de todos, através do envio 
                         de links ou de documentos para bibliotecas@agilpaes.pt.</li>
                    </ul>
                </div><div class="article card">
                    <ul class="list-group list-group-flush">
                    <li class="article-header list-group-item bg-primary text-white">Feira dos Minerais – EML e EMF</li>
                    <li class="article-body list-group-item">Nas bibliotecas das escolas Maria Lamas e Manuel de Figueiredo está a decorrer a Feira de Minerais.</li>
                    </ul>
                </div>-->
        </div>
    </div>
</body>

</html>