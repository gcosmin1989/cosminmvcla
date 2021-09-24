<?php require APPROOT . './views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
<br>
<div class="m-1">
    <div class="card">
        <h1><?php echo $data['post']->title; ?></h1>
        <p><?php echo $data['post']->body; ?></p>

        <?php if ($data['post']->user_id == $_SESSION['user_id']) : ?>
        <hr>
        <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>"
           class="btn m-1" style=" float: left">Edit</a>
        <form class="m-1" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>"
              method="post">
            <input type="submit" value="Delete" class=" btn" style="background-color: darkred;padding: 15px 20px;">
        </form>
    </div>

    <?php endif; ?>

