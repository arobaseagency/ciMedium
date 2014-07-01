
<article id="voyant-profile" class="row-fluid">

    <div class="row-fluid">
        <div class="span3">
            <div class="photo-voyant">
                <img class="img-polaroid" src="http://lorempixel.com/200/150/people/9/" alt="">
            </div>
        </div>
        <div class="span4">
            <ul class="nav nav-pills">
                <li><a href="#"><i class="icon-signal"></i></a></li>
                <li><a href="#"><i class="icon-time"></i></a></li>
                <li><a href="#"><i class="icon-envelope"></i></a></li>
                <li><a href="#"><i class="icon-heart"></i></a></li>
            </ul>
        </div>
        <div class="span5">
            <h1><span class="color">Voyante:</span> Osnia-Velasqez Tarot</h1>
        </div>
    </div>
    <hr />
    <div class="row-fluid">
        <div class="span12">
            <img style="width:870px;" src="<?php echo asset_img('chat-room.jpg'); ?>" alt="">
        </div>
    </div>

    <hr>
    <div class="row-fluid">
        <div class="span12">
            <ul id="f-tab-voyant" class="nav nav-tabs">
                <li class="active">
                    <a href="#tb-bio" data-toggle="tab"><i class="icon-leaf"></i> Bio</a>
                </li>
                <li>
                    <a href="#tb-planning" data-toggle="tab"><i class="icon-calendar"></i> Planning</a>
                </li>
                <li>
                    <a href="#tb-comment" data-toggle="tab"><i class="icon-comment"></i> Avis</a>
                </li>
            </ul>

            <div class="tab-content">
                <div id="tb-bio" class="tab-pane fade">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur tempora distinctio quis sapiente laudantium dolores sed quidem molestiae debitis quibusdam.</p>
                </div>
                <div id="tb-planning" class="tab-pane fade active in">
                    <?php include 'tab_planning.php'; ?>
                </div>
                <div id="tb-comment" class="tab-pane fade">
                    <?php include 'tab_comments.php'; ?>
                </div>
            </div>
        </div>
    </div>

</article>