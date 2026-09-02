<?php
/**
 * About Me — English Projects Portfolio
 * Personal profile page that keeps the same visual language as the portfolio.
 */

$student_name = "Jorge Ivan Muñoz";
$cv_path = "uploads/cv.docx";
$photo_path = "uploads/profile.jpg";

$cv_exists = file_exists(__DIR__ . '/' . $cv_path);
$photo_exists = file_exists(__DIR__ . '/' . $photo_path);
?>

<!DOCTYPE html>

<html lang="en">

<head>

<script>
    if (localStorage.getItem("darkMode") === "enabled") {
        document.documentElement.classList.add("dark-mode");
    }
</script>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title
    data-i18n="about.title"
>
    About Me | English Projects Portfolio
</title>

<meta
    name="description"
    data-i18n="about.meta"
    content="Personal profile and biography of Jorge Ivan Muñoz Mojica."
>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link
    href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
    rel="stylesheet"
>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/dark.css">

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
>

</head>

<body>


<a
    class="skip-link"
    href="#main"
    data-i18n="access.skip"
>
    Skip to content
</a>


<header class="site-header">

<nav
    class="nav-wrap container"
    aria-label="Primary"
>

<a
    class="brand"
    href="index.php"
>

<span
    class="brand-mark"
    aria-hidden="true"
>
    EN
</span>

<span data-i18n="brand">
    English Portfolio
</span>

</a>


<button
    class="nav-toggle"
    type="button"
    aria-label="Toggle navigation menu"
    data-i18n-aria-label="nav.menu.toggle"
    aria-expanded="false"
    aria-controls="primary-menu"
>

<span></span>
<span></span>
<span></span>

</button>


<ul
    class="nav-list"
    id="primary-menu"
>

<li>
    <a
        href="index.php#description"
        data-i18n="nav.description"
    >
        Description
    </a>
</li>


<li>
    <a
        href="index.php#controversial"
        data-i18n="nav.controversial"
    >
        Controversial
    </a>
</li>


<li>
    <a
        href="index.php#video-game"
        data-i18n="nav.video-game"
    >
        Video-Game
    </a>
</li>


<li>
    <a
        href="index.php#lipsync"
        data-i18n="nav.lipsync"
    >
        Lipsync
    </a>
</li>


<li>
    <a
        href="index.php#store"
        data-i18n="nav.store"
    >
        Store
    </a>
</li>


<li>
    <a
        href="index.php#menu"
        data-i18n="nav.menu"
    >
        Menu
    </a>
</li>


<li>

<a
    href="contact.php"
    data-i18n="nav.contact"
>
    Contact
</a>

</li>


<li>

<a
    href="about.php"
    class="is-active"
    aria-current="page"
    data-i18n="nav.about"
>
    About Me
</a>

</li>

</ul>

</nav>

</header>

<div class="floating-controls">

<label class="dark-mode-switch" title="Toggle dark mode">

<input type="checkbox" id="darkModeToggle">

<span class="slider"></span>

</label>

<button
    type="button"
    data-language-toggle
    class="lang-toggle-btn"
    aria-label="Change language to Spanish"
>
    ES
</button>

</div>


<main id="main">


<section class="about-hero">

<div class="container">

<p
    class="eyebrow"
    data-i18n="about.eyebrow"
>
    Personal Profile
</p>


<h1
    data-i18n="about.title.heading"
>
    About Me
</h1>


<p
    class="about-intro"
    data-i18n="about.intro"
>
    A short introduction to my academic background, experience, skills, and interests.
</p>

</div>

</section>


<section class="section about-profile">

<div class="container about-grid">


<div class="about-photo-wrap">

<?php if ($photo_exists): ?>

<img
    class="about-photo"
    src="<?php echo htmlspecialchars($photo_path); ?>"
    alt="Portrait of <?php echo htmlspecialchars($student_name); ?>"
    data-i18n-alt="about.photo.alt"
>

<?php else: ?>

<div
    class="about-photo-placeholder"
    role="img"
    aria-label="Placeholder for your profile photo"
>

<span
    data-i18n="about.photo.placeholder"
    data-i18n-html
>
    YOUR<br>PHOTO
</span>

</div>

<?php endif; ?>

</div>


<article class="about-card">


<div class="card-top">

<span
    class="type-tag"
    data-i18n="about.biography"
>
    BIOGRAPHY
</span>

<span
    class="card-stamp"
    aria-hidden="true"
>
    No. 07
</span>

</div>


<h2 data-i18n="about.heading">
    I'm <?php echo htmlspecialchars($student_name); ?>.
</h2>


<p data-i18n="about.bio.1">

I am a student focused on software analysis and development, with an academic background that combines technology, English, and creative interests. I am currently studying a Technologist program in Software Analysis and Development at SENA C.D.A.E.

</p>


<p data-i18n="about.bio.2">

My academic journey has helped me develop practical skills in backend database design, web interface design, problem solving, and English communication. I currently describe my English proficiency as B2 level.

</p>


<p data-i18n="about.bio.3">

Alongside my studies and work experience, music has also been an important part of my personal development. I participated in an instrumental band as a guitarist from 2020 to 2024.

</p>

<div class="social-links">

    

    <div class="social-links-list">

        <a
            href="https://github.com/jmunoz2008m"
            class="social-link"
            target="blank"
            rel="noopener noreferrer"
            aria-label="Visit my GitHub profile"
            data-i18n-aria-label="about.social.github.aria"
        >
            <i class="fa-brands fa-github" aria-hidden="true"></i>
            
        </a>
        
        




        <a
            href="https://www.instagram.com/ivanchoo_007/"
            class="social-link"
            target="blank"
            rel="noopener noreferrer"
            aria-label="Visit my Instagram profile"
            data-i18n-aria-label="about.social.instagram.aria"
        >
            <i class="fa-brands fa-instagram" aria-hidden="true"></i>
            
        </a>

    </div>

</div>


</article>

</div>

</section>


<section class="section">

<div class="container">


<div class="section-head">

<div>

<p
    class="section-kicker"
    data-i18n="about.education.kicker"
>
    01 · Education
</p>


<h2
    data-i18n="about.education.title"
>
    Education
</h2>

</div>


<p
    class="section-desc"
    data-i18n="about.education.description"
>
    The academic experiences that have shaped my current skills and interests.
</p>

</div>


<div class="timeline">


<article class="timeline-item">

<span class="timeline-number">
    01
</span>

<div>

<p class="timeline-kicker">
    SENA C.D.A.E
</p>


<h3
    data-i18n="about.education.sena"
>
    Technologist in Software Analysis and Development
</h3>


<p
    data-i18n="about.education.sena.location"
>
    Villeta, Cundinamarca · July 2025 – April 2027
</p>

</div>

</article>


<article class="timeline-item">

<span class="timeline-number">
    02
</span>

<div>

<p class="timeline-kicker">
    IED Nuestra Señora del Fátima
</p>


<h3
    data-i18n="about.education.school"
>
    High School Diploma
</h3>


<p
    data-i18n="about.education.school.location"
>
    Sasaima, Cundinamarca · 2022 – 2024
</p>

</div>

</article>


</div>

</div>

</section>


<section class="section about-alt">

<div class="container about-columns">


<article class="info-card">


<p
    class="section-kicker"
    data-i18n="about.experience.kicker"
>
    02 · Experience
</p>


<h2
    data-i18n="about.experience.title"
>
    Work Experience
</h2>


<div class="info-item">

<h3
    data-i18n="about.experience.company1"
>
    SIERRA MORENA COMPANY
</h3>


<p
    class="info-period"
    data-i18n="about.experience.company1.period"
>
    2024 – 2026
</p>


<ul>

<li data-i18n="about.experience.company1.item1">
    Handled the cash register.
</li>

<li data-i18n="about.experience.company1.item2">
    Restocked products.
</li>

<li data-i18n="about.experience.company1.item3">
    Took orders.
</li>

</ul>

</div>


<div class="info-item">

<h3
    data-i18n="about.experience.company2"
>
    Security Company
</h3>


<p
    class="info-period"
    data-i18n="about.experience.company2.period"
>
    2025 – 2027
</p>


<ul>

<li data-i18n="about.experience.company2.item1">
    Developed PHP applications with databases.
</li>

<li data-i18n="about.experience.company2.item2">
    Managed database security.
</li>

</ul>

</div>


</article>


<article class="info-card">


<p
    class="section-kicker"
    data-i18n="about.skills.kicker"
>
    03 · Skills
</p>


<h2
    data-i18n="about.skills.title"
>
    What I Can Do
</h2>


<ul class="skill-list">

<li>
    <span>01</span>
    <span data-i18n="about.skill.1">
        Design backend databases
    </span>
</li>


<li>
    <span>02</span>
    <span data-i18n="about.skill.2">
        Design web page interfaces
    </span>
</li>


<li>
    <span>03</span>
    <span data-i18n="about.skill.3">
        English proficiency at B2 level
    </span>
</li>


<li>
    <span>04</span>
    <span data-i18n="about.skill.4">
        Solve coding problems
    </span>
</li>

</ul>


<div class="activity-box">

<p
    class="section-kicker"
    data-i18n="about.activities.kicker"
>
    04 · Activities
</p>


<h3
    data-i18n="about.activities.title"
>
    Instrumental Band
</h3>


<p
    data-i18n="about.activities.description"
>
    Guitarist · 2020 – 2024
</p>

</div>


</article>

</div>

</section>


<section class="section cv-section">

<div class="container">


<div class="cv-banner">

<div>

<p
    class="section-kicker"
    data-i18n="about.cv.kicker"
>
    05 · Curriculum Vitae
</p>


<h2
    data-i18n="about.cv.title"
>
    Want to know more?
</h2>


<p
    data-i18n="about.cv.description"
>
    Download my complete CV to see my academic background, experience, skills, and activities.
</p>

</div>


<?php if ($cv_exists): ?>

<a
    class="btn btn-primary"
    href="<?php echo htmlspecialchars($cv_path); ?>"
    download
    data-i18n="about.cv.download"
>
    Download CV
</a>

<?php else: ?>

<span
    class="btn btn-outline"
    aria-disabled="true"
    data-i18n="about.cv.not.uploaded"
>
    CV not uploaded yet
</span>

<?php endif; ?>

</div>

</div>

</section>


</main>


<footer class="site-footer">

<div class="container footer-grid">


<div>

<p
    class="footer-brand"
    data-i18n="footer.portfolio"
>
    English Projects Portfolio
</p>


<p class="footer-tag">

<span data-i18n="about.footer">
    About Me —
</span>

<?php echo htmlspecialchars($student_name); ?>

</p>

</div>


<div class="footer-meta">

&copy; <?php echo date('Y'); ?>

<span data-i18n="footer.portfolio">
    English Projects Portfolio
</span>

.<br>

<span data-i18n="footer.rights">
    All rights reserved.
</span>

</div>

</div>

</footer>


<script src="js/script.js"></script>
<script src="js/dark.js"></script>
<script src="js/language.js"></script>

</body>

</html>
