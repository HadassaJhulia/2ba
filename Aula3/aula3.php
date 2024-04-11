<?php
    echo("<h2>Trabalhando com PHP</h2>");

    print("Olá, eu estou trabalhando em PHP<br>");

    echo("Testando a saída de uma String com echo<br>");

        //este é um comentário simples
        #este é outro comentário simples
        /*
        multi comentários
        */
    $nome = "Hadassa Jhulia"; //declarando variavel e atribuindo valor tipo string
    $sobrenome = "Lima"; //declarando variavel e atribuindo valor tipo string
    $idade = 15; //declarando variavel e atribuindo valor tipo int
    $numero = 23104; //declarando variavel e atribuindo valor tipo int
    $dia = 22; //declarando variavel e atribuindo valor tipo int
    $valordia = 70.40; //declarando variavel e atribuindo valor tipo int
    $salario; //declatando variavel tipo float ou double
    $salario = $dia = $valordia; //declarando variavel e acumulando operação com 2 variaveis


    echo("$nome".("<br>"));
    echo('$nome'. "<br>");
    echo("$sobrenome".("<br>"));
    echo("$idade".("<br>"));
    echo("$numero".("<br>"));
    echo("<br>");
    //comando de saída echo e print
    //concatenando string com variaveis
    echo("Nome: ". $nome . "<br>");
    echo("Sobreome: ". $sobrenome . "<br>");
    echo("Nome completo: ". $nome . " " . $sobrenome . "<br>");
    echo("Idade: ". $idade . "<br>");
    echo("Número: ". $numero . "<br>");
    echo("Dia: ". $dia . "<br>");
    echo("Valor dia: ". $valordia . "<br>");
    echo("Salário: ". $salario . "<br>");
    echo("Salário: ". ($dia*$valordia) . "<br>");

    print("#############################################" . "<br>");




?>