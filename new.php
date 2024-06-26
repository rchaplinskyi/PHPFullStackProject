<?php
    require "assets/header.php";

    $new_id = $_GET['new_id'];
    if (!is_numeric($new_id)) exit();
    $new = get_new_by_id($new_id);
?>
<section class="news">
    <div class="card single_post">
        <div class="body">
            <div class="img-post">
                <img class="d-block img-fluid" src="<?=$new['image']?>" alt="First slide">
            </div>
            <h3><a href="blog-details.html"><?=$new['title']?></a></h3>
            <p><?=$new['content']?></p>
        </div>
    </div>
    <div class="card">
        <div class="header">
            <h2>Comments 3</h2>
        </div>
        <div class="body">
            <ul class="comment-reply list-unstyled">
                <li class="row clearfix">
                    <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Awesome Image"></div>
                    <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                        <h5 class="m-b-0">Gigi Hadid </h5>
                        <p>Why are there so many tutorials on how to decouple WordPress? how fast and easy it is to get it running (and keep it running!) and its massive ecosystem. </p>
                        <ul class="list-inline">
                            <li><a href="javascript:void(0);">Mar 09 2018</a></li>
                            <li><a href="javascript:void(0);">Reply</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
    <div class="card">
        <div class="header">
            <h2>Leave a reply <small>Your email address will not be published. Required fields are marked*</small></h2>
        </div>
        <div class="body">
            <div class="comment-form">
                <form class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
<?php
require_once "assets/footer.php";
?>