<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Livraison> $livraisons
 */
?>
<div class="livraisons index content">
    <?= $this->Html->link(__('New Livraison'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Livraisons') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('commandefournisseur_id') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('fournisseur_id') ?></th>
                    <th><?= $this->Paginator->sort('adresselivraisonfournisseur_id') ?></th>
                    <th><?= $this->Paginator->sort('pointdevente_id') ?></th>
                    <th><?= $this->Paginator->sort('depot_id') ?></th>
                    <th><?= $this->Paginator->sort('cartecarburant_id') ?></th>
                    <th><?= $this->Paginator->sort('materieltransport_id') ?></th>
                    <th><?= $this->Paginator->sort('kilometragedepart') ?></th>
                    <th><?= $this->Paginator->sort('kilometragearrive') ?></th>
                    <th><?= $this->Paginator->sort('chauffeur') ?></th>
                    <th><?= $this->Paginator->sort('convoyeur') ?></th>
                    <th><?= $this->Paginator->sort('valide') ?></th>
                    <th><?= $this->Paginator->sort('remise') ?></th>
                    <th><?= $this->Paginator->sort('tva') ?></th>
                    <th><?= $this->Paginator->sort('fodec') ?></th>
                    <th><?= $this->Paginator->sort('ttc') ?></th>
                    <th><?= $this->Paginator->sort('ht') ?></th>
                    <th><?= $this->Paginator->sort('facture_id') ?></th>
                    <th><?= $this->Paginator->sort('Montant_Regler') ?></th>
                    <th><?= $this->Paginator->sort('typelivraison') ?></th>
                    <th><?= $this->Paginator->sort('dossierimportation_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($livraisons as $livraison): ?>
                <tr>
                    <td><?= $this->Number->format($livraison->id) ?></td>
                    <td><?= $livraison->commandefournisseur_id === null ? '' : $this->Number->format($livraison->commandefournisseur_id) ?></td>
                    <td><?= h($livraison->numero) ?></td>
                    <td><?= h($livraison->date) ?></td>
                    <td><?= $livraison->fournisseur_id === null ? '' : $this->Number->format($livraison->fournisseur_id) ?></td>
                    <td><?= $livraison->adresselivraisonfournisseur_id === null ? '' : $this->Number->format($livraison->adresselivraisonfournisseur_id) ?></td>
                    <td><?= $livraison->has('pointdevente') ? $this->Html->link($livraison->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $livraison->pointdevente->id]) : '' ?></td>
                    <td><?= $livraison->has('depot') ? $this->Html->link($livraison->depot->name, ['controller' => 'Depots', 'action' => 'view', $livraison->depot->id]) : '' ?></td>
                    <td><?= $livraison->cartecarburant_id === null ? '' : $this->Number->format($livraison->cartecarburant_id) ?></td>
                    <td><?= $livraison->materieltransport_id === null ? '' : $this->Number->format($livraison->materieltransport_id) ?></td>
                    <td><?= $livraison->kilometragedepart === null ? '' : $this->Number->format($livraison->kilometragedepart) ?></td>
                    <td><?= $livraison->kilometragearrive === null ? '' : $this->Number->format($livraison->kilometragearrive) ?></td>
                    <td><?= $livraison->chauffeur === null ? '' : $this->Number->format($livraison->chauffeur) ?></td>
                    <td><?= $livraison->convoyeur === null ? '' : $this->Number->format($livraison->convoyeur) ?></td>
                    <td><?= $this->Number->format($livraison->valide) ?></td>
                    <td><?= $livraison->remise === null ? '' : $this->Number->format($livraison->remise) ?></td>
                    <td><?= $livraison->tva === null ? '' : $this->Number->format($livraison->tva) ?></td>
                    <td><?= $livraison->fodec === null ? '' : $this->Number->format($livraison->fodec) ?></td>
                    <td><?= $livraison->ttc === null ? '' : $this->Number->format($livraison->ttc) ?></td>
                    <td><?= $livraison->ht === null ? '' : $this->Number->format($livraison->ht) ?></td>
                    <td><?= $this->Number->format($livraison->facture_id) ?></td>
                    <td><?= $livraison->Montant_Regler === null ? '' : $this->Number->format($livraison->Montant_Regler) ?></td>
                    <td><?= $livraison->typelivraison === null ? '' : $this->Number->format($livraison->typelivraison) ?></td>
                    <td><?= $livraison->dossierimportation_id === null ? '' : $this->Number->format($livraison->dossierimportation_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $livraison->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $livraison->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $livraison->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livraison->id)]) ?>
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
