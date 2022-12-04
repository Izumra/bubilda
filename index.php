<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrgEvent</title>
    <link rel="stylesheet" href="public/css/style.min.css">
</head>
<body>
    <div class="wrapper">
        <main>
            <?php require('app/header.php'); ?>
            <section class="events">
                <div class="container">
                    <div class="events__list">
                        <div class="events__item event-item">
                            <div class="event-item__body">
                                <div class="event-item__label">Развитие спорта в Оренбургской области</div>
                            </div>
                            <div class="event-item__info">
                                <div class="event-item__status">Статус: <span></span></div>
                                <a href="contest.php?id=1" class="event-item__details-btn btn">Подробнее</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
        
        
        
            <div class="popup" id="reg-popup">
                <div class="popup__bg"></div>
                <form class="popup__content" action="app/include/reg.php" method="post">
                    <button type="button" class="popup__close">&#10006;</button>
                    <h3 class="popup__title logo">OrgEvent</h3>
                    <input type="text" name="surname" class="popup__input" placeholder="Фамилия" required>
                    <input type="text" name="firstname" class="popup__input" placeholder="Имя" required>
                    <input type="text" name="lastname" class="popup__input" placeholder="Отчество" required>
                    <input type="email" name="email" class="popup__input" placeholder="Email" required>
                    <input type="password" name="password" class="popup__input" placeholder="Пароль" required>
                    <button type="submit" class="popup__btn form-btn" name="reg-btn" >Регистрация</button>
                </form>
            </div>
        
            <div class="popup" id="login-popup">
                <div class="popup__bg"></div>
                <form class="popup__content" action="app/include/auth.php" method="post">
                    <button type="button" class="popup__close">&#10006;</button>
                    <h3 class="popup__title logo">OrgEvent</h3>
                    <input type="email" name="email" class="popup__input" placeholder="Email" required>
                    <input type="password" name="password" class="popup__input" placeholder="Пароль" required>
                    <button type="submit" class="popup__btn form-btn" name="login-btn">Войти</button>
                    <button class="popup__reg-btn">Нет аккаунта?</button>
                </form>
            </div>
        </main>
        <?php require('app/footer.php');?> 
       <script src="public/js/main.js"></script>
    </div>
</body>
</html>