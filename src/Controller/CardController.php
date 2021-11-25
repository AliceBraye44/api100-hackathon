<?php

namespace App\Controller;

use App\Model\CardManager;
use App\Controller\AbstractController;

class CardController extends AbstractController
{

    // // nombre de tours gagnés
    // public int $roundsWon = 0;

    // //cartes côté face : tableau qui contient des INT id
    // public array $facedCards = [];
    // public const MAXCARDS = 2;

    // public function play(int $id)
    // {
    //     return json_encode($id);

        // $this->idSaved();

        // // permet de compter le nombre de cartes jouées
        // if (count($_SESSION['cards_id']) == self::MAXCARDS) {

        //     // permet de verifier les resultats
        //     if (($_SESSION['cards_id'][0]) == ($_SESSION['cards_id'][1])) {

        //         // permet d'incrémenter le tableau de score
        //         $this->roundsWon = $this->roundsWon++;
        //         //ajoute les cartes à la liste des cartes retournées
        //         array_push($this->facedCards, $_SESSION['cards_id'][0], $_SESSION['cards_id'][1]);
        //         // fin de round
        //         $this->endOfRound();
        //     } else {
        //         // fin de round
        //         $this->endOfRound();
        //     }
        // } */
    // }

    // public function endOfRound()
    // {
    //     // réinitiliser le tableau de session des id des cartes
    //     $_SESSION['cards_id'] = [];
        //TO DO mise à jour de la face des cartes en front
        //TO DO régnénrer citation aléatoire
        // TO DO vérifier si on a gagné

    // }

    // public function idSaved()
    // {
    //     // permet de récuper l'id dans le get et
    //     // de l'ajouter dans le tableau des id joués
    //     if (isset($_GET['play_card'])) {
    //         if (!isset($_SESSION['cards_id'])) {

    //             $_SESSION['cards_id'] = [];
    //         }
    //         $_SESSION['cards_id'][] = $_GET['play_card'];
    //     }
    // }

}
