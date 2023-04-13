<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title>Email and Password Validation</title>-->

    <!-- CSS -->
    <link rel="stylesheet" href="Style/Style.css" />

    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <header>
            <Ri:a>Agregar cuentas</Ri:a>
        </header>
        <form action="./DB/process.php" method="Post">
            <div class="field email-field">
                <div class="input-field">
                    <input type="text" placeholder="Nombre" class="text" name="nom" require/>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Apellido" class="text" name="ape" require />
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Cedula" class="text" name="cc" require/>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Num Cuenta" class="text" name="num"require />
                </div>
                <div class="input-field">
                    <input type="number" placeholder="Saldo" class="number" name="saldo" />
                </div>
                <div class="input-field button">
                    <input type="submit" value="Guardar" />
                </div>

        </form>
        <div class="input-field button">
            <a href="traspasos.php">Siguiente</a>
        </div>
    </div>
</body>

</html>