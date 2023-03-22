<?php
/*
Template Name: Добро-кофе (посадочная)
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
	<title>ХОРОШИЕ ПРИВЫЧКИ</title>
    <link rel="stylesheet" href="<?=get_template_directory_uri();?>/сoffe/css/style.css">
    <style type="text/css">
        @font-face {
            font-family: Roboto;
            src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf");
        }
		
    </style>
</head>

<body <?php body_class(); ?>>
    <!-- loader screen -->
    <div class="loader" id="preloader_malc">
        <div>
            <img class="loader_logo" src="<?=get_template_directory_uri();?>/сoffe/images/icons/loader_static_logo.svg" alt="preloader logo">
            <img class="loader_logo_cercle" src="<?=get_template_directory_uri();?>/сoffe/images/icons/Loading_cercle.svg" alt="preloader logo">
        </div>
    </div>
    <style type="text/css">
        #preloader_malc {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 1);
            z-index: 99
        }

        #preloader_malc div {
            background: #fff;
            width: 265px;
            height: 265px;
            text-align: center;
            position: fixed;
            z-index: 999;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto
        }

        .loader_logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .loader_logo_cercle {
            animation-name: rotate;
            animation-duration: 5s;
            animation-iteration-count: infinite;
            transform-origin: 50% 50%;
        }

        @keyframes rotate {
            0% {
                transform: rotate(360deg);
            }

            100% {
                transform: rotate(0deg);
            }
        }
    </style>
    <script type="text/javascript">
        //window.onload = function() { - убрано, т.к. конфликтует с платежной формой
            setTimeout(function() {
                document.getElementById("preloader_malc").style.display = "none";
            }, 2000);
       // };
    </script>
    <!-- loader screen end-->
    <div class="wrapper">
        <header class="header">
            <div class="header__container">
                <div class="header__wrapper">
                    <a class="header__btn js_btn_support" href="#">Поддержать</a>
                    <div class="header__logos">
                        <a class="header__logo" href="<?=get_site_url();?>"><img src="<?=get_template_directory_uri();?>/сoffe/images/logo-1.svg" alt="Лого"></a>
                        <a class="header__logo" href="https://dobro-coffee.com/"><img src="<?=get_template_directory_uri();?>/сoffe/images/logo-2.svg" alt="Лого"></a>
                        <a class="header__logo" href="#"><img src="<?=get_template_directory_uri();?>/сoffe/images/logo-3.png" alt="Лого"></a>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="hero__container">
                    <div class="hero__wrapper">
                        <div class="hero__content">
                            <h1 class="hero__title">ХОРОШИЕ пРИВЫЧКИ</h1>
                            <p class="hero__descr">СОВМЕСТНЫЙ ПРОЕКТ<br> БЛАГОТВОРИТЕЛЬНОГО ФОНДА «ПОМОЩЬ»<br> И КОМПАНИИ DO.BRO COFFEE</p>
                        </div>
                        <div class="hero__img">
                            <video alt="Стакан с кофе" preload autoplay muted loop playsinline>
                                <source type="video/webm" src="<?=get_template_directory_uri();?>/сoffe/images/hero-img.webm">
                                <source type="video/mp4" src="<?=get_template_directory_uri();?>/сoffe/images/hero-img.mp4">
                            </video>
                        </div>
                        <div class="hero__bg">
                            <img src="<?=get_template_directory_uri();?>/сoffe/images/hero-bg-1.svg" alt="Декор">
                            <img src="<?=get_template_directory_uri();?>/сoffe/images/hero-bg-2.svg" alt="Декор">
                            <img src="<?=get_template_directory_uri();?>/сoffe/images/hero-bg-3.svg" alt="Декор">
                            <img src="<?=get_template_directory_uri();?>/сoffe/images/hero-bg-4.svg" alt="Декор">
                        </div>
                    </div>
                </div>
            </section>

            <section class="intro_section">
                <svg class="back_circle_1" width="817" height="780" viewBox="0 0 817 780" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="408.5" cy="390" rx="408.5" ry="390" transform="rotate(-180 408.5 390)" fill="url(#paint0_radial_432_36)"/>
                    <defs>
                    <radialGradient id="paint0_radial_432_36" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(379.16 390) rotate(89.2116) scale(328.037 348.021)">
                    <stop stop-color="white"/>
                    <stop offset="0.557292" stop-color="#FFFBFB" stop-opacity="0.61"/>
                    <stop offset="1" stop-color="white" stop-opacity="0"/>
                    </radialGradient>
                    </defs>
                </svg>      
                <svg class="back_circle_2" width="971" height="931" viewBox="0 0 971 931" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <ellipse cx="485.5" cy="465.777" rx="485.5" ry="465" transform="rotate(-180 485.5 465.777)" fill="url(#paint0_radial_432_35)" fill-opacity="0.9"/>
                    <defs>
                    <radialGradient id="paint0_radial_432_35" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(485.5 491.111) rotate(-90) scale(391.45 413.969)">
                    <stop stop-color="#FFF8E6"/>
                    <stop offset="0.494792" stop-color="#FFF8E5" stop-opacity="0.51"/>
                    <stop offset="1" stop-color="#FFF5DB" stop-opacity="0"/>
                    </radialGradient>
                    </defs>
                </svg>  
                <img src="<?=get_template_directory_uri();?>/сoffe/images/intro_bg_2.png" alt="background" class="back_el_2">                            
                <div class="container">
                    <div class="wrapper">
                        <div class="textWaveAnimation">
                            <svg width="100%" height="100%" viewBox="0 0 1100 848">
                                <path id="curve" fill="transparent"
                                    d="M 1.3127225,31.000337 H 435.50008 c 0,0 170.874,52.63421 85.437,159.966903 -41.812,52.527 -219.054,42.762 -324.085,89.782 -109.584603,49.058 -133.084803,166.11 -53.051,241.198 80.033,75.089 246.524,91.506 393.12,29.97 105.536,-44.3 163.574,-136.723 303.682,-136.723 246.21402,0 214.92402,332.801 214.92402,431.59">
                                </path>
                                <text width="100%" style="transform:translate3d(0,0,0);">
                                    <textPath style="transform:translate3d(0,0,0);" alignment-baseline="middle"
                                        xlink:href="#curve" font-size="56px" line-height="87px" font-weight="800"
                                        fill="#fff">
                                        <tspan>
                                            <tspan class="char">П</tspan><tspan class="char">и</tspan><tspan class="char">т</tspan><tspan class="char">ь</tspan>
                                        </tspan> 
                                        <tspan> </tspan>
                                        <tspan>
                                            <tspan class="char">к</tspan><tspan class="char">о</tspan><tspan class="char">ф</tspan><tspan class="char">е</tspan>
                                        </tspan> 
                                        <tspan> </tspan>
                                        <tspan class="char">=</tspan> 
                                        <tspan> </tspan>
                                        <tspan>
                                            <tspan class="char">б</tspan><tspan class="char">ы</tspan><tspan class="char">т</tspan><tspan class="char">ь</tspan>
                                        </tspan>
                                        <tspan> </tspan>
                                        <tspan>
                                            <tspan class="char">д</tspan><tspan class="char">о</tspan><tspan class="char">б</tspan><tspan class="char">р</tspan><tspan class="char">ы</tspan><tspan class="char">м</tspan>
                                        </tspan>
                                        <tspan> </tspan>
                                        <tspan class="char">=</tspan> 
                                        <tspan> </tspan>
                                        <tspan>
                                            <tspan class="char">п</tspan><tspan class="char">о</tspan><tspan class="char">м</tspan><tspan class="char">о</tspan><tspan class="char">г</tspan><tspan class="char">а</tspan><tspan class="char">т</tspan><tspan class="char">ь</tspan>
                                        </tspan>
                                        <tspan> </tspan>
                                        <tspan class="char">=</tspan> 
                                        <tspan> </tspan>
                                        <tspan>
                                            <tspan class="char">П</tspan><tspan class="char">и</tspan><tspan class="char">т</tspan><tspan class="char">ь</tspan>
                                        </tspan> 
                                        <tspan> </tspan>
                                        <tspan>
                                            <tspan class="char">к</tspan><tspan class="char">о</tspan><tspan class="char">ф</tspan><tspan class="char">е</tspan>
                                        </tspan> 
                                        <tspan> </tspan>
                                        <tspan class="char">=</tspan> 
                                        <tspan> </tspan>
                                        <tspan>
                                            <tspan class="char">б</tspan><tspan class="char">ы</tspan><tspan class="char">т</tspan><tspan class="char">ь</tspan>
                                        </tspan>
                                        <tspan> </tspan>
                                        <tspan>
                                            <tspan class="char">д</tspan><tspan class="char">о</tspan><tspan class="char">б</tspan><tspan class="char">р</tspan><tspan class="char">ы</tspan><tspan class="char">м</tspan>
                                        </tspan>
                                        <tspan> </tspan>
                                        <tspan class="char">=</tspan> 
                                        <tspan> </tspan>
                                        <tspan>
                                            <tspan class="char">п</tspan><tspan class="char">о</tspan><tspan class="char">м</tspan><tspan class="char">о</tspan><tspan class="char">г</tspan><tspan class="char">а</tspan><tspan class="char">т</tspan><tspan class="char">ь</tspan>
                                        </tspan>
                                    </textPath>
                                </text>
                            </svg>
                        </div>
                        <div class="data">
                            <ul>
                                <li>DO.BRO COFFEE — <br>
                                    Мы делаем добрый кофе!
                                    </li>
                                <li>Благотворительный фонд «Помощь» — <br>
                                    Мы учим помогать!
                                    </li>
                            </ul>
                            <svg class="back_el_1" width="99" height="90" viewBox="0 0 99 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M71.2778 28.0727L39.4811 0L12.3633 36.9529L71.2778 28.0727Z" fill="#FBD168"/>
                                <path d="M59.9145 34.8518L28.0223 6.77905L1 43.7319L59.9145 34.8518Z" stroke="#2C2C2C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M96.6766 0.667969C97.9179 13.3675 98.9684 26.831 93.5257 38.3847C89.3243 47.2649 81.6854 54.0443 74.333 60.5374" stroke="#2C2C2C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M97.9183 65.4062C87.224 76.8645 74.5244 89.0867 58.8647 88.8002" stroke="#2C2C2C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>  
                        </div>                          
                    </div>
                    <div class="more">
                        <div class="icon">
                            <svg width="177" height="181" viewBox="0 0 177 181" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M93.5543 180.833C139.455 180.833 176.665 144.17 176.665 98.9443C176.665 53.7185 139.455 17.0558 93.5543 17.0558C47.6535 17.0558 10.4436 53.7185 10.4436 98.9443C10.4436 144.17 47.6535 180.833 93.5543 180.833Z" fill="#F9D4B0"/>
                                <path d="M164.443 82.9811C164.443 69.1911 161.07 56.1128 155.123 44.6359C139.945 27.732 117.932 17.0558 93.4346 17.0558C47.6342 17.0558 10.4436 54.3334 10.4436 100.241C10.4436 114.031 13.8165 127.109 19.7634 138.586C34.9415 155.49 56.9541 166.166 81.4519 166.166C127.252 166.166 164.443 128.978 164.443 82.9811Z" fill="url(#paint0_linear_432_67)"/>
                                <path d="M164.443 83.6667C164.443 129.196 127.747 166.166 82.5548 166.166C37.3628 166.166 0.66626 129.284 0.66626 83.6667C0.66626 38.0493 37.3628 1.16711 82.5548 1.16711" stroke="#2C2C2C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <defs>
                                <linearGradient id="paint0_linear_432_67" x1="87.4433" y1="17.0558" x2="87.4433" y2="166.166" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F3E3C1"/>
                                <stop offset="1" stop-color="white" stop-opacity="0.42"/>
                                </linearGradient>
                                </defs>
                            </svg>                                
                        </div>
                        <div class="text">
                            <p>ВМЕСТЕ МЫ УЧИМСЯ БЫТЬ ДОБРЫМИ!<br>
                                НАЧИНАЙ ВМЕСТЕ С НАМИ ПРЯМО СЕЙЧАС!
                                </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="support">
                <div class="support__container">
                    <div class="support__wrapper">
                        <div class="support__content">
                            <h2 class="support__title">ПОДДЕРЖИ ФОНД «ПОМОЩЬ»</h2>
                            <div class="support__descr">
                                <p>Благотворительный фонд «ПОМОЩЬ» помогает детям и взрослым по всей России.</p>
                                <p>Уже сегодня многие подопечные получили необходимую поддержку, прошли нужное лечение и
                                    отправились на реабилитацию.</p>
                            </div>
                        </div>
                        <div class="support__right">
                            <div class="support__form js_support_form" id="child-donation">
                                <?php $donation_content = '[leyka_campaign_form id="' . get_field("donation-content") . '" template="'. get_field("donation-template") .'"]';
    echo do_shortcode( $donation_content );?>
                            </div>
                            <div class="support-social">
                                Поделиться:
                                <ul class="support-social__list">
                                    <li class="support-social__item">
                                        <a class="support-social__link support-social__link-ok" href="https://ok.ru/group/59052669665332" target="_blank"
                                            aria-label="Поделиться в одноклассниках"></a>
                                    </li>
                                    <li class="support-social__item">
                                        <a class="support-social__link support-social__link-tg" href="https://t.me/fond_pomosch" target="_blank"
                                            aria-label="Поделиться в телеграм"></a>
                                    </li>
                                    <li class="support-social__item">
                                        <a class="support-social__link support-social__link-vk" href="https://vk.com/fond_pomosch" target="_blank"
                                            aria-label="Поделиться вконтакте"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
			<?php wp_footer(); ?>
            <div class="footer__container">
                <div class="footer__wrapper">
                    <div class=".footer__contacts_coffe">
                        <address class="footer__address_coffe">
                            Г. САНКТ-ПЕТЕРБУРГ<br>
                            ТОРФЯНАЯ ДОРОГА, Д. 7,<br>
                            ЛИТ. Ф, ЧАСТЬ ПОМЕЩЕНИЯ №13-Н,<br>
                            ЧАСТЬ КАБИНЕТА №21, ОФИС 721
                        </address>
                        <a class="footer__tel" href="tel:88124559924">8 (812) 455-99-24</a>
                        <a class="footer__email" href="mailto:help@bf-pomosch.ru">help@bf-pomosch.ru</a>
                    </div>
                    <div class="footer__buttons">
                        <a href="#" class="footer__btn js_btn_support">ПОМОЧЬ СЕЙЧАС</a>
                        <a href="<?=get_site_url();?>/request-for-help/" class="footer__btn">НУЖНА ПОМОЩЬ</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="<?=get_template_directory_uri();?>/сoffe/js/main.js"></script>
</body>
</html>
<?php //get_footer(); ?>
