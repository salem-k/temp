<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Commercial> $commercials
 */
?>
<div class="commercials index content">
    <?= $this->Html->link(__('New Commercial'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Commercials') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('login') ?></th>
                    <th><?= $this->Paginator->sort('mp') ?></th>
                    <th><?= $this->Paginator->sort('categorie_id') ?></th>
                    <th><?= $this->Paginator->sort('soldedepart') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($commercials as $commercial): ?>
                <tr>
                    <td><?= $this->Number->format($commercial->id) ?></td>
                    <td><?= h($commercial->name) ?></td>
                    <td><?= h($commercial->login) ?></td>
                    <td><?= h($commercial->mp) ?></td>
                    <td><?= $commercial->has('category') ? $this->Html->link($commercial->category->Description, ['controller' => 'Categories', 'action' => 'view', $commercial->category->id]) : '' ?></td>
                    <td><?= $commercial->soldedepart === null ? '' : $this->Number->format($commercial->soldedepart) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $commercial->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $commercial->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $commercial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commercial->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
