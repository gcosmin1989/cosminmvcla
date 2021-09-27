<div class="navbar">
    <div class="container flex">
        <h2 class="logo"><a href="<?php echo URLROOT; ?>/pages/index">My first Project</a></h2>
        <?php if (isset($_SESSION['user_id'])) : ?>
            <h1>Welcome <b><?php echo $_SESSION['user_name']; ?></b></h1>

        <?php endif; ?>
        <nav>
            <ul>
                <li>
                    <a href="<?php echo URLROOT; ?>/pages/index"> Home</a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/pages/about">About Me</a>
                </li>

                <li>
                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <a href="<?php echo URLROOT; ?>/pages/profile">My Profile</a>
                    <?php if($_SESSION['user_id']==1):?>
                        <a href="<?php echo URLROOT; ?>/posts/index">Posts</a>
                    <?php endif;?>
                        <a href="<?php echo URLROOT; ?>/users/logout">Log out</a>

                    <?php else : ?>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/users/login">Login</a>
                </li>

                <?php endif; ?>
                <li>
                    <a href="<?php echo URLROOT; ?>/contacts/cont">Contact</a>
                </li>

            </ul>
        </nav>
    </div>
</div>