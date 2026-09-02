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
    data-i18n="contact.title"
>
    Contact Me | English Projects Portfolio
</title>


<meta
    name="description"
    data-i18n="contact.meta"
    content="Contact form to reach out to Jorge Ivan Muñoz."
>


<link rel="preconnect" href="https://fonts.googleapis.com">

<link
    rel="preconnect"
    href="https://fonts.gstatic.com"
    crossorigin
>


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


<!-- =====================================================
     HEADER
===================================================== -->

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
    class="is-active"
    data-i18n="nav.contact"
>
    Contact
</a>

</li>


<li>

<a
    href="about.php"
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


<!-- =====================================================
     MAIN
===================================================== -->

<main id="main">


<style>

/* =====================================================
   ESTILOS ORIGINALES DEL FORMULARIO
===================================================== */

.contact-card-v2 {

    background-color: #ffffff;

    border-radius: 16px;

    padding: 40px;

    border: 3.5px solid #13203c;

    box-shadow: 10px 10px 0px #13203c;

    transition:
        transform 0.25s ease,
        box-shadow 0.25s ease;
}


.contact-card-v2:hover {

    transform: translateY(-3px);

    box-shadow: 13px 13px 0px #13203c;

}


.neo-input {

    width: 100%;

    padding: 14px 16px;

    border: 2px solid #13203c;

    border-radius: 10px;

    font-family: 'Space Grotesk', sans-serif;

    font-size: 0.95rem;

    background-color: #fafaf7;

    box-sizing: border-box;

    font-weight: 500;

    color: #13203c;

    outline: none;

    transition: all 0.2s ease;

}


.neo-input:focus {

    background-color: #ffffff;

    border-color: #13203c;

    box-shadow: 4px 4px 0px #13203c;

}


.btn-neo-v2 {

    width: 100%;

    background-color: #13203c;

    color: #ffffff;

    font-family: 'Space Grotesk', sans-serif;

    font-weight: 700;

    font-size: 1rem;

    padding: 16px 28px;

    border: 2px solid #13203c;

    border-radius: 10px;

    cursor: pointer;

    text-transform: uppercase;

    letter-spacing: 1px;

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 10px;

    box-shadow: 5px 5px 0px #000000;

    transition: all 0.2s ease;

}


.btn-neo-v2:hover {

    background-color: #1e3159;

    transform: translate(-2px, -2px);

    box-shadow: 7px 7px 0px #000000;

}


.btn-neo-v2:active {

    transform: translate(2px, 2px);

    box-shadow: 2px 2px 0px #000000;

}


.status-badge {

    display: inline-flex;

    align-items: center;

    gap: 8px;

    background: #ffffff;

    border: 2px solid #13203c;

    padding: 6px 14px;

    border-radius: 20px;

    font-family: 'Space Grotesk', sans-serif;

    font-size: 0.85rem;

    font-weight: 700;

    color: #13203c;

    box-shadow: 3px 3px 0px #13203c;

    margin-bottom: 16px;

}


.pulse-dot {

    width: 8px;

    height: 8px;

    background-color: #10b981;

    border-radius: 50%;

    box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7);

    animation: pulse 1.6s infinite;

}


@keyframes pulse {

    0% {

        box-shadow:
            0 0 0 0 rgba(16, 185, 129, 0.7);

    }

    70% {

        box-shadow:
            0 0 0 8px rgba(16, 185, 129, 0);

    }

    100% {

        box-shadow:
            0 0 0 0 rgba(16, 185, 129, 0);

    }

}

</style>


<section
    class="section contact-section"
    style="padding: 100px 0;"
>


<div
    class="container"
    style="
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 20px;
    "
>


<div
    class="contact-grid"
    style="
        display: grid;
        grid-template-columns:
            repeat(auto-fit, minmax(320px, 1fr));
        gap: 50px;
        align-items: start;
    "
>


<!-- =====================================================
     COLUMNA IZQUIERDA
===================================================== -->

<div class="contact-info">


<div class="status-badge">

<span class="pulse-dot"></span>

<span data-i18n="contact.available">
    Available for projects
</span>

</div>


<p
    class="section-kicker"
    style="
        font-family: 'Space Grotesk', sans-serif;
        font-size: 0.85rem;
        font-weight: 700;
        color: #13203c;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 8px;
    "
    data-i18n="contact.kicker"
>
    07 · Contact
</p>


<h1
    data-contact-heading
    style="
        font-family: 'Space Grotesk', sans-serif;
        font-size: 3.2rem;
        color: #13203c;
        line-height: 1.05;
        margin: 0 0 20px 0;
        font-weight: 700;
    "
>

Let's build something

<span
    style="
        background: #13203c;
        color: #ffffff;
        padding: 2px 10px;
        border-radius: 6px;
    "
>
    great
</span>

together.

</h1>


<p
    class="section-desc"
    style="
        font-family: 'Space Grotesk', sans-serif;
        font-size: 1.05rem;
        color: #334155;
        line-height: 1.6;
        margin-bottom: 30px;
    "
    data-i18n="contact.description"
>

Have a project idea, dynamic web application requirement, or general inquiry? Feel free to reach out directly through the form.

</p>


<!-- TARJETAS RÁPIDAS -->

<div
    style="
        display: flex;
        flex-direction: column;
        gap: 16px;
    "
>


<div
    style="
        display: flex;
        align-items: center;
        gap: 14px;
        background: #ffffff;
        padding: 16px 20px;
        border-radius: 12px;
        border: 2.5px solid #13203c;
        box-shadow: 4px 4px 0px #13203c;
    "
>

<span style="font-size: 1.3rem;">
    ✉️
</span>


<div>

<div
    style="
        font-family: 'Space Grotesk', sans-serif;
        font-size: 0.75rem;
        font-weight: 700;
        color: #64748b;
        text-transform: uppercase;
    "
    data-i18n="contact.direct"
>
    Direct Email
</div>


<div
    style="
        font-family: 'Space Grotesk', sans-serif;
        font-size: 0.95rem;
        font-weight: 700;
        color: #13203c;
    "
>
    Jorge Muñoz
</div>

</div>

</div>


<div
    style="
        display: flex;
        align-items: center;
        gap: 14px;
        background: #ffffff;
        padding: 16px 20px;
        border-radius: 12px;
        border: 2.5px solid #13203c;
        box-shadow: 4px 4px 0px #13203c;
    "
>

<span style="font-size: 1.3rem;">
    🚀
</span>


<div>

<div
    style="
        font-family: 'Space Grotesk', sans-serif;
        font-size: 0.75rem;
        font-weight: 700;
        color: #64748b;
        text-transform: uppercase;
    "
    data-i18n="contact.location"
>
    Location
</div>


<div
    style="
        font-family: 'Space Grotesk', sans-serif;
        font-size: 0.95rem;
        font-weight: 700;
        color: #13203c;
    "
>
    Colombia · Sasaima
</div>

</div>

</div>

</div>

</div>


<!-- =====================================================
     COLUMNA DERECHA / FORMULARIO
===================================================== -->

<div class="contact-card-v2">


<form
    class="contact-form"
    action="#"
    method="POST"
    style="
        display: flex;
        flex-direction: column;
        gap: 18px;
    "
>


<div
    style="
        display: grid;
        grid-template-columns:
            repeat(auto-fit, minmax(200px, 1fr));
        gap: 16px;
    "
>


<div
    class="contact-field"
    style="
        display: flex;
        flex-direction: column;
        gap: 6px;
    "
>


<label
    for="name"
    style="
        font-family: 'Space Grotesk', sans-serif;
        font-weight: 700;
        font-size: 0.85rem;
        color: #13203c;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    "
    data-i18n="contact.name"
>
    Name *
</label>


<input
    type="text"
    id="name"
    name="name"
    class="neo-input"
    placeholder="Jorge Muñoz"
    data-i18n-placeholder="contact.name.placeholder"
    required
>

</div>


<div
    class="contact-field"
    style="
        display: flex;
        flex-direction: column;
        gap: 6px;
    "
>


<label
    for="email"
    style="
        font-family: 'Space Grotesk', sans-serif;
        font-weight: 700;
        font-size: 0.85rem;
        color: #13203c;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    "
    data-i18n="contact.email"
>
    Email *
</label>


<input
    type="email"
    id="email"
    name="email"
    class="neo-input"
    placeholder="your@email.com"
    data-i18n-placeholder="contact.email.placeholder"
    required
>

</div>

</div>


<div
    class="contact-field"
    style="
        display: flex;
        flex-direction: column;
        gap: 6px;
    "
>


<label
    for="subject"
    style="
        font-family: 'Space Grotesk', sans-serif;
        font-weight: 700;
        font-size: 0.85rem;
        color: #13203c;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    "
    data-i18n="contact.subject"
>
    Subject *
</label>


<input
    type="text"
    id="subject"
    name="subject"
    class="neo-input"
    placeholder="Web Development Inquiry"
    data-i18n-placeholder="contact.subject.placeholder"
    required
>

</div>


<div
    class="contact-field"
    style="
        display: flex;
        flex-direction: column;
        gap: 6px;
    "
>


<label
    for="message"
    style="
        font-family: 'Space Grotesk', sans-serif;
        font-weight: 700;
        font-size: 0.85rem;
        color: #13203c;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    "
    data-i18n="contact.message"
>
    Message *
</label>


<textarea
    id="message"
    name="message"
    rows="4"
    class="neo-input"
    style="resize: vertical;"
    placeholder="Tell me about your project..."
    data-i18n-placeholder="contact.message.placeholder"
    required
></textarea>

</div>


<button
    type="submit"
    class="btn-neo-v2"
    style="margin-top: 6px;"
>

<span data-i18n="contact.send">
    Send Message
</span>


<svg
    width="20"
    height="20"
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    stroke-width="2.5"
    stroke-linecap="round"
    stroke-linejoin="round"
>

<line
    x1="22"
    y1="2"
    x2="11"
    y2="13"
></line>

<polygon
    points="22 2 15 22 11 13 2 9 22 2"
></polygon>

</svg>

</button>


</form>

</div>

</div>

</div>

</section>

</main>


<!-- =====================================================
     FOOTER
===================================================== -->

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

<span data-i18n="contact.footer">
    Contact —
</span>

Jorge Muñoz

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
