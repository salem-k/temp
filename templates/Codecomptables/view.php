<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Codecomptable $codecomptable
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Codecomptable'), ['action' => 'edit', $codecomptable->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Codecomptable'), ['action' => 'delete', $codecomptable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $codecomptable->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Codecomptables'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Codecomptable'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="codecomptables view content">
            <h3><?= h($codecomptable->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($codecomptable->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($codecomptable->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typecode') ?></th>
                    <td><?= $codecomptable->typecode === null ? '' : $this->Number->format($codecomptable->typecode) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
