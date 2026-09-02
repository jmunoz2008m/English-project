/**
 * ============================================================
 * LANGUAGE SYSTEM
 * English Projects Portfolio
 *
 * English <-> Spanish
 *
 * Handles:
 * - General translations
 * - Navigation
 * - Index page
 * - Project cards
 * - Project preview buttons
 * - About page
 * - Contact page
 * - Placeholders
 * - Alt text
 * - ARIA labels
 * - Page titles
 * - Meta descriptions
 * - Language persistence with localStorage
 * ============================================================
 */

(function () {

    "use strict";


    // =========================================================
    // STORAGE
    // =========================================================

    const STORAGE_KEY = "portfolioLanguage";


    // =========================================================
    // TRANSLATIONS
    // =========================================================

    const translations = {

        // =====================================================
        // ENGLISH
        // =====================================================

        en: {

            /* =================================================
               GENERAL / NAVIGATION
            ================================================= */

            "brand": "English Portfolio",

            "nav.description": "Description",
            "nav.controversial": "Controversial",
            "nav.video-game": "Video-Game",
            "nav.lipsync": "Lipsync",
            "nav.store": "Store",
            "nav.menu": "Menu",
            "nav.about": "About Me",
            "nav.contact": "Contact",

            "language.button": "ES",
            "language.aria":
                "Change language to Spanish",

            "access.skip": "Skip to content",

            "nav.menu.toggle":
                "Toggle navigation menu",


            /* =================================================
               INDEX
            ================================================= */

            "index.title":
                "English Projects Portfolio",

            "index.description.meta":
                "An academic portfolio of English-class projects: descriptive writing, argumentative essays, creative design, and spoken English.",

            "index.hero.eyebrow":
                "Academic Portfolio",

            "index.hero.title":
                "My English<br>Projects",

            "index.hero.description":
                "A collection of my academic projects and assignments — descriptive writing, argument, design, and spoken English — completed throughout my English course.",

            "index.hero.explore":
                "Explore My Projects",

            "index.hero.about":
                "About Me",


            "index.passenger":
                "Passenger",

            "index.class":
                "Class",

            "index.english":
                "English",

            "index.fluent":
                "Fluent",

            "index.projects":
                "7 Projects On Board",

            "index.boarding":
                "Boarding<br>Pass",

            "index.portfolio":
                "Portfolio<br>2026",


            "index.description.title":
                "Description",

            "index.description.text":
                "A written portrait of a place, built around vivid, specific vocabulary.",


            "index.controversial.title":
                "Controversial",

            "index.controversial.text":
                "Taking a position on a debated topic and defending it with evidence.",


            "index.video.title":
                "Video-Game",

            "index.video.text":
                "An original concept pitch, written and designed in English.",


            "index.lipsync.title":
                "Lipsync",

            "index.lipsync.text":
                "A spoken-English recording focused on pronunciation and rhythm.",


            "index.store.title":
                "Store",

            "index.store.text":
                "A commercial design project, from product copy to page layout.",


            "index.menu.title":
                "Menu",

            "index.menu.text":
                "A restaurant menu design exercise blending food vocabulary and layout.",


            /* =================================================
               PROJECT CARDS
            ================================================= */

            "project.description.name":
                "Barranquilla: A Vibrant City",

            "project.description.description":
                "A descriptive writing project profiling Barranquilla, Colombia — its Caribbean coast location, warm climate, local food, and its famous carnival.",


            "project.controversial.name":
                "The Mediterranean Diet: What Do You Think?",

            "project.controversial.description":
                "An argumentative piece weighing the pros and cons of the Mediterranean diet, closing with a personal opinion on its balance, health benefits, and cost.",


            "project.video-game.name":
                "Shadow Escape",

            "project.video-game.description":
                "A survival-adventure game design pitch following Kael, an explorer who solves puzzles and battles enemies to escape a shadow-bound city.",


            "project.lipsync.name":
                "Lipsync Performance",

            "project.lipsync.description":
                "A recorded lipsync assignment practicing English pronunciation.",


            "project.store.name":
                "HydraSmart — Product Landing Page",

            "project.store.description":
                "A landing-page design concept for HydraSmart, a smart hydration bottle, covering product features, specifications, and marketing copy.",


            "project.menu.name":
                "The Planet Dining Terminal",

            "project.menu.description":
                "A restaurant menu design themed around global airport cuisine, featuring dishes inspired by Europe, the Americas, Africa, and Asia.",


            "project.cv.name":
                "Curriculum Vitae",

            "project.cv.description":
                "A short professional profile and academic background written in English.",


            "project.file":
                "File",

            "project.view":
                "View Project",

            "project.hide":
                "Hide Preview",

            "project.download":
                "Download",

            "project.download.video":
                "Download Video",

            "project.download.cv":
                "Download CV",

            "project.not.uploaded":
                "File not uploaded yet",

            "project.preview.not.uploaded":
                "This file hasn't been uploaded yet. Add it to",


            /* =================================================
               INDEX FOOTER
            ================================================= */

            "footer.portfolio":
                "English Projects Portfolio",

            "footer.academic":
                "Academic Portfolio —",

            "footer.rights":
                "All rights reserved.",


            /* =================================================
               ABOUT
            ================================================= */

            "about.title":
                "About Me | English Projects Portfolio",

            "about.meta":
                "Personal profile and biography of Jorge Ivan Muñoz Mojica.",


            "about.eyebrow":
                "Personal Profile",

            "about.title.heading":
                "About Me",

            "about.intro":
                "A short introduction to my academic background, experience, skills, and interests.",


            "about.photo.alt":
                "Portrait of Jorge Ivan Muñoz",

            "about.photo.placeholder":
                "YOUR<br>PHOTO",


            "about.biography":
                "BIOGRAPHY",

            "about.heading":
                "I'm Jorge Ivan Muñoz.",


            "about.bio.1":
                "I am a student focused on software analysis and development, with an academic background that combines technology, English, and creative interests. I am currently studying a Technologist program in Software Analysis and Development at SENA C.D.A.E.",


            "about.bio.2":
                "My academic journey has helped me develop practical skills in backend database design, web interface design, problem solving, and English communication. I currently describe my English proficiency as B2 level.",


            "about.bio.3":
                "Alongside my studies and work experience, music has also been an important part of my personal development. I participated in an instrumental band as a guitarist from 2020 to 2024.",


            "about.education.kicker":
                "01 · Education",

            "about.education.title":
                "Education",

            "about.education.description":
                "The academic experiences that have shaped my current skills and interests.",


            "about.education.sena":
                "Technologist in Software Analysis and Development",

            "about.education.sena.location":
                "Villeta, Cundinamarca · July 2025 – April 2027",


            "about.education.school":
                "High School Diploma",

            "about.education.school.location":
                "Sasaima, Cundinamarca · 2022 – 2024",


            "about.experience.kicker":
                "02 · Experience",

            "about.experience.title":
                "Work Experience",


            "about.experience.company1":
                "SIERRA MORENA COMPANY",

            "about.experience.company1.period":
                "2024 – 2026",

            "about.experience.company1.item1":
                "Handled the cash register.",

            "about.experience.company1.item2":
                "Restocked products.",

            "about.experience.company1.item3":
                "Took orders.",


            "about.experience.company2":
                "Security Company",

            "about.experience.company2.period":
                "2025 – 2027",

            "about.experience.company2.item1":
                "Developed PHP applications with databases.",

            "about.experience.company2.item2":
                "Managed database security.",


            "about.skills.kicker":
                "03 · Skills",

            "about.skills.title":
                "What I Can Do",


            "about.skill.1":
                "Design backend databases",

            "about.skill.2":
                "Design web page interfaces",

            "about.skill.3":
                "English proficiency at B2 level",

            "about.skill.4":
                "Solve coding problems",


            "about.activities.kicker":
                "04 · Activities",

            "about.activities.title":
                "Instrumental Band",

            "about.activities.description":
                "Guitarist · 2020 – 2024",


            "about.cv.kicker":
                "05 · Curriculum Vitae",

            "about.cv.title":
                "Want to know more?",

            "about.cv.description":
                "Download my complete CV to see my academic background, experience, skills, and activities.",

            "about.cv.download":
                "Download CV",

            "about.cv.not.uploaded":
                "CV not uploaded yet",

            "about.footer":
                "About Me —",


            /* =================================================
               CONTACT
            ================================================= */

            "contact.title":
                "Contact Me | English Projects Portfolio",

            "contact.meta":
                "Contact form to reach out to Jorge Ivan Muñoz.",


            "contact.available":
                "Available for projects",

            "contact.kicker":
                "07 · Contact",


            "contact.heading.before":
                "Let's build something",

            "contact.heading.highlight":
                "great",

            "contact.heading.after":
                "together.",


            "contact.description":
                "Have a project idea, dynamic web application requirement, or general inquiry? Feel free to reach out directly through the form.",


            "contact.direct":
                "Direct Email",

            "contact.location":
                "Location",


            "contact.name":
                "Name *",

            "contact.email":
                "Email *",

            "contact.subject":
                "Subject *",

            "contact.message":
                "Message *",


            "contact.name.placeholder":
                "Jorge Muñoz",

            "contact.email.placeholder":
                "your@email.com",

            "contact.subject.placeholder":
                "Web Development Inquiry",

            "contact.message.placeholder":
                "Tell me about your project...",


            "contact.send":
                "Send Message",

            "contact.footer":
                "Contact —"

        },


        // =====================================================
        // SPANISH
        // =====================================================

        es: {

            /* =================================================
               GENERAL / NAVIGATION
            ================================================= */

            "brand":
                "Portafolio de Inglés",

            "nav.description":
                "Descripción",

            "nav.controversial":
                "Controversial",

            "nav.video-game":
                "Videojuego",

            "nav.lipsync":
                "Lipsync",

            "nav.store":
                "Tienda",

            "nav.menu":
                "Menú",

            "nav.about":
                "Sobre Mí",

            "nav.contact":
                "Contacto",


            "language.button":
                "EN",

            "language.aria":
                "Cambiar idioma a inglés",


            "access.skip":
                "Saltar al contenido",

            "nav.menu.toggle":
                "Alternar menú de navegación",


            /* =================================================
               INDEX
            ================================================= */

            "index.title":
                "Portafolio de Proyectos de Inglés",

            "index.description.meta":
                "Portafolio académico de proyectos de inglés: escritura descriptiva, textos argumentativos, diseño e inglés hablado.",


            "index.hero.eyebrow":
                "Portafolio Académico",

            "index.hero.title":
                "Mis<br>Proyectos de Inglés",

            "index.hero.description":
                "Una colección de mis proyectos y trabajos académicos — escritura descriptiva, argumentación, diseño e inglés hablado — realizados durante mi curso de inglés.",

            "index.hero.explore":
                "Explorar Mis Proyectos",

            "index.hero.about":
                "Sobre Mí",


            "index.passenger":
                "Pasajero",

            "index.class":
                "Clase",

            "index.english":
                "Inglés",

            "index.fluent":
                "Fluido",

            "index.projects":
                "7 Proyectos A Bordo",

            "index.boarding":
                "Pase de<br>Abordaje",

            "index.portfolio":
                "Portafolio<br>2026",


            "index.description.title":
                "Descripción",

            "index.description.text":
                "Un retrato escrito de un lugar, construido alrededor de vocabulario específico y descriptivo.",


            "index.controversial.title":
                "Controversial",

            "index.controversial.text":
                "Tomar una posición sobre un tema debatido y defenderla con argumentos y evidencia.",


            "index.video.title":
                "Videojuego",

            "index.video.text":
                "Una propuesta de concepto original, escrita y diseñada en inglés.",


            "index.lipsync.title":
                "Lipsync",

            "index.lipsync.text":
                "Una grabación de inglés hablado enfocada en la pronunciación y el ritmo.",


            "index.store.title":
                "Tienda",

            "index.store.text":
                "Un proyecto de diseño comercial, desde el contenido del producto hasta el diseño de la página.",


            "index.menu.title":
                "Menú",

            "index.menu.text":
                "Un ejercicio de diseño de menú de restaurante que combina vocabulario gastronómico y composición.",


            /* =================================================
               PROJECT CARDS
            ================================================= */

            "project.description.name":
                "Barranquilla: Una Ciudad Vibrante",

            "project.description.description":
                "Un proyecto de escritura descriptiva sobre Barranquilla, Colombia — su ubicación en la costa Caribe, clima cálido, comida local y su famoso carnaval.",


            "project.controversial.name":
                "La Dieta Mediterránea: ¿Qué Piensas?",

            "project.controversial.description":
                "Un texto argumentativo que analiza las ventajas y desventajas de la dieta mediterránea, concluyendo con una opinión personal sobre su equilibrio, beneficios para la salud y costo.",


            "project.video-game.name":
                "Escape de las Sombras",

            "project.video-game.description":
                "Una propuesta de diseño de un videojuego de supervivencia y aventura protagonizado por Kael, un explorador que resuelve acertijos y enfrenta enemigos para escapar de una ciudad dominada por las sombras.",


            "project.lipsync.name":
                "Presentación de Lipsync",

            "project.lipsync.description":
                "Una actividad grabada de lipsync para practicar la pronunciación del inglés.",


            "project.store.name":
                "HydraSmart — Landing Page del Producto",

            "project.store.description":
                "Un concepto de diseño de landing page para HydraSmart, una botella inteligente de hidratación, que presenta características, especificaciones y contenido de marketing.",


            "project.menu.name":
                "The Planet Dining Terminal",

            "project.menu.description":
                "Un diseño de menú de restaurante inspirado en la gastronomía de aeropuertos internacionales, con platos inspirados en Europa, América, África y Asia.",


            "project.cv.name":
                "Currículum Vitae",

            "project.cv.description":
                "Un breve perfil profesional y académico escrito en inglés.",


            "project.file":
                "Archivo",

            "project.view":
                "Ver Proyecto",

            "project.hide":
                "Ocultar Proyecto",

            "project.download":
                "Descargar",

            "project.download.video":
                "Descargar Video",

            "project.download.cv":
                "Descargar CV",

            "project.not.uploaded":
                "Archivo aún no cargado",

            "project.preview.not.uploaded":
                "Este archivo todavía no ha sido cargado. Agrégalo en",


            /* =================================================
               INDEX FOOTER
            ================================================= */

            "footer.portfolio":
                "Portafolio de Proyectos de Inglés",

            "footer.academic":
                "Portafolio Académico —",

            "footer.rights":
                "Todos los derechos reservados.",


            /* =================================================
               ABOUT
            ================================================= */

            "about.title":
                "Sobre Mí | Portafolio de Proyectos de Inglés",

            "about.meta":
                "Perfil personal y biografía de Jorge Ivan Muñoz Mojica.",


            "about.eyebrow":
                "Perfil Personal",

            "about.title.heading":
                "Sobre Mí",

            "about.intro":
                "Una breve introducción a mi formación académica, experiencia, habilidades e intereses.",


            "about.photo.alt":
                "Retrato de Jorge Ivan Muñoz",

            "about.photo.placeholder":
                "TU<br>FOTO",


            "about.biography":
                "BIOGRAFÍA",

            "about.heading":
                "Soy Jorge Ivan Muñoz.",


            "about.bio.1":
                "Soy estudiante enfocado en el análisis y desarrollo de software, con una formación académica que combina tecnología, inglés e intereses creativos. Actualmente estudio un programa de Tecnólogo en Análisis y Desarrollo de Software en el SENA C.D.A.E.",


            "about.bio.2":
                "Mi formación académica me ha permitido desarrollar habilidades prácticas en diseño de bases de datos backend, diseño de interfaces web, resolución de problemas y comunicación en inglés. Actualmente describo mi nivel de inglés como B2.",


            "about.bio.3":
                "Además de mis estudios y experiencia laboral, la música también ha sido una parte importante de mi desarrollo personal. Participé en una banda instrumental como guitarrista desde 2020 hasta 2024.",


            "about.education.kicker":
                "01 · Educación",

            "about.education.title":
                "Educación",

            "about.education.description":
                "Las experiencias académicas que han formado mis habilidades e intereses actuales.",


            "about.education.sena":
                "Tecnólogo en Análisis y Desarrollo de Software",

            "about.education.sena.location":
                "Villeta, Cundinamarca · Julio 2025 – Abril 2027",


            "about.education.school":
                "Bachillerato",

            "about.education.school.location":
                "Sasaima, Cundinamarca · 2022 – 2024",


            "about.experience.kicker":
                "02 · Experiencia",

            "about.experience.title":
                "Experiencia Laboral",


            "about.experience.company1":
                "SIERRA MORENA COMPANY",

            "about.experience.company1.period":
                "2024 – 2026",

            "about.experience.company1.item1":
                "Manejé la caja registradora.",

            "about.experience.company1.item2":
                "Reabastecí productos.",

            "about.experience.company1.item3":
                "Tomé pedidos.",


            "about.experience.company2":
                "Empresa de Seguridad",

            "about.experience.company2.period":
                "2025 – 2027",

            "about.experience.company2.item1":
                "Desarrollé aplicaciones PHP con bases de datos.",

            "about.experience.company2.item2":
                "Gestioné la seguridad de bases de datos.",


            "about.skills.kicker":
                "03 · Habilidades",

            "about.skills.title":
                "Lo Que Puedo Hacer",


            "about.skill.1":
                "Diseñar bases de datos backend",

            "about.skill.2":
                "Diseñar interfaces de páginas web",

            "about.skill.3":
                "Nivel de inglés B2",

            "about.skill.4":
                "Resolver problemas de programación",


            "about.activities.kicker":
                "04 · Actividades",

            "about.activities.title":
                "Banda Instrumental",

            "about.activities.description":
                "Guitarrista · 2020 – 2024",


            "about.cv.kicker":
                "05 · Currículum Vitae",

            "about.cv.title":
                "¿Quieres saber más?",

            "about.cv.description":
                "Descarga mi CV completo para conocer mi formación académica, experiencia, habilidades y actividades.",

            "about.cv.download":
                "Descargar CV",

            "about.cv.not.uploaded":
                "CV aún no cargado",

            "about.footer":
                "Sobre Mí —",


            /* =================================================
               CONTACT
            ================================================= */

            "contact.title":
                "Contáctame | Portafolio de Proyectos de Inglés",

            "contact.meta":
                "Formulario de contacto para comunicarte con Jorge Ivan Muñoz.",


            "contact.available":
                "Disponible para proyectos",

            "contact.kicker":
                "07 · Contacto",


            "contact.heading.before":
                "Construyamos algo",

            "contact.heading.highlight":
                "genial",

            "contact.heading.after":
                "juntos.",


            "contact.description":
                "¿Tienes una idea de proyecto, necesitas una aplicación web dinámica o tienes alguna consulta? No dudes en contactarme directamente mediante el formulario.",


            "contact.direct":
                "Correo Directo",

            "contact.location":
                "Ubicación",


            "contact.name":
                "Nombre *",

            "contact.email":
                "Correo *",

            "contact.subject":
                "Asunto *",

            "contact.message":
                "Mensaje *",


            "contact.name.placeholder":
                "Jorge Muñoz",

            "contact.email.placeholder":
                "tu@correo.com",

            "contact.subject.placeholder":
                "Consulta sobre desarrollo web",

            "contact.message.placeholder":
                "Cuéntame sobre tu proyecto...",


            "contact.send":
                "Enviar Mensaje",

            "contact.footer":
                "Contacto —"

        }

    };


    // =========================================================
    // GET CURRENT LANGUAGE
    // =========================================================

    function getLanguage() {

        const savedLanguage =
            localStorage.getItem(
                STORAGE_KEY
            );

        if (
            savedLanguage === "es" ||
            savedLanguage === "en"
        ) {

            return savedLanguage;

        }

        return "en";

    }


    // =========================================================
    // TRANSLATE
    // =========================================================

    function translate(
        key,
        language
    ) {

        if (
            translations[language] &&
            Object.prototype.hasOwnProperty.call(
                translations[language],
                key
            )
        ) {

            return translations[language][key];

        }

        return key;

    }


    // =========================================================
    // APPLY DATA-I18N TRANSLATIONS
    // =========================================================

    function applyDataTranslations(
        language
    ) {

        document
            .querySelectorAll(
                "[data-i18n]"
            )
            .forEach(function (element) {

                const key =
                    element.getAttribute(
                        "data-i18n"
                    );

                const value =
                    translate(
                        key,
                        language
                    );


                if (
                    element.hasAttribute(
                        "data-i18n-html"
                    )
                ) {

                    element.innerHTML =
                        value;

                } else {

                    element.textContent =
                        value;

                }

            });


        // -----------------------------------------------------
        // PLACEHOLDERS
        // -----------------------------------------------------

        document
            .querySelectorAll(
                "[data-i18n-placeholder]"
            )
            .forEach(function (element) {

                const key =
                    element.getAttribute(
                        "data-i18n-placeholder"
                    );

                element.setAttribute(
                    "placeholder",
                    translate(
                        key,
                        language
                    )
                );

            });


        // -----------------------------------------------------
        // ALT TEXT
        // -----------------------------------------------------

        document
            .querySelectorAll(
                "[data-i18n-alt]"
            )
            .forEach(function (element) {

                const key =
                    element.getAttribute(
                        "data-i18n-alt"
                    );

                element.setAttribute(
                    "alt",
                    translate(
                        key,
                        language
                    )
                );

            });


        // -----------------------------------------------------
        // ARIA LABELS
        // -----------------------------------------------------

        document
            .querySelectorAll(
                "[data-i18n-aria-label]"
            )
            .forEach(function (element) {

                const key =
                    element.getAttribute(
                        "data-i18n-aria-label"
                    );

                element.setAttribute(
                    "aria-label",
                    translate(
                        key,
                        language
                    )
                );

            });

    }


    // =========================================================
    // TRANSLATE PROJECT CARDS
    // =========================================================

    function translateProjects(
        language
    ) {

        // -----------------------------------------------------
        // PROJECT NAME / DESCRIPTION
        // -----------------------------------------------------

        document
            .querySelectorAll(
                "[data-project-key]"
            )
            .forEach(function (card) {

                const projectKey =
                    card.getAttribute(
                        "data-project-key"
                    );


                const nameElement =
                    card.querySelector(
                        "[data-project-name]"
                    );


                const descriptionElement =
                    card.querySelector(
                        "[data-project-description]"
                    );


                if (nameElement) {

                    nameElement.textContent =
                        translate(
                            "project." +
                            projectKey +
                            ".name",
                            language
                        );

                }


                if (descriptionElement) {

                    descriptionElement.textContent =
                        translate(
                            "project." +
                            projectKey +
                            ".description",
                            language
                        );

                }

            });


        // -----------------------------------------------------
        // FILE
        // -----------------------------------------------------

        document
            .querySelectorAll(
                "[data-project-file]"
            )
            .forEach(function (element) {

                element.textContent =
                    translate(
                        "project.file",
                        language
                    );

            });


        // -----------------------------------------------------
        // VIEW / HIDE PROJECT BUTTON
        //
        // THIS IS THE IMPORTANT FIX.
        //
        // It checks whether the preview is open.
        // -----------------------------------------------------

        document
            .querySelectorAll(
                "[data-project-view]"
            )
            .forEach(function (element) {

                const previewState =
                    element.getAttribute(
                        "data-preview-state"
                    );


                if (
                    previewState === "open"
                ) {

                    element.textContent =
                        translate(
                            "project.hide",
                            language
                        );

                } else {

                    element.textContent =
                        translate(
                            "project.view",
                            language
                        );

                }

            });


        // -----------------------------------------------------
        // DOWNLOAD BUTTONS
        // -----------------------------------------------------

        document
            .querySelectorAll(
                "[data-project-download]"
            )
            .forEach(function (element) {

                const type =
                    element.getAttribute(
                        "data-project-download"
                    );


                if (type === "video") {

                    element.textContent =
                        translate(
                            "project.download.video",
                            language
                        );

                }

                else if (type === "cv") {

                    element.textContent =
                        translate(
                            "project.download.cv",
                            language
                        );

                }

                else {

                    element.textContent =
                        translate(
                            "project.download",
                            language
                        );

                }

            });


        // -----------------------------------------------------
        // MISSING FILE
        // -----------------------------------------------------

        document
            .querySelectorAll(
                "[data-project-missing]"
            )
            .forEach(function (element) {

                element.textContent =
                    translate(
                        "project.not.uploaded",
                        language
                    );

            });


        // -----------------------------------------------------
        // EMPTY PREVIEW
        // -----------------------------------------------------

        document
            .querySelectorAll(
                "[data-project-preview-empty]"
            )
            .forEach(function (element) {

                const filePath =
                    element.getAttribute(
                        "data-project-preview-empty"
                    );


                element.innerHTML =
                    translate(
                        "project.preview.not.uploaded",
                        language
                    ) +
                    " <code>" +
                    filePath +
                    "</code>";

            });

    }


    // =========================================================
    // UPDATE SPECIAL ELEMENTS
    // =========================================================

    function updateSpecialElements(
        language
    ) {

        // -----------------------------------------------------
        // CONTACT HEADING
        // -----------------------------------------------------

        const contactHeading =
            document.querySelector(
                "[data-contact-heading]"
            );


        if (contactHeading) {

            const before =
                translate(
                    "contact.heading.before",
                    language
                );


            const highlight =
                translate(
                    "contact.heading.highlight",
                    language
                );


            const after =
                translate(
                    "contact.heading.after",
                    language
                );


            contactHeading.innerHTML =
                before +
                ' <span style="background: #13203c; color: #ffffff; padding: 2px 10px; border-radius: 6px;">' +
                highlight +
                "</span> " +
                after;

        }


        // -----------------------------------------------------
        // PAGE TITLE
        // -----------------------------------------------------

        const pageTitle =
            document.querySelector(
                "title[data-i18n]"
            );


        if (pageTitle) {

            pageTitle.textContent =
                translate(
                    pageTitle.getAttribute(
                        "data-i18n"
                    ),
                    language
                );

        }


        // -----------------------------------------------------
        // META DESCRIPTION
        // -----------------------------------------------------

        const metaDescription =
            document.querySelector(
                'meta[name="description"][data-i18n]'
            );


        if (metaDescription) {

            metaDescription.setAttribute(
                "content",
                translate(
                    metaDescription.getAttribute(
                        "data-i18n"
                    ),
                    language
                )
            );

        }


        // -----------------------------------------------------
        // HTML LANG
        // -----------------------------------------------------

        document.documentElement.lang =
            language;

    }


    // =========================================================
    // UPDATE LANGUAGE BUTTON
    // =========================================================

    function updateLanguageButton(
        language
    ) {

        const buttons =
            document.querySelectorAll(
                "[data-language-toggle]"
            );


        buttons.forEach(function (button) {

            button.textContent =
                translate(
                    "language.button",
                    language
                );


            button.setAttribute(
                "aria-label",
                translate(
                    "language.aria",
                    language
                )
            );


            button.setAttribute(
                "title",
                translate(
                    "language.aria",
                    language
                )
            );

        });

    }


    // =========================================================
    // APPLY LANGUAGE
    // =========================================================

    function applyLanguage(
        language
    ) {

        if (
            language !== "en" &&
            language !== "es"
        ) {

            language = "en";

        }


        // Save language
        localStorage.setItem(
            STORAGE_KEY,
            language
        );


        // Apply all translations
        applyDataTranslations(
            language
        );


        translateProjects(
            language
        );


        updateSpecialElements(
            language
        );


        updateLanguageButton(
            language
        );


        // Set HTML language
        document.documentElement.setAttribute(
            "data-language",
            language
        );

    }


    // =========================================================
    // PUBLIC FUNCTION
    //
    // script.js uses this after opening/closing a preview.
    // =========================================================

    window.applyPortfolioLanguage =
        function () {

            applyLanguage(
                getLanguage()
            );

        };


    // =========================================================
    // TOGGLE LANGUAGE
    // =========================================================

    function toggleLanguage() {

        const currentLanguage =
            getLanguage();


        const newLanguage =
            currentLanguage === "en"
                ? "es"
                : "en";


        applyLanguage(
            newLanguage
        );

    }


    // =========================================================
    // INITIALIZATION
    // =========================================================

    document.addEventListener(
        "DOMContentLoaded",
        function () {

            // -------------------------------------------------
            // Language buttons
            // -------------------------------------------------

            document
                .querySelectorAll(
                    "[data-language-toggle]"
                )
                .forEach(function (button) {

                    button.addEventListener(
                        "click",
                        toggleLanguage
                    );

                });


            // -------------------------------------------------
            // Apply saved language
            // -------------------------------------------------

            applyLanguage(
                getLanguage()
            );

        }
    );

})();