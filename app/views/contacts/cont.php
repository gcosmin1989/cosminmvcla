<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT .'/views/inc/navbar.php';?>


    <div class='loginRegister'>

        <form action="<?php echo URLROOT; ?>/contacts/addComment" method="post" class="loginForm">
            <h2 class="title">Send a message</h2>
            <div>
                <label for="name">Name: <sup>*</sup></label>
                <input type="text" name="name" placeholder='Name' class="inputForm " value="">

                <span class="invalid-feedback">

                    <?php echo !empty($data['name_err']) ? $data['name_err'] : ''; ?>
                </span>
                <label for="email">Email: <sup>*</sup></label>
                <input type="email" name="email" placeholder='Email' class="inputForm " value="">
                <span class="invalid-feedback">
                    <?php echo !empty($data['email_err']) ? 'is-invalid' : ''; ?>
                </span>
                <label for="text">Message: <sup>*</sup></label>
                <input type="text" name="message" placeholder='Message' class="inputForm " value="">
                <span class="invalid-feedback">
                   <?php echo !empty($data['message_err']) ? 'is-invalid' : ''; ?>
                </span>
                <input type="submit" class="buttonLoginRegister" value="Send Message">
            </div>
        </form>

    </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>