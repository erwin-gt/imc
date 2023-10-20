<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "https://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Índice de masa corporal</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $altura_en_m = floatval ($_POST['altura_en_m']);
    $peso_en_kg = floatval ($_POST['peso_en_kg']);
    $IMC=$peso_en_kg/$altura_en_m/$altura_en_m;
    if($IMC<16)
        echo 'Criterio de ingreso en hospital.<br>';
    if($IMC>=16&&$IMC<17)
        echo 'Infrapeso.<br>';
    if($IMC>=17&&$IMC<18)
        echo 'Bajo peso.<br>';
    if($IMC>=18&&$IMC<25)
        echo 'Peso normal (saludable).<br>';
    if($IMC>=5&&$IMC<30)
        echo 'Sobrepeso (obesidad de grado I).<br>';
    if($IMC>=30&&$IMC<35)
        echo 'Sobrepeso cr&oacute;nico (obesidad de grado II).<br>';
    if($IMC>=35&&$IMC<40)
        echo 'Obesidad prem&oacute;rbida (obesidad de grado III).<br>';
    if($IMC>=40)
        echo 'Obesidad m&oacute;rbida (obesidad de grado IV).<br>';
    echo 'Valor de IMC: ' . $IMC . "<br/>\n";
}
 
?>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="altura_en_m">Ingresa el valor de altura en m:</label>
                        </td>
                        <td>
                            <input name="altura_en_m" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="peso_en_kg">Ingresa el valor de peso en kg:</label>
                        </td>
                        <td>
                            <input name="peso_en_kg" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>