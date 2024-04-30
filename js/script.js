let openMobileSubMenu = document.querySelector(".services-mobile");
let mobileSubMenuContent = document.querySelector(".services-menu-mobile");


openMobileSubMenu.addEventListener("click", ()=> {
mobileSubMenuContent.classList.toggle("services-menu-mobile-manu");
})


let closeMobileMenu = document.querySelector(".mobile-menu-container i");
let mobileMenu = document.querySelector(".mobile-menu-main");



let openMainMobileMenu = document.querySelector(".mobile-menu-icon i");
openMainMobileMenu.addEventListener("click", ()=> {
  mobileMenu.classList.add("mobile-menu-main-manu");
})
closeMobileMenu.addEventListener("click", ()=> {
 mobileMenu.classList.remove("mobile-menu-main-manu");
})
