<?php

namespace App\Models;

use CodeIgniter\Model;
use MongoDB\Client;

class CartModel extends Model
{
    protected $client;
    protected $db;
    protected $collection;

    public function __construct()
    {
        parent::__construct();
        $this->client = new Client("mongodb+srv://adagungor510:urunyonetimi@cluster0.nlnlwdf.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0");
        $this->db = $this->client->selectDatabase('test');
        $this->collection = $this->db->selectCollection('products');
    }

    public function addToCart($data)
    {
        return $this->collection->insertOne($data);
    }

    public function getCartItems($userId)
    {
        return $this->collection->find(['user_id' => $userId])->toArray();
    }

    public function removeFromCart($itemId)
    {
        return $this->collection->deleteOne(['_id' => new \MongoDB\BSON\ObjectId($itemId)]);
    }
}
