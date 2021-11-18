<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

    <title>Onlinetours: поиск туров онлайн — подбор и покупка туров</title>
</head>

<body>
    <header class="fixed-top">
        <nav class="navbar navbar-expand-lg p-0">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <div class="navbar-toggler-icon">
                        <div class="d-inline-block" style="width: 24px; height: 24px;">
                            <svg enable-background="new 0 0 512 512" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                <path d="m492 236h-472c-11.046 0-20 8.954-20 20s8.954 20 20 20h472c11.046 0 20-8.954 20-20s-8.954-20-20-20z"></path>
                                <path d="M492,76H20C8.954,76,0,84.954,0,96s8.954,20,20,20h472c11.046,0,20-8.954,20-20S503.046,76,492,76z"></path>
                                <path d="m492 396h-472c-11.046 0-20 8.954-20 20s8.954 20 20 20h472c11.046 0 20-8.954 20-20s-8.954-20-20-20z"></path>
                            </svg>
                        </div>
                    </div>
                </button>

                <a class="navbar-brand d-flex justify-content-center align-items-center" href="index.php">
                    <img class="d-block" src="img/site_logo.png" alt="onlinetours">
                </a>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" data-bs-scroll="true" data-bs-backdrop="false" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Закрыть">

                        </button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="navbar-nav justify-content-end flex-grow-1">
                            <div class="nav-itemme-auto ">
                                <a href="tours.php" class="nav-link"><span>Туры</span></a>
                            </div>
                            <div class="nav-itemme-auto ">
                                <a href="#" class="nav-link"><span>Идеи</span></a>
                            </div>
                            <div class="nav-itemme-auto ">
                                <a href="#" class="nav-link"><span>О нас</span></a>
                            </div>
                            <div class="nav-itemme-auto ">
                                <a href="#" class="nav-link"><span>Где купить?</span></a>
                            </div>

                            <div class="nav-item me-auto dropdown navbar-bordered">
                                <a href="#" class="nav-link btn dropdown-toggle" id="dropdownCity" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>Волгоград</span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownCity">
                                    <li><a class="dropdown-item py-2 px-4" href="#">Москва</a></li>
                                    <li><a class="dropdown-item py-2 px-4" href="#">Санкт-Петербург</a></li>
                                    <li><a class="dropdown-item py-2 px-4" href="#">Астрахань</a></li>
                                    <li><a class="dropdown-item py-2 px-4" href="#">Владивосток</a></li>
                                    <li><a class="dropdown-item py-2 px-4" href="#">Екатеринбург</a></li>
                                    <li><a class="dropdown-item py-2 px-4" href="#">Калининград</a></li>
                                    <li><a class="dropdown-item py-2 px-4" href="#">Ростов-на-Дону</a></li>
                                </ul>
                            </div>

                            <div class="nav-item me-auto d-flex flex-column align-items-center px-4 navbar-tel">
                                <a href="tel:" class="p-0">
                                    <h4 class="mb-0">8 (800) 511-04-32</h4>
                                </a>
                                <span>Звоните с 9:00 до 24:00</span>
                            </div>

                            <div class="nav-item navbar-bordered">
                                <?php
                                $href = isset($_SESSION['USER_ID']) ? 'include/m_logout.php' : 'login.php';
                                $log_text = isset($_SESSION['USER_ID']) ? 'Выйти' : 'Войти';
                                ?>                   
                                <a href="<?= $href ?>" class="nav-link">
                                    <span><?= $log_text ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>