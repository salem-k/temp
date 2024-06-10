<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Commande> $commandes
 */
?>
<div class="commandes index content">
    <?= $this->Html->link(__('New Commande'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Commandes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('num_tab') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('remise') ?></th>
                    <th><?= $this->Paginator->sort('total') ?></th>
                    <th><?= $this->Paginator->sort('totalttc') ?></th>
                    <th><?= $this->Paginator->sort('commercial_id') ?></th>
                    <th><?= $this->Paginator->sort('payementcomptant') ?></th>
                    <th><?= $this->Paginator->sort('pointdevente_id') ?></th>
                    <th><?= $this->Paginator->sort('depot_id') ?></th>
                    <th><?= $this->Paginator->sort('fodec') ?></th>
                    <th><?= $this->Paginator->sort('tpe') ?></th>
                    <th><?= $this->Paginator->sort('escompte') ?></th>
                    <th><?= $this->Paginator->sort('tva') ?></th>
                    <th><?= $this->Paginator->sort('etatliv') ?></th>
                    <th><?= $this->Paginator->sort('valide') ?></th>
                    <th><?= $this->Paginator->sort('dateimp') ?></th>
                    <th><?= $this->Paginator->sort('dateintfin') ?></th>
                    <th><?= $this->Paginator->sort('dateintdebut') ?></th>
                    <th><?= $this->Paginator->sort('dateupdateclient') ?></th>
                    <th><?= $this->Paginator->sort('nouv_client') ?></th>
                    <th><?= $this->Paginator->sort('brut') ?></th>
                    <th><?= $this->Paginator->sort('pallette') ?></th>
                    <th><?= $this->Paginator->sort('Coeff') ?></th>
                    <th><?= $this->Paginator->sort('Poids') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('nbligne') ?></th>
                    <th><?= $this->Paginator->sort('bl') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($commandes as $commande): ?>
                <tr>
                    <td><?= $this->Number->format($commande->id) ?></td>
                    <td><?= h($commande->date) ?></td>
                    <td><?= h($commande->numero) ?></td>
                    <td><?= h($commande->num_tab) ?></td>
                    <td><?= $commande->has('client') ? $this->Html->link($commande->client->id, ['controller' => 'Clients', 'action' => 'view', $commande->client->id]) : '' ?></td>
                    <td><?= $commande->remise === null ? '' : $this->Number->format($commande->remise) ?></td>
                    <td><?= $this->Number->format($commande->total) ?></td>
                    <td><?= $commande->totalttc === null ? '' : $this->Number->format($commande->totalttc) ?></td>
                    <td><?= $commande->has('commercial') ? $this->Html->link($commande->commercial->name, ['controller' => 'Commercials', 'action' => 'view', $commande->commercial->id]) : '' ?></td>
                    <td><?= h($commande->payementcomptant) ?></td>
                    <td><?= $commande->has('pointdevente') ? $this->Html->link($commande->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $commande->pointdevente->id]) : '' ?></td>
                    <td><?= $commande->has('depot') ? $this->Html->link($commande->depot->name, ['controller' => 'Depots', 'action' => 'view', $commande->depot->id]) : '' ?></td>
                    <td><?= $this->Number->format($commande->fodec) ?></td>
                    <td><?= $this->Number->format($commande->tpe) ?></td>
                    <td><?= h($commande->escompte) ?></td>
                    <td><?= $this->Number->format($commande->tva) ?></td>
                    <td><?= $this->Number->format($commande->etatliv) ?></td>
                    <td><?= $commande->valide === null ? '' : $this->Number->format($commande->valide) ?></td>
                    <td><?= h($commande->dateimp) ?></td>
                    <td><?= h($commande->dateintfin) ?></td>
                    <td><?= h($commande->dateintdebut) ?></td>
                    <td><?= h($commande->dateupdateclient) ?></td>
                    <td><?= h($commande->nouv_client) ?></td>
                    <td><?= $commande->brut === null ? '' : $this->Number->format($commande->brut) ?></td>
                    <td><?= $commande->pallette === null ? '' : $this->Number->format($commande->pallette) ?></td>
                    <td><?= $commande->Coeff === null ? '' : $this->Number->format($commande->Coeff) ?></td>
                    <td><?= $commande->Poids === null ? '' : $this->Number->format($commande->Poids) ?></td>
                    <td><?= $commande->type === null ? '' : $this->Number->format($commande->type) ?></td>
                    <td><?= $commande->nbligne === null ? '' : $this->Number->format($commande->nbligne) ?></td>
                    <td><?= $commande->bl === null ? '' : $this->Number->format($commande->bl) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $commande->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $commande->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $commande->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commande->id)]) ?>
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
