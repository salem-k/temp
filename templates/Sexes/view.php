<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sex $sex
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sex'), ['action' => 'edit', $sex->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sex'), ['action' => 'delete', $sex->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sex->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sexes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sex'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sexes view content">
            <h3><?= h($sex->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($sex->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sex->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
