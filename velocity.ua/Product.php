<?php
include "Database.php";
$result = mysqli_query($link, "SELECT * FROM velocity");


?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Велики</title>
    <link rel="stylesheet" href="css/Product.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Joti+One&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:wght@400;600;700;800&family=Yellowtail&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <div class="container">
            <div class="header_content">
                <div class="row">
                    
                    <div class="col-md-3">
                        <div class="header_item">
                            <a class="logo" href="index.php"><img src="img/Sport shop.png" alt="Логотип"></a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="header_item">
                            <input type="search" id="site-search" name="ser" placeholder="Поиск" />
                            <button><img src="img/icons8.png" alt="Поиск"></button>
                        </div>
                    </div>
                    <div class="col-md-2 offset-md-1">
                        <div class="header_items">
                            <img src="img/geolokatsiya_nv4i6hzghcam_64 1.png" alt="Логотип">
                            <div class="header_text">
                                г. Новочеркасск<br>
                                +7 988 566 75 43
                            </div>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="header_item">
                            <a href="login.php">Войти</a>/<a href="Registration.php">Регистрация</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <nav>
        <div class="container">
            <div class="nav_content">
                <div class="title">
                    <ul>
                        <li> <a href="index.php">Главная</a></li>
                        <li> <a href="index.php#news">Новости</a></li>
                        <li> <a href="Contacts.php">Адреса магазинов</a></li>
                        <li> <a href="Contacts.php">Контакты</a></li>
                        <li> <a href="index.php#about">О нас</a></li>
                    </ul>
                </div>

            </div>
        </div>

    </nav>
    <div class="Product">
        <div class="container">
            <div class="Product_menu">
                        <div class="menu_items">
                            <h2>Велосипеды</h2>
                            <form action="/" method="post">
                                <div>
                                    <label>Выбрать магазин</label>
                                    <p><input type="checkbox">Трц мармеладка</p>
                                    <p><input type="checkbox">Трц уфанчик</p>
                                </div>
                                <div>
                                    <label>Пол</label>
                                    <p><input type="checkbox">Мужчина</p>
                                    <p><input type="checkbox">Женщина</p>
                                </div>
                                <div>
                                    <label>Выбрать магазин</label>
                                    <p><input type="checkbox">Горные</p>
                                    <p><input type="checkbox">Спортивные</p>
                                    <p><input type="checkbox">Детские</p>
                                    <p><input type="checkbox">Беговелы</p>
                                </div>
                                <button type="submit"><a href="form.php">Добавить товар</a></button>
                            </form>
                        </div>
                        <div class="row">
                        <?php
                            while($food = mysqli_fetch_assoc($result))
                            {?>
                                 <div class="col-md-4">
                                <div class="item_product">
                                    <img src="img/75564580299 4.png" alt="Alternate Text" />
                                    <div>
                                        <h6><?php echo $food["price"]?> р</h6>
                                        <p><?php echo $food["description"]?></p>
                                    </div>
                                    <button>Купить</button>
                                </div>
                            </div><?php
                            }
                        ?>
                            
                        </div>
            </div>
        </div>
            </div>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-1 offset-md-1">
                            <div class="footer_item">
                                <ul>
                                    <li> <a href="Contacts.php">Помощь</a></li>
                                    <li> <a href="index.php#about">О нас</a></li>
                                    <li> <a href="index.php#news">Новости</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-1 ">
                            <div class="footer_item">
                                <ul>
                                    <li> <a href="Contacts.php">Контакты</a></li>
                                    <li> <a href="Contacts.php">Адресса</a></li>
                                    <li> <a href="Contacts.php">Телефоны</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-1 offset-md-7">
                            <div class="footer_items">
                                <a href="#"><img src="img/telegramma_cxyzka2if3cr_32 1.png" alt="Телеграмм"></a>
                                <a href="#"><img src="img/vk_jwps1kngigw6_32 1.png" alt="Вконтакте"></a>
                            </div>
                        </div>
                    </div>
                    <p>“SportShop” г. Новочеркаск, ул. Энгелся 85а</p>
                </div>
            </footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>