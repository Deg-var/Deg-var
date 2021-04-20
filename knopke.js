let knopkas = document.querySelectorAll(".smotri")
let ssils = document.querySelectorAll(".nazvanie")

for (let i = 0; i < knopkas.length; i++) {
    if (ssils[i].dataset.id == 0) {
        knopkas[i].classList.add("proc");
        knopkas[i].textContent = "ОБЗОР В ПРОЦЕССЕ";
    }
}
