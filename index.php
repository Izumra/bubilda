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
                    <h2 class="title">Список конкурсов</h2>
                    <div class="events__list">
                        <?php 
                            require_once('app/include/db_connect.php');

                            $query = "select * from `contests`";
                            $result = mysqli_query($connect, $query);
                        
                            while( $contest = mysqli_fetch_assoc($result)){?>
                                <div class="events__item event-item">
                                    <div class="event-item__body">
                                        <div class="event-item__label"><?=$contest['title']?></div>
                                    </div>
                                    <div class="event-item__info">
                                        <div class="event-item__status">Статус: <span><?=$contest['status']?></span></div>
                                        <a href="contest.php?id=<?=$contest['id']?>" class="event-item__details-btn btn">Подробнее</a>
                                    </div>
                                </div>
                        <?php }?>
                        
                        
                    </div>
                </div>
            </section>
        </main>
        <?php require('app/footer.php');?> 
       <script src="public/js/main.js"></script>
    </div>
</body>
</html>