document.addEventListener('DOMContentLoaded', () => {
    // инициализация плагина wow.js
    // new WOW().init();
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
});