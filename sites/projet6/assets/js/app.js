window.onload = function () {

    const allume = document.querySelector("#on");
    const eteint = document.querySelector("#off");
    const toggle1 = document.querySelector("#switch1");
    const toggle2 = document.querySelector("#switch2");

    toggle1.onclick = () => {
        allume.classList.toggle("hidden");
        toggle1.classList.toggle("hidden");
        eteint.classList.toggle("hidden");
        toggle2.classList.toggle("hidden");
    }
    toggle2.onclick = () => {
        allume.classList.toggle("hidden");
        toggle1.classList.toggle("hidden");
        eteint.classList.toggle("hidden");
        toggle2.classList.toggle("hidden");
    }




}