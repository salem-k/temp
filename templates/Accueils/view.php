<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Accueil $accueil
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Accueil'), ['action' => 'edit', $accueil->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Accueil'), ['action' => 'delete', $accueil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accueil->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Accueils'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Accueil'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="accueils view content">
            <h3><?= h($accueil->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($accueil->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Logo') ?></th>
                    <td><?= h($accueil->logo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($accueil->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
