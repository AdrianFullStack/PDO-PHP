<?php
require_once "app/controllers/ClientController.php";

use app\controllers\ClientController;

$c = new ClientController();

$response = $c->index();
//$response = $c->show(1);
/*
$response = $c->store([
    'name' => 'Karen Elizabeth',
    'email' => 'eliza@gmail.com',
    'date' => date('Y-m-d H:i:s')
]);
/*/
/*
$response = $c->update(
    3,
    [
        'name' => 'Diana Lorena',
        'email' => 'diana@gmail.com',
    ]
);
/*/

//$response = $c->delete(4);

echo json_encode( $response );
