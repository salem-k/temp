<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bontransfert $bontransfert
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Bontransfert'), ['action' => 'edit', $bontransfert->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bontransfert'), ['action' => 'delete', $bontransfert->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bontransfert->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bontransferts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bontransfert'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bontransferts view content">
            <h3><?= h($bontransfert->depot_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $bontransfert->has('depot') ? $this->Html->link($bontransfert->depot->nom, ['controller' => 'Depots', 'action' => 'view', $bontransfert->depot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Depot To Id') ?></th>
                    <td><?= h($bontransfert->depot_to_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($bontransfert->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference') ?></th>
                    <td><?= $this->Number->format($bontransfert->reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($bontransfert->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
