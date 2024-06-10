<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Lignecommandeclient> $lignecommandeclients
 */
?>
<div class="lignecommandeclients index content">
    <?= $this->Html->link(__('New Lignecommandeclient'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lignecommandeclients') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('commandeclient_id') ?></th>
                    <th><?= $this->Paginator->sort('article_id') ?></th>
                    <th><?= $this->Paginator->sort('qtestock') ?></th>
                    <th><?= $this->Paginator->sort('qte') ?></th>
                    <th><?= $this->Paginator->sort('prixht') ?></th>
                    <th><?= $this->Paginator->sort('remise') ?></th>
                    <th><?= $this->Paginator->sort('punht') ?></th>
                    <th><?= $this->Paginator->sort('tva') ?></th>
                    <th><?= $this->Paginator->sort('fodec') ?></th>
                    <th><?= $this->Paginator->sort('ttc') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lignecommandeclients as $lignecommandeclient): ?>
                <tr>
                    <td><?= $this->Number->format($lignecommandeclient->id) ?></td>
                    <td><?= $lignecommandeclient->has('commandeclient') ? $this->Html->link($lignecommandeclient->commandeclient->code, ['controller' => 'Commandeclients', 'action' => 'view', $lignecommandeclient->commandeclient->id]) : '' ?></td>
                    <td><?= $lignecommandeclient->has('article') ? $this->Html->link($lignecommandeclient->article->id, ['controller' => 'Articles', 'action' => 'view', $lignecommandeclient->article->id]) : '' ?></td>
                    <td><?= $lignecommandeclient->qtestock === null ? '' : $this->Number->format($lignecommandeclient->qtestock) ?></td>
                    <td><?= $lignecommandeclient->qte === null ? '' : $this->Number->format($lignecommandeclient->qte) ?></td>
                    <td><?= $lignecommandeclient->prixht === null ? '' : $this->Number->format($lignecommandeclient->prixht) ?></td>
                    <td><?= $lignecommandeclient->remise === null ? '' : $this->Number->format($lignecommandeclient->remise) ?></td>
                    <td><?= $lignecommandeclient->punht === null ? '' : $this->Number->format($lignecommandeclient->punht) ?></td>
                    <td><?= $lignecommandeclient->tva === null ? '' : $this->Number->format($lignecommandeclient->tva) ?></td>
                    <td><?= $lignecommandeclient->fodec === null ? '' : $this->Number->format($lignecommandeclient->fodec) ?></td>
                    <td><?= $lignecommandeclient->ttc === null ? '' : $this->Number->format($lignecommandeclient->ttc) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lignecommandeclient->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lignecommandeclient->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lignecommandeclient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lignecommandeclient->id)]) ?>
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
