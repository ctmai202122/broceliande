<?php

namespace Broceliande\Models;

use Broceliande\Models\DbConnect;
use PDO;
use PDOException;

class Commentaire extends DbConnect
{
    public static function create($id_commentaire, $texte, $dateCom, $statut, $Id_contree)
    {
        $cnx = self::dbConnect();
        $req = $cnx->prepare("INSERT INTO `commentaire` (`Id_commentaire`, `texte`, `dateCom`, `statut`, `Id_contree`) 
        VALUES (:Id_commentaire, :texte, :dateCom, :statut, :Id_contree)");
        $req->execute(
            array(
                ':Id_commentaire' => $id_commentaire,
                ':texte' => $texte,
                ':dateCom' => $dateCom,
                ':statut' => $statut,
                ':Id_contree' => $Id_contree,

            )
        );
    }

    public function getAll()
    {
        $cnx = self::dbConnect();
        $req = $cnx->prepare("SELECT * FROM commentaire");
        $req->execute();
        return $req->fetchAll();
    }

    public function getById()
    {
        $cnx = self::dbConnect();
        $req = $cnx->prepare("SELECT * FROM commentaire WHERE Id_commentaire = :id_commentaire");
        $req->execute();
        return $req->fetchAll();
    }

    public function getByText()
    {
        $cnx = self::dbConnect();
        $req = $cnx->prepare("SELECT * FROM commentaire WHERE texte = :texte");
        $req->execute();
        return $req->fetchAll();
    }

    public function getByDateCom()
    {
        $cnx = self::dbConnect();
        $req = $cnx->prepare("SELECT * FROM commentaire WHERE dateCom = :dateCom");
        $req->execute();
        return $req->fetchAll();
    }

    public function getByStatut()
    {
        $cnx = self::dbConnect();
        $req = $cnx->prepare("SELECT * FROM commentaire WHERE statut = :statut");
        $req->execute();
        return $req->fetchAll();
    }

    public function getById_contree()
    {
        $cnx = self::dbConnect();
        $req = $cnx->prepare("SELECT * FROM commentaire WHERE Id_contree = :id_contree");
        $req->execute();
        return $req->fetchAll();
    }

    public static function delete($idCommentaire)
    {
        try {
            $cnx = self::dbConnect();
            $req = $cnx->prepare("DELETE FROM commentaire WHERE Id_commentaire = :id_commentaire");
            $req->bindValue(':id_commentaire', $idCommentaire, PDO::PARAM_INT);
            $req->execute();
        } catch (PDOException $e) {
            die('Erreur!:' . $e->getMessage());
        }
    }
}
?>