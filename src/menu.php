<img src="../assets/images/hamburger-menu.png" id="humburgerMenu" alt="">
    <div class="horizontalMenu">
        <nav>
            <ul>
                
                <li><a href="../index.php">Accueil</a></li>
            <?php if(isset($_SESSION["userRule"]) && $_SESSION["userRule"] == 2){ ?>
                <li><a href="./index.php?action=addSongForm">Ajouter chanson</a></li>
            <?php } ?>
            <?php if(isset($_SESSION["username"])){ ?>
                <li><a href="./index.php?action=addPlaylistForm">Ajouter playlist</a></li>
            <?php } ?>
                <li><a href="#">Playlists</a></li>
            <?php if(isset($_SESSION["username"])){ ?>
                <li><a href="#">Paramétres</a></li>
            <?php } ?>
            <?php if(!isset($_SESSION["userId"])){ ?>
                <li><a href="./index.php?action=signUpForm">S'inscrire</a></li>
                <li><a href="./index.php?action=signInForm">Se connecter</a></li>
            <?php }else{ ?>
                <li><a href="./index.php?action=logOut">Se déconnecter</a></li>
            <?php } ?>
            </ul>
        </nav>
    </div>

    <div class="verticalMenu">
        <nav>
            <ul>
                <li id="fermerVerticalMenu" class="fermerVerticalMenu">x</li>
                <li><a href="./index.php">Accueil</a></li>
            <?php if(isset($_SESSION["userRule"]) && $_SESSION["userRule"] == 2){ ?>
                <li><a href="./index.php?action=addSongForm">Ajouter chanson</a></li>
            <?php } ?>
            <?php if(isset($_SESSION["username"])){ ?>
                <li><a href="#">Ajouter playlist</a></li>
            <?php } ?>
                <li><a href="#">Playlists</a></li>
            <?php if(isset($_SESSION["username"])){ ?>
                <li><a href="#">Paramétres</a></li>
            <?php } ?>
            <?php if(!isset($_SESSION["userId"])){ ?>
                <li><a href="./index.php?action=signUpForm">S'inscrire</a></li>
                <li><a href="./index.php?action=signInForm">Se connecter</a></li>
            <?php }else{ ?>
                <li><a href="./index.php?action=logOut">Se déconnecter</a></li>
            <?php } ?>
            </ul>

        </nav>
    </div>