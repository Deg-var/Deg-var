let knopkas = document.querySelectorAll(".smotri")
let ssils = document.querySelectorAll(".nazvanie")

for (let i = 0; i < knopkas.length; i++) {
    if (ssils[i].dataset.id == 0) {
        knopkas[i].style.color = "rgba(59, 59, 59, 0.7)";
        knopkas[i].textContent = "ОБЗОР В ПРОЦЕССЕ";
    }
}
