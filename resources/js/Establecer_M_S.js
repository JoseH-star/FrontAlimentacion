document.addEventListener("DOMContentLoaded", function () {
    let botonGuardar = document.getElementById("guardar");
    if (botonGuardar) {
        botonGuardar.addEventListener("click", generarMeta);
    }
});

async function generarMeta() {
    // Obtener valores del formulario
    const peso = document.getElementById("peso")?.value;
    const altura = document.getElementById("altura")?.value;
    const edad = document.getElementById("edad")?.value;
    const sexo = document.getElementById("sexo")?.value;
    const complexion = document.getElementById("complexion")?.value;
    const actividad = document.getElementById("actividad")?.value;
    const suenio = document.getElementById("suenio")?.value;
    const estres = document.getElementById("estres")?.value;
    const objetivo = document.getElementById("objetivo")?.value;

    // Validación de campos obligatorios
    if (!peso || !altura || !edad || !objetivo) {
        alert("Por favor, completa todos los campos obligatorios.");
        return;
    }

    // Definir la meta personalizada
    let metaTexto = "Tu meta personalizada es: ";
    switch (objetivo) {
        case "perder_peso":
            metaTexto += "Reducir el consumo de alimentos procesados y aumentar la actividad física.";
            break;
        case "ganar_peso":
            metaTexto += "Aumentar la ingesta calórica con alimentos saludables y entrenamientos de fuerza.";
            break;
        default:
            metaTexto += "Mantener hábitos saludables y mejorar la calidad de tu alimentación y actividad física.";
    }

    // Mostrar meta en pantalla
    let metaBox = document.getElementById("metaBox");
    if (metaBox) {
        document.getElementById("meta").textContent = metaTexto;
        metaBox.style.display = "block";
    }

    // Mostrar overlay si existe
    let overlay = document.querySelector('.overlay');
    if (overlay) {
        overlay.style.display = 'block';
    }

    // Guardar en localStorage
    localStorage.setItem("pesoActual", peso);
    localStorage.setItem("metaSalud", objetivo);
    alert("Datos guardados localmente.");

    // Enviar datos a la API de Laravel
    try {
        let response = await fetch("http://127.0.0.1:8000/api-v1/personal-goals", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken  // Incluir el token CSRF
            },
            body: JSON.stringify({
                peso, altura, edad, sexo, complexion, actividad, suenio, estres, objetivo
            })
        });

        if (!response.ok) {
            throw new Error(`Error HTTP: ${response.status}`);
        }

        let result = await response.json();
        alert("Meta guardada con éxito.");

        // Redireccionar después de guardar correctamente
        window.location.href = "/INICIO_2/inicio.html";
    } catch (error) {
        console.error("Error al guardar la meta:", error);
        alert("No se pudo guardar la meta en el servidor. Intenta nuevamente.");
    }
}
