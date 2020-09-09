<!DOCTYPE html>
<html>
<head>
	<title>Conversor</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">
</head>
<body>
	<section class="cajas">
        <h1>Conversor Metros</h1>
        <form action="controlador_convertir.php" method="post" class="caja">
            <h2>Ingrese una cantidad a convertir</h2>
            <label>Metros</label>
            <input type="text" name="cantidad"
            class="field" required /><br>
            <input type="radio" name="unidad" value="1">Centímetros<br>
            <input type="radio" name="unidad" value="2">Milímetros<br>
            <input type="radio" name="unidad" value="3">Kilometros<br>
            <input type="submit" name="btnconvertir" value="Convertir" class="btn btn-green">
        </form>

        <h1>Resultado</h1>
        <?php
        	if(isset($mensaje) and $mensaje != '')
        	{
        		echo $mensaje;
        	}
        	else{
        	$mensaje = '';
        	echo $mensaje;
        }
        ?>

    </section>
    <section class="cajas">
        <h1>Conversor Litros</h1>
        <form action="controlador_convertir.php" method="post" class="caja">
            <h2>Ingrese una cantidad a convertir</h2>
            <label>Litros</label>
            <input type="text" name="cantidad"
            class="field" required /><br>
            <input type="radio" name="unidad" value="4">Decilitros<br>
            <input type="radio" name="unidad" value="5">Milílitros<br>
            <input type="submit" name="btnconvertirl" value="Convertir" class="btn btn-green">
        </form>

        <h1>Resultado</h1>
        <?php
            if(isset($mensaje1) and $mensaje1 != '')
            {
                echo $mensaje1;
            }
            else{
            $mensaje1 = '';
            echo $mensaje1;
        }
        ?>

    </section>
    <section class="cajas">
        <h1>Conversor kilogramos</h1>
        <form action="controlador_convertir.php" method="post" class="caja">
            <h2>Ingrese una cantidad a convertir</h2>
            <label>Kilos</label>
            <input type="text" name="cantidad"
            class="field" required /><br>
            <input type="radio" name="unidad" value="6">Gramos<br>
            <input type="radio" name="unidad" value="7">Milígramos<br>
            <input type="submit" name="btnconvertirk" value="Convertir" class="btn btn-green">
        </form>

        <h1>Resultado</h1>
        <?php
            if(isset($mensaje2) and $mensaje2 != '')
            {
                echo $mensaje2;
            }
            else{
            $mensaje2 = '';
            echo $mensaje2;
        }
        ?>

    </section>


</body>
</html>