<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Lignebandeconsultation> $lignebandeconsultations
 */
?>
<div class="lignebandeconsultations index content">
    <?= $this->Html->link(__('New Lignebandeconsultation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Lignebandeconsultations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('demandeoffredeprix_id') ?></th>
                    <th><?= $this->Paginator->sort('bandeconsultation_id') ?></th>
                    <th><?= $this->Paginator->sort('lignedemandeoffredeprix_id') ?></th>
                    <th><?= $this->Paginator->sort('fournisseur_id') ?></th>
                    <th><?= $this->Paginator->sort('nameF') ?></th>
                    <th><?= $this->Paginator->sort('codefrs') ?></th>
                    <th><?= $this->Paginator->sort('article_id') ?></th>
                    <th><?= $this->Paginator->sort('designiationA') ?></th>
                    <th><?= $this->Paginator->sort('qte') ?></th>
                    <th><?= $this->Paginator->sort('prix') ?></th>
                    <th><?= $this->Paginator->sort('ht') ?></th>
                    <th><?= $this->Paginator->sort('tauxdemarge') ?></th>
                    <th><?= $this->Paginator->sort('tauxdemarque') ?></th>
                    <th><?= $this->Paginator->sort('coutrevient') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lignebandeconsultations as $lignebandeconsultation): ?>
                <tr>
                    <td><?= $this->Number->format($lignebandeconsultation->id) ?></td>
                    <td><?= $lignebandeconsultation->has('demandeoffredeprix') ? $this->Html->link($lignebandeconsultation->demandeoffredeprix->id, ['controller' => 'Demandeoffredeprixes', 'action' => 'view', $lignebandeconsultation->demandeoffredeprix->id]) : '' ?></td>
                    <td><?= $lignebandeconsultation->has('bandeconsultation') ? $this->Html->link($lignebandeconsultation->bandeconsultation->id, ['controller' => 'Bandeconsultations', 'action' => 'view', $lignebandeconsultation->bandeconsultation->id]) : '' ?></td>
                    <td><?= $lignebandeconsultation->has('lignedemandeoffredeprix') ? $this->Html->link($lignebandeconsultation->lignedemandeoffredeprix->id, ['controller' => 'Lignedemandeoffredeprixes', 'action' => 'view', $lignebandeconsultation->lignedemandeoffredeprix->id]) : '' ?></td>
                    <td><?= $lignebandeconsultation->has('fournisseur') ? $this->Html->link($lignebandeconsultation->fournisseur->name, ['controller' => 'Fournisseurs', 'action' => 'view', $lignebandeconsultation->fournisseur->id]) : '' ?></td>
                    <td><?= h($lignebandeconsultation->nameF) ?></td>
                    <td><?= h($lignebandeconsultation->codefrs) ?></td>
                    <td><?= $lignebandeconsultation->has('article') ? $this->Html->link($lignebandeconsultation->article->id, ['controller' => 'Articles', 'action' => 'view', $lignebandeconsultation->article->id]) : '' ?></td>
                    <td><?= h($lignebandeconsultation->designiationA) ?></td>
                    <td><?= $lignebandeconsultation->qte === null ? '' : $this->Number->format($lignebandeconsultation->qte) ?></td>
                    <td><?= $lignebandeconsultation->prix === null ? '' : $this->Number->format($lignebandeconsultation->prix) ?></td>
                    <td><?= $lignebandeconsultation->ht === null ? '' : $this->Number->format($lignebandeconsultation->ht) ?></td>
                    <td><?= $lignebandeconsultation->tauxdemarge === null ? '' : $this->Number->format($lignebandeconsultation->tauxdemarge) ?></td>
                    <td><?= $lignebandeconsultation->tauxdemarque === null ? '' : $this->Number->format($lignebandeconsultation->tauxdemarque) ?></td>
                    <td><?= $lignebandeconsultation->coutrevient === null ? '' : $this->Number->format($lignebandeconsultation->coutrevient) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lignebandeconsultation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lignebandeconsultation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lignebandeconsultation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lignebandeconsultation->id)]) ?>
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
