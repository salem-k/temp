<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commande $commande
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Commande'), ['action' => 'edit', $commande->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Commande'), ['action' => 'delete', $commande->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commande->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Commandes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Commande'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commandes view content">
            <h3><?= h($commande->numero) ?></h3>
            <table>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($commande->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num Tab') ?></th>
                    <td><?= h($commande->num_tab) ?></td>
                </tr>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $commande->has('client') ? $this->Html->link($commande->client->id, ['controller' => 'Clients', 'action' => 'view', $commande->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Commercial') ?></th>
                    <td><?= $commande->has('commercial') ? $this->Html->link($commande->commercial->name, ['controller' => 'Commercials', 'action' => 'view', $commande->commercial->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Payementcomptant') ?></th>
                    <td><?= h($commande->payementcomptant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pointdevente') ?></th>
                    <td><?= $commande->has('pointdevente') ? $this->Html->link($commande->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $commande->pointdevente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $commande->has('depot') ? $this->Html->link($commande->depot->name, ['controller' => 'Depots', 'action' => 'view', $commande->depot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Escompte') ?></th>
                    <td><?= h($commande->escompte) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nouv Client') ?></th>
                    <td><?= h($commande->nouv_client) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($commande->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Remise') ?></th>
                    <td><?= $commande->remise === null ? '' : $this->Number->format($commande->remise) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $this->Number->format($commande->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Totalttc') ?></th>
                    <td><?= $commande->totalttc === null ? '' : $this->Number->format($commande->totalttc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fodec') ?></th>
                    <td><?= $this->Number->format($commande->fodec) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tpe') ?></th>
                    <td><?= $this->Number->format($commande->tpe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tva') ?></th>
                    <td><?= $this->Number->format($commande->tva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Etatliv') ?></th>
                    <td><?= $this->Number->format($commande->etatliv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valide') ?></th>
                    <td><?= $commande->valide === null ? '' : $this->Number->format($commande->valide) ?></td>
                </tr>
                <tr>
                    <th><?= __('Brut') ?></th>
                    <td><?= $commande->brut === null ? '' : $this->Number->format($commande->brut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pallette') ?></th>
                    <td><?= $commande->pallette === null ? '' : $this->Number->format($commande->pallette) ?></td>
                </tr>
                <tr>
                    <th><?= __('Coeff') ?></th>
                    <td><?= $commande->Coeff === null ? '' : $this->Number->format($commande->Coeff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Poids') ?></th>
                    <td><?= $commande->Poids === null ? '' : $this->Number->format($commande->Poids) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= $commande->type === null ? '' : $this->Number->format($commande->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nbligne') ?></th>
                    <td><?= $commande->nbligne === null ? '' : $this->Number->format($commande->nbligne) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bl') ?></th>
                    <td><?= $commande->bl === null ? '' : $this->Number->format($commande->bl) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($commande->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateimp') ?></th>
                    <td><?= h($commande->dateimp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateintfin') ?></th>
                    <td><?= h($commande->dateintfin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateintdebut') ?></th>
                    <td><?= h($commande->dateintdebut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dateupdateclient') ?></th>
                    <td><?= h($commande->dateupdateclient) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Observation') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($commande->observation)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Details') ?></h4>
                <?php if (!empty($commande->details)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Commande Id') ?></th>
                            <th><?= __('Article Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($commande->details as $details) : ?>
                        <tr>
                            <td><?= h($details->id) ?></td>
                            <td><?= h($details->commande_id) ?></td>
                            <td><?= h($details->article_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Details', 'action' => 'view', $details->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Details', 'action' => 'edit', $details->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Details', 'action' => 'delete', $details->id], ['confirm' => __('Are you sure you want to delete # {0}?', $details->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
