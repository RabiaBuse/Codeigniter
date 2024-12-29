<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color:rgb(90, 94, 112);
            --success-color:rgb(69, 69, 69);
            --warning-color:rgb(151, 150, 148);
            --sidebar-width: 280px;
            --card-border-radius: 15px;
        }

        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            min-height: 100vh;
        }

        .dashboard-container {
            display: flex;
            padding: 20px;
            gap: 24px;
        }

        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            background: white;
            border-radius: var(--card-border-radius);
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
            height: fit-content;
        }

        .sidebar .card-header {
            background: var(--primary-color);
            color: white;
            padding: 20px;
            border-radius: var(--card-border-radius) var(--card-border-radius) 0 0;
            font-size: 1.2rem;
            font-weight: 600;
        }

        .list-group-item {
            padding: 15px 20px;
            color: #444;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: all 0.3s ease;
            border: none;
            border-bottom: 1px solid #f0f0f0;
        }

        .list-group-item:last-child {
            border-bottom: none;
            border-radius: 0 0 var(--card-border-radius) var(--card-border-radius);
        }

        .list-group-item:hover {
            background-color: #f8f9fa;
            color: var(--primary-color);
            transform: translateX(10px);
        }

        .list-group-item i {
            width: 20px;
            text-align: center;
        }

        /* Main Content Area */
        .main-content {
            flex: 1;
        }

        .overview-header {
            background: white;
            padding: 20px;
            border-radius: var(--card-border-radius);
            margin-bottom: 24px;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .stat-card {
            border-radius: var(--card-border-radius);
            padding: 24px;
            color: white;
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-card.products {
            background: var(--primary-color);
        }

        .stat-card.users {
            background: var(--success-color);
        }

        .stat-card.orders {
            background: var(--warning-color);
        }

        .stat-card h5 {
            margin: 0;
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .stat-card .display-4 {
            font-size: 2.5rem;
            font-weight: 600;
            margin: 10px 0 0 0;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .dashboard-container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }

            .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .stats-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="card-header">
                Menü
            </div>
            <div class="list-group">
                <a href="http://localhost:3000" class="list-group-item">
                    <i class="fas fa-box"></i>
                    Ürün Yönetimi
                </a>

                <a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=sanatevi&table=cart" class="list-group-item">
                <i class="fas fa-shopping-cart"></i> Sepet İşlemleri
                </a>

            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="overview-header">
                <h2 style="margin: 0; color: #333;">Genel Bakış</h2>
            </div>
            
            <div class="stats-container">
                <div class="stat-card products">
                    <h5>Toplam Ürün</h5>
                    <p class="display-4">24</p>
                </div>
                <div class="stat-card users">
                    <h5>Aktif Kullanıcı</h5>
                    <p class="display-4">2</p>
                </div>
                <div class="stat-card orders">
                    <h5>Bekleyen Sipariş</h5>
                    <p class="display-4">0</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>