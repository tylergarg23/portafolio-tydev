document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita que se recargue la página

    let hasError = false;
    let errorMessage = "";

    let fullname = document.getElementById("fullname");
    let email = document.getElementById("email");
    let projectType = document.getElementById("project_type");
    let budget = document.getElementById("budget");
    let message = document.getElementById("message");

    let errorDiv = document.getElementById("error-message");
    let successDiv = document.getElementById("success-message");

    // Resetear mensajes de error y éxito
    document.querySelectorAll(".input-error").forEach(el => el.classList.remove("input-error"));
    errorDiv.style.display = "none";
    successDiv.style.display = "none";

    // Validaciones...
    if (fullname.value.trim() === "") {
        errorMessage += "⚠️ El nombre es obligatorio.<br>";
        fullname.classList.add("input-error");
        hasError = true;
    }

    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email.value)) {
        errorMessage += "⚠️ El correo electrónico no es válido.<br>";
        email.classList.add("input-error");
        hasError = true;
    }

    if (projectType.value === "") {
        errorMessage += "⚠️ Debes seleccionar un tipo de proyecto.<br>";
        projectType.classList.add("input-error");
        hasError = true;
    }

    if (budget.value === "") {
        errorMessage += "⚠️ Debes seleccionar un presupuesto.<br>";
        budget.classList.add("input-error");
        hasError = true;
    }

    if (message.value.trim().length < 10) {
        errorMessage += "⚠️ El mensaje debe tener al menos 10 caracteres.<br>";
        message.classList.add("input-error");
        hasError = true;
    }

    if (hasError) {
        errorDiv.innerHTML = errorMessage;
        errorDiv.style.display = "block";
        return;
    }

    let formData = new FormData(this);
    formData.append("action", "enviar_formulario"); // IMPORTANTE: WordPress requiere este campo

    fetch(window.location.origin + "/wp-admin/admin-ajax.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            successDiv.innerHTML = "✅ ¡Correo enviado correctamente!";
            successDiv.style.display = "block";
            this.reset(); // Limpiar el formulario
        } else {
            errorDiv.innerHTML = "❌ " + data.data.message;
            errorDiv.style.display = "block";
        }
    })
    .catch(() => {
        errorDiv.innerHTML = "❌ Error de conexión. Inténtalo de nuevo.";
        errorDiv.style.display = "block";
    });
});
