<div id='intro' class="full-height">
    <header class="header-intro">
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="intro-lang" method="post" id="intro-menu-lang" class="btn-group option-visible" role="group" aria-label="<?= $lang['label-language'] ?>">
            <input type="hidden" name='lang-hidden' id='intro-lang-hidden' value="<?= $_SESSION['_LANG']; ?>">
            <button type="button" <?= $_SESSION['_LANG'] === 'en' ? 'selected' : '' ?> class="btn btn-default" onclick="langSubmit('en');">En</button>
            <button type="button" <?= $_SESSION['_LANG'] === 'fr' ? 'selected' : '' ?> class="btn btn-default" onclick="langSubmit('fr');">Fr</button>
        </form>
    </header>
    <div class='half-height top border-bottom display-table'>
        <h1 id='intro-over' class='display-bottom-cell'><sub>p</sub>H</h1>
    </div>
    <div class='half-height'>
        <ul id='intro-below'>
            <li><h4><?= $lang['subtitle-intro-left'] ?></h4></li>
            <li class="intro-trigger"><h4><?= $lang['subtitle-intro-middle'] ?></h4></li>
            <li><h4><?= $lang['subtitle-intro-right'] ?></h4></li>
            <!--<li class="intro-trigger downarrow">&darr;</li>-->
        </ul>
    </div>
</div>