(() => {
    const menu = document.querySelector('.menu-fixed-container');
    const menuIcon = document.querySelector('.open-menu');
    const menuItems = document.querySelectorAll('.menu-fixed-container > nav > ul > li > a');
    [...menuItems].map(elem => {
        elem.addEventListener('click', (e) => {
            if (e.currentTarget.href.startsWith('#')) {
                menu.classList.remove('open');
                e.preventDefault();
                return
            }

            const navItemUrl = new URL(e.currentTarget.href);
            console.log(window.location.pathname, navItemUrl.pathname)
            if (window.location.pathname === navItemUrl.pathname) {
                const scrollTarget = document.getElementById(navItemUrl.hash.substring(1, navItemUrl.hash.length));
                menu.classList.remove('open');
                menuIcon.classList.remove('active');
                console.log(scrollTarget)
                scrollTarget.scrollIntoView();
                e.preventDefault();
                return
            }
        });
    });
})()
