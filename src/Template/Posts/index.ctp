
<?php foreach($posts as $post) { ?>
    <article class="post">
        <div class="post-date-wrapper">
            <div class="post-date">
                <div class="day">
                    <?= date('j', strtotime($post['CreationDate'])) ?>
                </div>
                <div class="month">
                    <?= date('M Y', strtotime($post['CreationDate'])) ?>
                </div>
            </div>
            <div class="post-type">
                <i class="fa fa-video-camera"></i>
            </div>
        </div>
        <div class="post-body">
            <h2><?= $post['Headline'] ?></h2>
            <!--<p><img src="assets/images/image_005.jpg" class="img-responsive" alt="">-->
                <?= $post['Body'] ?>
            </p>
            <div class="post-info">
                <span>Posted by: admin</span>
                <?= $this->Html->link(
                    'View More',
                    array(
                        'controller' => 'posts',
                        'action' => 'view',
                        'id' => '1'
                    ),
                    array(
                        'class' => 'btn btn-inverse'
                    )
                ); ?>
            </div>
        </div>
    </article>
<?php } ?>
<ul class="pagination">
    <?= $this->Paginator->prev('« Previous') ?>
    <?= $this->Paginator->numbers() ?>
    <?= $this->Paginator->next('Next »') ?>
</ul>