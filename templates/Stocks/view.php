<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stock $stock
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Stock'), ['action' => 'edit', $stock->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Stock'), ['action' => 'delete', $stock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stock->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Stocks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Stock'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stocks view content">
            <h3><?= h($stock->depot_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $stock->has('depot') ? $this->Html->link($stock->depot->nom, ['controller' => 'Depots', 'action' => 'view', $stock->depot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pfinal') ?></th>
                    <td><?= $stock->has('pfinal') ? $this->Html->link($stock->pfinal->Description, ['controller' => 'Pfinals', 'action' => 'view', $stock->pfinal->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($stock->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
