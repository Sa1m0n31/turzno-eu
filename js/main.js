const handleMenu = (n) => {
    let el;
    switch(n) {
        case 1:
            el = document.querySelector("#aktualnosci");
            break;
        case 2:
            el = document.querySelector("#turzno");
            break;
        case 3:
            el = document.querySelector("#deklaracja");
            break;
        case 4:
            el = document.querySelector("#galeria");
            break;
        case 5:
            el = document.querySelector("#komitetHonorowy");
            break;
        case 6:
            el = document.querySelector("#sponsorzySpoleczni");
            break;
        case 7:
            el = document.querySelector("#kontakt");
            break;
        default:
            el = document.querySelector(".container");
            break;
    }

    if(el !== null) {
        el.scrollIntoView({
            top: 0,
            left: 0,
            behavior: "smooth"
        });
    }
}