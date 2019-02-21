window.onload = function() {
    let btnMenu = document.getElementsByClassName("menu")[0];
    let menu = document.getElementsByClassName("main-menu")[0];

    btnMenu.addEventListener('click', toggleMenu);

    function toggleMenu (e) {
        e.preventDefault();

        if (menu.style.display == "none")
        {
            menu.style.display = "block";
        }
        else
        {
            menu.style.display = "none";
        }
    }
}