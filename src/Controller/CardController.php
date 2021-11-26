<?php

namespace App\Controller;

use App\Controller\AbstractController;
use Symfony\Component\Console\Helper\Dumper;

class CardController extends AbstractController
{

   public const MAXCARDS = 2;
   public $winresults;
   public $roundIsWin;
   public $winTheGame = false;

    public function play(int $id)
    {
        // var_dump("début de play");
        $this->idSaved();

    //    var_dump($_SESSION["cards_id"]);
    //  $message = "retrourne encore";

        // permet de compter le nombre de cartes jouées
        if (count($_SESSION['cards_id']) >= self::MAXCARDS) {
            // var_dump("nombre de cartes max atteint");

            //$message = "2cartes max";
            //return $message;

            // permet de verifier les resultats
            if (($_SESSION['cards_id'][0]) == $_SESSION['cards_id'][1]) {
                //$message = "you win this round!" ;
                $this->roundIsWin = true;

                // permet d'incrémenter le tableau de score en cas de victoire
                $_SESSION['roundsWon']++;

            } else {
                $message = "you loose this round, looser !";
                $this->roundIsWin = false;
            }

            $this->endOfRound();


            // var_dump($_SESSION);
            // var_dump($message);
            // var_dump($this->winresults);
            // // var_dump($this->facedCards);

        }

    //var_dump($this->roundIsWin);
        return json_encode( ['win' => $this->roundIsWin , 'winTheGame'=> $this->winTheGame]);
    }



    public function endOfRound()
    {
        // réinitiliser le tableau de session des id des cartes
        $_SESSION['cards_id'] = [];
        // vérifier si on a gagné
        $this->win();
    }

    public function win()
    {
        if ($_SESSION['roundsWon'] >= 6) {
            $this->winresults = "free britney ! ";
            $_SESSION['roundsWon'] = 0 ;
            $this->winTheGame = true;

        } else {
            $this->winresults = " y a encore du taf ";
            $this->winTheGame = false;
        }
    }

    public function idSaved()
    {
        // permet de récuper l'id dans le get et
        // de l'ajouter dans le tableau des id joués

        session_start();

        if (isset($_GET['id'])) {

            if (!isset($_SESSION['cards_id'])) {

                $_SESSION['cards_id'] = [];
            }
            $_SESSION['cards_id'][] = $_GET['id'];
        }
    }
}
