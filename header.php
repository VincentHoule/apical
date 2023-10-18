<header>
    <div id="header_01">
        <div id="image_logo">
            <a href="<?php echo esc_url(home_url())?>">
                <img id="logo_apical" src="wp-content/themes/apical/assets/LogoApical-blanc.png"></a>
        </div>
        <div id="icone_header">
            <a href="<?php echo esc_url(home_url())?>">
                <img alt="Accueil" class="icone" id="logo_accueil" src="wp-content/themes/apical/assets/Accueil-MenuSecondaire.png"></a>
            <a onclick="recherche()">
                <img alt="Recherche"  class="icone" id="logo_recherche" src="wp-content/themes/apical/assets/Rechercher-MenuSecondaire.png"></a>
            <a onclick="formulaire()">
                <img alt="" class="icone" id="logo_login" src="wp-content/themes/apical/assets/Login-MenuSecondaire.png"></a>
        </div>
        <div id="block_recherche" class="none">
            <input id="recherche_bar" placeholder="Rechercher">
            <img id="logo_recherche_02" src="wp-content/themes/apical/assets/Rechercher-MenuSecondaire.png">
            <button onclick="recherche()" id="btn_rechercher">X</button>
        </div>

        <div id="block_login" class="none">
            <form method="post" id="formulaire">

                    <?php
                    if(isset($_POST['submit']))
                    {

                        $creds = array();
                        $creds['user_login'] = $_POST['log'];
                        $creds['user_password'] = $_POST['pwd'];
                        $creds['remember'] = true;

                        $user = wp_signon( $creds, false );

                        if ( is_wp_error($user) ) {
                            echo "<span id='message_error'>Code d'usager ou mot de passe invalide.</span>";
                        }
                        else{
                            wp_redirect("http://localhost:8888/wp-admin/");
                            exit();
                        }
                    }

                    ?>
                <div class="section_login">
                    <label class="login" for="login">
                        * Usager:
                    </label>
                    <div class="section_input">
                        <input  name="log" autofocus type="text" class="input_form">
                    </div>
                </div>
                <div class="section_login">
                    <label class="login" for="motdepasse">
                        * Mot de passe:
                    </label>
                    <div class="section_input">
                        <input name="pwd" autofocus type="password" class="input_form">
                    </div>
                </div>
                <div class="section_login">
                    <div class="combler"></div>
                    <div class="section_case">
                        <div id="form_check">
                            <label for="resterconnecter">
                                <input name="rememberme" type="checkbox" id="rester_connecter">
                                Rester connecté
                            </label>
                        </div>
                    </div>
                </div>
                <div class="section_login">
                    <div class="combler"></div>
                    <div class="section_case">
                        <input type="submit" name="submit" class="btn" id="soumettre_login" value="Soumettre">
                    </div>
                </div>
            </form>

            <button onclick="formulaire()" id="btn_login">X</button>
        </div>
    </div>
    <div id="menu_page">
        <?php wp_nav_menu();?>
    </div>
<?php _header();?>
</header>