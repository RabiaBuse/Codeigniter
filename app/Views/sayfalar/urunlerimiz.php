<div class="container py-5">
    <h1 class="text-center mb-5">Ürün Listesi</h1>
    
    <div class="row" id="product-list">
        <?php if(isset($products) && !empty($products)): ?>
            <?php foreach ($products as $product): ?>
                <div class="col-md-4 col-lg-3">
                    <div class="card h-100">
                        <img src="uploads/<?php echo htmlspecialchars($product['product_image'], ENT_QUOTES, 'UTF-8'); ?>" 
                             class="card-img-top product-image" 
                             alt="<?php echo htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8'); ?>">
                        
                        <div class="card-body d-flex flex-column">
                            <!-- Ürün ismini URL dostu hale getirmek için url_title() kullanıyoruz ve ilk harfleri büyük yapmak için ucwords() ekliyoruz -->
                            <h5 class="card-title">
                                <?php 
                                    // url_title fonksiyonunun sonucunu al, ardından ucwords ile ilk harfleri büyüt
                                    echo htmlspecialchars(ucwords(url_title($product['product_name'], ' ', true)), ENT_QUOTES, 'UTF-8'); 
                                ?>
                            </h5>
                            
                            <div class="star-rating mb-2">
                                <?php
                                    $rating = isset($product['rating']) ? $product['rating'] : 5;
                                    for($i = 1; $i <= 5; $i++) {
                                        if($i <= $rating) {
                                            echo '<i class="fas fa-star"></i>';
                                        } else {
                                            echo '<i class="far fa-star"></i>';
                                        }
                                    }
                                ?>
                            </div>
                            
                            <!-- Ürün fiyatı ve açıklamaları doğrudan kullanıyoruz -->
                            <p class="price mb-3">
                                <?php echo htmlspecialchars($product['product_price'], ENT_QUOTES, 'UTF-8'); ?> TL
                            </p>

                            <input type="number" class="form-control" placeholder="Ürün adet" id="quantity_<?php echo htmlspecialchars($product['_id'], ENT_QUOTES, 'UTF-8'); ?>" min="1" value="1"/>
                            
                            <button type="button" class="btn btn-dark mt-auto add-to-cart sepeteekle"
                                data-product_name="<?php echo htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8'); ?>"
                                data-id="<?php echo htmlspecialchars($product['_id'], ENT_QUOTES, 'UTF-8'); ?>"
                                data-product_price="<?php echo htmlspecialchars($product['product_price'], ENT_QUOTES, 'UTF-8'); ?>"
                                data-product_url="<?php echo base_url('product/' . url_title($product['product_name'], '-', true)); ?>" >
                                Sepete Ekle
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12">
                <div class="alert alert-info text-center">
                    Ürün bulunamadı.
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.sepeteekle').click(function() {
    var product_id = $(this).data('id');
    var product_name = $(this).data('product_name');
    var product_price = $(this).data('product_price');
    var quantityInput = $('#quantity_' + product_id);

    // Ürün ID'si kontrolü
    if (!product_id) {
        alert("Ürün ID'si eksik.");
        return;
    }

    // Adet kontrolü
    var quantity = quantityInput.val();
    if (!quantity || isNaN(quantity) || quantity <= 0) {
        alert("Lütfen geçerli bir adet girin.");
        return;
    }

    // Ajax ile sepete ürün ekleyelim
    $.ajax({
        url: '<?= site_url("cart/add"); ?>', // Sepete ürün eklemek için çağrılacak URL
        type: 'post',
        data: {
            product_id: product_id,    // Ürün ID
            product_name: product_name, // Ürün adı
            product_price: product_price, // Ürün fiyatı
            quantity: quantity,        // Adet
            csrf_test_name: '<?= csrf_hash(); ?>' // CSRF güvenliği için token
        },
        dataType: 'json', // JSON formatında geri dönecek
        success: function(response) {
            console.log('AJAX Yanıtı:', response);
            
            // Yanıt başarı ise
            if (response.status === 'success') {
                // Sepet simgesindeki ürün sayısını güncelle
                $('#cart-count').text(response.cart_count);  // Burada 'cart_count', cart tablonuzda mevcut ürün sayısını döndürmeli.
                
                // Kullanıcıya başarı mesajını göster
                alert(response.message); // Örneğin: "Ürün sepete eklendi"
            } else {
                // Yanıt hata ise
                alert('Hata: ' + response.message);  // Hata mesajını kullanıcıya göster
            }
        },
        error: function(xhr, status, error) {
            // AJAX hatası durumunda konsola hata yazdır ve kullanıcıyı bilgilendir
            console.error('AJAX Hatası:', status, error);
            alert("Bir hata oluştu. Lütfen tekrar deneyin.");
        }
    });
});

});
</script>
