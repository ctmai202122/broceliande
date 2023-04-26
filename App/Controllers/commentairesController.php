<?php

namespace Broceliande\Controllers;

require_once('commentaire.php');
use PDO;

class CommentaireController {
    private $db;

    public function __construct() {
        // Instancier la connexion à la base de données
        $this->db = new PDO('mysql:host=localhost;dbname=ma_base_de_donnees;charset=utf8', 'mon_utilisateur', 'mon_mot_de_passe');
    }

    public function getAllComments() {
        // Récupérer tous les commentaires
        $query = $this->db->prepare('SELECT * FROM commentaire');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getCommentsByStatus($status) {
        // Récupérer les commentaires en fonction du statut
        $query = $this->db->prepare('SELECT * FROM commentaire WHERE status = :status');
        $query->bindValue(':status', $status, PDO::PARAM_STR);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function moderateComment($id, $status) {
        // Mettre à jour le statut du commentaire
        $query = $this->db->prepare('UPDATE commentaire SET status = :status WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':status', $status, PDO::PARAM_STR);
        $query->execute();
    }

    public function deleteComment($id) {
        // Supprimer le commentaire
        $query = $this->db->prepare('DELETE FROM commentaire WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }

    public function approveComment($id) {
        // Rétablir le commentaire
        $query = $this->db->prepare('UPDATE commentaire SET status = "En attente de modération" WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();

    }
}
?>