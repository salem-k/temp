<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commandegros $commandegros
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Commandegros'), ['action' => 'edit', $commandegros->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Commandegros'), ['action' => 'delete', $commandegros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commandegros->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Commandegross'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Commandegros'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commandegross view content">
            <h3><?= h($commandegros->repsommsects_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Repsommsects Id') ?></th>
                    <td><?= h($commandegros->repsommsects_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Repgro') ?></th>
                    <td><?= $commandegros->has('repgro') ? $this->Html->link($commandegros->repgro->Responsable, ['controller' => 'Repgros', 'action' => 'view', $commandegros->repgro->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Repsectoriel') ?></th>
                    <td><?= $commandegros->has('repsectoriel') ? $this->Html->link($commandegros->repsectoriel->Responsable, ['controller' => 'Repsectoriels', 'action' => 'view', $commandegros->repsectoriel->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($commandegros->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Debut') ?></th>
                    <td><?= h($commandegros->Date_debut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Din') ?></th>
                    <td><?= h($commandegros->Date_din) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
