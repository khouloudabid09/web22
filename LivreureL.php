<?php
include '../config.php';
include '../Model/Livreure.php';

class LivreureL
{
    public function listlivreure()
    {
        $sql = "SELECT * FROM Livreure";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deletelivreure($Idlivreure)
    {
        $sql = "DELETE FROM Livreure WHERE Idlivreure = :Idlivreure";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':Idlivreure', $Idlivreure);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addlivreure($Livreure)
    {
        $sql = "INSERT INTO Livreure 
        VALUES (NULL, :Adresselivreure,:Nomclient, :Couttotal,:Datelivreure)";
        $db = config::getConnexion();
        try {
            print_r($Livreure->getDatelivreure()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'Adresselivreure' => $Livreure->getAdresselivreure(),
                'Nomclient' => $Livreure->getNomclient(),
                'Couttotal' => $Livreure->getCouttotal(),
                'Datelivreure' => $Livreure->getDatelivreure()->format('Y/m/d')
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updatelivreure($Livreure, $Idlivreure)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE Livreure SET 
                   Adresselivreure = :Adresselivreure, 
                   Nomclient = :Nomclient, 
                   Couttotal = :Couttotal, 
                   Datelivreure = :Datelivreure
                WHERE Idlivreure= :Idlivreure'
            );
            $query->execute([
                'Idlivreure' => $Idlivreure,
                'Adresselivreure' => $Livreure->getAdresselivreure(),
                'Nomclient' => $Livreure->getNomclient(),
                'Couttotal' => $Livreure->getCouttotal(),
                'Datelivreure' => $Livreure->getDatelivreure()->format('Y/m/d')
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

     function showlivreure($Idlivreure)
    {
         $sql = "SELECT * from Livreure where Idlivreure = $Idlivreure";
         $db = config::getConnexion();
         try {
             $query = $db->prepare($sql);
            $query->execute();

            $Livreure = $query->fetch();
            return $Livreure;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
     }
}
