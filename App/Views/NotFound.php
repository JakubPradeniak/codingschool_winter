<?php

use App\AppCore\Routing\Url;
use App\Routes\Routes;

include "Components/HtmlHead.php";
?>

    <div class="panel panel--large">
        <nav>
            <a href="<?= Url::create(Routes::Homepage)?>" class="logo">📝</a>
            <div class="nav-links">
                <a href="<?= Url::create(Routes::Login)?>" class="nav-link">Příhlásit se</a>
                <a href="<?= Url::create(Routes::Register)?>" class="nav-link">Vytvořit účet</a>
            </div>
        </nav>
        <main>
            <h1>Stránka nenalezena</h1>
            <p>Stránka, kterou hledáte v aplikaci neexistuje. Máte správný odkaz?</p>
        </main>
        <footer>
            <div class="footer-links">
                <a href="#" class="link">Ochrana osobních údajů</a>
                <a href="#" class="link">Podmínky použití</a>
                <a href="#" class="link">Cookies</a>
            </div>
            <span>
      &copy; <?= date('Y')?> Úkoly s.r.o.
    </span>
        </footer>
    </div>

<?php
include "Components/HtmlFoot.php";