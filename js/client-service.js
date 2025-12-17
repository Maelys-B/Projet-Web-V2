const form = document.getElementById("clientForm");
const confirmation = document.getElementById("confirmation");

form.addEventListener("submit", function (event) {
  event.preventDefault();
  confirmation.style.display = "block";
  form.reset();
});
