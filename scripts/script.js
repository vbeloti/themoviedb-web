const menu = document.getElementById("menu");

function handleMenu() {
    const menuLeft = document.querySelector(".menu__left");
    const contentCenter = document.querySelector(".content__center");

    if (menuLeft.className === "menu__left d-none" || menuLeft.computedStyleMap().get('display').value === 'none') {
        menuLeft.setAttribute('style', 'display: block');
        menuLeft.classList.remove("d-none");
        contentCenter.setAttribute("style", "flex: 0.65");
    } else {
        menuLeft.setAttribute('style', 'display: none');
        menuLeft.classList.add("d-none");
        contentCenter.setAttribute("style", "flex: 0.7");
    }

    menu.classList.toggle("change");
}

menu.addEventListener("click", handleMenu);
