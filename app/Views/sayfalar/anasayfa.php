<?php
// PascalCase'e dönüştüren fonksiyon
function pascalize($str) {
    // Boşlukları ve özel karakterleri kaldırarak her kelimeyi büyük harf ile başlat
    $str = preg_replace('/[^a-zA-Z0-9]/', ' ', $str); // özel karakterleri boşlukla değiştir
    $str = ucwords(strtolower($str));  // her kelimenin başını büyük yap
    $str = str_replace(' ', '', $str); // boşlukları kaldır
    return $str; // PascalCase formatında döndür
}
?>

<!-- HTML içeriği burada -->

<section class="hero">
    <div class="hero-content">
        <div class="hero-text">
            <h1>En Yeni Koleksiyon</h1>
            <div class="discount-badge">
                <span class="discount-text">%50'ye</span>
                <span class="discount-subtext">Varan İndirimler</span>
            </div>
            <p class="description">Yeni sezon ürünlerimizle tarzınızı yansıtın. Sınırlı süre için kaçırılmayacak fırsatlar sizleri bekliyor!</p>
            <button class="btn-shop">
                Hemen Alışverişe Başla!
                <span class="btn-arrow">→</span>
            </button>
        </div>
    </div>
    <div class="hero-image">
        <img src="assets/image/banner3.jpg" alt="Hero Image">
    </div>
</section>


<!-- top cards -->
<div class="container" id="top-cards">
    <div class="row">
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <img src="assets/image/esek.jpeg" alt="Oyuncak Eşek">
                <div class="card-img-overlay">
                    <h5 class="card-titel">Oyuncak Eşek</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p class="price"><strong>1000TL <strike>1250TL</strike></strong></p>
                    <button>Sipariş Ver</button>
                </div>
            </div>
        </div>
        <br> <br>
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <img src="assets/image/hirka2.jpeg" alt="Papatya Desenli Hırka">
                <div class="card-img-overlay">
                    <h5 class="card-titel">Papatya Desenli Hırka</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p class="price"><strong>600TL <strike>1000TL</strike></strong></p>
                    <button>Sipariş Ver</button>
                </div>
            </div>
        </div>
        <br> <br>
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <img src="assets/image/canta3.jpeg" alt="Viking Çanta">
                <div class="card-img-overlay">
                    <h5 class="card-titel">Viking Çanta</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                    <p class="price"><strong>500TL <strike>650TL</strike></strong></p>
                    <button>Sipariş Ver</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- top cards -->
    

    <!-- banner -->
    <div class="banner">
    <div class="container">
        <div class="banner-content">
            <div class="banner-text">
                <h2>Özel Koleksiyon</h2>
                <p>El yapımı özel tasarım ürünlerimizi keşfedin</p>
                <a href="<?= base_url('dekorasyon') ?>" class="banner-btn">Koleksiyonu Keşfet</a>
            </div>
            <div class="banner-image">
                <img src="assets/image/banner4.jpg" alt="Özel Koleksiyon">
            </div>
        </div>
    </div>
</div>
    <!-- banner -->

    <!-- product cards -->
    <div class="container" id="product-cards">
        <h1 class="text-center">ÖNE ÇIKAN ÜRÜNLERİMİZ</h1>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="assets/image/bebek.jpeg" alt="">
                    <div class="card-body">
                        <h3>Örgü 3 Parça Bebek Seti
                        </h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>2000TL <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="assets/image/hediyellik.jpeg" alt="">
                    <div class="card-body">
                        <h3>Hediyelik Bebek Seti</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>500TL<span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="assets/image/bataniye.jpeg" alt="">
                    <div class="card-body">
                        <h3>Örgü Bataniye</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>1000TL<span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="assets/image/oyuncak_kurbik.jpeg" alt="">
                    <div class="card-body">
                        <h3>Oyuncak Kurbağa</h3>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <div class="star">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                        </div>
                        <h5>1200TL <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
        </div>

        <a href="<?= base_url('urunlerimiz') ?>" id="viewmorebtn">Daha Fazla</a>
    </div>
    <!-- product cards -->

    <!-- product -->
    <div class="container" style="margin-top: 100px;">
    <hr>
</div>
<div class="container">
    <h3 style="font-weight: bold;">Ürünlerimiz.</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vero eius ipsam incidunt illum totam 
        nostrum quidem sit cumque fugit. Accusamus rem praesentium labore tempore ullam porro quaerat fugiat 
        cum ipsum, sint perferendis voluptate ad, quod reiciendis officia! In voluptate quae expedita sunt eum placeat 
        alias soluta. Rem commodi, impedit error doloribus ratione at provident beatae, aut doloremque sunt possimus 
        voluptas recusandae nam aliquid eos quia minus harum repellat quae eveniet laborum dolore esse voluptate sed. 
        Voluptate ullam dolor sapiente neque labore hic nam odio qui consectetur porro minima nesciunt suscipit vitae 
        obcaecati reiciendis itaque ipsum unde, debitis nemo soluta!</p>

    <hr>
</div>
    <!-- product -->
<section class="features">
        <div class="feature-grid">
            <div class="feature-card">
                <i class="fa-solid fa-cart-shopping"></i>
                <h3>Ücretsiz Kargo</h3>
                <p>100TL üzeri siparişlerde</p>
            </div>
            <div class="feature-card">
                <i class="fa-solid fa-truck"></i>
                <h3>Hızlı Teslimat</h3>
                <p>Türkiye çapında</p>
            </div>
            <div class="feature-card">
                <i class="fa-solid fa-thumbs-up"></i>
                <h3>Büyük Seçim</h3>
                <p>Geniş ürün yelpazesi</p>
            </div>
        </div>
    </section>
