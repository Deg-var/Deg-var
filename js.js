let nazvKart = document.querySelectorAll('.nazvanie');
let modalText = document.querySelector('.modal-body')
let podpis = document.querySelectorAll('.podpis_text')
let modalNazv = document.querySelector('.modal-title')
let smotri = document.querySelectorAll('.smotri')
let vidos = document.querySelector('iframe')

for (let i = 0; i < smotri.length; i++) {
    if (nazvKart[i].dataset.id == 0) { 
    continue}
    smotri[i].onclick = function () {

        if (nazvKart[i].dataset.id != 0) {
            modalText.textContent = podpis[i].textContent;
            modalNazv.textContent = nazvKart[i].textContent;
            vidos.setAttribute("src", nazvKart[i].dataset.id)
        } else {
            modalText.textContent = 'пока не готово'

        }
    }
};
