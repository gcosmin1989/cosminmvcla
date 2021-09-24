<?php require APPROOT . './views/inc/header.php'; ?>
<?php require APPROOT . './views/inc/navbar.php'; ?>

<?php flash('post_message'); ?>

    <div class="m-1">
        <div class="">
            <div class="">
                <h1>Posts</h1>
            </div>
            <div class="">
                <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary">
                    <i class=""></i> Add Post
                </a>
            </div>
        </div>
        <?php foreach ($data['posts'] as $post) : ?>
            <div class="card">
                <h2><?php echo $post->title; ?></h2>
                <h4><?php echo $post->body; ?></h4>
                <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>" class="btn btn-dark ">Edit /
                    Delete</a>

            </div>
        <?php endforeach; ?>

    </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>