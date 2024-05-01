function init() {
  document.querySelector("button").addEventListener("click", toggleForm);

  completeTask();

  identifyDate();
}

function toggleForm() {
  const form = document.querySelector(".js-selector");
  form.classList.toggle("is-active");
  document.querySelector(".button-container button").textContent =
    form.classList.contains("is-active") ? "Annuler" : "Ajouter une tache";
  document.querySelector(".form-container").classList.toggle("is-active");
  const inputs = document.querySelectorAll("input");
  inputs.forEach((input) => {
    input.classList.toggle("is-active");
  });
}

function completeTask() {
  const buttons = document.querySelectorAll("button[data-index]");

  buttons.forEach.call(buttons, (button) => {
    button.addEventListener("click", function () {
      // this.dataset.index
      // const index = this.getAttribute('data-index');

      this.parentElement.parentElement.classList.toggle("task-done");
    });
  });
}

function identifyDate() {
  const strings = document.querySelectorAll("td p");

  strings.forEach.call(strings, (string) => {
    if (validateDate(string.innerHTML)) {
      checkDueDate(string);
    }
  });
}

function checkDueDate(date) {
  let dateString = date.innerHTML.split("-").join("/");
  let now = new Date();
  let dateToCompare = new Date(dateString);

  if (dateToCompare < now) {
    date.classList.add("deadline-passed");
    const span = document.createElement("span");

    span.innerText = "Cette tache est perimee";

    date.appendChild(span);
  }
}

// https://gist.github.com/m-coding/c96d99558a47d30aef4992c6dd60437a
function validateDate(date) {
  const regex = /^\d{4}-\d{1,2}-\d{1,2}$/;
  return regex.test(String(date).toLowerCase());
}

document.addEventListener("DOMContentLoaded", init);
