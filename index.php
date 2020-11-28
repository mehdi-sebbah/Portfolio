<?php include_once 'asset/header.php' ?>
<div class="loader">
    <div class="loading_dots">
        <div class="bounce"></div>
        <div class="bounce"></div>
        <div class="bounce"></div>
    </div>
</div>
<section class="home">
    <p>Mehdi Sebbah,</p>
    <div class="intro_and_button_home">
        <div class="intro">
            <p class="intro_dev">DEVELOPPEUR WEB</p>
        </div>
        <div class="buttons_home">
            <a href="index.php" class="button">CONTACT</a>
            <a href="index.php" class="button">PROJETS</a>
        </div>
    </div>

</section>
<div class="content_void"></div>
<section class="about_me">
    <?php require_once 'about_me.php' ?>
</section>
<section class="section_skills">
    <?php require_once 'skills.php' ?>
</section>

<section class="portefolio">
    <?php require_once 'portefolio.php' ?>
</section>

<section>
    <?php include_once 'contact.php' ?>
    <div class="contact">
        <h2 class="intro_contact">ME CONTACTER</h2>
        <form method="POST" action="contact.php" class="contact_form">
            <div class="info_sender">
                <input type="text" placeholder="NOM">
                <input type="Email" placeholder="EMAIL">
            </div>
            <input type="text" placeholder="SUJET">
            <textarea name="" id="" placeholder="VOTRE MESSAGE" rows="4"></textarea>
            <div class="coordonne">
                <div>
                    <p class="phone">+33 6 28 45 88 98</p>
                    <p class="email">sebbah.m.dev@gmail.com</p>
                </div>
                <button class="button" type="submit">ENVOYER</button>
            </div>
        </form>
    </div>
</section id="contact">

<?php include_once 'asset/footer.php' ?>