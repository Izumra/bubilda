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

