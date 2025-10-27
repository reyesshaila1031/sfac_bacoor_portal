<?php $page_title = "Welcome to Saint Francis of Assisi College - Bacoor"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-content">
            <img src="assets/logo.png" alt="SFAC Logo" class="hero-logo">
            <h1>Welcome to Saint Francis of Assisi College - Bacoor</h1>
            <p>#96 Bayanan, City of Bacoor, Cavite</p>
            <a href="contact.php" class="btn">Contact Us!</a>
        </div>
    </section>

    <!-- NEWS UPDATE BANNER ANNOUNCEMENTS -->
    <section class="section news-update">
        <div class="container">
            <h2 class="section-title">Announcements</h2>
            <div class="banner-announcements">
                <a href="https://www.facebook.com/share/p/1CNF8XJWAY/" target="_blank" class="announcement-banner">
                    <p>𝐂𝐨𝐝𝐞 𝐭𝐡𝐞 𝐅𝐮𝐭𝐮𝐫𝐞. 𝐈𝐧𝐧𝐨𝐯𝐚𝐭𝐞 𝐖𝐢𝐭𝐡𝐨𝐮𝐭 𝐋𝐢𝐦𝐢𝐭𝐬</p>
                </a>
                <a href="https://www.facebook.com/share/1HLQoe3tzm/" target="_blank" class="announcement-banner">
                    <p>𝐘𝐨𝐮𝐫 𝐟𝐮𝐭𝐮𝐫𝐞 𝐬𝐭𝐚𝐫𝐭𝐬 𝐡𝐞𝐫𝐞! 𝐂𝐨𝐥𝐥𝐞𝐠𝐞 𝐚𝐝𝐦𝐢𝐬𝐬𝐢𝐨𝐧𝐬 𝐟𝐨𝐫 𝐒𝐘 𝟐𝟎𝟐𝟓-𝟐𝟎𝟐𝟔 𝐚𝐫𝐞 𝐨𝐟𝐟𝐢𝐜𝐢𝐚𝐥𝐥𝐲 𝐨𝐩𝐞𝐧</p>
                </a>
                <a href="https://www.facebook.com/share/p/1DBtM4AqB4/" target="_blank" class="announcement-banner">
                    <p>Enrollment at Saint Francis of Assisi College Bacoor Campus is ONGOING for Preschool, Grade School,</p>
                </a>
                <a href="https://www.facebook.com/photo?fbid=1051562913682574&set=a.462574942581377" target="_blank" class="announcement-banner">
                    <p>ADMISSION FOR S.Y. 2025-2026 IS OPEN!</p>
                </a>
                <a href="https://www.facebook.com/share/17gVKgijXv/" target="_blank" class="announcement-banner">
                    <p>Academic Calendar S.Y. 2024 - 2025</p>
                </a>
                <a href="https://www.facebook.com/share/p/1GK3d2FMSB/" target="_blank" class="announcement-banner">
                    <p>#ProudFranciscan</p>
                </a>
                <a href="https://www.facebook.com/share/p/1W9qSSRHKT/" target="_blank" class="announcement-banner">
                    <p>#AlumniSpotlight</p>
                </a>
            </div>
            <div class="follow-btn-container">
                <a href="https://www.facebook.com/stfrancisbacoor" target="_blank" class="follow-btn">Follow Us on Facebook</a>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

    <script src="main.js"></script>

    <style>
        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url('assets/sfac-bacoor-screenshot.jpg') no-repeat center 20% / cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
        }
        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.96), transparent);
            z-index: 1;
        }
        .hero-content {
            position: relative;
            z-index: 2;
            padding: 0 1rem;
        }
        .hero-logo {
            max-width: 150px;
            margin: 0 auto 1.5rem auto;
            display: block;
        }
        .hero-content h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
        }
        .btn {
            display: inline-block;
            background: #d32f2f;
            color: #fff;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #b71c1c;
        }
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 1.8rem;
            }
            .hero-content p {
                font-size: 1rem;
            }
            .btn {
                display: block;
                margin: 0.5rem auto;
            }
            .hero-logo {
                max-width: 120px;
            }
        }
        /* Announcements Banner */
        .news-update {
            background: #f9f9f9;
            padding: 2rem 0;
        }
        .banner-announcements {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        .announcement-banner {
            display: block;
            text-decoration: none;
            color: inherit;
            transition: background 0.3s;
        }
        .announcement-banner p {
            background: #fff;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            font-weight: bold;
            font-size: 1.1rem;
            text-align: center;
            color: #000000; 
            margin: 0;
        }
        .announcement-banner:hover p {
            background: #f8f8f8;
            color: #333333; 
        }
        .follow-btn-container {
            text-align: center;
        }
        .follow-btn {
            background: #d32f2f;
            color: #fff;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s;
            display: inline-block;
        }
        .follow-btn:hover {
            background: #b71c1c;
        }
        @media (max-width: 768px) {
            .banner-announcements {
                gap: 0.5rem;
            }
            .announcement-banner p {
                font-size: 1rem;
                padding: 0.8rem;
            }
        }
    </style>
</body>
</html>