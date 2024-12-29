<style>
h1 {
    margin-top: 30px;
    color: #2D3436;
    text-shadow: 1px 1px 1px black;
    border-bottom: 2px solid #ffd700; /* Başlık altı çizgi eklendi */
    display: inline-block;
    padding-bottom: 8px;
    text-align: left; /* Sola hizalandı */
    margin-left: 60px; /* Sol kenardan boşluk eklendi */
}

    /* Ürün Kartları Konteyneri */
    .container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin: 20px auto;
        padding: 20px;
        max-width: 1200px;
    }

    /* Ürün Kartları */
    .product-card {
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    /* Ürün Görselleri */
    .product-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    /* Ürün Başlığı */
    .product-card h3 {
        font-size: 18px;
        margin: 10px 10px 5px;
        color: #444;
    }

    /* Ürün Açıklaması */
    .product-card p {
        color: #777;
        font-size: 14px;
        margin: 0 10px 10px;
    }

    /* Ürün Fiyat Alanları */
    .price-container {
        display: flex;
        justify-content: center;
        align-items: baseline;
        margin: 10px 0;
    }

    .price {
        color:rgb(11, 13, 12);
        font-size: 18px;
        font-weight: bold;
    }

    .old-price {
        text-decoration: line-through;
        color: #e74c3c;
        font-size: 14px;
        margin-left: 10px;
    }
/* Sepete Ekleme Butonu */
.add-to-cart-btn {
    display: block;
    background-color:rgb(14, 16, 14);
    color: white;
    font-size: 16px;
    padding: 10px;
    border: none;
    border-radius: 5px;
    width: 90%; /* Buton tüm kart genişliği kadar genişler */
    margin: 10px auto;
    cursor: pointer;
    text-align: center;
    transition: background-color 0.3s;
}

.add-to-cart-btn:hover {
    background-color:rgb(14, 16, 14);
}

/* Sepete Eklendi Mesajı */
.cart-message {
    display: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    padding: 10px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: bold;
}


</style>

<h1>EV VE DEKORASYON ÜRÜNLERİMİZ</h1>
<div class="container">
    <!-- Ürün Kartları -->
    <div class="product-card">
        <img src="assets/image/orgu_sepet.jpg" alt="Hırka">
        <h3>Örgü Sepet</h3>
        <div class="price-container">
            <span class="price">150 TL</span>
        </div>
        <!-- Sepete Ekle butonu -->
        <button class="add-to-cart-btn" onclick="showMessage(this)">Sepete Ekle</button>
        <div class="cart-message">Sepete Eklendi</div>
    </div>

    <div class="product-card">
        <img src="assets/image/sus_saksi.jpg" alt="Hediyelik Bebek Seti">
        <h3>Süs Saksı</h3>
        <div class="price-container">
            <span class="price">100 TL</span>

        </div>
        <!-- Sepete Ekle butonu -->
        <button class="add-to-cart-btn" onclick="showMessage(this)">Sepete Ekle</button>
        <div class="cart-message">Sepete Eklendi</div>
    </div>

    <div class="product-card">
        <img src="assets/image/matara.jpeg" alt="Örgü Battaniye">
        <h3>Amigurimi Matara Çantası</h3>
        <div class="price-container">
            <span class="price">300 TL</span>
        </div>
        <!-- Sepete Ekle butonu -->
        <button class="add-to-cart-btn" onclick="showMessage(this)">Sepete Ekle</button>
        <div class="cart-message">Sepete Eklendi</div>
    </div>

    <div class="product-card">
        <img src="assets/image/bataniye.jpeg" alt="Uzun Hırka">
        <h3>Örgü Battaniye</h3>
        <div class="price-container">
            <span class="price">1000 TL</span>
        </div>
        <!-- Sepete Ekle butonu -->
        <button class="add-to-cart-btn" onclick="showMessage(this)">Sepete Ekle</button>
        <div class="cart-message">Sepete Eklendi</div>
    </div>

    <div class="product-card">
        <img src="assets/image/yastik.jpeg" alt="Uzun Hırka">
        <h3>Örgü Yastık</h3>
        <div class="price-container">
            <span class="price">200 TL</span>
        </div>
        <!-- Sepete Ekle butonu -->
        <button class="add-to-cart-btn" onclick="showMessage(this)">Sepete Ekle</button>
        <div class="cart-message">Sepete Eklendi</div>
    </div>
</div>
<script>
// Sepete Ekle butonuna tıklanıldığında mesajı gösteren fonksiyon
function showMessage(button) {
    let message = button.nextElementSibling;  // Sepete Eklendi mesajını al
    message.style.display = 'block';  // Mesajı göster

    // Mesajı 2 saniye sonra gizle
    setTimeout(() => {
        message.style.display = 'none';
    }, 2000);
}
</script>