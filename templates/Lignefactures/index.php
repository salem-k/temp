<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Lignefacture> $lignefactures
 */
?>
<div class="lignefactures index content">
    <?= $this->Html->link(__('New Lignefacture'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lignefactures') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('facture_id') ?></th>
                    <th><?= $this->Paginator->sort('fournisseur_id') ?></th>
                    <th><?= $this->Paginator->sort('codefrs') ?></th>
                    <th><?= $this->Paginator->sort('article_id') ?></th>
                    <th><?= $this->Paginator->sort('qte') ?></th>
                    <th><?= $this->Paginator->sort('prix') ?></th>
                    <th><?= $this->Paginator->sort('ht') ?></th>
                    <th><?= $this->Paginator->sort('remise') ?></th>
                    <th><?= $this->Paginator->sort('fodec') ?></th>
                    <th><?= $this->Paginator->sort('tva') ?></th>
                    <th><?= $this->Paginator->sort('ttc') ?></th>
                    <th><?= $this->Paginator->sort('charge_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lignefactures as $lignefacture): ?>
                <tr>
                    <td><?= $this->Number->format($lignefacture->id) ?></td>
                    <td><?= $lignefacture->has('facture') ? $this->Html->link($lignefacture->facture->id, ['controller' => 'Factures', 'action' => 'view', $lignefacture->facture->id]) : '' ?></td>
                    <td><?= $lignefacture->has('fournisseur') ? $this->Html->link($lignefacture->fournisseur->name, ['controller' => 'Fournisseurs', 'action' => 'view', $lignefacture->fournisseur->id]) : '' ?></td>
                    <td><?= h($lignefacture->codefrs) ?></td>
                    <td><?= $lignefacture->has('article') ? $this->Html->link($lignefacture->article->id, ['controller' => 'Articles', 'action' => 'view', $lignefacture->article->id]) : '' ?></td>
                    <td><?= $lignefacture->qte === null ? '' : $this->Number->format($lignefacture->qte) ?></td>
                    <td><?= $lignefacture->prix === null ? '' : $this->Number->format($lignefacture->prix) ?></td>
                    <td><?= $lignefacture->ht === null ? '' : $this->Number->format($lignefacture->ht) ?></td>
                    <td><?= $lignefacture->remise === null ? '' : $this->Number->format($lignefacture->remise) ?></td>
                    <td><?= $lignefacture->fodec === null ? '' : $this->Number->format($lignefacture->fodec) ?></td>
                    <td><?= $lignefacture->tva === null ? '' : $this->Number->format($lignefacture->tva) ?></td>
                    <td><?= $lignefacture->ttc === null ? '' : $this->Number->format($lignefacture->ttc) ?></td>
                    <td><?= $lignefacture->charge_id === null ? '' : $this->Number->format($lignefacture->charge_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lignefacture->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lignefacture->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lignefacture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lignefacture->id)]) ?>
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
