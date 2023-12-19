<?php

use App\AppCore\Routing\Url;
use App\Routes\Routes;

include "Components/HtmlHead.php";
?>

<div class="panel">
    <header class="panel-header">
        <h1>Obnovení hesla</h1>
    </header>
    <main>
        <form action="<?= Url::create(Routes::PasswordRecovery, $this->data['token'] ?? '')?>" method="post" class="panel-form">
            <label for="password" class="input-label">Heslo</label>
            <input type="password" name="password" id="password" class="input" required>
            <label for="confirm-password" class="input-label">Heslo znovu</label>
            <input type="password" name="confirm-password" id="confirm-password" class="input" required>
            <input type="submit" value="Nastavit nové heslo" class="button button--right">
        </form>
        <p class="panel-link">
            <a href="<?= Url::create(Routes::Homepage)?>" class="link">Přejít na hlavní stránku aplikace</a>
        </p>
    </main>
</div>

<?php
include "Components/HtmlFoot.php";