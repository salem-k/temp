<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Bandeconsultation> $bandeconsultations
 */
?>
<div class="bandeconsultations index content">
    <?= $this->Html->link(__('New Bandeconsultation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bandeconsultations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('demandeoffredeprix_id') ?></th>
                    <th><?= $this->Paginator->sort('fournisseur_id') ?></th>
                    <th><?= $this->Paginator->sort('nameF') ?></th>
                    <th><?= $this->Paginator->sort('codefrs') ?></th>
                    <th><?= $this->Paginator->sort('article_id') ?></th>
                    <th><?= $this->Paginator->sort('designiationA') ?></th>
                    <th><?= $this->Paginator->sort('qte') ?></th>
                    <th><?= $this->Paginator->sort('prix') ?></th>
                    <th><?= $this->Paginator->sort('totalprix') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bandeconsultations as $bandeconsultation): ?>
                <tr>
                    <td><?= $this->Number->format($bandeconsultation->id) ?></td>
                    <td><?= $bandeconsultation->has('demandeoffredeprix') ? $this->Html->link($bandeconsultation->demandeoffredeprix->id, ['controller' => 'Demandeoffredeprixes', 'action' => 'view', $bandeconsultation->demandeoffredeprix->id]) : '' ?></td>
                    <td><?= $bandeconsultation->has('fournisseur') ? $this->Html->link($bandeconsultation->fournisseur->name, ['controller' => 'Fournisseurs', 'action' => 'view', $bandeconsultation->fournisseur->id]) : '' ?></td>
                    <td><?= h($bandeconsultation->nameF) ?></td>
                    <td><?= h($bandeconsultation->codefrs) ?></td>
                    <td><?= $bandeconsultation->has('article') ? $this->Html->link($bandeconsultation->article->id, ['controller' => 'Articles', 'action' => 'view', $bandeconsultation->article->id]) : '' ?></td>
                    <td><?= h($bandeconsultation->designiationA) ?></td>
                    <td><?= $bandeconsultation->qte === null ? '' : $this->Number->format($bandeconsultation->qte) ?></td>
                    <td><?= $bandeconsultation->prix === null ? '' : $this->Number->format($bandeconsultation->prix) ?></td>
                    <td><?= $bandeconsultation->totalprix === null ? '' : $this->Number->format($bandeconsultation->totalprix) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $bandeconsultation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bandeconsultation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bandeconsultation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bandeconsultation->id)]) ?>
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
