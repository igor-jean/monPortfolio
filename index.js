const nav = document.querySelector("nav")
const header = document.querySelector("header")
const sticky = header.offsetHeight - nav.offsetHeight - 12

window.onscroll = () => {
    if(window.scrollY > sticky){
        nav.classList.add("nav-background")
    } else {
        nav.classList.remove("nav-background")
    }

}