<?php
namespace app\contracts;

interface IBasic
{
    public function all();
    public function find($id);
    public function create(array $params);
    public function update($id, array $params);
    public function delete($id);
}