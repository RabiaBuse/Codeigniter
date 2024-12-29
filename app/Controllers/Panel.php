<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\PanelModel;

class Panel extends BaseController
{
    protected $helpers=['form','text'];

    public function index()
    {
        $session = session();
        if ($session->has('durum') && $session->get('durum')) 
        {
            return view('tema/header', ['isim' => $session->get('isim'), 'durum' => $session->get('durum')])
                . view('tema/panel_header')
                . view('sayfalar/panel')
                . view('tema/panel_footer')
                . view('tema/footer');
        }
        else
        {
            return redirect()->to(base_url('login'));
        }
    }
    public function login()
    {
        $session = session();
        
        // Kullanıcı zaten giriş yaptıysa panel sayfasına yönlendir
        if ($session->has('durum') && $session->get('durum')) {
            return redirect()->to(base_url('panel'));
        } else {
            // POST isteği değilse login sayfasını döndür
            if (!$this->request->getMethod() == 'post') {
                return view('tema/header') . view('sayfalar/login') . view('tema/footer');
            }

            // Form doğrulama kuralları
            $rules = [
                'kulad' => 'required|min_length[5]|max_length[20]', // Kullanıcı adı için uzunluk kuralları
                'sifre' => 'required|min_length[3]' // Şifre için uzunluk kuralı
            ];

            // Eğer form geçerli değilse, hataları görüntüle
            if (!$this->validate($rules)) {
                return view('tema/header') . view('sayfalar/login', ['validation' => \Config\Services::validation()]) . view('tema/footer');
            }

            $veri = $this->request->getPost(); // Form verilerini al
            $model = new AnasayfaModel(); // Model tanımlaması

            // Kullanıcı doğrulama: Hashlenmiş şifre kontrolü yapılacak
            $sor = $model->where([
                'kulad' => $veri['kulad'],
            ])->first();

            if ($sor && password_verify($veri['sifre'], $sor['sifre'])) {
                // Şifre doğruysa, oturum açılır
                $kul_bilgi = [
                    'isim' => $sor['kulad'], // Kullanıcı adı
                    'durum' => true,
                ];
                $session->set($kul_bilgi);
                return redirect()->to(base_url('panel')); // Panel sayfasına yönlendir
            } else {
                // Kullanıcı adı veya şifre hatalıysa, uyarı mesajı göster
                return view('tema/header', ['uyari' => 'Yanlış kullanıcı adı veya şifre']) . view('sayfalar/login') . view('tema/footer');
            }
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to(base_url('login'));
    }

    public function signup() {
        $session = session();
        if ($session->has('durum') && $session->get('durum')) {
            return redirect()->to(base_url('signup'));
        } else {
            if (!$this->request->is('post')) {
                return view('tema/header') . view('sayfalar/signup') . view('tema/footer');
            }
            $rules = [
                'kulad' => 'required',
                'email' => 'required',
                'sifre' => 'required',
            ];

            if (!$this->validate($rules)) {
                return view('tema/header') . view('sayfalar/signup') . view('tema/footer');
            }
            $veri= $this->validator->getValidated();
            $model=model('AnasayfaModel');

            $sor=$model->where(['kulad'=>$veri['kulad'],['email'=>$veri['email']],['sifre'=>$veri['sifre']]])->find();
            var_dump($sor);
  
            
        }
    }
}