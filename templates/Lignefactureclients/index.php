<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Lignefactureclient> $lignefactureclients
 */
?>
<div class="lignefactureclients index content">
    <?= $this->Html->link(__('New Lignefactureclient'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lignefactureclients') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('factureclient_id') ?></th>
                    <th><?= $this->Paginator->sort('article_id') ?></th>
                    <th><?= $this->Paginator->sort('qte') ?></th>
                    <th><?= $this->Paginator->sort('prixht') ?></th>
                    <th><?= $this->Paginator->sort('remise') ?></th>
                    <th><?= $this->Paginator->sort('punht') ?></th>
                    <th><?= $this->Paginator->sort('tva') ?></th>
                    <th><?= $this->Paginator->sort('fodec') ?></th>
                    <th><?= $this->Paginator->sort('ttc') ?></th>
                    <th><?= $this->Paginator->sort('qtestock') ?></th>
                    <th><?= $this->Paginator->sort('totaltva') ?></th>
                    <th><?= $this->Paginator->sort('totalttc') ?></th>
                    <th><?= $this->Paginator->sort('montantht') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lignefactureclients as $lignefactureclient): ?>
                <tr>
                    <td><?= $this->Number->format($lignefactureclient->id) ?></td>
                    <td><?= $lignefactureclient->has('factureclient') ? $this->Html->link($lignefactureclient->factureclient->id, ['controller' => 'Factureclients', 'action' => 'view', $lignefactureclient->factureclient->id]) : '' ?></td>
                    <td><?= $lignefactureclient->has('article') ? $this->Html->link($lignefactureclient->article->id, ['controller' => 'Articles', 'action' => 'view', $lignefactureclient->article->id]) : '' ?></td>
                    <td><?= $this->Number->format($lignefactureclient->qte) ?></td>
                    <td><?= $this->Number->format($lignefactureclient->prixht) ?></td>
                    <td><?= $lignefactureclient->remise === null ? '' : $this->Number->format($lignefactureclient->remise) ?></td>
                    <td><?= $this->Number->format($lignefactureclient->punht) ?></td>
                    <td><?= $lignefactureclient->tva === null ? '' : $this->Number->format($lignefactureclient->tva) ?></td>
                    <td><?= $lignefactureclient->fodec === null ? '' : $this->Number->format($lignefactureclient->fodec) ?></td>
                    <td><?= $lignefactureclient->ttc === null ? '' : $this->Number->format($lignefactureclient->ttc) ?></td>
                    <td><?= $lignefactureclient->qtestock === null ? '' : $this->Number->format($lignefactureclient->qtestock) ?></td>
                    <td><?= $lignefactureclient->totaltva === null ? '' : $this->Number->format($lignefactureclient->totaltva) ?></td>
                    <td><?= $lignefactureclient->totalttc === null ? '' : $this->Number->format($lignefactureclient->totalttc) ?></td>
                    <td><?= $lignefactureclient->montantht === null ? '' : $this->Number->format($lignefactureclient->montantht) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lignefactureclient->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lignefactureclient->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lignefactureclient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lignefactureclient->id)]) ?>
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
