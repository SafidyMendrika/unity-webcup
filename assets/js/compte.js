const update = (id, code, libelle) => {
  const inputId = document.querySelector(".modal-content #id");
  const inputCode = document.querySelector(".modal-content #code");
  const inputLibelle = document.querySelector(".modal-content #libelle");

  console.log(id);
  console.log(code);
  console.log(libelle);

  inputId.setAttribute("value", id);
  inputCode.setAttribute("value", code);
  inputLibelle.setAttribute("value", libelle);
};

document.addEventListener("DOMContentLoaded", () => {
  // Functions to open and close a modal
  function openModal($el) {
    $el.classList.add("is-active");
  }

  function closeModal($el) {
    $el.classList.remove("is-active");
  }

  function closeAllModals() {
    (document.querySelectorAll(".modal") || []).forEach(($modal) => {
      closeModal($modal);
    });
  }

  // Add a click event on buttons to open a specific modal
  (document.querySelectorAll(".js-modal-trigger") || []).forEach(($trigger) => {
    const modal = $trigger.dataset.target;
    const $target = document.getElementById(modal);

    $trigger.addEventListener("click", () => {
      openModal($target);
    });
  });

  // Add a click event on various child elements to close the parent modal
  (
    document.querySelectorAll(
      ".modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button"
    ) || []
  ).forEach(($close) => {
    const $target = $close.closest(".modal");

    $close.addEventListener("click", () => {
      closeModal($target);
    });
  });

  // Add a keyboard event to close all modals
  document.addEventListener("keydown", (event) => {
    const e = event || window.event;

    if (e.keyCode === 27) {
      // Escape key
      closeAllModals();
    }
  });
});


function autoFillZeros(input) {
  let val = input.value;
  let len = val.toString().length;
  let i = 0;
  while (i+len < 5){
    val += "0";
    i++;
  }
  input.value = val;
}

