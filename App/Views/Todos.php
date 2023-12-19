<?php

use App\AppCore\Routing\Url;
use App\Routes\Routes;

include "Components/HtmlHead.php";
?>

    <div class="panel panel--large">
        <main>
            <section class="administration-heading">
                <form action="<?= Url::create(Routes::Todos)?>" method="post" class="new-todo-form">
                    <input type="text" name="content" class="input" placeholder="Nový úkol" required>
                    <input type="submit" value="Vytvořit úkol" class="button">
                </form>
                <a href="#" class="logout nav-link">Odhlásit se</a>
            </section>
            <section class="todos">
            <?php
            if (isset($this->data['errorMessage'])) {
                echo '<div class="message message--success">Obsah úkolu nesmí být prázdný.</div>';
            }

            if (isset($this->data['successMessage'])) {
                echo '<div class="message message--success">';
                switch ($this->data['successMessage']) {
                    case 'delete':
                        echo 'Úkol byl odstraněn.';
                        break;
                    default:
                        echo 'Úkol byl vytvořen.';
                }
                echo '</div>';
            }

            if(isset($this->data['todos']) && $this->data['todos'] !== false) {
              $date = '';
              foreach ($this->data['todos'] as $todo) {
                  if ($date !== $todo->date_created) {
                      ?>
                      <div class="todo-list todo-list--expanded">
                      <div class="todo-heading">
                          <button type="button" class="todo-action expand-toggle">
                              👇
                          </button>
                          <h3>
                              <?= $todo->date_created?>
                          </h3>
                      </div>
                      <div class="todo-items">
                      <?php
                      $date = $todo->date_created;
                  }
                  ?>
                      <div class="todo-item">
                        <p><i><?= $todo->time_created?></i> - <?= $todo->content?></p>
                        <a href="<?= Url::create(Routes::EditTodo, ['id' => $todo->id])?>" class="todo-action">
                          ✏️️
                        </a>
                      </div>
                  <?php

                  if ($date !== $todo->date_created) {
                      echo '</div>'; // todo-items
                      echo '</div>'; // todo-list
                  }
                }
            } else {
                echo '<p>Úkoly se nepodařilo načíst.</p>';
            }?>
            </section>
<!--            <section class="pagination">-->
<!--                <a href="#" class="pagination__link pagination__link--disabled">← Novější úkoly</a>-->
<!--                <a href="#" class="pagination__link">Starší úkoly →</a>-->
<!--            </section>-->
        </main>
        <?php
        include "Components/Footer.php";
        ?>
    </div>

<?php
include "Components/HtmlFoot.php";
