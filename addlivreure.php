<?php

include '../Consulter/LivreureL.php';

$error = "";

// create Livreure
$Livreure = null;

// create an instance of the controller
 $LivreureL= new LivreureL();
if (
    isset($_POST["Adresselivreure"]) &&
    isset($_POST["Nomclient"]) &&
    isset($_POST["Couttotal"]) &&
    isset($_POST["Datelivreure"])
) {
    if (
        !empty($_POST['Adresselivreure']) &&
        !empty($_POST["Nomclient"]) &&
        !empty($_POST["Couttotal"]) &&
        !empty($_POST["Datelivreure"])
    ) {
        $Livreure= new Livreure(
            null,
            $_POST['Adresselivreure'],
            $_POST['Nomclient'],
            $_POST['Couttotal'],
            new DateTime($_POST['Datelivreure'])
        );
        $LivreureL->addlivreure($Livreure);
        // header('Location:Listlivreure.php');
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
    <header>
    <script>
    function verif() {
        // Vérifier si le champ firstName est vide
        if (document.getElementById('Adresselivreure').value.trim() == "") {
            document.getElementById('error1').innerHTML = "Le champ firstName est obligatoire.";
            return false;
        } else {
            document.getElementById('error1').innerHTML = "";
        }
        
        // Vérifier si le champ lastName est vide
        if (document.getElementById('Nomclient').value.trim() == "") {
            document.getElementById('error2').innerHTML = "Le champ lastName est obligatoire.";
            return false;
        } else {
            document.getElementById('error2').innerHTML = "";
        }
        
        // Vérifier si le champ address est vide
        if (document.getElementById('address').value.trim() == "") {
            document.getElementById('error3').innerHTML = "Le champ address est obligatoire.";
            return false;
        } else {
            document.getElementById('error3').innerHTML = "";
        }
        
        // Vérifier si le champ dob est vide
        if (document.getElementById('dob').value.trim() == "") {
            document.getElementById('error4').innerHTML = "Le champ dob est obligatoire.";
            return false;
        } else {
            document.getElementById('error4').innerHTML = "";
        }
        
        return true;
    }
</script>

    </header>
    <a href="Listlivreure.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="Adresselivreure">Adresse livreure:
                    </label>
                </td>
                <td><input type="text" name="Adresselivreure" id="Adresselivreure" maxlength="20">
            <p id="error1" class="error" ></p>
            </td>
            </tr>
            <tr>
                <td>
                    <label for="Nomclient">Nomc lient:
                    </label>
                </td>
                <td><input type="text" name="Nomclient" id="Nomclient" maxlength="20">
                <p id="error2" class="error" ></p>
            </td>
            </tr>
            <tr>
                <td>
                    <label for="Couttotal">Couttotal:
                    </label>
                </td>
                <td>
                    <input type="int" name="Couttotal" id="Couttotal">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Datelivreure">Date livreure:
                    </label>
                </td>
                <td>
                    <input type="date" name="Datelivreure" id="Datelivreure">
                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>