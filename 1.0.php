<fieldset style ="float: left; width: 30%">
    <legend>Resultado</legend>
    <?php
        $primer = (int)$_GET["primernumero"];
        echo("<h1>El cuadrado es: ".($primer *  $primer)."</h1>");
        echo("<h1>El cubo es: ".($primer ** 3)."</h1>");
        echo("<h1>La raiz es: ".(sqrt($primer))."</h1>");
    ?>
    <input type = "submit" value = "Atrás" onclick ="history.back()">
</fieldset>