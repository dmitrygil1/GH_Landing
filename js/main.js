const desktopBreakpoint = window.matchMedia('(min-width:1024px)');
const tabletBreakpoint = window.matchMedia('(max-width:1023px) and (min-width:768px)');
const mobileBreakpoint = window.matchMedia('(max-width:767px)');

document.addEventListener('DOMContentLoaded', () => {
    // плавный скролл к форме
    if (document.querySelector('.js_support_form')) {
        let btnsSupport = document.querySelectorAll('.js_btn_support');
        let supportForm = document.querySelector('.js_support_form');
        btnsSupport.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                window.scrollTo({
                    top: (supportForm.getBoundingClientRect().top + window.scrollY - 50),
                    behavior: 'smooth',
                })
            });
        });
    }

    let text = document.querySelector('.textWaveAnimation svg path');

    const desktopBreakpointChecker = function () {
        if (desktopBreakpoint.matches) {
            document.querySelector('.textWaveAnimation svg').setAttribute('viewBox', '0 0 1100 848')
            text.setAttribute('d', 'M 1.3127225,31.000337 H 435.50008 c 0,0 170.874,52.63421 85.437,159.966903 -41.812,52.527 -219.054,42.762 -324.085,89.782 -109.584603,49.058 -133.084803,166.11 -53.051,241.198 80.033,75.089 246.524,91.506 393.12,29.97 105.536,-44.3 163.574,-136.723 303.682,-136.723 246.21402,0 214.92402,332.801 214.92402,431.59')
        }
    };

    const tabletBreakpointChecker = function () {
        if (tabletBreakpoint.matches) {
            document.querySelector('.textWaveAnimation svg').setAttribute('viewBox', '0 0 691 650')
            text.setAttribute('d', 'M 0.229248,36.224914 H 269.846 c 0,0 106.107,39.17583 53.054,119.063726 -25.964,39.096 -109.026,31.828 -174.247,66.825 -68.0485,36.514 -82.6414,123.636 -32.943,179.525 49.698,55.889 126.084,68.108 217.116,22.307 65.534,-32.973 101.573,-101.764 188.576,-101.764 152.889,0 133.461,410.77351 133.461,484.30351')
        }
    };

    const mobileBreakpointChecker = function () {
        if (mobileBreakpoint.matches) {
            document.querySelector('.textWaveAnimation svg').setAttribute('viewBox', '0 0 314 523')
            text.setAttribute('d', 'M 0.752441,19.391376 H 149.752 c 74,0 92.5,60.499997 53.5,98.999994 -39,38.4998 -184.9996,23.9998 -184.9996,107.4998 0,83.5 79.4894,84.162 160.4996,58.5 80.5,-25.5 115.5,34.792 115.5,95 0,52.5 0,107 0,144')
        }
    };

    if (desktopBreakpoint.matches) {
        document.querySelector('.textWaveAnimation svg').setAttribute('viewBox', '0 0 1100 848')
        text.setAttribute('d', 'M 1.3127225,31.000337 H 435.50008 c 0,0 170.874,52.63421 85.437,159.966903 -41.812,52.527 -219.054,42.762 -324.085,89.782 -109.584603,49.058 -133.084803,166.11 -53.051,241.198 80.033,75.089 246.524,91.506 393.12,29.97 105.536,-44.3 163.574,-136.723 303.682,-136.723 246.21402,0 214.92402,332.801 214.92402,431.59')
    }

    if (tabletBreakpoint.matches) {
        document.querySelector('.textWaveAnimation svg').setAttribute('viewBox', '0 0 691 650')
        text.setAttribute('d', 'M 0.229248,36.224914 H 269.846 c 0,0 106.107,39.17583 53.054,119.063726 -25.964,39.096 -109.026,31.828 -174.247,66.825 -68.0485,36.514 -82.6414,123.636 -32.943,179.525 49.698,55.889 126.084,68.108 217.116,22.307 65.534,-32.973 101.573,-101.764 188.576,-101.764 152.889,0 133.461,410.77351 133.461,484.30351')
    }

    if (mobileBreakpoint.matches) {
        document.querySelector('.textWaveAnimation svg').setAttribute('viewBox', '0 0 314 523')
        text.setAttribute('d', 'M 0.752441,19.391376 H 149.752 c 74,0 92.5,60.499997 53.5,98.999994 -39,38.4998 -184.9996,23.9998 -184.9996,107.4998 0,83.5 79.4894,84.162 160.4996,58.5 80.5,-25.5 115.5,34.792 115.5,95 0,52.5 0,107 0,144')
    }

    desktopBreakpoint.addEventListener('change', desktopBreakpointChecker);
    tabletBreakpoint.addEventListener('change', tabletBreakpointChecker);
    mobileBreakpoint.addEventListener('change', mobileBreakpointChecker);

    desktopBreakpointChecker();
    tabletBreakpointChecker();
    mobileBreakpointChecker();

    let textBlock = document.querySelector('.textWaveAnimation');
    let characters = document.querySelectorAll('.textWaveAnimation .char');

    for (let i = 0; i < characters.length; i++) {
        characters[i].style.animationDelay = i * 50 + 'ms'
    }

    window.addEventListener('scroll', function (e) {
        let scroll = this.scrollY + this.window.innerHeight,
            startPoint = textBlock.getBoundingClientRect().top + window.scrollY + textBlock.offsetHeight / 4,
            finishPoint = textBlock.getBoundingClientRect().top + window.scrollY + textBlock.offsetHeight + this.window.innerHeight;
        if (scroll >= startPoint && scroll <= finishPoint) {
            textBlock.classList.add('animate')
        }
    });
});
