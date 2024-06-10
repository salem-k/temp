<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Lignedemandeoffredeprix> $lignedemandeoffredeprixes
 */
?>
<div class="lignedemandeoffredeprixes index content">
    <?= $this->Html->link(__('New Lignedemandeoffredeprix'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lignedemandeoffredeprixes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('demandeoffredeprix_id') ?></th>
                    <th><?= $this->Paginator->sort('article_id') ?></th>
                    <th><?= $this->Paginator->sort('designiationA') ?></th>
                    <th><?= $this->Paginator->sort('fournisseur_id') ?></th>
                    <th><?= $this->Paginator->sort('nameF') ?></th>
                    <th><?= $this->Paginator->sort('qte') ?></th>
                    <th><?= $this->Paginator->sort('mail') ?></th>
                    <th><?= $this->Paginator->sort('envoiemail') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lignedemandeoffredeprixes as $lignedemandeoffredeprix): ?>
                <tr>
                    <td><?= $this->Number->format($lignedemandeoffredeprix->id) ?></td>
                    <td><?= $lignedemandeoffredeprix->has('demandeoffredeprix') ? $this->Html->link($lignedemandeoffredeprix->demandeoffredeprix->id, ['controller' => 'Demandeoffredeprixes', 'action' => 'view', $lignedemandeoffredeprix->demandeoffredeprix->id]) : '' ?></td>
                    <td><?= $lignedemandeoffredeprix->has('article') ? $this->Html->link($lignedemandeoffredeprix->article->id, ['controller' => 'Articles', 'action' => 'view', $lignedemandeoffredeprix->article->id]) : '' ?></td>
                    <td><?= h($lignedemandeoffredeprix->designiationA) ?></td>
                    <td><?= $lignedemandeoffredeprix->has('fournisseur') ? $this->Html->link($lignedemandeoffredeprix->fournisseur->name, ['controller' => 'Fournisseurs', 'action' => 'view', $lignedemandeoffredeprix->fournisseur->id]) : '' ?></td>
                    <td><?= h($lignedemandeoffredeprix->nameF) ?></td>
                    <td><?= $lignedemandeoffredeprix->qte === null ? '' : $this->Number->format($lignedemandeoffredeprix->qte) ?></td>
                    <td><?= h($lignedemandeoffredeprix->mail) ?></td>
                    <td><?= $lignedemandeoffredeprix->envoiemail === null ? '' : $this->Number->format($lignedemandeoffredeprix->envoiemail) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lignedemandeoffredeprix->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lignedemandeoffredeprix->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lignedemandeoffredeprix->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lignedemandeoffredeprix->id)]) ?>
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
