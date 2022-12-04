<header>
    <div class="header-content">
        <div class="header-content__search-block">
            <a href="/" class="search-block__logo">OrgEvent</a>
            <input class="search-block__search" type="text" value="Поиск">
        </div>
        <div class="header-content__account-block">
        <?php if($_COOKIE['user-email'] == ''):?>
            <button class="account-block__log-in">Войти</button>
        <?php else: ?>
            <a href="app/include/exit.php">
                <button class="account-block__log-out">Выйти</button>
            </a>
        <?php endif;?>
            <div class="account-block__user-name">Адамович Ф.</div>
            <div class="account-block__avatar"></div>
        </div>
    </div>
</header>