<?php

declare(strict_types=1);

use abricotdepot\web\actions\DeconnexionAction;
use abricotdepot\web\actions\HomeAction;
use abricotdepot\web\actions\ConnexionAction;
use abricotdepot\web\actions\DetailProduitAction;
use abricotdepot\web\actions\PanierAction;
use abricotdepot\web\actions\PostConnexionAction;
use abricotdepot\web\actions\GetProfileAction;
use abricotdepot\api\middlewares\AuthnMiddleware;
use abricotdepot\web\actions\AddToPanierAction;
use abricotdepot\web\actions\PanierAddAction;
use abricotdepot\web\actions\PanierRemoveAction;
use abricotdepot\web\actions\ConfirmationReservationAction;
use abricotdepot\web\actions\PostInscriptionAction;

return function (\Slim\App $app): \Slim\App {


    

    return $app;
};

?>