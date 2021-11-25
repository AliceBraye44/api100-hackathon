<?php

namespace App\Model;

use App\Model\AbstractManager;
use Symfony\Component\HttpClient\HttpClient;

class CardManager extends AbstractManager
{
    public function show()
    {
        $cardManager = new CardManager();
        $card = $cardManager->selectAll();
        return $this->twig->render("Private/chats.html.twig", ['card' => $card] );
    }


}