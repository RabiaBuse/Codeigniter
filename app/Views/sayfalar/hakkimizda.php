<div class="about-container">
    <div class="content-grid">
        <div class="about-flex-container">
            <div class="image-section">
                <div class="image-container">
                    <img src="assets/image/is1.jpeg" alt="Sanat Evi" class="main-image">
                    <div class="floating-card">
                        <span>2024'ten beri</span>
                        <h3>200+</h3>
                        <span>Mutlu Öğrenci</span>
                    </div>
                </div>
            </div>

            <div class="text-section">
                <div class="section-content">
                    <span class="tag">Hakkımızda</span>
                    <h2>Sanatı keşfetmenin en keyifli yolu</h2>
                    <p>Sanat Evi, 2024 yılında kuruldu ve o günden beri sanatı her yaştan insana ulaştırmayı hedefliyor. Amacımız, sanatın gücünü ve güzelliğini herkesle paylaşmaktır.</p>
                </div>
            </div>
        </div>

        <div class="values-section">
            <div class="value-card">
                <div class="icon">🎨</div>
                <h3>Misyonumuz</h3>
                <p>Yaratıcı ifade özgürlüğünü teşvik etmek ve sanatçılara destek olmaktır. Sanatı herkesin erişebileceği bir hale getirmeyi hedefliyoruz.</p>
            </div>

            <div class="value-card">
                <div class="icon">🌟</div>
                <h3>Vizyonumuz</h3>
                <p>Sanatın birleştirici gücünü kullanarak topluluklar arasında köprüler kurmaktır. Sanatın evrensel dilini kullanarak, daha anlayışlı ve bağlı bir dünya yaratmayı amaçlıyoruz.</p>
            </div>
        </div>

        <div class="team-section">
            <h2>Ekibimiz</h2>
            <div class="team-grid">
                <div class="team-card">
                    <div class="team-image">
                        <img src="assets/image/ada.jpeg" alt="Rabia Ulutaş">
                    </div>
                    <h3>Rabia Ulutaş</h3>
                    <span>Kurucu & Sanat Direktörü</span>
                </div>

                <div class="team-card">
                    <div class="team-image">
                        <img src="assets/image/buse.jpeg" alt="Buse Kaplan">
                    </div>
                    <h3>Buse Kaplan</h3>
                    <span>Kurucu & Sanat Eğitmeni</span>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .about-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .content-grid {
        display: grid;
        gap: 4rem;
        padding: 4rem 0;
    }

    .about-flex-container {
        display: flex;
        gap: 2rem;
        align-items: center;
    }

    .image-section {
        flex: 1;
        position: relative;
    }

    .text-section {
        flex: 1;
    }

    .image-container {
        position: relative;
        overflow: hidden;
        border-radius: 20px;
    }

    .main-image {
        width: 100%;
        height: 600px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .main-image:hover {
        transform: scale(1.05);
    }

    .floating-card {
        position: absolute;
        bottom: 30px;
        right: 30px;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        padding: 20px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .floating-card h3 {
        font-size: 2rem;
        margin: 10px 0;
        color: #1a1a1a;
    }

    .tag {
        background: #f3f4f6;
        padding: 8px 16px;
        border-radius: 50px;
        font-size: 0.9rem;
        color: #666;
    }

    .section-content h2 {
        font-size: 2.5rem;
        margin: 1rem 0;
        font-weight: 700;
        color: #1a1a1a;
    }

    .values-section {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin: 4rem 0;
    }

    .value-card {
        padding: 2rem;
        border-radius: 20px;
        background: #fff;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
    }

    .value-card:hover {
        transform: translateY(-10px);
    }

    .icon {
        font-size: 2rem;
        margin-bottom: 1rem;
    }

    .team-section {
        text-align: center;
        padding: 4rem 0;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }

    .team-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
    }

    .team-card:hover {
        transform: translateY(-10px);
    }

    .team-image {
        width: 100%;
        height: 300px;
        overflow: hidden;
    }

    .team-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .team-card h3 {
        margin: 1rem 0 0.5rem 0;
        color: #1a1a1a;
    }

    .team-card span {
        color: #666;
        font-size: 0.9rem;
        display: block;
        margin-bottom: 1rem;
    }

    @media (max-width: 768px) {
        .about-flex-container {
            flex-direction: column;
        }

        .content-grid {
            gap: 2rem;
        }

        .main-image {
            height: 400px;
        }

        .floating-card {
            bottom: 20px;
            right: 20px;
            padding: 15px;
        }

        .section-content h2 {
            font-size: 2rem;
        }
    }
</style>