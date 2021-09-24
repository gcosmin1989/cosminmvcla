<?php require APPROOT . './views/inc/header.php'; ?>
<?php require APPROOT . './views/inc/navbar.php'; ?>


    <div class='loginRegister'>

        <form action="<?PHP echo URLROOT; ?>/users/register" method='POST' class="loginForm">
            <h2 class="title">Register</h2>
            <div>
                <input type='text' name='username' placeholder='Username *' class="inputForm">
                <span class="invalid-feedback">
                    <?php echo $data['usernameError']; ?>
                </span>

                <input type='email' name='email' placeholder='Email *' class="inputForm">
                <span class="invalid-feedback">
                    <?php echo $data['emailError']; ?>
                </span>
                <input type='password' name='password' placeholder='Password *' class="inputForm">
                <span class="invalid-feedback">
                   <?php echo $data['passwordError']; ?>
                </span>

                <input type='password' name='confirmPassword' placeholder='Confirm Password *' class="inputForm">
                <span class="invalid-feedback">
                    <?php echo $data['confirmPasswordError']; ?>
                </span>

                <button id='submit' type='submit' value="submit" class='buttonLoginRegister'>Register</button>
                <p class="">Have an account? <a href="<?PHP echo URLROOT; ?>/users/login" style="font-weight: bolder ">Login!</a>
                </p>
            </div>
        </form>
    </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>