<header>
    <div class="header-content container">
        <div class="header-content__search-block">
            <a href="/" class="search-block__logo">OrgEvent</a>
            <input class="search-block__search" type="text" placeholder="Поиск">
        </div>
        <div class="header-content__account-block">
        <?php if($_COOKIE['user-email'] == ''):?>
            <button class="account-block__log-in">Войти</button>
            <?php else: ?>
                <div class="account-block__user-name"><?= $_COOKIE['user-surname'] .' '. $_COOKIE['user-name']; ?></div>
                <a class="link-btn" href="app/include/exit.php">
                    <button class="account-block__log-out">Выйти</button>
                </a>
            <?php endif;?>
        </div>
    </div>
</header>