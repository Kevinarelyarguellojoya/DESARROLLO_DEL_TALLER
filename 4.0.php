<fieldset style ="float: left; width: 30%">
    <legend>Resultado</legend>
    <?php
        $primer = (int)$_GET["primernumero"];
        echo("<h1>La suma es: ".($primer / 4.467)."</h1>");
        echo("<h1>La suma es: ".($primer / 4.568)."</h1>");
    ?>
    <input type = "submit" value = "Atrás" onclick ="history.back()">
</fieldset>