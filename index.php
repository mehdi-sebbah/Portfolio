<?php include_once 'asset/header.php' ?>
<div class="loader">
    <div class="loading_dots">
        <div class="bounce"></div>
        <div class="bounce"></div>
        <div class="bounce"></div>
    </div>
</div>
<div class="header">
    <nav class="nav_header">
        <a href="">Acceuil</a>
        <a href="">Présentation</a>
        <a href="">Compétences</a>
        <a href="">Projets</a>
        <a href="">Contact</a>
    </nav>
    <p class="p_border_nav">MENU</p>
    <div class="menu_burger">
        <span class="trait"></span>
    </div>
</div>
<div class="border_right">
</div>
<section id="home" class="home">
    <p>Mehdi Sebbah,</p>
    <div class="intro_and_button_home">
        <div class="intro">
            <p class="intro_dev">DÉVELOPPEUR <span class="span_web">WEB</span></p>
        </div>
        <div class="buttons_home">
            <a href="index.php" class="button">CONTACT</a>
            <a href="#portfolio" class="button">PROJETS</a>
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
                <div class="skill">
                    <img src="asset/img/html_icon.png" alt="icon_html">
                    <li>HTML</li>
                </div>
                <div class="skill">
                    <img src="asset/img/css_icon.png" alt="icon_css">
                    <li>CSS</li>
                </div>
                <div class="skill">
                    <img src="asset/img/sass_icon.png" alt="icon_sass">
                    <li>SASS</li>
                </div>
                <div class="skill">
                    <img src="asset/img/bootstrap_icon.png" alt="icon_bootstrap">
                    <li>BOOTSTRAP</li>
                </div>
                <div class="skill">
                    <img src="asset/img/js_icon.png" alt="javascript_icon">
                    <li>JAVASCRIPT</li>
                </div>
                <div class="skill">
                    <img src="asset/img/vue_js_icon.png" alt="vue_js_icon">
                    <li>VUEJS</li>
                </div>
            </ul>
        </div>
        <div class="skills_list">
            <ul>
                <div class="skill">
                    <img src="asset/img/php_icon.png" alt="php_icon">
                    <li>PHP</li>
                </div>
                <div class="skill">
                    <img src="asset/img/symphony_icon.png" alt="symphony_icon">
                    <li>SYMPHONY</li>
                </div>

                <div class="skill">
                    <img src="asset/img/mysql_icon.png" alt="mysql_icon">
                    <li>MYSQL</li>
                </div>
                <div class="skill">
                    <img src="asset/img/wordpress_icon.png" alt="wordpress_icon">
                    <li>WORDPRESS</li>
                </div>
            </ul>
        </div>
        <div class="skills_list">
            <ul>
                <div class="skill">
                    <img src="asset/img/git_icon.png" alt="git_icon">
                    <li>GIT</li>
                </div>
                <div class="skill">
                    <img src="asset/img/github_icon.png" alt="git_icon">
                    <li>GITHUB</li>
                </div>
                <div class="skill">
                    <img src="asset/img/xd_icon.png" alt="xd_icon">
                    <li>ADOBE Xd</li>
                </div>
                <div class="skill">
                    <img src="asset/img/ps_icon.png" alt="ps_icon">
                    <li>PHOTOSHOP</li>
                </div>

            </ul>
        </div>
    </div>
    </div>
</section>

<section id="portfolio" class="portfolio">
    <?php require_once 'portefolio.php' ?>
</section>
<section class="img_back"></section>
<section id="contact">
    <?php include_once 'contact.php' ?>
    <div class="contact">
        <h2 class="intro_contact">CONTACT</h2>
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
</section>

<?php include_once 'asset/footer.php' ?>