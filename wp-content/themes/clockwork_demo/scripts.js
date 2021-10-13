document.addEventListener('DOMContentLoaded', (event) => {
    const header = document.querySelector('header');
    const headerHeight = header.getBoundingClientRect().height;
    const nav = document.querySelector('nav');
    const focusLinks = [
        ...document.querySelectorAll('header .cd_focus-border--white'),
    ];

    const lightContrastClasses = ['navbar-light', 'bg-light'];
    const darkContrastClasses = ['navbar-dark', 'bg-transparent'];

    const lightenNav = () => {
        removeClasses(nav, lightContrastClasses);
        addClasses(nav, darkContrastClasses);
    };

    const darkenNav = () => {
        addClasses(nav, lightContrastClasses);
        removeClasses(nav, darkContrastClasses);
    };

    const darkenFocus = () => {
        focusLinks.forEach((link) => {
            removeClasses(link, ['cd_focus-border--white']);
            addClasses(link, ['cd_focus-border--accent']);
        });
    };

    const lightenFocus = () => {
        focusLinks.forEach((link) => {
            addClasses(link, ['cd_focus-border--white']);
            removeClasses(link, ['cd_focus-border--accent']);
        });
    };

    const handleLighten = () => {
        lightenNav();
        lightenFocus();
    };

    const handleDarken = () => {
        darkenNav();
        darkenFocus();
    };

    window.addEventListener('scroll', () => {
        const darkContrastApplied = nav.classList.contains('navbar-dark');

        const needsDarkContrastStyles =
            window.scrollY < headerHeight && !darkContrastApplied;

        const needsLightContrastStyles =
            window.scrollY >= headerHeight && darkContrastApplied;

        if (needsDarkContrastStyles) {
            handleLighten();
        } else if (needsLightContrastStyles) {
            handleDarken();
        }
    });
});

function removeClasses(node, toRemove) {
    toRemove.forEach((cssClass) => node.classList.remove(cssClass));
}

function addClasses(node, toRemove) {
    toRemove.forEach((cssClass) => node.classList.add(cssClass));
}
