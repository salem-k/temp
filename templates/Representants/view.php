<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Representant $representant
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Representant'), ['action' => 'edit', $representant->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Representant'), ['action' => 'delete', $representant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $representant->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Representants'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Representant'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="representants view content">
            <h3><?= h($representant->Name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($representant->Name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Personnel') ?></th>
                    <td><?= $representant->has('personnel') ? $this->Html->link($representant->personnel->id, ['controller' => 'Personnels', 'action' => 'view', $representant->personnel->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Fonction') ?></th>
                    <td><?= $representant->has('fonction') ? $this->Html->link($representant->fonction->name, ['controller' => 'Fonctions', 'action' => 'view', $representant->fonction->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($representant->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
