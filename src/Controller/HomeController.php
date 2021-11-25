<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use App\Model\CardManager;
use App\Model\ApiQuotesManager;
use App\Controller\AbstractController;


class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        return $this->twig->render('Home/index.html.twig');
    }

    /**
     * Gère la création et l'affichage des 6 photos
     *
     * @return string
     */

    public function game()
    {
        $dataQuotes = new ApiQuotesManager();
        $quote = $dataQuotes->getDataFromQuotes("https://api.britney.rest/?format=text");

        $cardManager = new CardManager();
        $pictures = $cardManager->selectSix();
        $tableau = $pictures;
        $tableau2 = array_merge($tableau, $pictures);

        return $this->twig->render('Home/game.html.twig', ['quote' => $quote, 'pictures' => $tableau2]);
    }

    public function results()
    {
        return $this->twig->render('Home/results.html.twig');
    }
}
