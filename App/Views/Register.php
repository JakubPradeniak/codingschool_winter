<?php

use App\AppCore\Routing\Url;
use App\Routes\Routes;

include "Components/HtmlHead.php";
?>

    <div class="panel">
        <header class="panel-header">
            <a href="<?= Url::create(Routes::Homepage)?>">
                <svg width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.939339 10.9393C0.353552 11.5251 0.353552 12.4749 0.939339 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97918 12.6066 1.3934C12.0208 0.80761 11.0711 0.80761 10.4853 1.3934L0.939339 10.9393ZM32 10.5L2 10.5L2 13.5L32 13.5L32 10.5Z" fill="black"/>
                </svg>
            </a>
            <h1>Vytvořit účet</h1>
        </header>
        <main>
            <?php
            if (isset($this->data['errorMessage'])) {
                echo '<div class="message message--error">';
                switch ($this->data['errorMessage']) {
                    case 'userRegistered':
                        echo 'Registrace se nezdařila - zadaný email je již zaregistrován.';
                        break;
                    case 'password':
                        echo 'Heslo musí obsahovat číslici, velké a malé písmeno a musí mít nejméne 8 znaků.';
                        break;
                    case 'confirmPassword':
                        echo 'Heslo a Heslo znovu se neshodují.';
                        break;
                    default:
                        echo 'Registrace se nepovedla, prosím zkontrolujte vyplněné údaje.';
                }
                echo '</div>';
            }
            ?>
            <form name="register" action="<?= Url::create(Routes::Register)?>" method="post" class="panel-form" onsubmit="return validateForm('register')" novalidate>
              <label for="email" class="input-label">Email</label>
              <input type="email" name="email" id="email" class="input" value="<?= isset($this->data['formData']) ? $this->data['formData']['email'] : '' ?>" required>
              <label for="username" class="input-label">Uživateslké jméno</label>
              <input type="text" name="username" id="username" class="input" value="<?= isset($this->data['formData']) ? $this->data['formData']['username'] : '' ?>" required>

              <label for="password" class="input-label">Heslo</label>
              <input type="password" name="password" id="password" class="input" required>
              <label for="confirm-password" class="input-label">Heslo znovu</label>
              <input type="password" name="confirm-password" id="confirm-password" class="input" data-compare="password" data-message="Heslo a Heslo znovu se neshodují." required>
              <label for="terms" class="checkbox-label">
                  <input type="checkbox" name="terms" id="terms" class="checkbox" required>
                  <span>Souhlasím s <a href="#" class="link">podmínkami použití</a> aplikace</span>
              </label>
              <input type="submit" value="Vytvořit účet" class="button button--right">
            </form>

            <p class="panel-link">
                <a href="<?= Url::create(Routes::Login)?>" class="link">Přihlášení</a>
            </p>
        </main>
    </div>

<?php
include "Components/HtmlFoot.php";
