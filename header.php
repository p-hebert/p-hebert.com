<header class="header-main">
    <ul>    
        <li class="landscape-only">
            <a href="" title="<?= $lang['title-contact']?>">
                <span class="fontastic-contact-email"></span>
            </a>
        </li>
        <li class="landscape-only">
            <a href="https://github.com/p-hebert" title="<?= $lang['title-github']?>">
                <span class="fontastic-social-github"></span>
            </a>
        </li>
        <li class="landscape-only">
            <a href="https://linkedin.com/in/profile4phebert" title="<?= $lang['title-linkedin']?>" >
                <span class="fontastic-social-linkedin"></span>
            </a>
        </li>
        <li>
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="main-lang" method="post" id="main-menu-lang" class="option-menu-lang btn-group option-visible" role="group" aria-label="<?= $lang['label-language'] ?>">
                <input type="hidden" name='lang-hidden' id='main-lang-hidden' value="<?= $_SESSION['_LANG']; ?>">
                <button type="button" <?= $_SESSION['_LANG'] === 'en' ? 'selected' : '' ?> class="btn btn-default" onclick="langSubmit('en');">En</button>
                <button type="button" <?= $_SESSION['_LANG'] === 'fr' ? 'selected' : '' ?> class="btn btn-default" onclick="langSubmit('fr');">Fr</button>
            </form>
        </li>
    </ul>
    
</header>

