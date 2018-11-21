<?php
namespace app\models;

require_once "app/models/Connection.php";

class Client extends Connection
{
    private $instance;
    private $name;
    private $email;
}