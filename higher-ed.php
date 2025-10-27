<?php $page_title = "Higher Education - Saint Francis of Assisi College Bacoor"; ?>
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
        .programs-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:1.5rem; margin-bottom:3rem; }
        .program-card { background:#fff; padding:1.5rem; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,.1); text-align:center; }
        .program-card h3 { color:#d32f2f; margin:1rem 0 .5rem; font-size:1.2rem; }
        .program-card ul { text-align:left; padding-left:1.2rem; }
        .program-card li { margin:.4rem 0; font-size:0.95rem; }
        .program-card li strong { color:#d32f2f; }
        .new-badge { background:#ff9800; color:#fff; font-size:0.7rem; padding:2px 6px; border-radius:4px; margin-left:5px; }
        
        .dept-card { background:#fff; padding:2rem; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,.1); margin-bottom:2rem; }
        .dept-card h3 { color:#d32f2f; margin-bottom:1rem; font-size:1.4rem; border-bottom:2px solid #d32f2f; padding-bottom:.5rem; }
        .dept-card h4 { color:#d32f2f; font-size:1.1rem; margin:1.2rem 0 .6rem; }
        .dept-card p { color:#555; line-height:1.6; margin-bottom:1rem; font-size:0.95rem; }
        .dept-card ul { margin-left:1.5rem; }
        .dept-card ul li { margin:.5rem 0; }

        .video-container { 
            position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; 
            max-width: 800px; margin: 2rem auto; border-radius: 12px; 
            box-shadow: 0 6px 20px rgba(0,0,0,.15); 
        }
        .video-container iframe { 
            position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0; 
        }

        .footer-dept { background:#eee; padding:2rem 1rem; text-align:center; font-size:0.9rem; color:#666; }
        .footer-dept strong { color:#d32f2f; }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

    <!-- RED HERO -->
    <section class="dept-hero">
        <div class="container">
            <h1>Higher Education</h1>
        </div>
    </section>

    <!-- VIDEO -->
    <section class="section" style="background:#fff;">
        <div class="container">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/ZaN5RAG39-w" title="SFAC Bacoor College Programs" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- PROGRAMS -->
    <section class="section">
        <div class="container">
            <h2>Offered Programs</h2>
            <div class="programs-grid">
                <div class="program-card">
                    <h3>BS IN COMPUTER SCIENCE</h3>
                </div>
                <div class="program-card">
                    <h3>ASSOCIATE IN COMPUTER TECHNOLOGY <span class="new-badge">NEW!</span></h3>
                </div>
                <div class="program-card">
                    <h3>BS IN TOURISM MANAGEMENT <span class="new-badge">NEW!</span></h3>
                </div>
                <div class="program-card">
                    <h3>BS IN HOSPITALITY MANAGEMENT</h3>
                </div>
                <div class="program-card">
                    <h3>BS IN BUSINESS ADMINISTRATION</h3>
                    <ul>
                        <li>Major in <strong>Operations Management</strong> <span class="new-badge">NEW!</span></li>
                        <li>Major in <strong>Financial Management</strong></li>
                        <li>Major in <strong>Marketing Management</strong></li>
                    </ul>
                </div>
                <div class="program-card">
                    <h3>BACHELOR OF PHYSICAL EDUCATION</h3>
                </div>
                <div class="program-card">
                    <h3>BACHELOR OF EARLY CHILDHOOD EDUCATION</h3>
                </div>
                <div class="program-card">
                    <h3>BACHELOR OF ELEMENTARY EDUCATION</h3>
                </div>
                <div class="program-card">
                    <h3>BACHELOR OF SECONDARY EDUCATION</h3>
                    <ul>
                        <li>Major in <strong>Mathematics</strong></li>
                        <li>Major in <strong>English</strong></li>
                        <li>Major in <strong>Filipino</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- DEPARTMENTS -->
    <section class="section" style="background:#fff;">
        <div class="container">
            <h2>College Departments</h2>

            <!-- School of Computer Studies -->
            <div class="dept-card">
                <h3>School of Computer Studies</h3>
                <h4>STATEMENT OF PURPOSE</h4>
                <p>The School of Computer Studies (SCOM) is committed to prepare students to be professionals in the field of Information and Communication Technology by providing them analytical, technical and communication skills through appropriate concepts, principles, research and technology development. Train them to become accustomed to work environment, develop personal integrity and upholding the culture of excellence through the Franciscan values of faith and humility.</p>
                <h4>VISION</h4>
                <p>The School of Computer Studies (SCOM) strives to develop information technology professional by providing an educational enterprise with the thrust in computer science, systems and software engineering. We strive to build a school that excels in systems and software development. We aspire to be recognized by industries and government as a premier source of outstanding graduates.</p>
                <h4>MISSION</h4>
                <p>To attain our vision, we commit to:</p>
                <ul>
                    <li>Provide quality education to students by delivering relevant and up-to-the-date concepts and application in information and communication technology.</li>
                    <li>Initiate research in computing, software design and development.</li>
                    <li>Develop information technology professionals who possess the Franciscan values and culture of excellence.</li>
                    <li>Establish industries and government linkages in facilitating transferring of knowledge, and technology innovation that will lead to job creation and economic development.</li>
                </ul>
            </div>

            <!-- School of Education -->
            <div class="dept-card">
                <h3>School of Education</h3>
                <h4>STATEMENT OF PURPOSE</h4>
                <p>The School of Education adheres to its commitment to equip future teachers with the knowledge, attitudes, behaviors and skills required to perform tasks in the school; and to the development of a professional that is active in the pursuit of higher levels of academic competence and professional existence, committed to the improvement of the quality of life of all learners, dedicated to the promotion of a just and humane society, and imbued with love of God, nature and country.</p>
                <h4>VISION</h4>
                <p>We envision ourselves as a center for development of research-oriented educational leaders who are exemplars of academic excellence and leadership in education. This will be achieved by providing quality Franciscan education that is holistic, innovative, and culture-sensitive.</p>
                <h4>MISSION</h4>
                <p>To attain our vision, we commit to:</p>
                <ul>
                    <li>Produce competent teachers who are research-oriented, innovative, and culture-sensitive.</li>
                    <li>Provide quality education to students by delivering relevant and up-to-the-date concepts and application in education.</li>
                    <li>Initiate research in teaching and learning methodologies.</li>
                    <li>Develop educational professionals who possess the Franciscan values and culture of excellence.</li>
                    <li>Establish industries and government linkages in facilitating transferring of knowledge, and technology innovation that will lead to job creation and economic development.</li>
                </ul>
            </div>

            <!-- School of Business Administration -->
            <div class="dept-card">
                <h3>School of Business Administration</h3>
                <h4>STATEMENT OF PURPOSE</h4>
                <p>The School of Business Administration (SBA) prepares students to be professionals in the field of Finance, Marketing and Operations Management, by giving them relevant and timely foundation concepts, theories and practices in business management and administration. Incorporating emerging technology application, providing global classroom environment to easily adapt to the changing world of business and developing self-confidence through modern communications and upholding the culture of excellence through the Franciscan values of faith and humility.</p>
                <h4>VISION</h4>
                <p>The School of Business Administration (SBA) seeks to build a school that excels in business administration and entrepreneurship by providing an educational enterprise with the thrust in business finance, marketing and operations management. We aspire to be recognized by industries and government as a premier source of outstanding graduates who are leaders and innovators.</p>
                <h4>MISSION</h4>
                <p>To attain our vision, we commit to:</p>
                <ul>
                    <li>Provide quality education to students by delivering relevant and up-to-the-date concepts and application in business and management.</li>
                    <li>Develop professionals who possess the Franciscan values and culture of excellence.</li>
                    <li>Establish industries and government linkages in facilitating transferring of knowledge, and technology innovation that will lead to job creation and economic development.</li>
                </ul>
            </div>

            <!-- School of Hospitality Management -->
            <div class="dept-card">
                <h3>School of Hospitality Management</h3>
                <h4>STATEMENT OF PURPOSE</h4>
                <p>The School of Hospitality Management is fully committed to providing quality hospitality education to develop students’ global competitiveness under the umbrella of Tourism; Food, Lodging, Recreation, and Transportation. The SHM is also dedicated to mold students to be professionals in the hospitality industry embracing values inculcated by Saint Francis of Assisi, Faith, and Humility, providing caliber service that is in line with the School's motto, "In Par Excellence" to future clientele.</p>
                <h4>VISION</h4>
                <p>The School of Hospitality Management (SHM) seeks to build a school that excels in business administration and entrepreneurship by providing an educational enterprise with the thrust in business finance, marketing and operations management. We aspire to be recognized by industries and government as a premier source of outstanding graduates who are leaders and innovators.</p>
                <h4>MISSION</h4>
                <p>The SFAC-SHM is committed to:</p>
                <ul>
                    <li>Educate BSHM students to be hospitality professional that is culture sensitive and inculcated with the values of Saint Francis of Assisi;</li>
                    <li>Provide BSHM students with enough professional exposure that will hone their soft and technical skills for them to be prepared for the Hospitality Industry;</li>
                    <li>Ensure that the faculty of the School of Hospitality Management are well equipped with the right attitude, essential knowledge, and enough skills to deliver quality education;</li>
                    <li>Deliver quality instruction that is relevant to Hospitality industry trends and practices.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

    <script src="main.js"></script>
</body>
</html>