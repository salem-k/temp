<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tag> $tags
 */
?>
<div class="tags index content">
    <?= $this->Html->link(__('New Tag'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tags') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('pay_id') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('listetag_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tags as $tag): ?>
                <tr>
                    <td><?= $this->Number->format($tag->id) ?></td>
                    <td><?= $tag->has('pay') ? $this->Html->link($tag->pay->name, ['controller' => 'Pays', 'action' => 'view', $tag->pay->id]) : '' ?></td>
                    <td><?= $tag->has('client') ? $this->Html->link($tag->client->id, ['controller' => 'Clients', 'action' => 'view', $tag->client->id]) : '' ?></td>
                    <td><?= $tag->listetag_id === null ? '' : $this->Number->format($tag->listetag_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tag->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tag->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?>
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
