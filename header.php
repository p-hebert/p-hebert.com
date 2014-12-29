<header>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="lang" method="post" id='option-menu-lang' class="btn-group option-visible" role="group" aria-label="<?= $lang['label-language'] ?>">
            <input type="hidden" name='lang-hidden' id='lang-hidden' value="<?= $_SESSION['_LANG']; ?>">
            <button type="button" <?= $_SESSION['_LANG'] === 'en' ? 'selected' : '' ?> class="btn btn-default" onclick="langSubmit('en');">En</button>
            <button type="button" <?= $_SESSION['_LANG'] === 'fr' ? 'selected' : '' ?> class="btn btn-default" onclick="langSubmit('fr');">Fr</button>
        </form>
        <!--<span id='option-menu-icon' class="glyphicon glyphicon-cog"></span>-->
</header>

