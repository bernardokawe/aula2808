<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simples</title>
</head>
<body>
    <h1>Calculadora Simples</h1>
    <form method="GET" action="">
        <label for="num1">Número 1:</label><br>
        <input type="text" name="n1"><br>
        <label for="num2">Número 2:</label><br>
        <input type="text" name="n2"><br>
        <input type="submit" value="Calcular">
        <fieldset style="margin-right: 1000px;">
            <legend>Operações</legend>
            <input type="radio" name="op" value="soma" checked> Soma<br>
            <input type="radio" name="op" value="subtracao"> Subtração<br>
            <input type="radio" name="op" value="multiplicacao"> Multiplicação<br>
            <input type="radio" name="op" value="divisao"> Divisão<br>
            <input type="radio" name="op" value="exponenciacao"> Exponenciação<br>
            <input type="radio" name="op" value="modulo"> Módulo<br>
        </fieldset>
    </form>
    
    <?php
        if (isset($_GET['n1']) && isset($_GET['n2']) && is_numeric($_GET['n1']) && is_numeric($_GET['n2'])) {
            $n1 = (float) $_GET['n1'];
            $n2 = (float) $_GET['n2'];
            $op = $_GET['op'];

            // Funções
            function soma($a, $b) {
                return $a + $b;
            }

            function subtracao($a, $b) {
                return $a - $b;
            }

            function multiplicacao($a, $b) {
                return $a * $b;
            }

            function divisao($a, $b) {
                if ($b == 0) {
                    return "Erro: Divisão por zero!";
                }
                return $a / $b;
            }

            function exponenciacao($a, $b) {
                return pow($a, $b); 
            }

            function modulo($a, $b) {
                if ($b == 0) {
                    return "Erro: Módulo por zero!";
                }
                return $a % $b;  
            }

            // Exibir resultado
            switch ($op) {
                case 'soma':
                    echo "<h2>Resultado: $n1 + $n2 = " . soma($n1, $n2) . "</h2>";
                    break;
                case 'subtracao':
                    echo "<h2>Resultado: $n1 - $n2 = " . subtracao($n1, $n2) . "</h2>";
                    break;
                case 'multiplicacao':
                    echo "<h2>Resultado: $n1 × $n2 = " . multiplicacao($n1, $n2) . "</h2>";
                    break;
                case 'divisao':
                    echo "<h2>Resultado: $n1 ÷ $n2 = " . divisao($n1, $n2) . "</h2>";
                    break;
                case 'exponenciacao':
                    echo "<h2>Resultado: $n1 ^ $n2 = " . exponenciacao($n1, $n2) . "</h2>";
                    break;
                case 'modulo':
                    echo "<h2>Resultado: $n1 % $n2 = " . modulo($n1, $n2) . "</h2>";
                    break;
            }
        } elseif ($_GET) {
            echo "<h2>Por favor, insira números válidos.</h2>";
        }
    ?>
</body>
</html>
