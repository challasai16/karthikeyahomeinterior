var popupMain = document.querySelector(".poppup-main");
var closePopup = document.querySelector(".close-popup");

window.onload = function(){
 setTimeout(function(){
   popupMain.style.display = "block";
 }, 7000);
};


closePopup.addEventListener("click", ()=> {
  popupMain.style.top = "-500%";
});
