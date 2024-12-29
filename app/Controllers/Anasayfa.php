<?php namespace App\Controllers;

use CodeIgniter\Controller;
use MongoDB;
use App\Models\AnasayfaModel;

class Anasayfa extends BaseController
{
    public function index()
    {
        /*{ 
            // Modeli kullanarak verileri alın 
            $viewData['products'] = $this->common_model->urunler("urunler"); 
            // Görünümü yükleyin 
            return view('anasayfa', $viewData);
        }*/
        $session = session();

        if ($session->has('durum') && $session->get('durum')) 
        {
            return view('tema/header')
                 . view('sayfalar/anasayfa')
                 . view('tema/footer');
        } else {
            return redirect()->to('/login'); // Eğer oturum açılmamışsa yönlendirme yapabilirsiniz
        }
    }


    public function login()
    {
        $session = session();
        if ($session->has('durum') && $session->get('durum')) {
            return redirect()->to(base_url('panel'));
        } else {
            if (!$this->request->is('post')) {
                return view('tema/header') . view('sayfalar/login') . view('tema/footer');
            }

            $rules = [
                'kulad' => 'required',
                'sifre' => 'required',
            ];

            if (!$this->validate($rules)) {
                return view('tema/header') . view('sayfalar/login') . view('tema/footer');
            }

            $veri = $this->validator->getValidated();
            $model = model('AnasayfaModel'); // Model tanımlaması

            $sor = $model->where(['kulad' => $veri['kulad'], 'sifre' => $veri['sifre']])->find();
            if(count($sor)>0)
            {
               $kul_bilgi=[
                'isim'=>'yonetici',
                'durum'=>true
               ];
               $session->set($kul_bilgi);
               return redirect()->to(base_url('panel'));

            }
            else
            {
                return view('tema/header',['uyari'=>'yanlış kullanıcı']) . view('sayfalar/login') . view('tema/footer');

            }
        } 
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('login'));
    }

    public function panel()
    {
        $session = session();
        if ($session->get('durum') !== true) {
            return redirect()->to(base_url('login'));
        }
        return view('tema/header') . view('sayfalar/panel') . view('tema/footer');
    }

    public function signup()
    {
        $session = session();
    
        // Eğer kullanıcı zaten giriş yaptıysa panel sayfasına yönlendir
        if ($session->has('durum') && $session->get('durum')) {
            return redirect()->to(base_url('panel'));
        } else {
            // POST isteği değilse, signup sayfasını döndür
            if ($this->request->getMethod() != 'post') {
                return view('tema/header') . view('sayfalar/signup') . view('tema/footer');
            }
    
            // Form doğrulama kuralları
            $rules = [
                'kulad' => 'required|min_length[3]|max_length[20]',  // Kullanıcı adı için kısıtlamalar
                'email' => 'required|valid_email',                    // E-posta geçerlilik kontrolü
                'sifre' => 'required|min_length[6]',                   // Şifre için kısıtlamalar
            ];
    
            // Eğer form doğrulaması başarısızsa, hataları geri döndür
            if (!$this->validate($rules)) {
                return view('tema/header', [
                    'validation' => $this->validator
                ]) . view('sayfalar/signup') . view('tema/footer');
            }
    
            // Form verilerini al
            $veri = $this->request->getPost();
            $model = new AnasayfaModel();  // AnasayfaModel'inizi burada kullanıyorsunuz
    
            // Şifreyi hashleyelim
            $hashedPassword = password_hash($veri['sifre'], PASSWORD_BCRYPT);
    
            // Veritabanına yeni kullanıcıyı ekleyelim
            $sor = $model->insert([
                'kulad' => $veri['kulad'],
                'email' => $veri['email'],
                'sifre' => $hashedPassword,  // Hashlenmiş şifreyi kaydediyoruz
            ]);
    
            // Kayıt başarılı ise login sayfasına yönlendirelim
            if ($sor) {
                return redirect()->to(base_url('login'));
            } else {
                // Kayıt başarısızsa uyarı mesajı
                return view('tema/header', ['uyari' => 'Kayıt işlemi başarısız']) . view('sayfalar/signup') . view('tema/footer');
            }
        }
    }
    

    public function anasayfa()
    {
        return view('tema/header') . view('sayfalar/anasayfa') . view('tema/footer');
    }

    public function iletisim()
    {
        return view('tema/header') . view('sayfalar/iletisim') . view('tema/footer');
    }

    public function hakkimizda()
    {
        return view('tema/header') . view('sayfalar/hakkimizda') . view('tema/footer');
    }

    public function hirka()
    {
        return view('tema/header') . view('sayfalar/hirka') . view('tema/footer');
    }
    
    public function bebek()
    {
        return view('tema/header') . view('sayfalar/bebek') . view('tema/footer');
    }
    
    public function bere_eldiven()
    {
        return view('tema/header') . view('sayfalar/bere_eldiven') . view('tema/footer');
    }
    
    public function oyuncak()
    {
        return view('tema/header') . view('sayfalar/oyuncak') . view('tema/footer');
    }
    
    public function dekorasyon()
    {
        return view('tema/header') . view('sayfalar/dekorasyon') . view('tema/footer');
    }

    public function urunlerimiz()
    {
        $kul_adi = "adagungor510";
        $sifre = "urunyonetimi";
        $adres = "cluster0.nlnlwdf.mongodb.net";
        $veritabani = "test";
    
        $client = new MongoDB\Client("mongodb+srv://$kul_adi:$sifre@$adres");

        // Tüm ürünlerin adını, fiyatını ve resimlerinin adını görüntüleme
        $koleksiyon_adi = 'products';
                
        $koleksiyon = $client->selectCollection($veritabani, $koleksiyon_adi);
        $documents = $koleksiyon->find(); // Belirtilen bir filtre olmadan tüm belgeleri getirir
    
        $veri['products']=$documents;
    
        return view('tema/header',$veri) . view('sayfalar/urunlerimiz') . view('tema/footer');
    }
/*
 public function category($category) {
     $productModel = new ProductModel(); 
     $data['products'] = $productModel->getProductsByCategory($category); 
     return view('tema/header', $data) . view('sayfalar/category_view', $data) . view('tema/footer');
 }*/

 
    public function test($ornek)
    {
        $kul_adi = "adagungor510";
        $sifre = "urunyonetimi";
        $adres = "cluster0.nlnlwdf.mongodb.net";
        $veritabani = "test";
    
        $client = new MongoDB\Client("mongodb+srv://$kul_adi:$sifre@$adres");        
        
        switch ($ornek) {
            case 1:
                $koleksiyon_adi='products';
    
                $koleksiyon = $client->selectCollection($veritabani, $koleksiyon_adi);
                $document = $koleksiyon->findOne(['product_name' => 'Oyuncak Tavşan']);
                //var_dump($document);
                foreach ($document as $key => $value) {
                    echo $key.' -> '.$value.'<br>';
                }
                break;
            case 2:
                $koleksiyon_adi='products';
    
                $koleksiyon = $client->selectCollection($veritabani, $koleksiyon_adi);
                $sonuc = $koleksiyon->insertMany([ 
                    [                   
                        'product_name' => 'Oyuncak Ayi',
                        'product_price' => '200',
                        'product_image' => 'Oyuncak_ayi.jpg',
                    ],
                    [
                        'product_name' => 'Örgü Sepet',
                        'product_price' => '50',
                        'product_image' => 'siyah_bere.jpg',
                    ],
                ]);
                break;
                case 3:{//tek bir veriyi güncelleme (sorgulamada ilk çıkan veri güncellenir)
                    $koleksiyon_adi='products';
    
                    $koleksiyon = $client->selectCollection($veritabani, $koleksiyon_adi);
                    $sonuc = $koleksiyon->updateOne(
                        [
                            'product_name' => 'Örgü Sepet'
                        ],
                        ['$set' => ['text' => 'yorum güncellendi']]
                    );
                }break;
                case 4:{//koleksiyondaki toplam veri miktarı
                    $koleksiyon_adi='products';
    
                    $koleksiyon = $client->selectCollection($veritabani, $koleksiyon_adi);
                    $toplam = $koleksiyon->countDocuments([]);
    
                    echo $toplam;
                }break;
                case 5: {
                    // Tüm ürünlerin adını, fiyatını ve resimlerinin adını görüntüleme
                    $koleksiyon_adi = 'products';
                
                    $koleksiyon = $client->selectCollection($veritabani, $koleksiyon_adi);
                    $documents = $koleksiyon->find(); // Belirtilen bir filtre olmadan tüm belgeleri getirir
                
                    foreach ($documents as $document) {
                        echo 'Ürün Adı: ' . $document['product_name'] . '<br>';
                        echo 'Fiyat: ' . $document['product_price'] . '<br>';
                        echo 'Resim: ' . $document['product_image'] . '<br>';
                        echo '<hr>'; // Her bir ürünü ayırmak için
                    }
                } break;
                
                
            default:
                echo "Geçersiz örnek numarası.";
                break;
        }
        
    }

    
}    

