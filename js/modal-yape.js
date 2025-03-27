document.addEventListener("DOMContentLoaded", function () {
  const openModalButtons = document.querySelectorAll(".open-modal");
  const modal = document.getElementById("mentoriaModal");
  const closeModal = document.getElementById("closeModal");

  const modalTitle = document.getElementById("modal-title");
  const modalPrice = document.getElementById("modal-price");
  const inputTitle = document.getElementById("input-mentoria-title");
  const inputPrice = document.getElementById("input-mentoria-price");
  const qrContainer = document.getElementById("yape-qr-dynamic");

  openModalButtons.forEach(button => {
    button.addEventListener("click", function (e) {
      e.preventDefault();

      const title = this.getAttribute("data-title");
      const priceText = this.getAttribute("data-price");
      const price = priceText.replace(/[^\d.]/g, ""); // Elimina todo excepto números y punto

      // Llenar info del modal
      modalTitle.textContent = title;
      modalPrice.textContent = `S/ ${price}`;
      inputTitle.value = title;
      inputPrice.value = price;

      // QR dinámico
      // const numeroYape = "997890843"; // Cambia a tu número real
      // const qrURL = `https://yape.com.pe/qr?p=${numeroYape}&am=${price}&n=${encodeURIComponent(title)}`;
      const qrImageURL = 'http://tylerdev.test:8080/wp-content/uploads/2025/03/cod-yape.png';

      qrContainer.innerHTML = `<img src="${qrImageURL}" alt="QR Yape" width="250" height="250">`;

      modal.classList.add("is-active");
    });
  });

  closeModal.addEventListener("click", function () {
    modal.classList.remove("is-active");
  });

  window.addEventListener("click", function (event) {
    if (event.target === modal) {
      modal.classList.remove("is-active");
    }
  });
});
