<!-- cart_view.php -->
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Sepetim</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-5">Sepetim</h1>

        <!-- Sepette ürün var mı kontrolü -->
        <?php if (!empty($cart)): ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Ürün Adı</th>
                        <th>Fiyat</th>
                        <th>Adet</th>
                        <th>Toplam Fiyat</th>
                        <th>Sil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart as $item): ?>
                        <tr>
                            <td><?php echo esc($item['product_name']); ?></td>
                            <td><?php echo esc($item['product_price']); ?> TL</td>
                            <td><?php echo esc($item['quantity']); ?></td>
                            <td><?php echo esc($item['product_price'] * $item['quantity']); ?> TL</td>
                            <td>
                                <a href="<?= base_url('cart/remove/'.$item['id']); ?>" class="btn btn-danger btn-sm">Sil</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <h3>Sepet Toplamı: <?php echo esc($this->cartModel->calculateTotal($cart)); ?> TL</h3>

        <?php else: ?>
            <div class="alert alert-info">
                Sepetinizde ürün bulunmamaktadır.
            </div>
        <?php endif; ?>

        <!-- Sepet içerik sayısı -->
        <h4>Sepetteki Ürün Sayısı: <?php echo count($cart); ?></h4>

        <a href="<?= base_url('checkout'); ?>" class="btn btn-success mt-3">Ödeme Sayfasına Git</a>
    </div>
</body>
</html>
