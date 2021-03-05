/* MoveUpBtn */
window.addEventListener("scroll", () => {
    if(window.pageYOffset > 300) {
        document.querySelector(".moveUpBtn").display = "flex";
    }
    else {
        document.querySelector(".moveUpBtn").display = "none";
    }
});

const sliderBtn1 = document.querySelector("#sliderBtn1");
const sliderBtn2 = document.querySelector("#sliderBtn2");
const sliderBtn3 = document.querySelector("#sliderBtn3");
const sliderBtn4 = document.querySelector("#sliderBtn4");
const sliderBtn5 = document.querySelector("#sliderBtn5");

const sliderButtons = [sliderBtn1, sliderBtn2, sliderBtn3, sliderBtn4, sliderBtn5];

let siemaSlider = new Siema({
    selector: '.siemaContainer',
    perPage: 1,
    loop: true,
    onChange: () => {
        goTo(siemaSlider.currentSlide);
    }
});

const goTo = (n) => {
    sliderButtons.forEach(item => {
        item.style.background = "#fff";
    });
    sliderButtons[n].style.background = "#907B55";
    siemaSlider.goTo(n);
}


// /* Progress bar */
// const progressBar = () => {
//     let width = 0, widthStr;
//     const progress = document.querySelector(".progress");
//     let interval = setInterval(() => {
//         width += 1;
//         widthStr = width + "%";
//         progress.style.width = widthStr;
//     }, 50);
//     setTimeout(() => {
//         clearInterval(interval);
//         progress.style.width = "0";
//     }, 5000);
// }


/* Menu */
const handleMenu = (n) => {
    let el, el2;
    switch(n) {
        case 1:
            //el = document.querySelector("#aktualnosci");
            el = document.querySelector(".aktualnosci");
            el2 = document.querySelector(".aktualnosci");
            break;
        case 2:
            //el = document.querySelector("#turzno");
            el = document.querySelector(".turzno");
            el2 = document.querySelector(".turzno");
            break;
        case 3:
            //el = document.querySelector("#deklaracja");
            el = document.querySelector(".deklaracja");
            el2 = document.querySelector(".deklaracja");
            break;
        case 4:
            //el = document.querySelector("#galeria");
            el = document.querySelector(".galeria");
            el2 = document.querySelector(".galeria");
            break;
        case 5:
            //el = document.querySelector("#komitetHonorowy");
            el = document.querySelector(".komitetHonorowy");
            el2 = document.querySelector(".komitetHonorowy");
            break;
        case 6:
            //el = document.querySelector("#sponsorzySpoleczni");
            el = document.querySelector(".sponsorzySpoleczni");
            el2 = document.querySelector(".sponsorzySpoleczni");
            break;
        case 7:
            //el = document.querySelector("#kontakt");
            el = document.querySelector(".kontakt");
            el2 = document.querySelector(".kontakt");
            break;
        case 8:
            el = document.querySelector(".videoSection");
            el2 = document.querySelector(".videoSection");
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
    if(window.innerWidth < 700) {
        document.querySelector("body").style.overflowY = "hidden";
        document.querySelector("body").style.height = "100vh";
    }
}

const closeMenu = () => {
    document.querySelector("#menu").style.display = "none";
    if(window.innerWidth < 700) {
        document.querySelector("body").style.overflowY = "scroll";
        document.querySelector("body").style.height = "100vh";
    }
}