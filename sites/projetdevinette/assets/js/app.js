var number;
let played = false;
let played2 = false;
let played3 = false;
const try1 = document.querySelectorAll('#try1 span');
const try2 = document.querySelectorAll('#try2 span');
const try3 = document.querySelectorAll('#try3 span');
const try2bloc = document.getElementById('try2');
const try3bloc = document.getElementById('try3');
const btnGagne = document.getElementById("gagne");
const btnPerd = document.getElementById("perd");
const btnRetry = document.getElementById("retry")


const generateNumber = function () {
    number = Math.floor(Math.random() * (10 - 1 + 1)) + 1;
}
generateNumber();


for (let i = 0; i < try1.length; i++) {

    try1[i].onclick = function () {
        if (try1[i].innerHTML == number && played === false) {
            try1[i].classList.add("correct");
            played = true;
            btnGagne.classList.add("visible");
            btnRetry.classList.add("visible");

        } else if (played === false) {
            try1[i].classList.add("false");
            try2bloc.classList.add("visible");
            played = true
        }
    }

    try2[i].onclick = function () {
        if (try2[i].innerHTML == number && played2 === false) {
            try2[i].classList.add("correct");
            played2 = true;
            btnGagne.classList.add("visible");
            btnRetry.classList.add("visible");

        } else if (played2 === false) {
            try2[i].classList.add("false");
            try3bloc.classList.add("visible");
            played2 = true
        }
    }

    try3[i].onclick = function () {
        if (try3[i].innerHTML == number && played3 === false) {
            try3[i].classList.add("correct");
            played3 = true;
            btnGagne.classList.add("visible");
            btnRetry.classList.add("visible");

        } else if (played3 === false) {
            try3[i].classList.add("false");
            try3bloc.classList.add("visible");
            played3 = true
            btnPerd.classList.add("visible");
            btnRetry.classList.add("visible");
        }


    }







};



btnRetry.onclick = function () {
    const allSpan = document.querySelectorAll("span");
    for (let i = 0; i < allSpan.length; i++) {
        allSpan[i].classList.remove("correct", "false");
    }
    try2bloc.classList.remove('visible');
    try3bloc.classList.remove('visible');
    played = false;
    played2 = false;
    played3 = false;
    generateNumber();
    btnPerd.classList.remove("visible");
    btnRetry.classList.remove("visible");
    btnGagne.classList.remove("visible");
};
