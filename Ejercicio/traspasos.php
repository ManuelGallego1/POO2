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
        <h1>Traspasos</h1>
    
    <form action="./DB/process.php" method="Post">
            <div class="field email-field">
                <div class="input-field">
                    <input type="text" placeholder="Mi Cuenta" class="text" name="cuent1" require/>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Saldo a enviar" class="text" name="saldo" require />
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Enviar a" class="text" name="cuent2" require/>
                </div>
                <div class="input-field button">
                    <input type="submit" value="Guardar" />
                </div>

        </form>
</div>
</body>
</html>