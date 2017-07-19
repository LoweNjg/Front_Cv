<?php
namespace Controller;

use W\Controller\Controller;
use Model\Db\DbFactory;


class CvController extends Controller
{
    /**
     * Afficher et Ajouter un Article dans la Base de Données
     */
    public function lire() {

        # Connexion à la BDD
        DbFactory::start();

        # Récupérer la Liste des Auteurs
        $utilisateurs = \ORM::for_table('t_utilisateurs')->find_result_set();

        # Affichage de la Vue
        $this->show('default/sitecedric', ['t_utilisateurs' => $utilisateurs]);
    }
}
