(() => {
    const menu = document.querySelector('.menu-fixed-container');
    const menuIcon = document.querySelector('.open-menu');
    const menuItems = document.querySelectorAll('.menu-fixed-container > nav > ul > li > a');

    function toggleMenu() {
        if (menu.classList.contains('open')) {
            menu.classList.remove('open');
            menuIcon.classList.remove('active');
        } else {
            menu.classList.add('open');
            menuIcon.classList.add('active');
        }
    }

    function closeMenu() {
        menu.classList.remove('open');
        menuIcon.classList.remove('active');
    }

    // menuIcon.addEventListener('click', toggleMenu);

    [...menuItems].map(elem => {
        elem.addEventListener('click', (e) => {
            if (e.currentTarget.href.startsWith('#')) {
                closeMenu();
                e.preventDefault();
                return
            }

            const navItemUrl = new URL(e.currentTarget.href);
            if (window.location.pathname === navItemUrl.pathname) {
                const scrollTarget = document.getElementById(navItemUrl.hash.substring(1, navItemUrl.hash.length));
                closeMenu();
                scrollTarget.scrollIntoView();
                e.preventDefault();
                return
            }
        });
    });
})()
