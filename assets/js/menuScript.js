const humburgerMenu = document.getElementById("humburgerMenu");
const verticalMenu = document.querySelector(".verticalMenu");
const fermerVerticalMenu = document.getElementById("fermerVerticalMenu");



humburgerMenu.addEventListener("click", () =>{
    verticalMenu.style.left = "0px";
    verticalMenu.style.top = "0px";
    humburgerMenu.style.display = "none";
});

fermerVerticalMenu.addEventListener("click", () => {
    verticalMenu.style.left = "-250px";
    humburgerMenu.style.display = "block";
}); 
