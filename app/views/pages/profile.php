<?php require APPROOT . './views/inc/header.php'; ?>
<?php require APPROOT . './views/inc/navbar.php'; ?>

    <section class="docs-head bg-primary py-3">
        <div class="container">
            <div>
                <h1 class="xl">Cosmin Gherghina CV</h1>
            </div>
        </div>
    </section>

    <!-- Docs main -->
    <section class="docs-main my-4">
        <div class="container grid">
            <div class="card bg-light p-3" style="margin:inherit; padding: 10px">
                <h3 class="my-2">Contact</h3>
                <nav>
                    <ul>
                        <li><a class="text-primary" href="tel:0752036698">0752.036.698 </a></li>
                        <li><a class="text-primary"
                               href="mailto:gherghina.cosmin@yahoo.com">gherghina.cosmin@yahoo.com </a></li>
                        <li><a class="text-primary" href="https://goo.gl/maps/xc739iv5tvoSu7zv5">Bucharest, Romania </a>
                        </li>
                    </ul>
                </nav>

                <h3 class="my-2">Education</h3>
                <nav>
                    <ul>
                        <li><a href="#1">Link-Academy</a></li>
                        <li><a href="#2">University Politehnica of Bucharest</a></li>
                    </ul>
                </nav>
                <h3 class="my-2">Work Experience</h3>
                <nav>
                    <ul>
                        <li><a href="#3">eMAG It Research</a></li>
                        <li><a href="#4">Bogner Edelstahl</a></li>
                        <li><a href="#5">KonigFrankstahl</a></li>
                    </ul>
                </nav>
                <h3 class="my-2">Courses</h3>
                <nav>
                    <ul>
                        <li><a href="#6">Udemy</a></li>
                        <li><a href="#7">KnowBe4</a></li>
                    </ul>
                </nav>
            </div>
            <div class="container">
                <div class="card">
                    <h3>Profile</h3>
                    <p>An enthusiastic person passionate about technology looking for new opportunities in IT Finished
                        studying PHP Web Development at Link Academy, I am a fast learning person with a high degree of
                        autonomy and prepared for new challenges. Everything that brings me more knowledge is
                        welcome.</p>
                </div>
                <div class="card">
                    <h3>Education</h3>
                    <h2 id="1">Link-Academy</h2>
                    <h4>Oct 2020 to Ongoing</h4>
                    <ol class="list">
                        <li>Core PHP Programming</li>
                        <li>Introduction to HTML & CSS</li>
                        <li>Core JavaScript programming</li>
                        <li>MySQL Programming and Administration</li>
                        <li>Core JavaScript programming/PHP & WD</li>
                        <li>Apache Web Server Administration</li>
                        <li>XML/PHP programming</li>
                        <li>Software Engineering</li>
                    </ol>
                    <h2 id="2">University Politehnica Of Bucharest</h2>
                    <h4>Oct 2013 To Jul 2015</h4>
                    <ol class="list">
                        <li>Master - Faculty of Material Science and Engineering Obtaining, processing and
                            characterizing metallic nanomaterials
                        </li>
                    </ol>
                    <h4>Oct 2009 To Jul 2013</h4>
                    <ol class="list">
                        <li>Bachelor - Faculty of Material Science and Engineering Department Medical Engineering</li>
                    </ol>
                </div>

                <div class="card">
                    <h3 id="5">Work Experience</h3>
                    <?php foreach ($data['posts'] as $post) : ?>
                    <h2><?php echo $post->title; ?></h2>
                    <h4><?php echo $post->body; ?></h4>
                    <?php endforeach; ?>
                </div>



                <div class="card">
                    <h3 id="6">Courses</h3>
                    <h2>Udemy</h2>
                    <ol class="list">
                        <li>PHP Unit Testing with PHPUnit</li>
                        <li>Object Oriented PHP & MVC</li>
                    </ol>
                    <h2 id="7">KnowBe4</h2>
                    <ol class="list">
                        <li>Avoiding Security Risks for Developers</li>
                        <li>2020 KnowBe4 Security Awareness Training</li>
                        <li>Security Moments Series: Privileged User Access Management</li>

                    </ol>
                </div>
                <a href="#" class="btn btn-primary">Download Full CV</a>
            </div>
        </div>
    </section>

<?php
require APPROOT . '/views/inc/footer.php';
?>