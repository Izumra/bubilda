<header>
    <div class="header-content container">
        <div class="header-content__search-block">
            <a href="/" class="search-block__logo">OrgEvent</a>
            <input class="search-block__search" type="text" placeholder="Поиск">
        </div>
        <div class="header-content__account-block">
        <?php if($_COOKIE['user-email'] == ''):?>
            <button class="account-block__log-in form-btn">Войти</button>
            <?php else: ?>
                <div class="dropdown">
                    <button class="dropbtn account-block__user-name"><?= $_COOKIE['user-surname'] .' '. $_COOKIE['user-name']; ?></button>
                    <div class="dropdown-content">
                        <a href="#">Мои конкурсы</a>
                        <a href="#">Объявить конкурс</a>
                        <a href="app/include/exit.php" class="account-block__log-out">Выйти</a>
                    </div>
                </div>
                
                
            <?php endif;?>
        </div>
    </div>
</header>

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

<div class="popup" id="login-popup" >
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

<div class="popup _active" id="create-contest" >
    <div class="popup__bg"></div>
    <form class="popup__content" action="app/include/auth.php" method="post">
        <button type="button" class="popup__close">&#10006;</button>
        <h3 class="popup__title logo">Добавить конкурс</h3>
        <input type="text" name="title" class="popup__input" placeholder="Название конкурса" required>
        <textarea name="description" class="popup__input holder" placeholder="Описание конкурса" required></textarea>
        <input type="date" name="dateByStart" class="popup__input" placeholder="Дата начала" required>
        <button type="submit" class="popup__btn form-btn" name="login-btn">Добавить</button>
    </form>
</div>

title
descr
date
