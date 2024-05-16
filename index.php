<?php
    require "assets/header.php";
?>

    <div class="jumbotron">
        <h1 class="display-4">Вітаємо на нашому сайті новин</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="#" role="button">Дізнатися більше</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="news">
                    <?php
                    $news = get_news();
                    ?>
                    <?php foreach ($news as $new):?>
                        <div class="card single_post">
                            <div class="body">
                                <div class="img-post">
                                    <img class="d-block img-fluid" src="<?=$new['image']?>" alt="">
                                </div>
                                <h3><a href="new.php?new_id=<?=$new['id']?>"><?=$new['title']?></a></h3>
                                <p><?=mb_substr($new['content'],0,200,'utf-8').'...'?></p>
                            </div>
                            <div class="footer">
                                <div class="actions">
                                    <a href="new.php?new_id=<?=$new['id']?>" class="btn btn-outline-secondary">Читати більше</a>
                                </div>
                                <ul class="stats">
                                    <li><a href="#"><?=$new['date']?></a></li>
                                    <li><a href="#" class="fa fa-heart">28</a></li>
                                    <li><a href="#" class="fa fa-comment">128</a></li>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach;?>
                </section>
            </div>
        </div>
    </div>

<?php
    require "assets/footer.php";
?>