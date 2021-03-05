console.log("hello");

/* MoveUpBtn */
window.addEventListener("scroll", () => {
    if(window.pageYOffset > 300) {
        document.querySelector(".moveUpBtn").display = "flex";
    }
    else {
        document.querySelector(".moveUpBtn").display = "none";
    }
});

/* Slider */
const startMobileSlider = () => {

    const m1 = document.querySelector("#slider-mobile1");
    const m2 = document.querySelector("#slider-mobile2");
    const m3 = document.querySelector("#slider-mobile3");
    const m4 = document.querySelector("#slider-mobile4");
    const m5 = document.querySelector("#slider-mobile5");

    const slider = [m1, m2, m3, m4, m5];

    let active = 0, i;

    progressBar();
    setInterval(() => {
        active++;
        if(active === 5) active = 0;
        for(i=0; i<5; i++) {
            slider[i].style.opacity = 0;
        }
        slider[active].style.opacity = 1;
        progressBar();
    }, 5000);
}

const startDesktopSlider = () => {

    const s1 = document.querySelector("#slider1");
    const s2 = document.querySelector("#slider2");
    const s3 = document.querySelector("#slider3");
    const s4 = document.querySelector("#slider4");
    const s5 = document.querySelector("#slider5");

    const slider = [s1, s2, s3, s4, s5];

    let active = 0, i;

    progressBar();
    setInterval(() => {
        active++;
        if(active === 5) active = 0;
        for(i=0; i<5; i++) {
            slider[i].style.opacity = 0;
        }
        slider[active].style.opacity = 1;
        progressBar();
    }, 5000);
}

document.addEventListener("DOMContentLoaded", () => {
    if(window.innerWidth < 700) {
        startMobileSlider();
    }
    else {
       startDesktopSlider();
    }
});

window.addEventListener("resize", () => {
   if((window.innerWidth < 700)&&(window.innerWidth > 600)) {
      startMobileSlider();
   }
   else if((window.innerWidth > 700)&&(window.innerWidth < 800)) {
       startDesktopSlider();
   }
});

/* Progress bar */
const progressBar = () => {
    let width = 0, widthStr;
    const progress = document.querySelector(".progress");
    let interval = setInterval(() => {
        width += 1;
        widthStr = width + "%";
        progress.style.width = widthStr;
    }, 50);
    setTimeout(() => {
        clearInterval(interval);
        progress.style.width = "0";
    }, 5000);
}


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