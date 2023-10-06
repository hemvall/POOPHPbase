<?php
include '../libs/pdo.php';


function donneArmeByIdV1($id) {
    
    $pdo = PDO2::getInstance();
    
    $requete = $pdo->prepare("...");
    $bv1 = $requete->bindValue(...);
    $executionok = $requete->execute();
    $lArme = $requete->fetch();
    if (is_array($lArme)){
         return $lArme;
    }
    else {
             
          throw new Exception("aucune arme pour cet identifiant");
                    
    }
    
    
}

function ajouteArme(Arme $arme) {
    
        $query = "INSERT INTO armes (id, nom, nomImage, description) VALUES (:id, :nom, :nomImage, :description)";

        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':id', $arme->getId());
        $stmt->bindParam(':nom', $arme->getNom());
        $stmt->bindParam(':nomImage', $arme->getNomImage());
        $stmt->bindParam(':description', $arme->getDescription());

        $result = $stmt->execute();

        return $result;
}

?>
