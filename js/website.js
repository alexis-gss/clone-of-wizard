window.addEventListener("load", function () {
    let loader = document.querySelector(".loader");
    let btns = document.querySelectorAll('.navLinks__itemLinks');
    let wrapper = document.querySelector('.wrapper');
    let btnMenu = document.querySelector(".btnMenu");
    let btnMenuActivated = document.querySelector(".btnMenuActivated");
    let navTelephone = document.querySelector(".navTelephone");
    let liTelephone = document.querySelectorAll(".liTelephone");
    let filtre = document.querySelector(".filtre");
    bindEvents();

    /** FUNCTIONS */

    function bindEvents() {
        loader.classList.add("visibility-hidden");
        btns[0].style.backgroundColor = "var(--color1)";
        btns.forEach(function (btn) {
            btn.addEventListener("click", slideMove);
        })
        btnMenu.addEventListener("click", function () {
            navTelephone.classList.add("navTelephoneActivated");
            btnMenu.style.display = "none";
            btnMenuActivated.style.display = "block";
            filtre.style.display = "block";
        });

        filtre.addEventListener("click", navigationHide);
        btnMenuActivated.addEventListener("click", navigationHide);
        for (i = 0; i < liTelephone.length; i++) {
            liTelephone[i].addEventListener("click", navigationHide);
        }
    }

    function slideMove(e) {
        for (let i = 0; i < btns.length; i++) {
            btns[i].style.backgroundColor = "var(--color4)";
        }
        let monbtn = e.target;
        let pos = monbtn.getAttribute("data-pos");
        wrapper.style.transform = "translateX(" + pos + ")";
        monbtn.style.backgroundColor = "var(--color1)";
    }

    function navigationHide() {
        navTelephone.classList.remove("navTelephoneActivated");
        btnMenuActivated.style.display = "none";
        filtre.style.display = "none";
        btnMenu.style.display = (window.matchMedia("(max-width: 1250px)").matches) ? "block" : "none";
    }
})
