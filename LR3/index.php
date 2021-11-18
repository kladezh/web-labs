<?php 
session_start();
?>

<!-- Page -->
<?php require_once 'include/templates/header.php' ?>

<!-- Login toast -->
<?php if(!isset($_SESSION['USER_ID'])) : ?>
<article class="fixed-top login-toast">
    <div class="container">
        <div class="login-allert">
            <div class="row">
                <span class="">Вы не авторизированы. <a href="login.php">Ввести логин и пароль</a> или <a href="signup.php">зарегистрироваться</a></span>
            </div>
        </div>
    </div>
</article>
<?php endif;?>

<main>
    <section class="hotel py-4" id="photo">
        <div class="container">
            <nav class="mb-5" style="--bs-breadcrumb-divider: '\2022';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#/"><span>Отели Турции</span></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#/"><span>Сиде</span></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#/"><span>Нолаклы</span></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span>Рима Отель</span>
                    </li>
                </ol>
            </nav>

            <div class="row mb-4">
                <div class="col col-md-8">
                    <div class="d-inline-flex hotel-visa">
                        <h4>Виза не нужна</h4>
                    </div>
                    <div class="d-flex rating">
                        <div class="d-inline-block rating-star rating-star-rated">
                            <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                            </svg>
                        </div>
                        <div class="d-inline-block rating-star rating-star-rated">
                            <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                            </svg>
                        </div>
                        <div class="d-inline-block rating-star rating-star-rated">
                            <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                            </svg>
                        </div>
                        <div class="d-inline-block rating-star">
                            <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                            </svg>
                        </div>
                        <div class="d-inline-block rating-star">
                            <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="hotel-name">
                        <h1 class="m-0">Ryma Hotel</h1>
                        <span>Ex Canseven, Jasmin Seven Hotel, Side Rasputin Hotel</span>
                    </div>
                    <div class="hotel-address">
                        <span>
                            <span>Адрес: </span>
                            Çolaklı Mah. Deniz Caddesi No: 3 Side-Manavgat/ANTALYA
                        </span>
                    </div>
                </div>

                <div class="col col-md-4 d-flex align-items-center">
                    <div class="d-flex align-items-center hotel-estim">
                        <div class="d-flex justify-content-center hotel-estim-view">
                            <h3 class="d-inline-block m-0">7.1/10</h3>
                        </div>
                        <div class="hotel-estim-info">
                            <span>По отзывам туристов, посетивших отель</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-md-8 mb-4 pe-0">

                    <div id="carousel" class="carousel slide carousel-fade position-relative carousel-main" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/hotel_Ryma/1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/hotel_Ryma/2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/hotel_Ryma/3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/hotel_Ryma/4.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/hotel_Ryma/5.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/hotel_Ryma/6.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/hotel_Ryma/7.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/hotel_Ryma/8.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>

                    <div class="clearfix">
                        <div id="thumbcarousel" class="carousel slide m-0 carousel-thumbnails" data-ride="carousel">
                            <div class="carousel-inner d-flex" data-bs-target="#carousel">
                                <div class="d-flex item active">
                                    <div data-bs-target="#carousel" data-bs-slide-to="0" class="thumb">
                                        <img src="img/hotel_Ryma/1.jpg" alt="...">
                                    </div>
                                    <div data-bs-target="#carousel" data-bs-slide-to="1" class="thumb">
                                        <img src="img/hotel_Ryma/2.jpg" alt="...">
                                    </div>
                                    <div data-bs-target="#carousel" data-bs-slide-to="2" class="thumb">
                                        <img src="img/hotel_Ryma/3.jpg" alt="...">
                                    </div>
                                    <div data-bs-target="#carousel" data-bs-slide-to="3" class="thumb">
                                        <img src="img/hotel_Ryma/4.jpg" alt="...">
                                    </div>
                                </div>
                                <div class="d-flex item" data-bs-target="#carousel">
                                    <div data-bs-target="#carousel" data-bs-slide-to="4" class="thumb">
                                        <img src="img/hotel_Ryma/5.jpg" alt="...">
                                    </div>
                                    <div data-bs-target="#carousel" data-bs-slide-to="5" class="thumb">
                                        <img src="img/hotel_Ryma/6.jpg" alt="...">
                                    </div>
                                    <div data-bs-target="#carousel" data-bs-slide-to="6" class="thumb">
                                        <img src="img/hotel_Ryma/7.jpg" alt="...">
                                    </div>
                                    <div data-bs-target="#carousel" data-bs-slide-to="7" class="thumb">
                                        <img src="img/hotel_Ryma/8.jpg" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col col-md-4">
                    <div class="row flex-row hotel-features-row">

                        <div class="col col-6">
                            <div class="hotel-features">
                                <div>
                                    <div class="d-inline-block hotel-features-icon">
                                        <div class="d-inline-block" style="width: 28px; height: 28px;">
                                            <svg fill="none" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m22.416 8.78595-1.231-.8489c-.236-.16278-.5123-.24884-.7991-.24884h-5.4326v-1.24777c0-.79424-.6462-1.44044-1.4405-1.44044-.7942 0-1.4404.6462-1.4404 1.44044v5.70426h-5.43379c-.28678 0-.56308.0861-.79911.2488l-1.23101.849c-.38101.2627-.60849.6959-.60849 1.1587s.22748.896.60849 1.1588l1.23098.8489c.23606.1627.51236.2488.79914.2488h5.43379v5.509h-1.4802c-.3078 0-.5573.2496-.5573.5574s.2495.5573.5573.5573h5.8412c.3078 0 .5574-.2495.5574-.5573s-.2496-.5574-.5574-.5574h-1.4801v-9.9655h5.4326c.2868 0 .5631-.0861.7991-.2488l1.231-.849c.381-.2627.6085-.6959.6085-1.15874 0-.46279-.2275-.89597-.6085-1.15871zm-10.3436 6.75705h-5.43379c-.05964 0-.11712-.0179-.16628-.0518l-1.23102-.8489c-.11013-.0759-.12659-.1836-.12659-.2411 0-.0574.01646-.1651.12659-.2411l1.23106-.8489c.04908-.0338.10656-.0517.16624-.0517h5.43379zm1.7662 6.6237h-.6515v-15.72626c0-.17958.1462-.32572.3257-.32572.1797 0 .3258.14614.3258.32572zm7.9446-11.9809-1.2311.8489c-.0491.0339-.1065.0518-.1662.0518h-5.4326v-2.28357h5.4326c.0597 0 .1171.01787.1663.05176l1.231.84893c.1101.07595.1266.18363.1266.24108 0 .0574-.0164.1651-.1266.2411z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span>От аэропорта: </span>
                                    <br>
                                    <span>Antalya - 56,3 км, ≈72 мин.</span>
                                    <br>
                                    <span>Dalaman - 298,4 км, ≈243 мин.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col col-6">
                            <div class="hotel-features">
                                <div>
                                    <div class="d-inline-block hotel-features-icon">
                                        <div class="d-inline-block" style="width: 28px; height: 28px;">
                                            <svg fill="none" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m13.7891 19.6485c.6281 0 1.1374.5264 1.1374 1.1757 0 .6494-.5093 1.1758-1.1374 1.1758-.6282 0-1.1374-.5264-1.1374-1.1758 0-.6493.5092-1.1757 1.1374-1.1757zm8.6386-7.7448c.2785-.2683.2939-.7192.0343-1.0071-2.2655-2.51272-5.3333-3.89656-8.6386-3.8966-3.305.00004-6.37283 1.38388-8.63834 3.8966-.25957.2879-.2442.7388.03429 1.0071.27853.2683.71471.2525.97428-.0354 2.00184-2.22032 4.71147-3.44309 7.62997-3.44312 2.9184.00003 5.628 1.2228 7.6298 3.44312.1358.1506.3199.2267.5044.2267.1684 0 .3371-.0633.4699-.1913zm-2.5006 2.9434c.2702-.2772.2719-.7284.0037-1.0077-1.6746-1.7442-3.8436-2.7048-6.1074-2.7047-2.2643 0-4.43334.9606-6.10747 2.7047-.26815.2794-.26643.7306.00379 1.0078.27025.2771.70671.2754.97486-.0039 1.41332-1.4725 3.23472-2.2834 5.12882-2.2834 1.8935-.0001 3.715.8109 5.1288 2.2834.1347.1404.312.2106.4893.2106.1755 0 .3512-.0689.4856-.2068zm-8.5455 2.956c.6384-.6538 1.5744-1.0763 2.3848-1.0763h.0003.0499.0003c.8103 0 1.7464.4225 2.3848 1.0763.2704.277.7069.275.9748-.0047.268-.2796.2659-.7307-.0045-1.0077-.8968-.9185-2.1823-1.489-3.355-1.489-.0001 0-.0004 0-.0005 0h-.0497c-.0002 0-.0003 0-.0005 0-1.1726 0-2.4583.5705-3.3551 1.489-.2704.277-.2725.7282-.0045 1.0077.1348.1407.3123.2111.4897.2111.1754 0 .3508-.0687.4852-.2064z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span>Бесплатный Wi-Fi в номере</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="hotel-features">
                                <div>
                                    <div class="d-inline-block hotel-features-icon">
                                        <div class="d-inline-block" style="width: 28px; height: 28px;">
                                            <svg fill="none" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-rule="evenodd">
                                                    <path d="m19.2695 15.5847c-.8718 0-1.581.7093-1.581 1.5811v2.1079c0 .8718.7092 1.581 1.581 1.581s1.5811-.7092 1.5811-1.581v-2.1079c0-.8718-.7093-1.5811-1.5811-1.5811zm.5265 3.689c0 .2903-.2362.5265-.5265.5265s-.5265-.2362-.5265-.5265v-2.1079c0-.2904.2362-.5265.5265-.5265s.5265.2361.5265.5265z"></path>
                                                    <path d="m22.7232 5.37756c.0869-.24859.3442-.39496.6021-.3428.2581.05213.4382.28673.4218.54953l-.8721 14.02591c-.1181 1.8994-1.7014 3.3873-3.6043 3.3873-1.9027 0-3.4858-1.4875-3.6043-3.3866l-.8765-14.05073c-.0165-.26416.1654-.49961.4251-.55033.2599-.05072.5169.09895.6011.34993.4689 1.39925 2.444 1.43327 2.9619.05234.1976-.52688.9343-.40065 1.0283.09822.5863 1.28707 2.4503 1.20169 2.9169-.13277zm-.5211 8.06224.3938-6.33282c-.8497.51318-1.9227.51044-2.7801-.04249v5.38971c.8786.1005 1.7002.4422 2.3863.9856zm-3.4408-.9896v-5.40744c-.8704.58007-1.966.57965-2.8184.06233l.395 6.33231c.696-.5502 1.5311-.8927 2.4234-.9872zm-2.0424 7.0951c.0839 1.3445 1.2048 2.3977 2.5518 2.3977 1.3472 0 2.4682-1.0534 2.5518-2.3982l.2935-4.7198c-1.4764-1.7953-4.2128-1.7975-5.6918-.0038z"></path>
                                                    <path d="m11.0618 10.832c0 .8718-.7093 1.5811-1.58109 1.5811-.87176 0-1.58105-.7093-1.58105-1.5811v-2.10789c0-.87175.70925-1.58104 1.58105-1.58104.87179 0 1.58109.70925 1.58109 1.58104zm-1.58106-2.63439c-.29032 0-.52653.23619-.52653.5265v2.10789c0 .2903.23621.5265.52653.5265s.52646-.2362.52646-.5265v-2.10789c0-.29031-.23614-.5265-.52646-.5265z"></path>
                                                    <path d="m9.47723 5.00024c1.90267 0 3.48577 1.48762 3.60427 3.38665l.8766 14.05071c.0164.2642-.1654.4997-.4252.5504-.2604.0508-.5171-.0995-.601-.35-.469-1.3992-2.4441-1.4332-2.96195-.0523-.19751.5267-.93429.4008-1.02836-.0982-.58629-1.2871-2.45027-1.2017-2.91684.1328-.08693.2485-.34399.3949-.60208.3428-.25815-.0522-.43823-.2868-.42189-.5496l.87215-14.02587c.11811-1.89949 1.70134-3.38739 3.6043-3.38739zm2.55177 3.45231c-.0838-1.34455-1.2048-2.39776-2.55177-2.39776-1.34725 0-2.46816 1.05346-2.55179 2.39825l-.29348 4.71976c1.47633 1.7953 4.21274 1.7976 5.69174.0038zm-5.4832 6.10555-.39377 6.3327c.84965-.5131 1.92269-.5104 2.78007.0425v-5.3897c-.87854-.1005-1.70014-.4422-2.3863-.9855zm3.44085.9895v5.4075c.87035-.5801 1.96595-.5797 2.81845-.0624l-.3951-6.3323c-.696.5502-1.5311.8927-2.42335.9872z"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span>Пляж песок</span>
                                    <br>
                                    <span>Муниципальный, 3 линия</span>
                                    <br>
                                    <span>Путь к пляжу предоставляется бесплатный транспорт, в пешей доступности</span>
                                    <br>
                                    <span>Вход в море пологий</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div> <!-- row -->

            <div class="row mt-5">
                <div class="hotel-navpage">
                    <div class="d-flex">
                        <div class="d-inline-block flex-grow-1 flex-shrink-1 pe-1">
                            <a class="hotel-navpage-item" href="#photo"><span>Фото</span></a>
                        </div>
                        <div class="d-inline-block flex-grow-1 flex-shrink-1 pe-1">
                            <a class="hotel-navpage-item" href="#description"><span>Описание</span></a>
                        </div>
                        <div class="d-inline-block flex-grow-1 flex-shrink-1 pe-1">
                            <a class="hotel-navpage-item" href="#reviews"><span>Отзывы</span></a>
                        </div>
                        <div class="d-inline-block flex-grow-1 flex-shrink-1 pe-1">
                            <a class="hotel-navpage-item" href="#facilities"><span>Удобства отеля</span></a>
                        </div>
                        <div class="d-inline-block flex-grow-1 flex-shrink-1 pe-1">
                            <a class="hotel-navpage-item" href="#info"><span>Важная и полезная информация</span></a>
                        </div>
                        <div class="d-inline-block flex-grow-1 flex-shrink-1 pe-1">
                            <a class="hotel-navpage-item" href="#rooms"><span>Типы номеров</span></a>
                        </div>
                        <div class="d-inline-block flex-grow-1 flex-shrink-1 pe-1">
                            <a class="hotel-navpage-item" href="#reccom"><span>Похожие отели</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </section>

    <article class="about-sale">
        <div class="container">
            <div class="about-sale-box">
                <form action="">
                    <div class="row justify-content-md-between align-items-center">
                        <div class="col-12 col-md-auto">
                            <h3>
                                <span>Хотите узнать </span>
                                <span>о снижении цены? </span>
                                <span>Тогда оставьте свой e-mail</span>
                            </h3>
                        </div>
                        <div class="col-12 col-md-auto">
                            <div class="row">
                                <div class="col col-md-8 pe-2">
                                    <input type="email" placeholder="Введите ваш Email" value="">
                                </div>
                                <div class="col col-md-4">
                                    <button type="submit">
                                        <span>Подписаться</span>
                                    </button>
                                </div>
                            </div>
                            <div class="row justify-content-md-start">
                                <div class="col">
                                    <span class="about-privacy">
                                        Нажимая на кнопку, вы принимаете наше
                                        <a href="https://s3.eu-central-1.amazonaws.com/olt-emails/policy/privacy_Policy.pdf" target="_blank" class="inline">
                                            Соглашение о конфиденциальности
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </article>

    <section class="hotel-facilities" id="facilities">
        <div class="container">
            <div class="row mb-4">
                <h2 class="hotel-facilities-header">Услуги и удобства отеля</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-4 row-cols-lg-5">
                <div class="col pe-3">
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center align-self-start hotel-facilities-item-icon">
                            <div class="d-inline-block" style="width: 32px; height: 32px;">
                                <svg fill="none" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="m16.2928 4c-.3551 0-.6429.28779-.6429.64286v1.8c0 .35506.2878.64286.6429.64286.355 0 .6428-.2878.6428-.64286v-.23576h.8575v2.87143c0 2.16237-1.7593 3.92147-3.9214 3.92147h-.3c-2.1624 0-3.92148-1.7593-3.92148-3.92147v-2.87143h.92128v.23576c0 .35506.2878.64286.6429.64286s.6428-.2878.6428-.64286v-1.8c0-.35507-.2877-.64286-.6428-.64286s-.6429.28779-.6429.64286v.27853h-1.56414c-.35506 0-.64286.28779-.64286.64285v3.51429c0 2.71957 2.0957 4.95887 4.7569 5.18787v2.998h-2.0785c-1.67789 0-3.0429 1.365-3.0429 3.0427 0 1.6778 1.37464 3.0428 3.0643 3.0428h.3c1.6778 0 3.0429-1.365 3.0429-3.0428v-1.7569h1.6699c.2689.7962 1.023 1.3712 1.9089 1.3712 1.1106 0 2.0143-.9036 2.0143-2.014 0-1.1107-.9035-2.0143-2.0143-2.0143-.8858 0-1.64.5749-1.9089 1.3713h-1.6699v-3.006c2.6205-.269 4.6716-2.4894 4.6716-5.17987v-3.51429c0-.35506-.2878-.64285-.6429-.64285h-1.5003v-.27853c0-.35507-.2878-.64286-.6428-.64286zm-3.1714 16.3069c0 .9687-.7883 1.7571-1.7571 1.7571h-.3c-.9973 0-1.77858-.7717-1.77858-1.7571 0-.9688.78838-1.757 1.75718-1.757h2.0785zm4.1362-2.3997c0 .4015.3268.7283.7284.7283.4018 0 .7286-.3268.7286-.7283 0-.4018-.3268-.7286-.7286-.7286-.4016 0-.7284.3268-.7284.7286z" fill-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <span class="ms-2">Сауна</span>
                    </div>
                </div>
                <div class="col pe-3">
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center align-self-start hotel-facilities-item-icon">
                            <div class="d-inline-block" style="width: 32px; height: 32px;">
                                <svg fill="none" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="m5 14c0-4.97009 4.02991-9 9-9 4.9701 0 9 4.02991 9 9 0 4.9701-4.0299 9-9 9-4.97009 0-9-4.0299-9-9zm1.52679 0c0 4.1263 3.34687 7.4732 7.47321 7.4732 4.1263 0 7.4732-3.3469 7.4732-7.4732 0-4.12634-3.3469-7.47321-7.4732-7.47321-4.12634 0-7.47321 3.34687-7.47321 7.47321zm6.79141-2.8539c-.1809-.1808-.2825-.4261-.2825-.6818 0-.2558.1016-.50103.2825-.68187.1808-.18084.4261-.28243.6818-.28243.2558 0 .501.10159.6819.28243.1808.18084.2824.42607.2824.68187 0 .2557-.1016.501-.2824.6818-.1809.1809-.4261.2825-.6819.2825-.2557 0-.501-.1016-.6818-.2825zm.1997 1.5682h.9643c.0884 0 .1607.0723.1607.1607v5.4643c0 .0884-.0723.1607-.1607.1607h-.9643c-.0884 0-.1607-.0723-.1607-.1607v-5.4643c0-.0884.0723-.1607.1607-.1607z"></path>
                                </svg>
                            </div>
                        </div>
                        <span class="ms-2">Открытый бассейн</span>
                    </div>
                </div>
                <div class="col pe-3">
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center align-self-start hotel-facilities-item-icon">
                            <div class="d-inline-block" style="width: 32px; height: 32px;">
                                <svg fill="none" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="m21.5748 7.28975c-.0778-1.27567-1.1388-2.28975-2.4325-2.28975h-9.9c-1.29364 0-2.35463 1.01408-2.43244 2.28975-.01252.43206-.01047.58286-.00779.77928.00127.09351.00268.19736.00273.34681v.58417l-.0048-.00001c-.44183 0-.8.35817-.8.8v1.6c0 .4418.35817.8.8.8h.00482l.00004 7.5906c0 .4124.2673.7633.6375.8889v1.3821c0 .5174.42056.9384.9375.9384h1.76254c.5169 0 .9375-.421.9375-.9384v-1.3326h6.225v1.3326c0 .5174.4205.9384.9375.9384h1.7625c.5169 0 .9375-.421.9375-.9384v-1.3821c.3702-.1256.6375-.4764.6375-.8889v-7.5908c.0067.0001.0134.0002.0202.0002.4418 0 .8-.3582.8-.8v-1.6c0-.44183-.3582-.8-.8-.8-.0068 0-.0135.00008-.0203.00025v-.58441c0-.27793-.001-.34896-.0021-.4269-.0014-.09476-.0029-.19974-.0029-.69919zm-1.1199 12.31315h-2.1175l.2247-.7047 1.8928-.3284zm-9.2266 0-.4376-1.3723c-.0637-.1999-.2332-.3477-.4398-.3836l-2.42104-.4201v-2.265c2.37754.4161 10.15194.4154 12.52504 0v2.265l-2.4211.4201c-.2066.0358-.376.1836-.4398.3836l-.4376 1.3723zm-3.29844 0v-1.0331l1.89286.3284.22468.7047zm1.31244-13.47681h9.9c.7237 0 1.3125.58935 1.3125 1.31378l.0001 6.57713c-1.9841.4409-10.54215.4406-12.52504 0l-.00006-6.57709c0-.72447.58879-1.31382 1.3125-1.31382zm-.67494 15.74781v-1.1449h1.38751v1.1449zm9.86254 0v-1.1449h1.3875v1.1449z" fill-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                        <span class="ms-2">Трансфер от/до аэропорта</span>
                    </div>
                </div>
                <div class="col pe-3">
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center align-self-start hotel-facilities-item-icon">
                            <div class="d-inline-block" style="width: 32px; height: 32px;">
                                <svg fill="none" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m13.7891 19.6485c.6281 0 1.1374.5264 1.1374 1.1757 0 .6494-.5093 1.1758-1.1374 1.1758-.6282 0-1.1374-.5264-1.1374-1.1758 0-.6493.5092-1.1757 1.1374-1.1757zm8.6386-7.7448c.2785-.2683.2939-.7192.0343-1.0071-2.2655-2.51272-5.3333-3.89656-8.6386-3.8966-3.305.00004-6.37283 1.38388-8.63834 3.8966-.25957.2879-.2442.7388.03429 1.0071.27853.2683.71471.2525.97428-.0354 2.00184-2.22032 4.71147-3.44309 7.62997-3.44312 2.9184.00003 5.628 1.2228 7.6298 3.44312.1358.1506.3199.2267.5044.2267.1684 0 .3371-.0633.4699-.1913zm-2.5006 2.9434c.2702-.2772.2719-.7284.0037-1.0077-1.6746-1.7442-3.8436-2.7048-6.1074-2.7047-2.2643 0-4.43334.9606-6.10747 2.7047-.26815.2794-.26643.7306.00379 1.0078.27025.2771.70671.2754.97486-.0039 1.41332-1.4725 3.23472-2.2834 5.12882-2.2834 1.8935-.0001 3.715.8109 5.1288 2.2834.1347.1404.312.2106.4893.2106.1755 0 .3512-.0689.4856-.2068zm-8.5455 2.956c.6384-.6538 1.5744-1.0763 2.3848-1.0763h.0003.0499.0003c.8103 0 1.7464.4225 2.3848 1.0763.2704.277.7069.275.9748-.0047.268-.2796.2659-.7307-.0045-1.0077-.8968-.9185-2.1823-1.489-3.355-1.489-.0001 0-.0004 0-.0005 0h-.0497c-.0002 0-.0003 0-.0005 0-1.1726 0-2.4583.5705-3.3551 1.489-.2704.277-.2725.7282-.0045 1.0077.1348.1407.3123.2111.4897.2111.1754 0 .3508-.0687.4852-.2064z"></path>
                                </svg>
                            </div>
                        </div>
                        <span class="ms-2">Бесплатный Wi-Fi в номере</span>
                    </div>
                </div>
                <div class="col pe-3">
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center align-self-start hotel-facilities-item-icon">
                            <div class="d-inline-block" style="width: 32px; height: 32px;">
                                <svg fill="none" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd" d="m5 14c0-4.97009 4.02991-9 9-9 4.9701 0 9 4.02991 9 9 0 4.9701-4.0299 9-9 9-4.97009 0-9-4.0299-9-9zm1.52679 0c0 4.1263 3.34687 7.4732 7.47321 7.4732 4.1263 0 7.4732-3.3469 7.4732-7.4732 0-4.12634-3.3469-7.47321-7.4732-7.47321-4.12634 0-7.47321 3.34687-7.47321 7.47321zm6.79141-2.8539c-.1809-.1808-.2825-.4261-.2825-.6818 0-.2558.1016-.50103.2825-.68187.1808-.18084.4261-.28243.6818-.28243.2558 0 .501.10159.6819.28243.1808.18084.2824.42607.2824.68187 0 .2557-.1016.501-.2824.6818-.1809.1809-.4261.2825-.6819.2825-.2557 0-.501-.1016-.6818-.2825zm.1997 1.5682h.9643c.0884 0 .1607.0723.1607.1607v5.4643c0 .0884-.0723.1607-.1607.1607h-.9643c-.0884 0-.1607-.0723-.1607-.1607v-5.4643c0-.0884.0723-.1607.1607-.1607z"></path>
                                </svg>
                            </div>
                        </div>
                        <span class="ms-2">Детский бассейн</span>
                    </div>
                </div>
                <div class="col pe-3">
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center align-self-start hotel-facilities-item-icon">
                            <div class="d-inline-block" style="width: 32px; height: 32px;">
                                <svg fill="none" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="m12.5156 9.11719h5.293c.3236 0 .5859.26234.5859.58593 0 .32358-.2623.58598-.5859.58598h-5.293c-.3236 0-.5859-.2624-.5859-.58598 0-.32359.2623-.58593.5859-.58593z"></path>
                                        <path d="m15.4453 13.8047h-5.2539c-.32359 0-.58593.2623-.58593.5859s.26234.586.58593.586h5.2539c.3236 0 .5859-.2624.5859-.586s-.2623-.5859-.5859-.5859z"></path>
                                        <path d="m10.1914 11.4609h7.6172c.3236 0 .5859.2624.5859.586s-.2623.5859-.5859.5859h-7.6172c-.32359 0-.58593-.2623-.58593-.5859s.26234-.586.58593-.586z"></path>
                                        <path d="m17.8086 14.9766c.3236 0 .5859-.2624.5859-.586s-.2623-.5859-.5859-.5859-.5859.2623-.5859.5859.2623.586.5859.586z"></path>
                                        <path d="m10.7773 9.74219c0 .32361-.2623.58591-.5859.58591s-.58593-.2623-.58593-.58591.26233-.58594.58593-.58594.5859.26233.5859.58594z"></path>
                                        <path clip-rule="evenodd" d="m24 11.6562c0-2.73183-2.3585-4.89108-5.1031-4.67249-.7678-1.69879-2.6372-2.94465-4.8969-2.94465-2.2596 0-4.1291 1.24582-4.89688 2.94465-2.74648-.21875-5.10312 1.94242-5.10312 4.67249 0 1.9223 1.20316 3.645 2.98234 4.3527-.29621 3.6464 3.96276 5.7942 6.72466 3.4763 2.7034 2.2687 6.8608.2654 6.7357-3.2878 2.0634-.5248 3.5573-2.3863 3.5573-4.5412zm-4.2705 3.4865c-.3318.043-.5604.355-.5016.6842.3225 1.8051-1.0731 3.4465-2.8841 3.4465-.8404 0-1.6413-.3616-2.1973-.9922-.2332-.2644-.6458-.2644-.879 0-.556.6306-1.3568.9922-2.1972.9922-1.85479 0-3.25464-1.7139-2.86557-3.5416.06453-.3032-.11825-.6043-.41707-.6868-1.54016-.4255-2.61578-1.8189-2.61578-3.3888 0-2.2139 2.04886-3.86065 4.20347-3.45573.29098.05457.57695-.11625.66665-.39836.485-1.52563 2.1126-2.59117 3.958-2.59117s3.473 1.06554 3.958 2.59117c.0897.28211.3758.45281.6666.39836 2.1587-.40571 4.2035 1.24597 4.2035 3.45573 0 1.7592-1.3321 3.258-3.0986 3.4865z" fill-rule="evenodd"></path>
                                        <path clip-rule="evenodd" d="m5.79688 22.2031c0-.9692.78855-1.7578 1.75781-1.7578.96925 0 1.75781.7886 1.75781 1.7578 0 .9693-.78856 1.7578-1.75781 1.7578-.96926 0-1.75781-.7885-1.75781-1.7578zm1.17187 0c0 .3231.26285.586.58594.586.32308 0 .58593-.2629.58593-.586s-.26285-.5859-.58593-.5859c-.32309 0-.58594.2628-.58594.5859z" fill-rule="evenodd"></path>
                                        <path d="m5.21094 23.375c0 .3236-.26234.5859-.58594.5859s-.58594-.2623-.58594-.5859.26234-.5859.58594-.5859.58594.2623.58594.5859z"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <span class="ms-2">Частная пляжная зона</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-auto">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#hotelFacilitiesModal">
                        <span>Показать все удобства</span>
                    </button>
                </div>
            </div>
        </div> <!-- container-->
    </section>

    <section class="hotel-info" id="info">
        <div class="container">
            <div class="row mb-1">
                <h2 class="hotel-info-header">Важная и полезная информация</h2>
            </div>

            <div class="row">
                <div class="col-12 col-md-4">
                    <h3 class="d-block hotel-info-subheader">Об отеле</h3>
                </div>
                <div class="col-12 col-md-8 hotel-info-bordered">
                    <span class="d-block">Тип корпуса: отельный комплекс с большой территорией</span>
                    <span class="d-block">Год строительства: 2012, последний ремонт в 2017</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <h3 class="d-block hotel-info-subheader">Бассейны</h3>
                </div>
                <div class="col-12 col-md-8 hotel-info-bordered">
                    <span class="d-block">Открытый бассейн, детский бассейн</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <h3 class="d-block hotel-info-subheader">Ограничения на размещение</h3>
                </div>
                <div class="col-12 col-md-8 hotel-info-bordered">
                    <span class="d-block">Данный отель не размещает одиноких мужчин в номере, без сопровождения женщин. Список отелей с особенностями размещения меняется ежегодно. Более подробную информацию, уточняйте у наших специалистов.</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <h3 class="d-block hotel-info-subheader">Официальный сайт отеля</h3>
                </div>
                <div class="col-12 col-md-8">
                    <a href="http://www.cansevenotel.com/" target="_blank" class="d-block">
                        <span>cansevenotel.com</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="hotel-description" id="description">
        <div class="container">
            <div class="row mb-4">
                <h2 class="hotel-descritpion-header">Описание отеля</h2>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3 class="mb-3 hotel-description-subheader">Ryma Hotel, Чолаклы, Турция</h3>
                    <p>Отель Кансевен 3* расположен в семи километрах от города Сиде, в популярном курортном районе. До берега Средиземного моря примерно 500 метров. Это уютный современный отель, основанный в 2006 году. В нем туристам предоставят качественный сервис и хороший отдых. В турецком городе Сидэ очень популярное туристическое направление у россиян, наряду с Аланией и Кемером. У отеля есть личный песочный пляж. Напрокат выдаются зонтики, матрасы, шезлонги и полотенца. Между пляжем и отелем проходит дорога. Пляж протяженностью 50 метров. На нем есть бар и магазинчики.</p>
                </div>
                <div class="col-12 col-sm-5 ms-auto">
                    <h3 class="mb-3 hotel-description-subheader">Рейтинг по отзывам</h3>
                    <span class="d-block mb-2 hotel-description-rating">7.1/10
                        <!-- -->
                        <!-- -->onlinetours
                    </span>
                    <span class="d-block mb-2 hotel-description-rating">0/5
                        <!-- -->
                        <!-- -->tophotels
                    </span>
                </div>
            </div>
        </div>
    </section>

    <hr class="container" style="color: #e5e5e5; opacity: 1;">

    <section class="hotel-rooms" id="rooms">
        <div class="container">
            <div class="mb-4">
                <h3 class="hotel-rooms-header">Типы номеров</h3>
            </div>
            <div class="accordion accordion-flush" id="hotelRoomsAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed w-25" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Семейный номер с одной спальней
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#hotelRoomsAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-12 col-md-auto d-flex pe-4 mb-4">
                                    <div class="me-2 hotel-rooms-icon">
                                        <div class="d-inline-block" style="width: 28px; height: 28px;">
                                            <svg fill="none" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m22.15 21.6614v-14.24797c.0001-.00294.0001-.00588.0001-.00883v-1.06599c0-.26981-.2187-.48861-.4886-.48861h-15.32289c-.26983 0-.48861.21878-.48861.48861v15.32279c0 .2698.21878.4886.48861.4886h15.32279c.2699 0 .4886-.2188.4886-.4886zm-.9771-14.83418v.53158c-.0001.0029-.0001.0058-.0001.00872v6.81708h-1.1947c-.2699 0-.4886.2188-.4886.4886s.2186.4886.4886.4886h1.1947v6.011h-9.3742v-1.4883c0-.2699-.2188-.4886-.4887-.4886-.2698 0-.4886.2187-.4886.4886v1.4883h-3.99408v-14.34558h3.99418v10.41938c0 .2698.2188.4886.4886.4886s.4886-.2188.4886-.4886v-2.0848h5.877c.2699 0 .4886-.2188.4886-.4886s-.2186-.4886-.4886-.4886h-5.877v-7.35738z" stroke-width=".3"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="d-block pt-3">Размер номера 20 кв.м</span>
                                </div>
                            </div>
                            <span class="d-block mb-4">Однокомнатный номер.</span>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed w-25" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Семейный номер с двумя спальнями
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#hotelRoomsAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-12 col-md-auto d-flex pe-4 mb-4">
                                    <div class="me-2 hotel-rooms-icon">
                                        <div class="d-inline-block" style="width: 28px; height: 28px;">
                                            <svg fill="none" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                <path d="m22.15 21.6614v-14.24797c.0001-.00294.0001-.00588.0001-.00883v-1.06599c0-.26981-.2187-.48861-.4886-.48861h-15.32289c-.26983 0-.48861.21878-.48861.48861v15.32279c0 .2698.21878.4886.48861.4886h15.32279c.2699 0 .4886-.2188.4886-.4886zm-.9771-14.83418v.53158c-.0001.0029-.0001.0058-.0001.00872v6.81708h-1.1947c-.2699 0-.4886.2188-.4886.4886s.2186.4886.4886.4886h1.1947v6.011h-9.3742v-1.4883c0-.2699-.2188-.4886-.4887-.4886-.2698 0-.4886.2187-.4886.4886v1.4883h-3.99408v-14.34558h3.99418v10.41938c0 .2698.2188.4886.4886.4886s.4886-.2188.4886-.4886v-2.0848h5.877c.2699 0 .4886-.2188.4886-.4886s-.2186-.4886-.4886-.4886h-5.877v-7.35738z" stroke-width=".3"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="d-block pt-3">Размер номера 40 кв.м</span>
                                </div>
                                <div class="col-12 col-md-auto d-flex pe-4 mb-4">
                                    <div class="me-2 hotel-rooms-icon">
                                        <div class="d-inline-block" style="width: 28px; height: 28px;">
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20.1249 5.25H7.87488C7.17868 5.25 6.51101 5.52656 6.01872 6.01884C5.52644 6.51113 5.24988 7.17881 5.24988 7.875V20.125C5.24988 20.8212 5.52644 21.4889 6.01872 21.9812C6.51101 22.4734 7.17868 22.75 7.87488 22.75H20.1249C20.2688 22.748 20.4123 22.7334 20.5536 22.7063L20.8161 22.645H20.9211L21.2449 22.5225L21.3586 22.4613C21.4461 22.4088 21.5424 22.365 21.6299 22.3037C21.7467 22.2178 21.8578 22.1243 21.9624 22.0238L22.0236 21.945C22.1095 21.8579 22.1885 21.7643 22.2599 21.665L22.3386 21.5512C22.3997 21.4538 22.4524 21.3514 22.4961 21.245C22.5201 21.203 22.5406 21.1591 22.5574 21.1137C22.6011 21.0087 22.6274 20.895 22.6624 20.7812V20.65C22.712 20.479 22.7414 20.3028 22.7499 20.125V7.875C22.7499 7.17881 22.4733 6.51113 21.981 6.01884C21.4888 5.52656 20.8211 5.25 20.1249 5.25ZM7.87488 21C7.64281 21 7.42025 20.9078 7.25616 20.7437C7.09207 20.5796 6.99988 20.3571 6.99988 20.125V16.3537L9.87863 13.4663C9.95997 13.3842 10.0567 13.3191 10.1634 13.2747C10.27 13.2303 10.3844 13.2074 10.4999 13.2074C10.6154 13.2074 10.7298 13.2303 10.8364 13.2747C10.943 13.3191 11.0398 13.3842 11.1211 13.4663L18.6461 21H7.87488ZM20.9999 20.125C20.9991 20.2329 20.9783 20.3397 20.9386 20.44C20.9186 20.4827 20.8952 20.5236 20.8686 20.5625C20.8452 20.5995 20.8189 20.6347 20.7899 20.6675L16.1086 15.9862L16.8786 15.2163C16.96 15.1342 17.0567 15.0691 17.1634 15.0247C17.27 14.9803 17.3844 14.9574 17.4999 14.9574C17.6154 14.9574 17.7298 14.9803 17.8364 15.0247C17.943 15.0691 18.0398 15.1342 18.1211 15.2163L20.9999 18.1038V20.125ZM20.9999 15.6275L19.3549 14C18.8541 13.5249 18.1902 13.26 17.4999 13.26C16.8096 13.26 16.1456 13.5249 15.6449 14L14.8749 14.77L12.3549 12.25C11.8541 11.7749 11.1902 11.51 10.4999 11.51C9.80959 11.51 9.14562 11.7749 8.64488 12.25L6.99988 13.8775V7.875C6.99988 7.64294 7.09207 7.42038 7.25616 7.25628C7.42025 7.09219 7.64281 7 7.87488 7H20.1249C20.3569 7 20.5795 7.09219 20.7436 7.25628C20.9077 7.42038 20.9999 7.64294 20.9999 7.875V15.6275ZM15.3124 8.75C15.0528 8.75 14.799 8.82698 14.5832 8.9712C14.3674 9.11542 14.1991 9.3204 14.0998 9.56023C14.0004 9.80006 13.9745 10.064 14.0251 10.3186C14.0757 10.5732 14.2007 10.807 14.3843 10.9906C14.5679 11.1741 14.8017 11.2991 15.0563 11.3498C15.3109 11.4004 15.5748 11.3744 15.8146 11.2751C16.0545 11.1758 16.2595 11.0075 16.4037 10.7917C16.5479 10.5758 16.6249 10.3221 16.6249 10.0625C16.6249 9.7144 16.4866 9.38056 16.2405 9.13442C15.9943 8.88828 15.6605 8.75 15.3124 8.75Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="d-block pt-3">Вид на бассейн, горы, сад, море</span>
                                </div>
                            </div>
                            <span class="d-block mb-4">2 ванные комнаты.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hotel-reccom" id="reccom">
        <div class="container">
            <h2 class="hotel-reccom-header mb-4">Похожие отели в этом районе</h2>

            <div id="carouselHotelReccom" class="carousel slide" data-bs-interval="false">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row row-cols-3">
                            <div class="col pe-2">
                                <div class="card h-100">
                                    <img class="card-img-top" src="img/hotel_recommendations/1.jpg" alt="hotel">
                                    <div class="card-body d-flex flex-column">
                                        <div class="card-rating mb-3 d-flex justify-content-between">
                                            <div class="card-rating-stars d-flex">
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="card-rating-estim d-inline-block" style="background: rgb(170, 204, 0) none repeat scroll 0% 0%;">
                                                    <span>8.4</span>
                                                </div>
                                                <span class="card-rating-reviews ms-1">12 отзывов</span>
                                            </div>
                                        </div>
                                        <a class="card-title d-inline" href="" target="_blank">
                                            <h3>Sural Resort</h3>
                                        </a>
                                        <span class="card-subtitle d-inline-block mb-2">Турция, Сиде, Чолаклы</span>
                                        <div class="card-facilities mb-3 d-flex justify-content-start">
                                            <div class="d-inline-block pe-2 mb-2">
                                                <div class="card-facilities-border d-inline-flex align-items-center py-1 px-2">
                                                    <span>Библиотека</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-block pe-2 mb-2">
                                                <div class="card-facilities-border d-inline-flex align-items-center py-1 px-2">
                                                    <span>Джакузи</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-block pe-2 mb-2">
                                                <div class="card-facilities-border d-inline-flex align-items-center py-1 px-2">
                                                    <span>Крытый бассейн</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#/" class="btn btn-primary btn-lg px-4 mt-auto"><span>Найти тур</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col px-2">
                                <div class="card h-100">
                                    <img class="card-img-top" src="img/hotel_recommendations/2.jpg" alt="hotel">
                                    <div class="card-body d-flex flex-column">
                                        <div class="card-rating mb-3 d-flex justify-content-between">
                                            <div class="card-rating-stars d-flex">
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="card-rating-estim d-inline-block" style="background: rgb(170, 204, 0) none repeat scroll 0% 0%;">
                                                    <span>8.4</span>
                                                </div>
                                                <span class="card-rating-reviews ms-1">12 отзывов</span>
                                            </div>
                                        </div>
                                        <a class="card-title d-inline" href="" target="_blank">
                                            <h3>Diamond Elite Hotel & SPA</h3>
                                        </a>
                                        <span class="card-subtitle d-inline-block mb-2">Турция, Сиде, Чолаклы</span>
                                        <div class="card-facilities mb-3 d-flex justify-content-start">
                                            <div class="d-inline-block pe-2 mb-2">
                                                <div class="card-facilities-border d-inline-flex align-items-center py-1 px-2">
                                                    <span>Библиотека</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-block pe-2 mb-2">
                                                <div class="card-facilities-border d-inline-flex align-items-center py-1 px-2">
                                                    <span>Джакузи</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-block pe-2 mb-2">
                                                <div class="card-facilities-border d-inline-flex align-items-center py-1 px-2">
                                                    <span>Крытый бассейн</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#/" class="btn btn-primary btn-lg px-4 mt-auto"><span>Найти тур</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col ps-2">
                                <div class="card h-100">
                                    <img class="card-img-top" src="img/hotel_recommendations/3.jpg" alt="hotel">
                                    <div class="card-body d-flex flex-column">
                                        <div class="card-rating mb-3 d-flex justify-content-between">
                                            <div class="card-rating-stars d-flex">
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="card-rating-estim d-inline-block" style="background: rgb(170, 204, 0) none repeat scroll 0% 0%;">
                                                    <span>8.4</span>
                                                </div>
                                                <span class="card-rating-reviews ms-1">12 отзывов</span>
                                            </div>
                                        </div>
                                        <a class="card-title d-inline" href="" target="_blank">
                                            <h3>Alba Resort Hotel</h3>
                                        </a>
                                        <span class="card-subtitle d-inline-block mb-2">Турция, Сиде, Чолаклы</span>
                                        <div class="card-facilities mb-3 d-flex justify-content-start">
                                            <div class="d-inline-block pe-2 mb-2">
                                                <div class="card-facilities-border d-inline-flex align-items-center py-1 px-2">
                                                    <span>Библиотека</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-block pe-2 mb-2">
                                                <div class="card-facilities-border d-inline-flex align-items-center py-1 px-2">
                                                    <span>Джакузи</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-block pe-2 mb-2">
                                                <div class="card-facilities-border d-inline-flex align-items-center py-1 px-2">
                                                    <span>Крытый бассейн</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#/" class="btn btn-primary btn-lg px-4 mt-auto"><span>Найти тур</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row row-cols-3">
                            <div class="col pe-2">
                                <div class="card h-100">
                                    <img class="card-img-top" src="img/hotel_recommendations/4.jpg" alt="hotel">
                                    <div class="card-body d-flex flex-column">
                                        <div class="card-rating mb-3 d-flex justify-content-between">
                                            <div class="card-rating-stars d-flex">
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="card-rating-estim d-inline-block" style="background: rgb(170, 204, 0) none repeat scroll 0% 0%;">
                                                    <span>8.4</span>
                                                </div>
                                                <span class="card-rating-reviews ms-1">12 отзывов</span>
                                            </div>
                                        </div>
                                        <a class="card-title d-inline" href="" target="_blank">
                                            <h3>Otium Family Stone Palace</h3>
                                        </a>
                                        <span class="card-subtitle d-inline-block mb-2">Турция, Сиде, Чолаклы</span>
                                        <div class="card-facilities mb-3 d-flex justify-content-start">
                                            <div class="d-inline-block pe-2 mb-2">
                                                <div class="card-facilities-border d-inline-flex align-items-center py-1 px-2">
                                                    <span>Библиотека</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-block pe-2 mb-2">
                                                <div class="card-facilities-border d-inline-flex align-items-center py-1 px-2">
                                                    <span>Джакузи</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-block pe-2 mb-2">
                                                <div class="card-facilities-border d-inline-flex align-items-center py-1 px-2">
                                                    <span>Крытый бассейн</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#/" class="btn btn-primary btn-lg px-4 mt-auto"><span>Найти тур</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col px-2">
                                <div class="card h-100">
                                    <img class="card-img-top" src="img/hotel_recommendations/5.jpg" alt="hotel">
                                    <div class="card-body d-flex flex-column">
                                        <div class="card-rating mb-3 d-flex justify-content-between">
                                            <div class="card-rating-stars d-flex">
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="card-rating-estim d-inline-block" style="background: rgb(170, 204, 0) none repeat scroll 0% 0%;">
                                                    <span>8.4</span>
                                                </div>
                                                <span class="card-rating-reviews ms-1">12 отзывов</span>
                                            </div>
                                        </div>
                                        <a class="card-title d-inline" href="" target="_blank">
                                            <h3>Victory Resort Hotel</h3>
                                        </a>
                                        <span class="card-subtitle d-inline-block mb-2">Турция, Сиде, Чолаклы</span>
                                        <div class="card-facilities mb-3 d-flex justify-content-start">
                                            <div class="d-inline-block pe-2 mb-2">
                                                <div class="card-facilities-border d-inline-flex align-items-center py-1 px-2">
                                                    <span>Библиотека</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-block pe-2 mb-2">
                                                <div class="card-facilities-border d-inline-flex align-items-center py-1 px-2">
                                                    <span>Джакузи</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-block pe-2 mb-2">
                                                <div class="card-facilities-border d-inline-flex align-items-center py-1 px-2">
                                                    <span>Крытый бассейн</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#/" class="btn btn-primary btn-lg px-4 mt-auto"><span>Найти тур</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col ps-2">
                                <div class="card h-100">
                                    <img class="card-img-top" src="img/hotel_recommendations/6.jpg" alt="hotel">
                                    <div class="card-body d-flex flex-column">
                                        <div class="card-rating mb-3 d-flex justify-content-between">
                                            <div class="card-rating-stars d-flex">
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                                <div class="d-inline-block" style="width: 24px; height: 24px;">
                                                    <svg fill="#fd9c28" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="m23.2533 10.6904-5.9646-.8668-2.6663-5.40544c-.0728-.148-.1926-.2678-.3406-.34063-.3712-.18323-.8222-.03054-1.0078.34063l-2.6663 5.40544-5.96453.8668c-.16445.0235-.31479.1011-.4299.2185-.13916.143-.21585.3355-.2132.535.00264.1996.08439.3899.22729.5292l4.31543 4.2073-1.01954 5.9411c-.02391.1382-.00862.2803.04414.4103.05276.1299.14088.2425.25436.3249s.24779.1314.38769.1414.27979-.0194.40382-.0849l5.33494-2.8049 5.335 2.8049c.1456.0775.3148.1033.4769.0751.4087-.0704.6836-.4581.6131-.8668l-1.0195-5.9411 4.3154-4.2073c.1174-.1151.195-.2655.2185-.4299.0634-.4111-.2232-.7917-.6343-.8528z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="card-rating-estim d-inline-block" style="background: rgb(170, 204, 0) none repeat scroll 0% 0%;">
                                                    <span>8.4</span>
                                                </div>
                                                <span class="card-rating-reviews ms-1">12 отзывов</span>
                                            </div>
                                        </div>
                                        <a class="card-title d-inline" href="" target="_blank">
                                            <h3>Royal Alhambra Palace</h3>
                                        </a>
                                        <span class="card-subtitle d-inline-block mb-2">Турция, Сиде, Чолаклы</span>
                                        <div class="card-facilities mb-3 d-flex justify-content-start">
                                            <div class="d-inline-block pe-2 mb-2">
                                                <div class="card-facilities-border d-inline-flex align-items-center py-1 px-2">
                                                    <span>Библиотека</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-block pe-2 mb-2">
                                                <div class="card-facilities-border d-inline-flex align-items-center py-1 px-2">
                                                    <span>Джакузи</span>
                                                </div>
                                            </div>
                                            <div class="d-inline-block pe-2 mb-2">
                                                <div class="card-facilities-border d-inline-flex align-items-center py-1 px-2">
                                                    <span>Крытый бассейн</span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#/" class="btn btn-primary btn-lg px-4 mt-auto"><span>Найти тур</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-flex justify-content-end mt-4">
                <div class="d-flex">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHotelReccom" data-bs-slide="prev">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="d-inline-block" style="width: 24px; height: 24px;">
                                <svg fill="none" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m16.842 7.93319-5.6032 5.68011c-.2108.2132-.2108.5602.0004.7738l5.6028 5.6797c.211.2138.2106.5601-.0007.7734-.2114.2134-.5537.213-.7646-.0008l-5.6024-5.6793c-.63234-.6397-.63234-1.6805-.0004-2.3198l5.6028-5.67971c.1056-.10705.2441-.16059.3827-.16059.1381 0 .2763.05327.3819.1598.2113.21333.2116.55959.0007.77339z"></path>
                                </svg>
                            </div>
                        </div>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselHotelReccom" data-bs-slide="next">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="d-inline-block" style="width: 24px; height: 24px;">
                                <svg fill="none" height="28" viewBox="0 0 28 28" width="28" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m11.158 7.93319 5.6032 5.68011c.2108.2132.2108.5602-.0004.7738l-5.6028 5.6797c-.211.2138-.2106.5601.0007.7734.2114.2134.5537.213.7646-.0008l5.6024-5.6793c.6323-.6397.6323-1.6805.0004-2.3198l-5.6028-5.67971c-.1056-.10705-.2441-.16059-.3827-.16059-.1381 0-.2763.05327-.3819.1598-.2113.21333-.2116.55959-.0007.77339z"></path>
                                </svg>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="hotel-reviews" id="reviews">
        <div class="container">
            <div class="d-flex align-items-baseline justify-content-between mb-4">
                <h2 class="hotel-reviews-header">Отзывы о
                    <!-- -->Ryma Hotel 3 звезды, Чолаклы, Турция
                </h2>
                <button type="button" class="btn btn-lg btn-outline-dark">Оставить отзыв</button>
            </div>

            <div>
                <div class="mb-3 hotel-reviews-item">
                    <div class="row">
                        <div class="col-12 col-sm-3">
                            <div class="d-flex flex-column align-items-start me-5" style="min-width: 176px; max-width: 180px;">
                                <div class="d-inline-flex align-items-center mb-2 hotel-reviews-item-tag">
                                    <span>В одиночку</span>
                                </div>
                                <span class="mb-3 hotel-reviews-item-date">июнь 2019</span>
                                <span class="mb-1 hotel-reviews-item-person">Балашова Светлана Ефимовна</span>
                                <span class="hotel-reviews-item-hotel">Ryma Hotel, Чолаклы, Турция</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm">
                            <div class="row align-items-center mb-4">
                                <div class="col-1 me-auto">
                                    <div class="hotel-reviews-item-estim">
                                        <h3 class="mb-0">10/10</h3>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="d-flex flex-wrap hotel-reviews-item-services">
                                        <span class="mb-1 me-4">Обслуживание — 10/10</span>
                                        <span class="mb-1 me-4">Питание — 10/10</span>
                                        <span class="mb-1">Состояние номера — 10/10</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row hotel-reviews-item-text">
                                <div class="mb-4">
                                    Первое, что хотелось бы отметить— это приветливый и отзывчивый персонал. На любой вопрос или просьбу тут же находилось решение. От гостиницы много не ждали, так как рассчитывали на бюджетную путевку, чтобы основные средства потратить на поездки по стране и не только. Были приятно удивлены чистотой (своевременная уборка номера, кристальный бассейн), а так же разнообразным питанием (буду скучать по десертам), хоть в самом номере в силу постоянных поездок по экскурсиям, находились немного, впечатление осталось очень хорошее. Отель идеально подойдет людям, желающим почувствовать себя, как дома, а также рассчитывающих на малобюджетный, но полноценный отдых. Не смотря на то, что пляж находится в 10 минутах езды, от отеля ходит автобус, который не только может довезти на пляж, если не хочется идти пешком, но и отвезти на прогулку по красивым местам, в лесок, посмотреть на лошадок (очень рекомендую). Даже если средства есть только на путевку, скучать вам не дадут: дискотеки, пенные вечеринки, поездки. В общем, мы остались довольны и планируем вернуться!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 hotel-reviews-item">
                    <div class="row">
                        <div class="col-12 col-sm-3">
                            <div class="d-flex flex-column align-items-start me-5" style="min-width: 176px; max-width: 180px;">
                                <div class="d-inline-flex align-items-center mb-2 hotel-reviews-item-tag">
                                    <span>В одиночку</span>
                                </div>
                                <span class="mb-3 hotel-reviews-item-date">июнь 2019</span>
                                <span class="mb-1 hotel-reviews-item-person">Балашова Светлана Ефимовна</span>
                                <span class="hotel-reviews-item-hotel">Ryma Hotel, Чолаклы, Турция</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm">
                            <div class="row align-items-center mb-4">
                                <div class="col-1 me-auto">
                                    <div class="hotel-reviews-item-estim">
                                        <h3 class="mb-0">10/10</h3>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="d-flex flex-wrap hotel-reviews-item-services">
                                        <span class="mb-1 me-4">Обслуживание — 10/10</span>
                                        <span class="mb-1 me-4">Питание — 10/10</span>
                                        <span class="mb-1">Состояние номера — 10/10</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row hotel-reviews-item-text">
                                <div class="mb-4">
                                    Первое, что хотелось бы отметить— это приветливый и отзывчивый персонал. На любой вопрос или просьбу тут же находилось решение. От гостиницы много не ждали, так как рассчитывали на бюджетную путевку, чтобы основные средства потратить на поездки по стране и не только. Были приятно удивлены чистотой (своевременная уборка номера, кристальный бассейн), а так же разнообразным питанием (буду скучать по десертам), хоть в самом номере в силу постоянных поездок по экскурсиям, находились немного, впечатление осталось очень хорошее. Отель идеально подойдет людям, желающим почувствовать себя, как дома, а также рассчитывающих на малобюджетный, но полноценный отдых. Не смотря на то, что пляж находится в 10 минутах езды, от отеля ходит автобус, который не только может довезти на пляж, если не хочется идти пешком, но и отвезти на прогулку по красивым местам, в лесок, посмотреть на лошадок (очень рекомендую). Даже если средства есть только на путевку, скучать вам не дадут: дискотеки, пенные вечеринки, поездки. В общем, мы остались довольны и планируем вернуться!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 hotel-reviews-item">
                    <div class="row">
                        <div class="col-12 col-sm-3">
                            <div class="d-flex flex-column align-items-start me-5" style="min-width: 176px; max-width: 180px;">
                                <div class="d-inline-flex align-items-center mb-2 hotel-reviews-item-tag">
                                    <span>В одиночку</span>
                                </div>
                                <span class="mb-3 hotel-reviews-item-date">июнь 2019</span>
                                <span class="mb-1 hotel-reviews-item-person">Балашова Светлана Ефимовна</span>
                                <span class="hotel-reviews-item-hotel">Ryma Hotel, Чолаклы, Турция</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm">
                            <div class="row align-items-center mb-4">
                                <div class="col-1 me-auto">
                                    <div class="hotel-reviews-item-estim">
                                        <h3 class="mb-0">10/10</h3>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="d-flex flex-wrap hotel-reviews-item-services">
                                        <span class="mb-1 me-4">Обслуживание — 10/10</span>
                                        <span class="mb-1 me-4">Питание — 10/10</span>
                                        <span class="mb-1">Состояние номера — 10/10</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row hotel-reviews-item-text">
                                <div class="mb-4">
                                    Первое, что хотелось бы отметить— это приветливый и отзывчивый персонал. На любой вопрос или просьбу тут же находилось решение. От гостиницы много не ждали, так как рассчитывали на бюджетную путевку, чтобы основные средства потратить на поездки по стране и не только. Были приятно удивлены чистотой (своевременная уборка номера, кристальный бассейн), а так же разнообразным питанием (буду скучать по десертам), хоть в самом номере в силу постоянных поездок по экскурсиям, находились немного, впечатление осталось очень хорошее. Отель идеально подойдет людям, желающим почувствовать себя, как дома, а также рассчитывающих на малобюджетный, но полноценный отдых. Не смотря на то, что пляж находится в 10 минутах езды, от отеля ходит автобус, который не только может довезти на пляж, если не хочется идти пешком, но и отвезти на прогулку по красивым местам, в лесок, посмотреть на лошадок (очень рекомендую). Даже если средства есть только на путевку, скучать вам не дадут: дискотеки, пенные вечеринки, поездки. В общем, мы остались довольны и планируем вернуться!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<div class="modal fade" id="hotelFacilitiesModal" tabindex="-1" aria-labelledby="hotelFacilitiesModalLabel">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header pt-4 px-5">
                <h2 class="modal-title">Об отеле</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5">
                <div class="mb-4">
                    <h4 class="mb-2">Красота и здоровье</h4>
                    <span class="d-block">Сауна</span>
                </div>
                <div class="mb-4">
                    <h4 class="mb-2">Бассейны</h4>
                    <span class="d-block">Открытый бассейн</span>
                </div>
                <div class="mb-4">
                    <h4 class="mb-2">Транспорт</h4>
                    <span class="d-block">Трансфер от/до аэропорта</span>
                </div>
                <div class="mb-4">
                    <h4 class="mb-2">Интернет</h4>
                    <span class="d-block">Бесплатный Wi-Fi в номере</span>
                </div>
                <div class="mb-4">
                    <h4 class="mb-2">Детям</h4>
                    <span class="d-block">Детский бассейн</span>
                </div>
                <div class="mb-4">
                    <h4 class="mb-2">Общее</h4>
                    <span class="d-block">Частная пляжная зона</span>
                    <span class="d-block">Лифт</span>
                    <span class="d-block">Допускается размещение с животными</span>
                    <span class="d-block">Места для курения</span>
                    <span class="d-block">Пункт обмена валюты</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'include/templates/footer.php' ?>