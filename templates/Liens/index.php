<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Lien> $liens
 */
?>
<div class="liens index content">
    <?= $this->Html->link(__('New Lien'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Liens') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('utilisateurmenu_id') ?></th>
                    <th><?= $this->Paginator->sort('lien') ?></th>
                    <th><?= $this->Paginator->sort('ajout') ?></th>
                    <th><?= $this->Paginator->sort('modif') ?></th>
                    <th><?= $this->Paginator->sort('supp') ?></th>
                    <th><?= $this->Paginator->sort('imprimer') ?></th>
                    <th><?= $this->Paginator->sort('valide') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($liens as $lien): ?>
                <tr>
                    <td><?= $this->Number->format($lien->id) ?></td>
                    <td><?= $lien->utilisateurmenu_id === null ? '' : $this->Number->format($lien->utilisateurmenu_id) ?></td>
                    <td><?= h($lien->lien) ?></td>
                    <td><?= h($lien->ajout) ?></td>
                    <td><?= h($lien->modif) ?></td>
                    <td><?= h($lien->supp) ?></td>
                    <td><?= h($lien->imprimer) ?></td>
                    <td><?= $lien->valide === null ? '' : $this->Number->format($lien->valide) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $lien->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lien->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lien->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lien->id)]) ?>
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
