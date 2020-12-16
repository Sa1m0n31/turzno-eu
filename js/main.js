const handleMenu = (n) => {
    let el;
    switch(n) {
        case 1:
            el = document.querySelector("#aktualnosci");
            break;
        default:
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