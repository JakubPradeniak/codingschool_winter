<?php

use App\AppCore\Routing\Url;
use App\Routes\Routes;

include "Components/HtmlHead.php";
?>

    <div class="panel panel--large">
        <main>
            <section class="administration-heading">
                <a href="<?= Url::create(Routes::Todos)?>">
                    <svg width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.939339 10.9393C0.353552 11.5251 0.353552 12.4749 0.939339 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97918 12.6066 1.3934C12.0208 0.80761 11.0711 0.80761 10.4853 1.3934L0.939339 10.9393ZM32 10.5L2 10.5L2 13.5L32 13.5L32 10.5Z" fill="black"/>
                    </svg>
                </a>
                <h1>Úprava úkolu</h1>
                <a href="<?= Url::create(Routes::Logout)?>" class="logout">Odhlásit se</a>
            </section>
            <section>
                <?php
                  if(isset($this->data['todo']) && $this->data['todo'] !== false) {
                ?>
                <p class="todo-date-created">
                    <?= $this->data['todo']->date_created?> - <i><?= $this->data['todo']->time_created?></i>
                </p>
                <?php
                if (isset($this->data['errorMessage'])) {
                    echo '<div class="message message--success">Obsah úkolu nesmí být prázdný.</div>';
                }

                if (isset($this->data['successMessage'])) {
                    echo '<div class="message message--success">';
                    switch ($this->data['successMessage']) {
                        case 'done':
                            echo 'Úkol byl nastaven jako hotový.';
                            break;
                        default:
                            echo 'Úkol byl upraven.';
                    }
                    echo '</div>';
                }
                ?>
                <form action="<?= Url::create(Routes::EditTodo, ['id' => $this->data['todo']->id])?>" method="post" class="panel-form panel-form--edit-todo">
                    <input type="hidden" name="_method" id="method" value="PATCH">
                    <label for="todo">Text úkolu</label>
                    <textarea id="todo" name="content" rows="3" class="input input--textarea" required><?= $this->data['todo']->content?></textarea>
                    <div class="edit-todo-buttons">
                        <input type="submit" name="delete" value="Odstranit" class="button button--danger delete" />
                        <?php
                        if(!$this->data['todo']->done) {
                          echo '<input type="submit" name="done" value="Hotovo" class="button button--secondary edit" />';
                        }
                        ?>
                        <input type="submit" name="edit" value="Uložit změny" class="button edit" />
                    </div>
                </form>
                <?php } else {
                    echo '<p>Úkol se nepodařilo načíst.</p>';
                }?>
            </section>
        </main>
        <?php
        include "Components/Footer.php";
        ?>
    </div>
<?php
include "Components/HtmlFoot.php";
