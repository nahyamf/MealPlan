const splash = document.querySelector(".splash");
document.addEventListener("DOMContentLoaded", (e) => {
    setTimeout(() => {
        splash.classList.add("display-none");
    }, 5000);
});

function ShowDiv() {
    document.getElementById("myDiv").style.display = "";
}
