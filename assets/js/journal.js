const update = (id, code, libelle) => {
  const inputId = document.querySelector(".modal-content #id");
  const inputCode = document.querySelector(".modal-content #code");
  const inputLibelle = document.querySelector(".modal-content #libelle");

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

// -------------------------------------------------------------------------

const ajouter = document.querySelector("#ajouter");
const addJournal = document.querySelectorAll(".add-journal")[0];
ajouter.addEventListener("click", (e) => {
  e.preventDefault();
  const tbody = document.querySelector("tbody");
  const tr = document.createElement("tr");
  tr.classList.add("add-journal");
  tr.innerHTML = addJournal.innerHTML;
  tbody.appendChild(tr);
})

// -------------------------------------------------------------------------

const valider = document.querySelector("#valider");

var labelTotalDebit = document.querySelector("#total-debit");
var labelTotalCredit = document.querySelector("#total-credit");
var statusBalance = document.querySelector(".status-balance");

const verifyStatus = () => {
  if(parseFloat(labelTotalDebit.innerText) === parseFloat(labelTotalCredit.innerText)) {
    statusBalance.innerHTML = `
      <h1 class="subtitle is-size-5 has-text-success has-text-weight-bold">
          Ecriture balancé
      </h1>
    `;
    valider.removeAttribute("disabled");
  } else {
    statusBalance.innerHTML = `
      <h1 class="subtitle is-size-5 has-text-danger has-text-weight-bold">
          Ecriture non balancé
      </h1>
    `;
    valider.setAttribute("disabled", "disabled");
  }
}

const allDebit = document.querySelectorAll(".debit");
const allCredit = document.querySelectorAll(".credit");

var totalDebit = 0.0,
    totalCredit = 0.0;
allDebit.forEach(item => {
  totalDebit += parseFloat(item.innerText);
});
labelTotalDebit.innerText = `${totalDebit}`;

allCredit.forEach(item => {
  totalCredit += parseFloat(item.innerText);
});
labelTotalCredit.innerText = `${totalCredit}`;

verifyStatus();

const handleChangeDebit = () => {
  var allInputDebit = document.querySelectorAll(".input-debit");
  var totalDebitInput = 0.0;
  allInputDebit.forEach(item => {
    if(item.value) {
      totalDebitInput += parseFloat(item.value);
    }
  })
  labelTotalDebit.innerText = `${totalDebit + totalDebitInput}`;
  verifyStatus();
}

const handleChangeCredit = () => {
  var allInputCredit = document.querySelectorAll(".input-credit");
  var totalCreditInput = 0.0;
  allInputCredit.forEach(item => {
    if(item.value) {
      totalCreditInput += parseFloat(item.value);
    }
  })
  labelTotalCredit.innerText = `${totalCredit + totalCreditInput}`;
  verifyStatus();
}