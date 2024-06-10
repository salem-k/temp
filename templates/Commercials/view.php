<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commercial $commercial
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Commercial'), ['action' => 'edit', $commercial->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Commercial'), ['action' => 'delete', $commercial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commercial->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Commercials'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Commercial'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commercials view content">
            <h3><?= h($commercial->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($commercial->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Login') ?></th>
                    <td><?= h($commercial->login) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mp') ?></th>
                    <td><?= h($commercial->mp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $commercial->has('category') ? $this->Html->link($commercial->category->Description, ['controller' => 'Categories', 'action' => 'view', $commercial->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($commercial->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Soldedepart') ?></th>
                    <td><?= $commercial->soldedepart === null ? '' : $this->Number->format($commercial->soldedepart) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
