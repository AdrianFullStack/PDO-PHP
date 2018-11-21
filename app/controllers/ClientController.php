<?php
namespace app\controllers;

require_once "app/repositories/RepoClient.php";

use app\repositories\RepoClient;

class ClientController
{
    private $client;

    public function __construct()
    {
        $this->client = new RepoClient();
    }

    public function index(){
        return $this->client->all();
    }

    public function show($id){
        return $this->client->find($id);
    }

    public function store(array $params){
        return $this->client->create($params);
    }

    public function update($id, array $params){
        return $this->client->update($id, $params);
    }

    public function delete($id){
        return $this->client->delete($id);
    }
}