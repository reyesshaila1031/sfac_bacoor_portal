<?php $page_title = "Basic Education - Saint Francis of Assisi College Bacoor"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .dept-hero { background:#d32f2f; color:#fff; text-align:center; padding:2.5rem 1rem; }
        .dept-hero h1 { font-size:2.4rem; margin:0; font-family:'Playfair Display',serif; }
        .container { max-width:1200px; margin:auto; padding:0 1rem; }
        .section { padding:3rem 0; background:#f9f9fb; }
        .section h2 { color:#d32f2f; text-align:center; margin-bottom:2rem; font-size:1.8rem; }
        
        .levels-grid { 
            display:grid; 
            grid-template-columns:repeat(auto-fit,minmax(300px,1fr)); 
            gap:2rem; 
            margin-bottom:3rem; 
        }
        .level-card { 
            background:#fff; 
            padding:2rem; 
            border-radius:12px; 
            box-shadow:0 4px 15px rgba(0,0,0,.1); 
            text-align:center; 
        }
        .level-card h3 { 
            color:#d32f2f; 
            margin:0 0 1rem; 
            font-size:1.4rem; 
            border-bottom:2px solid #d32f2f; 
            padding-bottom:.5rem; 
        }
        .level-card ul { 
            list-style:none; 
            padding:0; 
            text-align:left; 
            margin:1rem 0 0; 
        }
        .level-card li { 
            margin:.6rem 0; 
            font-size:0.95rem; 
            position:relative; 
            padding-left:1.8rem; 
        }
        .level-card li::before { 
            content:"\f00c"; 
            font-family:"Font Awesome 6 Free"; 
            font-weight:900; 
            color:#d32f2f; 
            position:absolute; 
            left:0; 
            font-size:1rem; 
        }
        .track-group { 
            margin-top:1.5rem; 
            text-align:left; 
        }
        .track-group h4 { 
            color:#d32f2f; 
            font-size:1.1rem; 
            margin:1.2rem 0 .6rem; 
            font-weight:600; 
        }

        .video-container { 
            position: relative; 
            padding-bottom: 56.25%; 
            height: 0; 
            overflow: hidden; 
            max-width: 800px; 
            margin: 2rem auto; 
            border-radius: 12px; 
            box-shadow: 0 6px 20px rgba(0,0,0,.15); 
        }
        .video-container iframe { 
            position: absolute; 
            top: 0; left: 0; 
            width: 100%; height: 100%; 
            border: 0; 
        }

        .footer-dept { 
            background:#eee; 
            padding:2rem 1rem; 
            text-align:center; 
            font-size:0.9rem; 
            color:#666; 
        }
        .footer-dept strong { color:#d32f2f; }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <!-- RED HERO -->
    <section class="dept-hero">
        <div class="container">
            <h1>Basic Education</h1>
        </div>
    </section>

    <!-- VIDEO -->
    <section class="section" style="background:#fff;">
        <div class="container">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/589068320052405" title="SFAC Bacoor Basic Education" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- OFFERED LEVELS -->
    <section class="section">
        <div class="container">
            <h2>Offered Levels</h2>
            <div class="levels-grid">

                <!-- PRE-SCHOOL -->
                <div class="level-card">
                    <h3>PRE-SCHOOL</h3>
                    <ul>
                        <li>Nursery</li>
                        <li>Pre-Kinder</li>
                        <li>Kindergarten</li>
                    </ul>
                </div>

                <!-- GRADE SCHOOL -->
                <div class="level-card">
                    <h3>GRADE SCHOOL</h3>
                    <ul>
                        <li>Grade 1 to 6</li>
                    </ul>
                </div>

                <!-- JUNIOR HIGH -->
                <div class="level-card">
                    <h3>JUNIOR HIGH SCHOOL</h3>
                    <ul>
                        <li>Grade 7 to 10</li>
                    </ul>
                </div>

                <!-- SENIOR HIGH -->
                <div class="level-card">
                    <h3>SENIOR HIGH SCHOOL</h3>
                    <div class="track-group">
                        <h4>Academic Track</h4>
                        <ul>
                            <li>STEM (Science, Technology, Engineering and Mathematics)</li>
                            <li>ABM (Accountancy, Business and Management)</li>
                            <li>HUMSS (Humanities and Social Sciences)</li>
                            <li>GA (General Academics)</li>
                        </ul>
                    </div>
                    <div class="track-group">
                        <h4>Technical-Vocational-Livelihood Track</h4>
                        <ul>
                            <li>HE (Home Economics)</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

    <script src="main.js"></script>
</body>
</html>