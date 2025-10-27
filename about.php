<?php $page_title = "About Us - Saint Francis of Assisi College Bacoor"; ?>
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
        .about-hero { 
            background: #d32f2f; 
            color: #fff; 
            text-align: center; 
            padding: 3rem 1rem; 
        }
        .about-hero h1 { 
            font-family: 'Playfair Display', serif; 
            font-size: 2.6rem; 
            margin: 0; 
        }
        .container { max-width: 1000px; margin: auto; padding: 0 1rem; }
        .section { padding: 3rem 0; background: #f9f9fb; }
        .section h2 { 
            color: #d32f2f; 
            text-align: center; 
            font-size: 2rem; 
            margin-bottom: 2rem; 
            font-family: 'Playfair Display', serif;
        }
        .about-content { 
            background: #fff; 
            padding: 2.5rem; 
            border-radius: 12px; 
            box-shadow: 0 4px 15px rgba(0,0,0,.1); 
            line-height: 1.8; 
            color: #444; 
            font-size: 1.05rem;
        }
        .about-content p { margin-bottom: 1.2rem; }

        .values-grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); 
            gap: 1.5rem; 
            margin-top: 2rem; 
        }
        .value-card { 
            background: #fff; 
            padding: 1.8rem; 
            border-radius: 12px; 
            text-align: center; 
            box-shadow: 0 4px 15px rgba(0,0,0,.1); 
            transition: transform .3s;
        }
        .value-card:hover { transform: translateY(-5px); }
        .value-card i { 
            font-size: 2.2rem; 
            color: #d32f2f; 
            margin-bottom: .8rem; 
        }
        .value-card h3 { 
            color: #d32f2f; 
            margin: 0.8rem 0 .5rem; 
            font-size: 1.3rem; 
        }

        .vision-mission { 
            display: grid; 
            grid-template-columns: 1fr 1fr; 
            gap: 2rem; 
            margin-top: 2rem; 
        }
        .vm-box { 
            background: #fff; 
            padding: 2rem; 
            border-radius: 12px; 
            box-shadow: 0 4px 15px rgba(0,0,0,.1); 
        }
        .vm-box h3 { 
            color: #d32f2f; 
            font-size: 1.4rem; 
            margin-bottom: 1rem; 
            border-bottom: 2px solid #d32f2f; 
            padding-bottom: .5rem; 
        }
        .vm-box p { margin: 0; font-size: 1rem; }

        @media (max-width: 768px) {
            .vision-mission { grid-template-columns: 1fr; }
            .about-hero h1 { font-size: 2.1rem; }
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <!-- HERO -->
    <section class="about-hero">
        <div class="container">
            <h1>About Us</h1>
        </div>
    </section>

    <!-- HISTORY -->
    <section class="section">
        <div class="container">
            <h2>About our School</h2>
            <div class="about-content">
                <p>Saint Francis of Assisi College had its beginnings in <strong>1981</strong>, when the husband-and-wife team of <strong>Dr. Evangeline Oñas-Orosco</strong> and <strong>Dr. Arturo Agapito Orosco, Sr.</strong>, opened a two-classroom preparatory school in <strong>Talon III, Las Piñas City</strong> to provide affordable quality education for young children. By <strong>1983</strong>, the school’s popularity was such that a two-storey, full elementary school building had to be constructed to meet the needs of the surrounding community. The opening of the <strong>high school department</strong> quickly followed in <strong>1986</strong>, ensuring placements for SFAC graduates at the secondary level. At the same time, two new campuses were established, one in <strong>Taguig City</strong>, and one in <strong>Los Baños, Laguna</strong>.</p>

                <p>In <strong>1989</strong>, the <strong>tertiary level</strong> in SFAC came into being offering several courses both in degree and non-degree programs. New campuses have since been added: the <strong>Pamplona, Las Piñas campus</strong> in <strong>1990</strong>, the <strong>Bacoor, Cavite campus</strong> in <strong>1994</strong>, the <strong>Alabang, Muntinlupa campus</strong> in <strong>1996</strong>. In the same year, <strong>1996</strong>, <strong>Saint Anthony School of Las Piñas</strong> came under SFAC supervision and management. <strong>Dasmariñas, Cavite campus</strong> opened in <strong>1999</strong>. The <strong>Biñan campus</strong>, in Laguna opened in <strong>2006</strong>. In <strong>2010</strong>, the Los Baños campus was renamed <strong>Saint Anthony School of Los Baños</strong>, named after the patron saint of the locality. The <strong>10th campus</strong>, located in <strong>Sta. Rosa, Laguna</strong> accepts enrollees starting <strong>S.Y. 2012 – 2013</strong>. In line with corporate branding moves, the Pamplona campus, being the smallest campus, moved its operation to the main campus in <strong>2014</strong>.</p>

                <p><strong>Dr. Arturo O. Orosco, Jr.</strong>, succeeding his mother as school president in <strong>2012</strong>, steered the school system into a brand where <em>bayanihan spirit</em> cultivates the deep heritage of the school. Bold moves and decisions are continuously being made to meet the new leadership’s branding innovations and to meet the founders’ objective of serving more communities, and societies, at large.</p>

                <p>Today, <strong>Saint Francis of Assisi College</strong> offers complete education from <strong>preschool up to the graduate level of education</strong>.</p>

                <p>In its more than two decades of existence, SFAC, recognized by the <strong>Department of Education (DepEd)</strong>, <strong>Technical Education and Skills Development Authority (TESDA)</strong> and by the <strong>Commission on Higher Education (CHED)</strong>, has pursued programs of instruction grounded on <strong>academic, cultural and sports excellence</strong> and tempered by <strong>Christian and Franciscan values</strong> exemplified by its patron, <strong>Saint Francis of Assisi</strong>. The <strong>Bureau of Immigration</strong> has granted SFAC the authority to accept foreign students.</p>

                <p>A rich and responsive curriculum, a corps of well-trained, experienced and caring teachers, dynamic administrators, and an atmosphere conducive to excellence — all make up the lifelong learning experiences at SFAC.</p>

                <p>To keep abreast with the rapid growth and changes in the educational trends in the country and elsewhere, SFAC established its <strong>Center for Excellence in Academics, Research and Training Services (Centrex)</strong> which serves as the standard-setting entity of its academic operations. Committed in providing a value-laden, excellent education, the Centrex focuses on seven (7) areas: <strong>Curriculum Development, Textbook Evaluation, Institutional Examinations, Review of Academic Policies and Procedures, Faculty Training and Ranking, Organization/Leadership Development, and Institutional Research</strong>. The Centrex ensures that uniform standards are observed and maintained in all SFAC campuses. Aside from the Centrex, a <strong>Central Office (C.O.)</strong> and a <strong>Central Purchasing (C.P.)</strong> unit likewise guarantee the operational stability of SFAC for the benefit of its employees, suppliers, students and other stakeholders.</p>
            </div>
        </div>
    </section>

    <!-- VISION & MISSION -->
    <section class="section" style="background:#fff;">
        <div class="container">
            <div class="vision-mission">
                <div class="vm-box">
                    <h3>VISION</h3>
                    <p><strong>Saint Francis of Assisi College (SFAC)</strong> aims to be an exemplar for progressive holistic education, blending academic excellence with physical, spiritual, and cultural values.</p>
                </div>
                <div class="vm-box">
                    <h3>MISSION</h3>
                    <p><strong>SFAC</strong> is fully committed to academic success through quality instruction, purposeful research, sustainable extension services while promoting love of God, family, and country.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE VALUES -->
    <section class="section">
        <div class="container">
            <h2>CORE VALUES</h2>
            <p style="text-align:center; margin-bottom:2rem; font-size:1.1rem; color:#555;">
                Our character is shaped by the life and teachings of our patron, <strong>Saint Francis of Assisi</strong>, and guided by the enduring values of:
            </p>
            <div class="values-grid">
                <div class="value-card">
                    <i class="fas fa-pray"></i>
                    <h3>Faith</h3>
                </div>
                <div class="value-card">
                    <i class="fas fa-hands-helping"></i>
                    <h3>Humility</h3>
                </div>
                <div class="value-card">
                    <i class="fas fa-gavel"></i>
                    <h3>Discipline</h3>
                </div>
                <div class="value-card">
                    <i class="fas fa-heart"></i>
                    <h3>Service</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

    <script src="main.js"></script>
</body>
</html>