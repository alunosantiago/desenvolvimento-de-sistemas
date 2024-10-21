<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo Fatorial</title>
</head>
<body>
    <h1>Cálculo Fatorial</h1>

    <form action="" method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Calcular Fatorial</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = (int)$_POST['numero'];

        if ($numero < 0) {
            echo "<p>Por favor, insira um número não negativo.</p>";
        } else {
            $fatorial = calcularFatorial($numero);
            echo "<p>O fatorial de $numero é $fatorial.</p>";
        }
    }

    function calcularFatorial($n) {
        if ($n === 0 || $n === 1) {
            return 1;
        }
        return $n * calcularFatorial($n - 1);
    }
    ?>
</body>
</html>

