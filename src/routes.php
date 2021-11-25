<?php

// list of accessible routes of your application, add every new route here
// key : route to match
// values : 1. controller name
//          2. method name
//          3. (optional) array of query string keys to send as parameter to the method
// e.g route '/item/edit?id=1' will execute $itemController->edit(1)
return [
    '' => ['HomeController', 'index',],
    'play_card' => ['CardController', 'play', ['id']],
    'home/game' => ['HomeController', 'game'],
<<<<<<< HEAD
    'home/results' => ['HomeController', 'results'],
];
=======
    'home/results' => ['HomeController', 'results']
];
>>>>>>> 853a81d5a64c1dd6944ed2ea359d091872a58072
