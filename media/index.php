<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Média e Desvio Padrão</title>
</head>
<body>
    <h1>Cálculo de Média e Desvio Padrão</h1>
    <form method="post">
        <label for="valores">Insira 10 valores (separados por vírgula):</label><br>
        <input type="text" name="valores" id="valores" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['valores'];
        $valores = array_map('trim', explode(',', $input));
        
        if (count($valores) !== 10) {
            echo "<p style='color: red;'>Por favor, insira exatamente 10 valores.</p>";
        } else {
            $valores = array_map('floatval', $valores);
            $media = array_sum($valores) / count($valores);

            $somaQuadrados = 0;
            foreach ($valores as $valor) {
                $somaQuadrados += ($valor - $media) ** 2;
            }
            $desvioPadrao = sqrt($somaQuadrados / count($valores));

            echo "<h2>Resultados:</h2>";
            echo "<p>Média: " . number_format($media, 2) . "</p>";
            echo "<p>Desvio Padrão: " . number_format($desvioPadrao, 2) . "</p>";
        }
    }
    ?>
</body>
</html>
