(function() {

    const menuToggle = document.querySelector(".menu-toggle");

    menuToggle.onclick = function (event) {
        const body = document.querySelector("body");
        body.classList.toggle("hide-sidebar");
    }

})()
