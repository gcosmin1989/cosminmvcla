<?php require APPROOT . '/views/inc/header.php'; ?>
    <a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
    <div class=" showcase-form card post" style="width: auto">
        <h2>Add Post</h2>
        <p>Create a post with this form</p>
        <form action="<?php echo URLROOT; ?>/posts/add" method="post">
            <div class="form-control ">
                <label for="title">Title: <sup>*</sup></label>
                <input type="text" name="title"
                       class="form-control form-control-lg "
                       value="<?php echo $data['title']; ?>">
                <span class="invalid-feedback"><?php echo !empty($data['title_err']) ? $data['title_err'] : ''; ?></span>
            </div>
            <div class="form-control">
                <label for="body">Body: <sup>*</sup></label>
                <input type="text" name='body'
                       class="form-control "
                       value="<?php echo $data['body']; ?>">
                <span class="invalid-feedback"><?php echo !empty($data['body_err']) ? $data['body_err'] : ''; ?></span>
            </div>
            <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>