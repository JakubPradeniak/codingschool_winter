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
            <h1 class="homepage-heading">Úkoly</h1>
            <section class="app-intro">
                <p>
                    Aplikace úkoly slouží k vytváření a správě jednoduchých seznamů úkolů. Registrace i použití zdarma.
                </p>
                <img src="<?= __APP_RESOURCES__?>Images/todos.png" alt="Ukázka aplikace" />
            </section>
            <section>
                <h2 class="homepage-how-to">Jak na to</h2>
                <ol class="how-to-steps">
                    <li>Vytvořte si bezplatný účet</li>
                    <li>Přidávejte, upravujte a odstraňujte úkoly</li>
                    <li>Sledujte co všechno jste již zvadli dokončit</li>
                </ol>
            </section>
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