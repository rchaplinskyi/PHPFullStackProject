<?php
 include_once "assets/header.php";
 ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php

            ?>


            <section class="news">
                <?php
                $category_id = $_GET['category_id'];
                $news = get_category_by_id($category_id);
                $category = get_category_title($category_id);
                ?>
                <h2><?=$category['title']?></h2>
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
    include_once "assets/footer.php";
?>


