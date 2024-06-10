<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banque $banque
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Banque'), ['action' => 'edit', $banque->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Banque'), ['action' => 'delete', $banque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banque->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Banques'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Banque'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="banques view content">
            <h3><?= h($banque->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($banque->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Devise') ?></th>
                    <td><?= $banque->has('devise') ? $this->Html->link($banque->devise->name, ['controller' => 'Devises', 'action' => 'view', $banque->devise->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('ConditionReglement') ?></th>
                    <td><?= h($banque->conditionReglement) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modetransport') ?></th>
                    <td><?= h($banque->modetransport) ?></td>
                </tr>
                <tr>
                    <th><?= __('DelaiLiv') ?></th>
                    <td><?= h($banque->delaiLiv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codeiban') ?></th>
                    <td><?= h($banque->codeiban) ?></td>
                </tr>
                <tr>
                    <th><?= __('CodeBicswift') ?></th>
                    <td><?= h($banque->codeBicswift) ?></td>
                </tr>
                <tr>
                    <th><?= __('Proprietaire') ?></th>
                    <td><?= h($banque->proprietaire) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($banque->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
