<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SiKetan Kelurahan Ketegan</title>
    <link rel="shortcut icon" type="image/png" href="./assets/images/logos/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #fff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }

        .container {
            text-align: center;
            width: 90%;
            max-width: 1000px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .text-wrapper {
            text-align: left;
            width: 50%;
        }

        .logo {
            width: 20rem;
            height: auto;
            image-resolution: 100%;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            color: #28a745;
            margin: 10px 0;
        }

        .subtitle {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }

        .button {
            margin-top: 10px;
        }

        .button .messages-btn {
            background: #25d366;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            margin-right: 10px;
        }

        .button .messages-btn:nth-child(2) {
            background: none;
            color: #25d366;
            padding: 10px 20px;
            border: 1px solid #25d366;
        }

        .button .messages-btn:nth-child(2):hover {
            background: #e0f7ea;
        }

        .button i {
            margin-right: 5px;
        }

        .content-wrapper {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 20px;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            flex: 1;
            margin-top: 55px;
        }

        .stat-card {
            background: #ffffff;
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
            margin-bottom: 45px;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-card i {
            font-size: 28px;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #28a745, #25d366);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        .stat-value {
            font-weight: bold;
            font-size: 20px;
            color: #333;
        }

        .stat-label {
            font-size: 12px;
            color: #666;
            text-transform: uppercase;
        }

        .schedule {
            background: #ffffff;
            padding: 15px;
            border-radius: 15px;
            flex: 0.8;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
            max-width: 250px;
        }

        .schedule:hover {
            transform: translateY(-5px);
        }

        .schedule-title {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
            text-align: center;
        }

        .schedule-content {
            display: flex;
            flex-direction: column;
            gap: 10px;
            text-align: left;
        }

        .schedule-item {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px;
            background: #f8f9fa;
            border-radius: 8px;
            transition: background 0.2s ease;
        }

        .schedule-item:hover {
            background: #e0f7ea;
        }

        .schedule-item i {
            font-size: 18px;
            color: #25d366;
        }

        .schedule-item-text {
            font-size: 12px;
            color: #000;
            text-align: center;
            flex: 1;
        }

        .schedule-item-text span {
            font-weight: bold;
            color: #28a745;
        }

        .schedule-item-text2 {
            font-size: 12px;
            color: #333;
            text-align: left;
            flex: 1;
        }

        .schedule-item-text2 span {
            font-weight: bold;
            color: #28a745;
        }

        .messages-btn-wrapper {
            margin-top: 15px;
            text-align: center;
        }

        .messages-btn {
            background: #25d366;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: background 0.2s ease;
        }

        .messages-btn:hover {
            background: #1da851;
        }

        @media (max-width: 768px) {
            .content-wrapper {
                flex-direction: column;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .title {
                font-size: 20px;
            }

            .logo {
                width: 80px;
            }

            .header {
                flex-direction: column;
                align-items: center;
            }

            .text-wrapper {
                text-align: center;
                margin-bottom: 10px;
                width: 100%;
            }

            .schedule {
                margin-top: 20px;
                max-width: 100%;
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="text-wrapper">
                <div class="title">
                    Selamat Datang di "SiKetan" Pusat Informasi Kearsipan
                    Kelurahan Ketegan</div>
                <div class="subtitle">
                    Halaman ini merupakan website resmi
                    Pusat informasi Kearsipan Kelurahan Ketegan</div>
                <div class="button">
                    <a href="#" class="messages-btn" target="_blank">Layanan Masyarakat</a>
                    <a href="#" class="messages-btn" target="_blank"><i class="fas fa-envelope"></i>Persuratan Online</a>
                </div>
            </div>
            <img src="./assets/images/logos/logo.png" alt="Logo" class="logo">
        </div>
        <div class="content-wrapper">
            <div class="stats">
                <div class="stat-card">
                    <i class="fas fa-users"></i>
                    <div class="stat-value">12,289</div>
                    <div class="stat-label">Total Jiwa</div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-home"></i>
                    <div class="stat-value">20</div>
                    <div class="stat-label">Jumlah Desa</div>
                </div>
                <div class="stat-card">
                    <i class="fas fa-id-card"></i>
                    <Layers>
                    <div class="stat-value">500</div>
                    <div class="stat-label">Jumlah KK</div>
                </div>
            </div>
            <div class="schedule">
                <div class="schedule-title">Jadwal Kerja Kelurahan Ketegan</div>
                <div class="schedule-content">
                    <div class="schedule-item">
                        <i class="fas fa-clock"></i>
                        <div class="schedule-item-text"><span>08:00 - 16:00</span></div>
                    </div>
                    <div class="schedule-item">
                        <div class="schedule-item-text2">Libur: <span>Sabtu - Minggu</span></div>
                    </div>
                </div>
                <div class="messages-btn-wrapper">
                    <a href="https://wa.me/1234567890" class="messages-btn" target="_blank">
                        <i class="fab fa-whatsapp"></i> Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>