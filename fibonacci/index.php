<?php
function fibonacci($n) {
    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

$result = [];
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['number'])) {
    $number = intval($_POST['number']);
    if ($number > 0) {
        $result = fibonacci($number);
    } else {
        $result = "Por favor, insira um número maior que 0.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Fibonacci</title>
</head>
<body>
    <h1>Calculadora de Fibonacci</h1>
    <form method="post">
        <label for="number">Digite um número:</label>
        <input type="number" id="number" name="number" min="1" required>
        <button type="submit">Calcular</button>
    </form>

    <?php if (!empty($result)): ?>
        <h2>Resultado:</h2>
        <p>
            <?php
            if (is_array($result)) {
                echo implode(", ", $result);
            } else {
                echo $result;
            }
            ?>
        </p>
    <?php endif; ?>
</body>
</html>
