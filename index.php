<?php include_once 'asset/header.php' ?>
<div class="loader">
    <div class="loading_dots">
        <div class="bounce"></div>
        <div class="bounce"></div>
        <div class="bounce"></div>
    </div>
</div>
<div class="header_mobile">
    <nav class="nav_header_mobile">
        <a href="#">Acceuil</a>
        <a href="#about_me">Présentation</a>
        <a href="#skills">Compétences</a>
        <a href="#portfolio">Projets</a>
        <a href="#contact">Contact</a>
    </nav>
    <div class="menu_burger_mobile">
        <span class="trait_mobile"></span>
    </div>
    <p class="name_header">mehdi / <span>SEBBAH</span></p>
</div>
<div class="header">
    <nav class="nav_header">
        <a href="#">Acceuil</a>
        <a href="#about_me">Présentation</a>
        <a href="#skills">Compétences</a>
        <a href="#portfolio">Projets</a>
        <a href="#contact">Contact</a>
    </nav>
    <p class="p_border_nav">MENU</p>
    <div class="menu_burger">
        <span class="trait"></span>
    </div>
</div>
<div class="border_right">
    <div class="social_footer">
        <a href="https://twitter.com/sebbah" target="blank"><i class="fab fa-twitter"></i></a>
        <a href="https://github.com/mehdi-sebbah" target="blank"><i class="fab fa-github"></i></a>
        <a href="https://www.linkedin.com/in/mehdi-sebbah-2761101b8/" target="blank"><i class="fab fa-linkedin-in"></i></a>
    </div>
</div>
<div class="border_top">
    <p>mehdi / <span>SEBBAH</span></p>
</div>
<div class="border_bottom"></div>
<section id="home" class="home">
    <div class="intro_and_button_home">
        <div class="content_title">
            <h1 class="title_home">MEHDI </h1>
            <span> SEBBAH</span>
        </div>
        <div class="buttons_home">
            <a href="#contact" class="button">CONTACT</a>
            <a href="#portfolio" class="button">PROJETS</a>
        </div>
        <a href="#about_me">
            <div class="scroll_down"></div>
        </a>
    </div>

</section>
<section id="about_me" class="about_me">
    <?php require_once 'about_me.php' ?>
</section>
<section id="skills" class="section_skills">
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
            <div class="form">
                <div class="info_sender">
                    <div class="input_name">
                        <input type="text" name="name" required>
                        <label for="name">NOM</label>
                    </div>
                    <div class="input_email">
                        <input type="Email" name="email" required>
                        <label for="email" >EMAIL</label>
                    </div>
                </div>
                <div class="input_sujet">
                    <input type="text" name="sujet" required>
                    <label for="sujet">SUJET</label>
                </div>
                <div class="textarea_message">
                    <textarea name="message" id="" rows="8" required></textarea>
                    <label for="message">message</label>
                </div>
                <div class="coordonne">
                    <div>
                        <p class="phone">+33 6 28 45 88 98</p>
                        <p class="email">sebbah.m.dev@gmail.com</p>
                        <div class="logo_contact">
                            <a href="https://twitter.com/sebbah" target="blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://github.com/mehdi-sebbah" target="blank"><i class="fab fa-github"></i></a>
                            <a href="https://www.linkedin.com/in/mehdi-sebbah-2761101b8/" target="blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <button class="button" type="submit">ENVOYER</button>
                </div>
            </div>
        </form>
    </div>
</section>
<div class="arrow_up">
    <img src="asset/img/arrow_up.png" alt="">
</div>

<?php include_once 'asset/footer.php' ?>