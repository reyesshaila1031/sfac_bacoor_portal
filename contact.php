<?php
$page_title = "Contact Us - Saint Francis of Assisi College";
$success = $error = '';
$admin_email = "admissions.sfacbacoor@gmail.com";

if ($_POST) {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name && $email && $message && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $subject = "New Contact Form: $name";
        $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email\r\nReply-To: $email\r\n";

        if (mail($admin_email, $subject, $body, $headers)) {
            $success = "Thank you! Your message has been sent.";
        } else {
            $error = "Error sending message.";
        }
    } else {
        $error = $name && $email && $message ? "Invalid email." : "All fields required.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .contact-hero { background:#d32f2f; color:#fff; text-align:center; padding:2rem 1rem; }
        .contact-hero h1 { font-size:2.2rem; margin:0; font-family:'Playfair Display',serif; }
        .map-container { width:100%; height:400px; margin:2rem 0; overflow:hidden; border:3px solid #fff; box-shadow:0 6px 20px rgba(0,0,0,.15); }

        /* GRID */
        .contact-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2.5rem;
            padding: 3rem 1rem;
            background: #f9f9fb;
            max-width: 1200px;
            margin: 0 auto;
        }
        .contact-form, .contact-info {
            background: #fff;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,.1);
        }
        .contact-form h2 { color:#d32f2f; margin-bottom:1.2rem; font-size:1.5rem; }
        .form-group { margin-bottom:1.2rem; }
        label { display:block; margin-bottom:.4rem; font-weight:600; color:#d32f2f; }
        input, textarea {
            width:100%; padding:.9rem; border:2px solid #ddd; border-onsize:8px;
            font-family:inherit; font-size:1rem; transition:border .3s;
        }
        input:focus, textarea:focus { outline:none; border-color:#d32f2f; }
        textarea { min-height:140px; resize:vertical; }
        .btn-submit {
            background:#d32f2f; color:#fff; padding:.9rem 2rem; border:none;
            border-radius:50px; font-weight:600; cursor:pointer; width:100%;
            font-size:1.1rem; transition:background .3s;
        }
        .btn-submit:hover { background:#b71c1c; }

        .alert { padding:1rem; margin-bottom:1.5rem; border-radius:8px; font-weight:600; }
        .alert-success { background:#d4edda; color:#155724; border:1px solid #c3e6cb; }
        .alert-error { background:#f8d7da; color:#721c24; border:1px solid #f5c6cb; }

        .info-card { text-align:center; margin-bottom:1.5rem; }
        .info-card img { height:60px; margin-bottom:1rem; }
        .info-card h3 { color:#d32f2f; margin:0.5rem 0; font-size:1.1rem; }
        .info-card p, .info-card a { color:#555; font-size:0.95rem; margin:0.3rem 0; }
        .info-card a { color:#1565c0; text-decoration:none; }
        .info-card a:hover { text-decoration:underline; }

        .footer-contact { background:#eee; padding:2rem 1rem; text-align:center; font-size:0.9rem; color:#666; }
        .footer-contact strong { color:#d32f2f; }

        /* MOBILE: Stack */
        @media (max-width: 992px) {
            .contact-section { grid-template-columns: 1fr; gap: 2rem; padding: 2rem 1rem; }
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <!-- RED HERO -->
    <section class="contact-hero">
        <div class="container">
            <h1>Contact Us</h1>
        </div>
    </section>

    <!-- MAP -->
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.298996289008!2d120.950167614799!3d14.429948989891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d7f7b7f7b7f7%3A0x9f8e8f8e8f8e8f8e!2sSaint%20Francis%20of%20Assisi%20College%20-%20Bacoor!5e0!3m2!1sen!2sph!4v1698765432100!5m2!1sen!2sph"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>

    <!-- FORM -->
    <section class="contact-section">
        <!-- LEFT: FORM -->
        <div class="contact-form">
            <h2>Send us a Message</h2>

            <?php if ($success): ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
            <?php elseif ($error): ?>
                <div class="alert alert-error"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="POST" action="">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                </div>
                <button type="submit" class="btn-submit">Send Message</button>
            </form>
        </div>

        <!-- RIGHT: INFO -->
        <div class="contact-info">
            <div class="info-card">
                <img src="assets/logo.png" alt="SFAC Logo">
                <h3>Saint Francis of Assisi College - Bacoor</h3>
                <p><strong>Location:</strong><br>#96 Bayanan, City of Bacoor, Cavite</p>
            </div>
            <div class="info-card">
                <h3>Email:</h3>
                <p><a href="mailto:admissions.sfacbacoor@gmail.com">admissions.sfacbacoor@gmail.com</a></p>
            </div>
            <div class="info-card">
                <h3>Call:</h3>
                <p><strong>Basic Education:</strong><br>0960-080-0657 | (046) 501-1135</p>
                <p><strong>College Admission:</strong><br>0994-706-3287</p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer-contact">
        <div class="container">
            <p><strong>Saint Francis of Assisi College - Bacoor</strong></p>
            <p>#96 Bayanan, City of Bacoor, Cavite</p>
            <p>© Copyright Mentor. All Rights Reserved<br>Designed by BootstrapMade</p>
        </div>
    </footer>

    <script src="main.js"></script>
</body>
</html>