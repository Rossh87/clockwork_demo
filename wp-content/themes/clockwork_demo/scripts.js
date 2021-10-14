document.addEventListener('DOMContentLoaded', (event) => {
	run();
});

function run() {
	manageHeroHeaderContrast();
	enableCategoryFilterButton();
	hideSkipLink();
}

function manageHeroHeaderContrast() {
	const hero = document.getElementById('cd_hero');

	const hasHero = hero !== null && hero !== undefined;

	if(!hasHero) {
		return;
	}

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
}

function removeClasses(node, toRemove) {
    toRemove.forEach((cssClass) => node.classList.remove(cssClass));
}

function addClasses(node, toRemove) {
    toRemove.forEach((cssClass) => node.classList.add(cssClass));
}

function enableCategoryFilterButton() {
	const btn = document.getElementById('category-filter-submit');
	const select = document.getElementById('blogCategoryFilter');

	if(!btn || !select) {
		return;
	}

	select.addEventListener('change', (e) => {
		const {value} = e.target;

		if(value && btn.disabled) {
			btn.classList.remove('btn-disabled');
			btn.classList.add('btn-info');
			btn.disabled = false;
			return;
		}

		if(!value && !btn.disabled){
			btn.classList.add('btn-disabled');
			btn.classList.remove('btn-info');
			btn.disabled = true;
			return;
		}
	})
}

function hideSkipLink() {
	const toHide = document.querySelector('.menu-item-type-custom');
	toHide.classList.add('visually-hidden-focusable')
}