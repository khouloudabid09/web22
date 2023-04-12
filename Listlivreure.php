<?php
include '../Consulter/LivreureL.php';
$LivreureL = new LivreureL();
$list = $LivreureL->listlivreure();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of Livreure</h1>
        <h2>
            <a href="addlivreure.php">Add Livreure</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Idlivreure</th>
            <th>Adresselivreure</th>
            <th>Nomclient</th>
            <th>Couttotal</th>
            <th>Datelivreure</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $Livreure) {
        ?>
            <tr>
                <td><?= $Livreure['Idlivreure']; ?></td>
                <td><?= $Livreure['Adresselivreure']; ?></td>
                <td><?= $Livreure['Nomclient']; ?></td>
                <td><?= $Livreure['Couttotal']; ?></td>
                <td><?= $Livreure['Datelivreure']; ?></td>
                <td align="center">
                    <form method="POST" action="updatelivreure.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $Livreure['Idlivreure']; ?> name="Idlivreure">
                    </form>
                </td>
                <td>
                    <a href="deletelivreure.php?Idlivreure=<?php echo $Livreure['Idlivreure']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>