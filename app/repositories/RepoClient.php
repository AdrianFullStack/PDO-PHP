<?php
namespace app\repositories;

require_once "app/contracts/IBasic.php";
require_once "app/models/Client.php";

use app\contracts\IBasic;
use app\models\Client;

class RepoClient implements IBasic
{
    private $model;
    public function __construct()
    {
        $model = new Client();
        $this->model = $model;
    }

    public function all()
    {
        $sql = "SELECT * FROM clients";
        $pdo = $this->model->getInstance();
        $statement = $pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll($pdo::FETCH_ASSOC);
    }

    public function find($id)
    {
        $sql = "SELECT * FROM clients WHERE id = ?";
        $pdo = $this->model->getInstance();
        $statement = $pdo->prepare($sql);
        $statement->execute([$id]);
        return $statement->fetchObject();
    }

    public function create(array $params)
    {
        $sql = "INSERT INTO clients (name, email, created_at) VALUES (:name, :email, :created_at)";
        $pdo = $this->model->getInstance();
        $statement = $pdo->prepare($sql);
        return $statement->execute([
            'name' => $params['name'],
            'email' => $params['email'],
            'created_at' => $params['date']
        ]);
    }

    public function update($id, array $params)
    {
        $sql = "UPDATE clients SET name=:name, email=:email WHERE id = :id";
        $pdo = $this->model->getInstance();
        $statement = $pdo->prepare($sql);
        return $statement->execute([
            'id' => $id,
            'name' => $params['name'],
            'email' => $params['email'],
        ]);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM clients WHERE id = ?';
        $pdo = $this->model->getInstance();
        $statement = $pdo->prepare($sql);
        return $statement->execute([$id]);
    }
}