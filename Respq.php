<html>
    <head>
        <title> Suas Respostas </title>
    </head>

    <body>
        <?php 

        $quest1 = $_GET["questao1"];
        $quest2 = $_GET["questao2"];
        $quest3 = $_GET["questao3"];
        $quest4 = $_GET["questao4"];
        $quest5 = $_GET["questao5"];
        $quest6 = $_GET["questao6"];

        $q1 = "c";
        $q2 = "d";
        $q3 = "a";
        $q4 = "Argentina";
        $q5 = "Paleolitico";
        $q6 = "Maquiavel";

        $erros = 0;
        $acertos = 0;

        echo "Nome: ". $_GET["nome"]."<br>";
        echo "Erros: ".$erros."<br>";
        echo "Acertos: ".$acertos."<br><br><br>";

        if ($quest1 == $q1) { $acertos++;
            echo "Questão 1 correta!<br>";
         } else {
            $erros++; echo "Questão 1 errada!<br>";}

        if ($quest2 == $q2) { $acertos++;
            echo "Questão 2 correta!<br>";
         } else {
            $erros++; echo "Questão 2 errada!<br>";}

        if ($quest3 == $q3) { $acertos++;
            echo "Questão 3 correta!<br>";
         } else {
            $erros++; echo "Questão 3 errada!<br>";}

        if ($quest4 == $q4) { $acertos++;
            echo "Questão 4 correta!<br>";
         } else {
            $erros++; echo "Questão 4 errada!<br>";}

        if ($quest5 == $q5) { $acertos++;
            echo "Questão 5 correta!<br>";
         } else {
            $erros++; echo "Questão 5 errada!<br>";}

        if ($quest6 == $q6) { $acertos++;
            echo "Questão 6 correta!<br>";
         } else {
            $erros++; echo "Questão 6 errada!<br>"
        ;}

        "Nome: ". $_GET["nome"];
        
        "Erros: ".$erros;
        "Acertos: ".$acertos;
        
        ?>
    </body>
</html>