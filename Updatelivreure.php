<?php

include '../Consulter/LivreureL.php';

$error = "";

// create livreure
$Livreure = null;

// create an instance of the controller
$LivreureL = new LivreureL();
if (
    isset($_POST["Idlivreure"]) &&
    isset($_POST["Adresselivreure"]) &&
    isset($_POST["Nomclient"]) &&
    isset($_POST["Couttotal"]) &&
    isset($_POST["Datelivreure"])
) {
    if (
        !empty($_POST["Idlivreure"]) &&
        !empty($_POST['Adresselivreure']) &&
        !empty($_POST["Nomclient"]) &&
        !empty($_POST["Couttotal"]) &&
        !empty($_POST["Datelivreure"])
    ) {
        $Livreure = new Livreure(
            $_POST['Idlivreure'],
            $_POST['Adresselivreure'],
            $_POST['Nomclient'],
            $_POST['Couttotal'],
            new DateTime($_POST['Datelivreure'])
        );
        $LivreureL->updatelivreure($Livreure, $_POST["Idlivreure"]);
        header('Location:Listlivreure.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <button><a href="Listlivreure.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['Idlivreure'])) {
        $Livreure = $LivreureL->showlivreure($_POST['Idlivreure']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="Idlivreure">Id livreure:
                        </label>
                    </td>
                    <td><input type="text" name="Idlivreure" id="Idlivreure" value="<?php echo $Livreure['Idlivreure']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Adresselivreure">Adresse livreure:
                        </label>
                    </td>
                    <td><input type="text" name="Adresselivreure" id="Adresselivreure" value="<?php echo $Livreure['Adresselivreure']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Nomclient">Nom client:
                        </label>
                    </td>
                    <td><input type="text" name="Nomclient" id="Nomclient" value="<?php echo $Livreure['Nomclient']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Couttotal">Cout total:
                        </label>
                    </td>
                    <td>
                        <input type="int" name="Couttotal" value="<?php echo $Livreure['Couttotal']; ?>" id="Couttotal">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Datelivreure">Date livreure:
                        </label>
                    </td>
                    <td>
                        <input type="Datelivreure" name="Datelivreure" id="Datelivreure" value="<?php echo $Livreure['Datelivreure']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>