const darkModeToggle = document.getElementById("darkModeToggle");

// Revisar si anteriormente se activó el modo oscuro
const darkModeEnabled = localStorage.getItem("darkMode") === "enabled";

// Aplicar el modo guardado
if (darkModeEnabled) {
    document.body.classList.add("dark-mode");
    darkModeToggle.checked = true;
}

// Cambiar modo oscuro
darkModeToggle.addEventListener("change", () => {

    if (darkModeToggle.checked) {

        document.body.classList.add("dark-mode");

        localStorage.setItem("darkMode", "enabled");

    } else {

        document.body.classList.remove("dark-mode");

        localStorage.setItem("darkMode", "disabled");

    }

});