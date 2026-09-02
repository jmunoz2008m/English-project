<?php
/**
 * English Projects Portfolio
 * -----------------------------------------------------------
 * To add / replace a project later, just edit the $projects
 * array below — nothing else in this file needs to change.
 */

$student_name = "Jorge Muñoz";

$projects = [
    [
        'section'     => 'description',
        'number'      => '01',
        'kicker'      => 'Descriptive Writing',
        'title'       => 'Description',
        'name'        => 'Barranquilla: A Vibrant City',
        'description' => 'A descriptive writing project profiling Barranquilla, Colombia — its Caribbean coast location, warm climate, local food, and its famous carnival.',
        'file'        => 'uploads/description.pdf',
        'type'        => 'PDF',
        'viewer'      => 'pdf',
    ],
    [
        'section'     => 'controversial',
        'number'      => '02',
        'kicker'      => 'Argumentative Writing',
        'title'       => 'Controversial',
        'name'        => 'The Mediterranean Diet: What Do You Think?',
        'description' => 'An argumentative piece weighing the pros and cons of the Mediterranean diet, closing with a personal opinion on its balance, health benefits, and cost.',
        'file'        => 'uploads/controversial.pdf',
        'type'        => 'PDF',
        'viewer'      => 'pdf',
    ],
    [
        'section'     => 'video-game',
        'number'      => '03',
        'kicker'      => 'Creative Project',
        'title'       => 'Video-Game',
        'name'        => 'Shadow Escape',
        'description' => 'A survival-adventure game design pitch following Kael, an explorer who solves puzzles and battles enemies to escape a shadow-bound city.',
        'file'        => 'uploads/video-game.pdf',
        'type'        => 'PDF',
        'viewer'      => 'pdf',
    ],
    [
        'section'     => 'lipsync',
        'number'      => '04',
        'kicker'      => 'Spoken English',
        'title'       => 'Lipsync',
        'name'        => 'Lipsync Performance',
        'description' => 'A recorded lipsync assignment practicing English pronunciation.',
        'file'        => 'uploads/lipsync.mp4',
        'type'        => 'VIDEO',
        'viewer'      => 'video',
    ],
    [
        'section'     => 'store',
        'number'      => '05',
        'kicker'      => 'Design Project',
        'title'       => 'Store',
        'name'        => 'HydraSmart — Product Landing Page',
        'description' => 'A landing-page design concept for HydraSmart, a smart hydration bottle, covering product features, specifications, and marketing copy.',
        'file'        => 'uploads/store.pdf',
        'type'        => 'PDF',
        'viewer'      => 'pdf',
    ],
    [
        'section'     => 'menu',
        'number'      => '06',
        'kicker'      => 'Design Project',
        'title'       => 'Menu',
        'name'        => 'The Planet Dining Terminal',
        'description' => 'A restaurant menu design themed around global airport cuisine, featuring dishes inspired by Europe, the Americas, Africa, and Asia.',
        'file'        => 'uploads/menu.pdf',
        'type'        => 'PDF',
        'viewer'      => 'pdf',
    ],
    [
        'section'     => 'cv',
        'number'      => '07',
        'kicker'      => 'Profile',
        'title'       => 'CV',
        'name'        => 'Curriculum Vitae',
        'description' => 'A short professional profile and academic background written in English.',
        'file'        => 'uploads/cv.docx',
        'type'        => 'WORD DOCUMENT',
        'viewer'      => 'none',
    ],
];


/**
 * Small helper: renders one project card.
 */
function render_card($p)
{
    $filePath   = $p['file'];
    $fileExists = file_exists(__DIR__ . '/' . $filePath);
    $fileName   = basename($filePath);
    $previewId  = 'preview-' . $p['section'];

    echo '<article class="card" data-project-key="' . htmlspecialchars($p['section']) . '">';

    echo '  <div class="card-top">';
    echo '    <span class="type-tag">' . htmlspecialchars($p['type']) . '</span>';
    echo '    <span class="card-stamp" aria-hidden="true">No. ' . htmlspecialchars($p['number']) . '</span>';
    echo '  </div>';

    echo '  <h3 data-project-name>' . htmlspecialchars($p['name']) . '</h3>';

    echo '  <p data-project-description>' . htmlspecialchars($p['description']) . '</p>';

    echo '  <div class="card-meta">';
    echo '    <span data-project-file>File</span>';
    echo '    <span>' . htmlspecialchars($fileName) . '</span>';
    echo '  </div>';

    echo '  <div class="card-actions">';

    if (!$fileExists) {

        echo '<span class="btn btn-outline btn-sm" aria-disabled="true" data-project-missing>';
        echo 'File not uploaded yet';
        echo '</span>';

    } else {

        if ($p['viewer'] !== 'none') {

            echo '<button type="button" class="btn btn-outline btn-sm" ';
            echo 'data-preview-toggle="' . htmlspecialchars($previewId) . '" ';
            echo 'data-label-closed="View Project" ';
            echo 'aria-expanded="false" ';
            echo 'data-project-view>';
            echo 'View Project';
            echo '</button>';
        }

        $downloadType = '';

        if ($p['section'] === 'lipsync') {
            $downloadType = 'video';
        } elseif ($p['section'] === 'cv') {
            $downloadType = 'cv';
        }

        echo '<a class="btn btn-primary btn-sm" ';
        echo 'href="' . htmlspecialchars($filePath) . '" download ';
        echo 'data-project-download="' . htmlspecialchars($downloadType) . '">';

        if ($p['section'] === 'lipsync') {
            echo 'Download Video';
        } elseif ($p['section'] === 'cv') {
            echo 'Download CV';
        } else {
            echo 'Download';
        }

        echo '</a>';
    }

    echo '  </div>';

    /**
     * Preview panel
     */
    if ($p['viewer'] !== 'none') {

        echo '  <div class="preview" id="' . htmlspecialchars($previewId) . '">';

        if (!$fileExists) {

            echo '<p class="preview-empty" ';
            echo 'data-project-preview-empty="' . htmlspecialchars($filePath) . '">';
            echo "This file hasn't been uploaded yet. Add it to ";
            echo '<code>' . htmlspecialchars($filePath) . '</code>';
            echo '</p>';

        } elseif ($p['viewer'] === 'pdf') {

            echo '<iframe ';
            echo 'data-src="' . htmlspecialchars($filePath) . '#toolbar=1" ';
            echo 'title="' . htmlspecialchars($p['name']) . ' preview" ';
            echo 'loading="lazy"></iframe>';

        } elseif ($p['viewer'] === 'video') {

            echo '<video controls preload="none" ';
            echo 'data-src="' . htmlspecialchars($filePath) . '"></video>';
        }

        echo '  </div>';
    }

    echo '</article>';
}


/**
 * Get a project by section key.
 */
function get_project($projects, $section)
{
    foreach ($projects as $p) {
        if ($p['section'] === $section) {
            return $p;
        }
    }

    return null;
}

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
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title data-i18n="index.title">English Projects Portfolio</title>

<meta
    name="description"
    data-i18n="index.description.meta"
    content="An academic portfolio of English-class projects: descriptive writing, argumentative essays, creative design, and spoken English."
>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link
    href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
    rel="stylesheet"
>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/dark.css">

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

<a class="brand" href="#top">

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
    <label class="dark-mode-switch">
        <input type="checkbox" id="darkModeToggle">
        <span class="slider"></span>
    </label>
</li>

<li>
    <button
        type="button"
        data-language-toggle
        style="
            background: transparent;
            border: 1px solid currentColor;
            border-radius: 6px;
            padding: 6px 10px;
            cursor: pointer;
            font: inherit;
            color: inherit;
        "
        aria-label="Change language to Spanish"
    >
        ES
    </button>
</li>

<li>
    <a href="#description" data-i18n="nav.description">
        Description
    </a>
</li>

<li>
    <a href="#controversial" data-i18n="nav.controversial">
        Controversial
    </a>
</li>

<li>
    <a href="#video-game" data-i18n="nav.video-game">
        Video-Game
    </a>
</li>

<li>
    <a href="#lipsync" data-i18n="nav.lipsync">
        Lipsync
    </a>
</li>

<li>
    <a href="#store" data-i18n="nav.store">
        Store
    </a>
</li>

<li>
    <a href="#menu" data-i18n="nav.menu">
        Menu
    </a>
</li>

<li>
    <a href="contact.php" data-i18n="nav.contact">
        Contact
    </a>
</li>

<li>
    <a href="about.php" data-i18n="nav.about">
        About Me
    </a>
</li>

</ul>

</nav>

</header>


<main id="main">

<section class="hero" id="top">

<div class="container hero-grid">

<div>

<p
    class="eyebrow"
    data-i18n="index.hero.eyebrow"
>
    Academic Portfolio
</p>

<h1
    data-i18n="index.hero.title"
    data-i18n-html
>
    My English<br>Projects
</h1>

<p
    class="lede"
    data-i18n="index.hero.description"
>
    A collection of my academic projects and assignments — descriptive writing, argument, design, and spoken English — completed throughout my English course.
</p>

<div class="hero-actions">

<a
    class="btn btn-primary"
    href="#description"
    data-i18n="index.hero.explore"
>
    Explore My Projects
</a>

<a
    class="btn btn-outline"
    href="about.php"
    data-i18n="index.hero.about"
>
    About Me
</a>

</div>

</div>


<div class="pass" aria-hidden="true">

<div class="pass-main">

<div class="pass-row">

<div>

<p
    class="pass-label"
    data-i18n="index.passenger"
>
    Passenger
</p>

<p class="pass-value">
    <?php echo htmlspecialchars($student_name); ?>
</p>

</div>


<div>

<p
    class="pass-label"
    data-i18n="index.class"
>
    Class
</p>

<p
    class="pass-value"
    data-i18n="index.english"
>
    English
</p>

</div>

</div>


<div class="pass-route">

<span>A1</span>

<span class="line"></span>

<span
    data-i18n="index.fluent"
>
    Fluent
</span>

</div>


<p
    class="pass-label"
    style="margin-top:1.4rem;"
    data-i18n="index.projects"
>
    7 Projects On Board
</p>

</div>


<div class="pass-stub">

<div
    class="stamp"
    data-i18n="index.boarding"
    data-i18n-html
>
    Boarding<br>Pass
</div>

<p
    class="pass-label"
    style="color:var(--cream-3);"
    data-i18n="index.portfolio"
    data-i18n-html
>
    Portfolio<br>2026
</p>

</div>

</div>

</div>

</section>


<section class="section" id="description">

<div class="container">

<div class="section-head">

<div>

<p class="section-kicker">

01 · <?php echo htmlspecialchars(get_project($projects, 'description')['kicker']); ?>

</p>

<h2 data-i18n="index.description.title">
    Description
</h2>

</div>

<p
    class="section-desc"
    data-i18n="index.description.text"
>
    A written portrait of a place, built around vivid, specific vocabulary.
</p>

</div>

<div class="grid single">

<?php render_card(get_project($projects, 'description')); ?>

</div>

</div>

</section>


<section class="section" id="controversial">

<div class="container">

<div class="section-head">

<div>

<p class="section-kicker">

02 · <?php echo htmlspecialchars(get_project($projects, 'controversial')['kicker']); ?>

</p>

<h2 data-i18n="index.controversial.title">
    Controversial
</h2>

</div>

<p
    class="section-desc"
    data-i18n="index.controversial.text"
>
    Taking a position on a debated topic and defending it with evidence.
</p>

</div>

<div class="grid single">

<?php render_card(get_project($projects, 'controversial')); ?>

</div>

</div>

</section>


<section class="section" id="video-game">

<div class="container">

<div class="section-head">

<div>

<p class="section-kicker">

03 · <?php echo htmlspecialchars(get_project($projects, 'video-game')['kicker']); ?>

</p>

<h2 data-i18n="index.video.title">
    Video-Game
</h2>

</div>

<p
    class="section-desc"
    data-i18n="index.video.text"
>
    An original concept pitch, written and designed in English.
</p>

</div>

<div class="grid single">

<?php render_card(get_project($projects, 'video-game')); ?>

</div>

</div>

</section>


<section class="section" id="lipsync">

<div class="container">

<div class="section-head">

<div>

<p class="section-kicker">

04 · <?php echo htmlspecialchars(get_project($projects, 'lipsync')['kicker']); ?>

</p>

<h2 data-i18n="index.lipsync.title">
    Lipsync
</h2>

</div>

<p
    class="section-desc"
    data-i18n="index.lipsync.text"
>
    A spoken-English recording focused on pronunciation and rhythm.
</p>

</div>

<div class="grid single">

<?php render_card(get_project($projects, 'lipsync')); ?>

</div>

</div>

</section>


<section class="section" id="store">

<div class="container">

<div class="section-head">

<div>

<p class="section-kicker">

05 · <?php echo htmlspecialchars(get_project($projects, 'store')['kicker']); ?>

</p>

<h2 data-i18n="index.store.title">
    Store
</h2>

</div>

<p
    class="section-desc"
    data-i18n="index.store.text"
>
    A commercial design project, from product copy to page layout.
</p>

</div>

<div class="grid single">

<?php render_card(get_project($projects, 'store')); ?>

</div>

</div>

</section>


<section class="section" id="menu">

<div class="container">

<div class="section-head">

<div>

<p class="section-kicker">

06 · <?php echo htmlspecialchars(get_project($projects, 'menu')['kicker']); ?>

</p>

<h2 data-i18n="index.menu.title">
    Menu
</h2>

</div>

<p
    class="section-desc"
    data-i18n="index.menu.text"
>
    A restaurant menu design exercise blending food vocabulary and layout.
</p>

</div>

<div class="grid single">

<?php render_card(get_project($projects, 'menu')); ?>

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

<span data-i18n="footer.academic">
    Academic Portfolio —
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