<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        header {
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.8rem 0;
            max-width: 1200px;
            margin: auto;
            width: 90%;
        }
        .logo-img { height: 55px; }
        .nav-links {
            display: flex;
            gap: 1.5rem;
            font-weight: 600;
            align-items: center;
        }
        .nav-links a {
            color: #333;
            text-decoration: none;
            transition: color .3s;
        }
        .nav-links a:hover, .nav-links a.active { color: #d32f2f; }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown > a::after {
            content: "\f078";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            margin-left: .4rem;
            font-size: .8rem;
        }
        .dropdown-menu {
            position: absolute;
            top: 100%; left: 0;
            background: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,.1);
            border-radius: 8px;
            min-width: 180px;
            display: none;
            z-index: 100;
        }
        .dropdown-menu a {
            display: block;
            padding: 0.8rem 1rem;
            color: #555;
            font-weight: normal;
            border-bottom: 1px solid #eee;
        }
        .dropdown-menu a:last-child { border-bottom: none; }
        .dropdown-menu a:hover {
            background: #f9f9f9;
            color: #d32f2f;
        }
        .sub-dropdown {
            position: relative;
        }
        .sub-dropdown .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -2px; 
        }
        .sub-dropdown:hover .dropdown-menu {
            display: block;
        }
        @media (max-width: 992px) {
            .sub-dropdown .dropdown-menu {
                position: static;
                box-shadow: none;
                border: none;
                margin-left: 1rem;
                display: none;
            }
            .sub-dropdown.active .dropdown-menu {
                display: block;
            }
            .nav-links {
                position: absolute;
                top: 100%; left: 0; right: 0;
                background: #fff;
                flex-direction: column;
                padding: 1rem;
                box-shadow: 0 6px 16px rgba(0,0,0,.12);
                display: none;
            }
            .nav-links.active { display: flex; }
            .mobile-toggle { display: block; }
            .dropdown > a::after { content: none; }
        }
        .btn-beone {
            background: #d32f2f;
            color: #fff;
            padding: 0.5rem 1.2rem;
            border-radius: 25px;
            font-size: 0.9rem;
            text-decoration: none;
            cursor: default;
        }
        .mobile-toggle {
            display: none;
            font-size: 1.6rem;
            cursor: pointer;
        }
    </style>
</head>
<body>

<header>
    <div class="nav">
        <a href="index.php"><img src="assets/logo.png" alt="SFAC Logo" class="logo-img"></a>
        <nav class="nav-links" id="navLinks">
            <a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a>
            <a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About</a>
            <div class="dropdown">
                <a href="#">Department</a>
                <div class="dropdown-menu">
                    <a href="basic-ed.php">Basic Education</a>
                    <a href="higher-ed.php">Higher Education</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="#">Student Services</a>
                <div class="dropdown-menu">
                    <div class="dropdown sub-dropdown">
                        <a href="#">Bacoor</a>
                        <div class="dropdown-menu">
                            <a href="#">HED Enrollment</a>
                            <a href="#">Online Enrollment</a>
                            <a href="#">HED GCS</a>
                            <a href="#">SFAC/SAS OPAC</a>
                            <a href="#">Alumni Tracer</a>
                            <a href="#">BED Enrollment</a>
                        </div>
                    </div>
                    <div class="dropdown sub-dropdown">
                        <a href="#">Las Pinas</a>
                        <div class="dropdown-menu">
                            <a href="#">HED Enrollment</a>
                            <a href="#">Online Enrollment</a>
                            <a href="#">GSBE Library</a>
                            <a href="#">SFAC/SAS OPAC</a>
                            <a href="#">Alumni Tracer</a>
                            <a href="#">BED Enrollment</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="contact.php">Contact Us</a>
            <span class="btn-beone">Be One of Us</span>
        </nav>
        <div class="mobile-toggle" id="mobileToggle"><i class="fas fa-bars"></i></div>
    </div>
</header>

<script>
    document.querySelectorAll('.dropdown').forEach(d => {
        d.addEventListener('mouseenter', () => {
            d.querySelector('.dropdown-menu').style.display = 'block';
        });
        d.addEventListener('mouseleave', () => {
            d.querySelector('.dropdown-menu').style.display = 'none';
        });
        d.addEventListener('click', (e) => {
            if (window.innerWidth <= 992) {
                e.preventDefault();
                d.classList.toggle('active');
                const menu = d.querySelector('.dropdown-menu');
                menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
            }
        });
    });
    document.getElementById('mobileToggle').addEventListener('click', () => {
        document.getElementById('navLinks').classList.toggle('active');
    });
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 992) {
                document.getElementById('navLinks').classList.remove('active');
                document.querySelectorAll('.dropdown').forEach(d => {
                    d.classList.remove('active');
                    d.querySelector('.dropdown-menu').style.display = 'none';
                });
            }
        });
    });
</script>

</body>
</html>