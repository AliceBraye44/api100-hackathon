<?php

namespace App\Controller;

use App\Controller\AbstractController;
use Symfony\Component\Console\Helper\Dumper;

class CardController extends AbstractController
{


    // //cartes côté face : tableau qui contient des INT id
    // public array $facedCards = [];
   public const MAXCARDS = 2;
   public $winresults;


    public function play(int $id)
    {
        var_dump("début de play");
        $this->idSaved();

       var_dump($_SESSION["cards_id"]);

        // permet de compter le nombre de cartes jouées
        if (count($_SESSION['cards_id']) >= self::MAXCARDS) {
            var_dump("nombre de cartes max atteint");

            //$message = "2cartes max";
            //return $message;

            // permet de verifier les resultats
            if (($_SESSION['cards_id'][0]) == $_SESSION['cards_id'][1]) {
                $message = "you win this round!" ;
                // permet d'incrémenter le tableau de score
                $_SESSION['roundsWon']++;

            } else {
                $message = "you loose this round, looser !";

            }

            var_dump($_SESSION);
            $this->endOfRound();
            var_dump($_SESSION);
            var_dump($message);
            var_dump($this->winresults);

            //return json_encode($message);
        }
    }
/*


        //ajoute les cartes à la liste des cartes retournées
        array_push($this->facedCards, $_SESSION['cards_id'][0], $_SESSION['cards_id'][1]);


        // fin de round
        $this->endOfRound();
       } else {
            // fin de round
            $this->endOfRound();
        } */
    // }


    public function win()
    {
        if ($_SESSION['roundsWon'] >= 6 ) {
            $this->winresults = "free britney ! ";
            $win = true;
            $_SESSION['roundsWon'] = 0 ;
            // header("Location: home/results");

        } else {
            $this->winresults = " y a encore du taf ";
        }
    }

    public function endOfRound()
    {
        // réinitiliser le tableau de session des id des cartes
        $_SESSION['cards_id'] = [];
        // vérifier si on a gagné
        $this->win();
        //TO DO mise à jour de la face des cartes en front
        //TO DO régnénrer citation aléatoire
    }

    public function idSaved()
    {
        var_dump("dans idsaveed");
        // permet de récuper l'id dans le get et
        // de l'ajouter dans le tableau des id joués

        session_start();
        $_SESSION['roundsWon'];

        if (isset($_GET['id'])) {

            if (!isset($_SESSION['cards_id'])) {

                $_SESSION['cards_id'] = [];
            }
            $_SESSION['cards_id'][] = $_GET['id'];

        }


    }


}