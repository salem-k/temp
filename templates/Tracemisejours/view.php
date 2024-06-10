<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tracemisejour $tracemisejour
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tracemisejour'), ['action' => 'edit', $tracemisejour->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tracemisejour'), ['action' => 'delete', $tracemisejour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tracemisejour->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tracemisejours'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tracemisejour'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tracemisejours view content">
            <h3><?= h($tracemisejour->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Model') ?></th>
                    <td><?= h($tracemisejour->model) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Piece') ?></th>
                    <td><?= h($tracemisejour->id_piece) ?></td>
                </tr>
                <tr>
                    <th><?= __('Operation') ?></th>
                    <td><?= h($tracemisejour->operation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($tracemisejour->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Utilisateur') ?></th>
                    <td><?= $tracemisejour->has('utilisateur') ? $this->Html->link($tracemisejour->utilisateur->name, ['controller' => 'Utilisateurs', 'action' => 'view', $tracemisejour->utilisateur->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Heure') ?></th>
                    <td><?= h($tracemisejour->heure) ?></td>
                </tr>
                <tr>
                    <th><?= __('Poste') ?></th>
                    <td><?= h($tracemisejour->poste) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $tracemisejour->has('user') ? $this->Html->link($tracemisejour->user->name, ['controller' => 'Users', 'action' => 'view', $tracemisejour->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tracemisejour->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($tracemisejour->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
