document.addEventListener("DOMContentLoaded", function () {
  const openModalButtons = document.querySelectorAll(".open-modal");
  const modal = document.getElementById("mentoriaModal");
  const closeModal = document.getElementById("closeModal");

  const modalTitle = document.getElementById("modal-title");
  const modalPrice = document.getElementById("modal-price");
  const inputTitle = document.getElementById("input-mentoria-title");
  const inputPrice = document.getElementById("input-mentoria-price");
  const qrContainer = document.getElementById("yape-qr-dynamic");

  const form = document.getElementById("yape-form");
  const nombreInput = document.getElementById("nombre");
  const emailInput = document.getElementById("email");
  const fileInput = document.getElementById("file");
  const submitBtn = document.querySelector(".btn-enviar-reserva");

  // ⚠️ Cambia esto según tu entorno local o dominio real
  const formActionURL = "http://tylerdev.test:8080/wp-admin/admin-post.php";

  // Validación personalizada al salir de cada campo
  nombreInput.addEventListener("blur", () => {
    const errorNombre = document.getElementById("error-nombre");
    if (nombreInput.value.trim() === "") {
      errorNombre.textContent = "Por favor, ingresa tu nombre.";
    } else {
      errorNombre.textContent = "";
    }
  });

  emailInput.addEventListener("blur", () => {
    const errorEmail = document.getElementById("error-email");
    const emailVal = emailInput.value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (emailVal === "") {
      errorEmail.textContent = "El correo electrónico es obligatorio.";
    } else if (!emailRegex.test(emailVal)) {
      errorEmail.textContent = "Ingresa un correo válido.";
    } else {
      errorEmail.textContent = "";
    }
  });

  fileInput.addEventListener("blur", () => {
    const errorFile = document.getElementById("error-file");
    if (fileInput.files.length === 0) {
      errorFile.textContent = "Debes subir una imagen como comprobante.";
    } else {
      const file = fileInput.files[0];
      if (!file.type.startsWith("image/")) {
        errorFile.textContent = "Solo se aceptan archivos de imagen.";
      } else {
        errorFile.textContent = "";
      }
    }
  });

  // Validación dinámica de campos
  function validarCampos() {
    const nombreValido = nombreInput.value.trim() !== "";
    const emailValido = emailInput.value.trim() !== "";
    const archivoValido = fileInput.files.length > 0;

    if (nombreValido && emailValido && archivoValido) {
      submitBtn.disabled = false;
      submitBtn.classList.remove("opacity-50");
    } else {
      submitBtn.disabled = true;
      submitBtn.classList.add("opacity-50");
    }
  }

  // Escuchar cambios en los campos
  nombreInput.addEventListener("input", validarCampos);
  emailInput.addEventListener("input", validarCampos);
  fileInput.addEventListener("change", validarCampos);

  // Mostrar modal y resetear estado
  openModalButtons.forEach(button => {
    button.addEventListener("click", function (e) {
      e.preventDefault();

      // Resetear formulario y estados
      form.reset();
      form.style.display = "block";
      document.getElementById("reserva-confirmacion").style.display = "none";
      submitBtn.disabled = true;
      submitBtn.classList.add("opacity-50");

      const title = this.getAttribute("data-title");
      const priceText = this.getAttribute("data-price");
      const price = priceText.replace(/[^\d.]/g, "");

      modalTitle.textContent = title;
      modalPrice.textContent = `S/ ${price}`;
      inputTitle.value = title;
      inputPrice.value = price;

      const qrImageURL = 'http://tylerdev.test:8080/wp-content/uploads/2025/03/cod-yape.png';
      qrContainer.innerHTML = `<img src="${qrImageURL}" alt="QR Yape" width="250" height="250">`;

      modal.classList.add("is-active");
    });
  });

  // Cerrar modal
  closeModal.addEventListener("click", function () {
    modal.classList.remove("is-active");
  });

  window.addEventListener("click", function (event) {
    if (event.target === modal) {
      modal.classList.remove("is-active");
    }
  });

  // Envío del formulario
  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const formData = new FormData(form);

    const btnText = submitBtn.querySelector(".btn-text");
    const btnSpinner = submitBtn.querySelector(".btn-spinner");

    // Mostrar spinner, ocultar texto
    btnText.style.display = "none";
    btnSpinner.style.display = "inline-block";

    fetch(formActionURL, {
      method: "POST",
      body: formData,
    })
      .then(response => {
        if (!response.ok) throw new Error("Error en el servidor");
        return response.text();
      })
      .then(() => {
        form.style.display = "none";
        document.getElementById("reserva-confirmacion").style.display = "block";
        // Restaurar botón
        btnText.style.display = "inline";
        btnSpinner.style.display = "none";

      })
      .catch(error => {
        alert("Hubo un error al enviar el formulario. Intenta nuevamente.");
        console.error(error);
        // Restaurar botón
        btnText.style.display = "inline";
        btnSpinner.style.display = "none";

      });
  });
});
