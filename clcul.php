<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <h1>Calculatrice</h1>
    <form action="" method="post">
        <label for="num1">Premier nombre:</label>
        <input type="text" id="num1" name="num1"><br><br>
        <label for="num2">Deuxième nombre:</label>
        <input type="text" id="num2" name="num2"><br><br>
        <label for="operation">Opération:</label>
        <select name="operation" id="operation">
            <option value="addition">Addition</option>
            <option value="soustraction">Soustraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select><br><br>
        <input type="submit" value="Calculer">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        switch ($operation) {
            case 'addition':
                $resultat = $num1 + $num2;
                break;
            case 'soustraction':
                $resultat = $num1 - $num2;
                break;
            case 'multiplication':
                $resultat = $num1 * $num2;
                break;
            case 'division':
                if ($num2 != 0) {
                    $resultat = $num1 / $num2;
                } else {
                    $resultat = "Erreur: Division par zéro!";
                }
                break;
            default:
                $resultat = "Opération non valide";
                break;
        }

        echo "<h2>Résultat: $resultat</h2>";
    }
    ?>
</body>
</html>






