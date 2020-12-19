window.addEventListener("scroll", () => {
    if(window.pageYOffset > 300) {
        document.querySelector(".moveUpBtn").display = "flex";
    }
    else {
        document.querySelector(".moveUpBtn").display = "none";
    }
})

const handleMenu = (n) => {
    let el, el2;
    switch(n) {
        case 1:
            el = document.querySelector("#aktualnosci");
            el2 = document.querySelector(".aktualnosci");
            break;
        case 2:
            el = document.querySelector("#turzno");
            el2 = document.querySelector(".turzno");
            break;
        case 3:
            el = document.querySelector("#deklaracja");
            el2 = document.querySelector(".deklaracja");
            break;
        case 4:
            el = document.querySelector("#galeria");
            el2 = document.querySelector(".galeria");
            break;
        case 5:
            el = document.querySelector("#komitetHonorowy");
            el2 = document.querySelector(".komitetHonorowy");
            break;
        case 6:
            el = document.querySelector("#sponsorzySpoleczni");
            el2 = document.querySelector(".sponsorzySpoleczni");
            break;
        case 7:
            el = document.querySelector("#kontakt");
            el2 = document.querySelector(".kontakt");
            break;
        default:
            el = document.querySelector(".container");
            el2= document.querySelector(".container");
            break;
    }

    if(el !== null) {
        if(window.innerWidth < 700) {
            el2.scrollIntoView({
                top: 0,
                left: 0,
                behavior: "smooth"
            });
        }
        else {
            el.scrollIntoView({
                top: 0,
                left: 0,
                behavior: "smooth"
            });
        }
        closeMenu();
    }
}

const openMenu = () => {
    document.querySelector("#menu").style.display = "flex";
    document.querySelector("body").style.overflowY = "hidden";
    document.querySelector("body").style.height = "100vh";
}

const closeMenu = () => {
    document.querySelector("#menu").style.display = "none";
    document.querySelector("body").style.overflowY = "scroll";
    document.querySelector("body").style.height = "100vh";
}