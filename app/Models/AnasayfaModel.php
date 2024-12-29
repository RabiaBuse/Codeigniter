<?php
namespace App\Models;
use CodeIgniter\Model;
//use MongoDB\Client;
class AnasayfaModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kulad', 'email', 'sifre']; // Hangi alanların girilebileceğini belirtiriz
}
