<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\CartModelLocal;
use CodeIgniter\Controller;

class CartController extends Controller
{
    protected $cartModel;

    public function __construct()
    {
        $this->cartModel = new CartModel();
    }
    public function add()
    {
        $model = model("CartModelLocal");
        $data = [
            'ci_session' => session()->session_id,
            'product_id' => $this->request->getPost('product_id'),
            'product_name' => $this->request->getPost('product_name'),
            'product_price' => $this->request->getPost('product_price'),
            'quantity' => $this->request->getPost('quantity'),
        ];

        log_message('debug', 'POST Data: ' . print_r($data, true));

        if ($model->insert($data)) {
            return $this->response->setJSON(['status' => 'success', 'message' => 'Ürün sepete eklendi.']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Ürün sepete eklenemedi.']);
        }
    }
    // CartController.php
    public function view()
    {
    // Sepetteki ürünleri çek
    $ci_session = session()->get('ci_session');
    
    $cartModel = new CartModelLocal();
    $cartItems = $cartModel->where('ci_session', $ci_session)->findAll();

    // Sepeti view'a ilet
    return view('sayfalar/cart_view', ['cart' => $cartItems]); // Dosya ismi ve veri gönderimi
}



    public function remove($itemId)
    {
        $this->cartModel->removeFromCart($itemId);
        return redirect()->to('/cart_view');
    }
}