<?php 
namespace App\Models;

use CodeIgniter\Model;

class CartModelLocal extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'id';
    protected $allowedFields = ['ci_session', 'product_id', 'product_name', 'product_price', 'quantity'];

    public function getCartItems($session_id)
    {
        return $this->where('ci_session', $session_id)->findAll();
    }

    public function countCartItems($session_id)
    {
        return $this->where('ci_session', $session_id)->countAllResults();
    }

    public function removeFromCart($itemId)
    {
        return $this->where('id', $itemId)->delete();
    }
}
