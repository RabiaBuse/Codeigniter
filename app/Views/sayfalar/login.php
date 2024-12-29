<!-- login -->
<div class="container login">
    <div class="row">
        <div class="col-md-4" id="side1">
            <h3>Merhaba Müşterilerimiz!</h3>
            <p>Yeni Hesap Açın</p>
            <div id="btn"><a href="<?= base_url('signup') ?>" >Üye Ol</a></div>
        </div>
        <!-- Form doğrulama hatalarını göster -->
        <?php if(isset($validation)): ?>
            <div class="alert alert-danger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>
        <div class="col-md-8" id="side2">
            <?php 
                if (isset($uyari)) {
                    echo '<div class="alert alert-danger">';
                    echo $uyari;
                    echo '</div>';
                }   
            ?>
            <form action="<?= base_url('login') ?>" method="post">
                <?= csrf_field() ?>
                <h3>Giriş</h3>

                <div class="inp">
                    <label for="kulad">Kullanıcı Adı:</label>
                    <!-- Kullanıcı adı için min ve max uzunluk kuralları -->
                    <input type="text" placeholder="Kullanıcı Adı" required id="kulad" name="kulad" minlength="5" maxlength="20">
                </div>
                <div class="inp">
                    <label for="sifre">Şifre:</label>
                    <!-- Şifre için min uzunluk kuralı -->
                    <input type="password" placeholder="Şifre" required id="sifre" name="sifre" minlength="6">
                </div>
                <p><a href="<?= base_url('forgot-password') ?>">Şifremi Unuttum?</a></p>
                <?php if (session()->has('error')): ?>
                    <div class="alert alert-danger">
                        <?= session('error') ?>
                    </div>
                <?php endif; ?>
                <div class="icons">
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div id="login"><button type="submit" class="btn btn-success">GİRİŞ</button></div>
            </form>
        </div>
    </div>
</div>
<!-- login -->
