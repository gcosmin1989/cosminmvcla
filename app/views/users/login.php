<?php require APPROOT . './views/inc/header.php'; ?>
<?php require APPROOT . './views/inc/navbar.php'; ?>


<div class='loginRegister '>

    <form action="<?php echo URLROOT; ?>/users/login" method="post" class="loginForm">
        <h2 class="title">Login</h2>
        <label for="email">Email: <sup>*</sup></label>
        <input type="email" name="email"
               class="inputForm <?php echo (!empty($data['emailError'])) ? 'is-invalid' : ''; ?>"
               value="<?php echo $data['email']; ?>">
        <span class="invalid-feedback"><?php echo $data['emailError']; ?></span>


        <label for="password">Password: <sup>*</sup></label>
        <input type="password" name="password"
               class="inputForm "
            <?php echo (!empty($data['passwordError'])) ? 'is-invalid' : ''; ?>
               value="<?php echo $data['password']; ?>">
        <span class="invalid-feedback"><?php echo $data['passwordError']; ?></span>

        <div class="row">
            <div class="col">
                <input type="submit" value="Login" class="buttonLoginRegister">
                <div>
                    <p>No account?<a href="<?php echo URLROOT; ?>/users/register" style="font-weight: bolder">
                            Register</a></p>
                </div>
            </div>
    </form>
</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
