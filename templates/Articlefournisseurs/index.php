<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Articlefournisseur> $articlefournisseurs
 */
?>
<div class="articlefournisseurs index content">
    <?= $this->Html->link(__('New Articlefournisseur'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Articlefournisseurs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('fournisseur_id') ?></th>
                    <th><?= $this->Paginator->sort('code') ?></th>
                    <th><?= $this->Paginator->sort('prix') ?></th>
                    <th><?= $this->Paginator->sort('article_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articlefournisseurs as $articlefournisseur): ?>
                <tr>
                    <td><?= $this->Number->format($articlefournisseur->id) ?></td>
                    <td><?= $articlefournisseur->has('fournisseur') ? $this->Html->link($articlefournisseur->fournisseur->name, ['controller' => 'Fournisseurs', 'action' => 'view', $articlefournisseur->fournisseur->id]) : '' ?></td>
                    <td><?= h($articlefournisseur->code) ?></td>
                    <td><?= $articlefournisseur->prix === null ? '' : $this->Number->format($articlefournisseur->prix) ?></td>
                    <td><?= $articlefournisseur->has('article') ? $this->Html->link($articlefournisseur->article->id, ['controller' => 'Articles', 'action' => 'view', $articlefournisseur->article->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $articlefournisseur->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $articlefournisseur->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articlefournisseur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlefournisseur->id)]) ?>
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
