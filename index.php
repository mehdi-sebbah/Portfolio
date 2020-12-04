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
            <p class="intro_dev">DEVELOPPEUR <span class="span_web">WEB</span></p>
        </div>
        <div class="buttons_home">
            <a href="index.php" class="button">CONTACT</a>
            <a href="index.php" class="button">PROJETS</a>
        </div>
        <a href="#about_me">
            <div class="scroll_down"></div>
        </a>
    </div>

</section>
<div class="content_void"></div>
<section id="about_me" class="about_me">
    <?php require_once 'about_me.php' ?>
</section>
<section class="section_skills">
    <h2>COMPÉTENCES</h2>
    <p>(Front/Back/Outils)</p>
    <div class="skills">
        <div class="skills_list">
            <ul>
                <li><img src="asset/img/html_icon.png" alt="icon_html"></li>
                <li><img src="asset/img/css_icon.png" alt="icon_css"></li>
                <li><img src="asset/img/sass_icon.png" alt="icon_sass"></li>
                <li><img src="asset/img/bootstrap_icon.png" alt="icon_bootstrap"></li>
                <li style="--i:5;"><img src="asset/img/js_icon.png" alt="javascript_icon"></li>
                <li style="--i:6;"><img src="asset/img/vue_js_icon.png" alt="vue_js_icon"></li>
            </ul>
        </div>
        <div class="skills_list">
            <ul>
                <li><img src="asset/img/php_icon.png" alt="php_icon"></li>
                <li><img src="asset/img/symphony_icon.png" alt="symphony_icon"></li>
                <li><img src="asset/img/mysql_icon.png" alt="mysql_icon"></li>
                <li><img src="asset/img/wordpress_icon.png" alt="wordpress_icon"></li>
            </ul>
        </div>
        <div class="skills_list">
            <ul>
                <li><img src="asset/img/git_icon.png" alt="git_icon"></li>
                <li><img src="asset/img/github_icon.png" alt="github_icon"></li>
                <li><img src="asset/img/xd_icon.png" alt="xd_icon"></li>
                <li><img src="asset/img/ps_icon.png" alt="ps_icon"></li>
            </ul>
        </div>
    </div>
    </div>
</section>

<section class="portefolio">
    <?php require_once 'portefolio.php' ?>
</section>

<section id="contact">
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
    <div class="contact2"></div>
</section>

<?php include_once 'asset/footer.php' ?>