        <!-- login -->
        <div class="container login">
            <div class="row">
                <div class="col-md-4" id="side1">
                <?php if (session()->has('validation')): ?>
                <div class="alert alert-danger">
                    <?= session('validation')->listErrors() ?>
                </div>
            <?php endif; ?>
                    <h3>Tekrar Hoşgeldiniz!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <div id="btn"><a href="<?=base_url('login')?>">Giriş</a></div>
                </div>
                <div class="col-md-8" id="side2">
                <form action="<?= base_url('login') ?>" method="post">
                <?= csrf_field() ?>
                    <h3>Hesap Oluşturma</h3>
                    <div class="inp">
                         <label for="kulad">Kullanıcı Adı:</label>
                        <input type="text" placeholder="Kullanıcı Adı" required>
                        <br>
                        <label for="email">Email:</label>
                        <input type="email" placeholder="Email" required>
                        <br>
                        <label for="sifre">Şifre:</label>
                        <input type="text" placeholder="Şifre" required>
                    </div>
                    <p>Lorem ipsum dolor sit amet.</p>
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
                    <div id="login"><button>Kayıt Ol</button></div>
                </div>
            </div>
        </div>
        <!-- login -->