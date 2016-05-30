<!-- POST - START -->
    <article class="post post-single">
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
        	   <i class="fa fa-font"></i>
            </div>
        </div>
        <div class="post-body">
            <h2><?= $post['Headline'] ?></h2>
            <div class="flex-video widescreen"><iframe src="https://player.vimeo.com/video/48443133"></iframe></div>
            <p>
                <?= $post['Body'] ?>
            </p>
            <div class="post-info">
                <span>Posted by: admin</span>
                <a href="#respond" class="btn btn-primary scroll">Add comment</a>
            </div>
        </div>
    </article>
<!-- POST - END -->

<div id="post-comments">
    <?php $this->CommentWidget->options(array('allowAnonymousComment' => false));?>
    <?php echo $this->CommentWidget->display();?>
</div>