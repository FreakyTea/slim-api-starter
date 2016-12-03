<?php

/* Controllers
–––––––––––––––––––––––––––––––––––––––*/
$container['App\HelloModule\API\HelloController'] = function ($c) {
    return new App\HelloModule\API\HelloController();
};
