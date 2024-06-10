<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commandeclient $commandeclient
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Commandeclient'), ['action' => 'edit', $commandeclient->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Commandeclient'), ['action' => 'delete', $commandeclient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commandeclient->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Commandeclients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Commandeclient'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commandeclients view content">
            <h3><?= h($commandeclient->code) ?></h3>
            <table>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($commandeclient->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $commandeclient->has('client') ? $this->Html->link($commandeclient->client->id, ['controller' => 'Clients', 'action' => 'view', $commandeclient->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pointdevente') ?></th>
                    <td><?= $commandeclient->has('pointdevente') ? $this->Html->link($commandeclient->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $commandeclient->pointdevente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $commandeclient->has('depot') ? $this->Html->link($commandeclient->depot->name, ['controller' => 'Depots', 'action' => 'view', $commandeclient->depot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Facture') ?></th>
                    <td><?= $commandeclient->has('facture') ? $this->Html->link($commandeclient->facture->id, ['controller' => 'Factures', 'action' => 'view', $commandeclient->facture->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($commandeclient->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Totalht') ?></th>
                    <td><?= $this->Number->format($commandeclient->totalht) ?></td>
                </tr>
                <tr>
                    <th><?= __('Totalttc') ?></th>
                    <td><?= $this->Number->format($commandeclient->totalttc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Totalremise') ?></th>
                    <td><?= $this->Number->format($commandeclient->totalremise) ?></td>
                </tr>
                <tr>
                    <th><?= __('Totaltva') ?></th>
                    <td><?= $this->Number->format($commandeclient->totaltva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Totalfodec') ?></th>
                    <td><?= $this->Number->format($commandeclient->totalfodec) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cartecarburant Id') ?></th>
                    <td><?= $commandeclient->cartecarburant_id === null ? '' : $this->Number->format($commandeclient->cartecarburant_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Materieltransport Id') ?></th>
                    <td><?= $commandeclient->materieltransport_id === null ? '' : $this->Number->format($commandeclient->materieltransport_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Chauffeur Id') ?></th>
                    <td><?= $commandeclient->chauffeur_id === null ? '' : $this->Number->format($commandeclient->chauffeur_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Convoyeur Id') ?></th>
                    <td><?= $commandeclient->convoyeur_id === null ? '' : $this->Number->format($commandeclient->convoyeur_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bonlivraison Id') ?></th>
                    <td><?= $this->Number->format($commandeclient->bonlivraison_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Etatliv') ?></th>
                    <td><?= $this->Number->format($commandeclient->etatliv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Projet Id') ?></th>
                    <td><?= $commandeclient->projet_id === null ? '' : $this->Number->format($commandeclient->projet_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commandeclient Id') ?></th>
                    <td><?= $commandeclient->commandeclient_id === null ? '' : $this->Number->format($commandeclient->commandeclient_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valider') ?></th>
                    <td><?= $commandeclient->valider === null ? '' : $this->Number->format($commandeclient->valider) ?></td>
                </tr>
                <tr>
                    <th><?= __('TvaOnOff') ?></th>
                    <td><?= $commandeclient->tvaOnOff === null ? '' : $this->Number->format($commandeclient->tvaOnOff) ?></td>
                </tr>
                <tr>
                    <th><?= __('Incoterm Id') ?></th>
                    <td><?= $commandeclient->incoterm_id === null ? '' : $this->Number->format($commandeclient->incoterm_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Duree Validite') ?></th>
                    <td><?= $commandeclient->duree_validite === null ? '' : $this->Number->format($commandeclient->duree_validite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Devis Id') ?></th>
                    <td><?= $commandeclient->devis_id === null ? '' : $this->Number->format($commandeclient->devis_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Transport') ?></th>
                    <td><?= $commandeclient->total_transport === null ? '' : $this->Number->format($commandeclient->total_transport) ?></td>
                </tr>
                <tr>
                    <th><?= __('Condreglement Id') ?></th>
                    <td><?= $commandeclient->condreglement_id === null ? '' : $this->Number->format($commandeclient->condreglement_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Availability Id') ?></th>
                    <td><?= $commandeclient->availability_id === null ? '' : $this->Number->format($commandeclient->availability_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Shippingmethod Id') ?></th>
                    <td><?= $commandeclient->shippingmethod_id === null ? '' : $this->Number->format($commandeclient->shippingmethod_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Envoiemail') ?></th>
                    <td><?= $commandeclient->envoiemail === null ? '' : $this->Number->format($commandeclient->envoiemail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($commandeclient->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datedecreation') ?></th>
                    <td><?= h($commandeclient->datedecreation) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Commentaire') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($commandeclient->commentaire)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Commandeclients') ?></h4>
                <?php if (!empty($commandeclient->commandeclients)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Code') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Datedecreation') ?></th>
                            <th><?= __('Commentaire') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Depot Id') ?></th>
                            <th><?= __('Totalht') ?></th>
                            <th><?= __('Totalttc') ?></th>
                            <th><?= __('Totalremise') ?></th>
                            <th><?= __('Totaltva') ?></th>
                            <th><?= __('Totalfodec') ?></th>
                            <th><?= __('Cartecarburant Id') ?></th>
                            <th><?= __('Materieltransport Id') ?></th>
                            <th><?= __('Chauffeur Id') ?></th>
                            <th><?= __('Convoyeur Id') ?></th>
                            <th><?= __('Bonlivraison Id') ?></th>
                            <th><?= __('Etatliv') ?></th>
                            <th><?= __('Projet Id') ?></th>
                            <th><?= __('Commandeclient Id') ?></th>
                            <th><?= __('Valider') ?></th>
                            <th><?= __('Facture Id') ?></th>
                            <th><?= __('TvaOnOff') ?></th>
                            <th><?= __('Incoterm Id') ?></th>
                            <th><?= __('Duree Validite') ?></th>
                            <th><?= __('Devis Id') ?></th>
                            <th><?= __('Total Transport') ?></th>
                            <th><?= __('Condreglement Id') ?></th>
                            <th><?= __('Availability Id') ?></th>
                            <th><?= __('Shippingmethod Id') ?></th>
                            <th><?= __('Envoiemail') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($commandeclient->commandeclients as $commandeclients) : ?>
                        <tr>
                            <td><?= h($commandeclients->id) ?></td>
                            <td><?= h($commandeclients->code) ?></td>
                            <td><?= h($commandeclients->client_id) ?></td>
                            <td><?= h($commandeclients->date) ?></td>
                            <td><?= h($commandeclients->datedecreation) ?></td>
                            <td><?= h($commandeclients->commentaire) ?></td>
                            <td><?= h($commandeclients->pointdevente_id) ?></td>
                            <td><?= h($commandeclients->depot_id) ?></td>
                            <td><?= h($commandeclients->totalht) ?></td>
                            <td><?= h($commandeclients->totalttc) ?></td>
                            <td><?= h($commandeclients->totalremise) ?></td>
                            <td><?= h($commandeclients->totaltva) ?></td>
                            <td><?= h($commandeclients->totalfodec) ?></td>
                            <td><?= h($commandeclients->cartecarburant_id) ?></td>
                            <td><?= h($commandeclients->materieltransport_id) ?></td>
                            <td><?= h($commandeclients->chauffeur_id) ?></td>
                            <td><?= h($commandeclients->convoyeur_id) ?></td>
                            <td><?= h($commandeclients->bonlivraison_id) ?></td>
                            <td><?= h($commandeclients->etatliv) ?></td>
                            <td><?= h($commandeclients->projet_id) ?></td>
                            <td><?= h($commandeclients->commandeclient_id) ?></td>
                            <td><?= h($commandeclients->valider) ?></td>
                            <td><?= h($commandeclients->facture_id) ?></td>
                            <td><?= h($commandeclients->tvaOnOff) ?></td>
                            <td><?= h($commandeclients->incoterm_id) ?></td>
                            <td><?= h($commandeclients->duree_validite) ?></td>
                            <td><?= h($commandeclients->devis_id) ?></td>
                            <td><?= h($commandeclients->total_transport) ?></td>
                            <td><?= h($commandeclients->condreglement_id) ?></td>
                            <td><?= h($commandeclients->availability_id) ?></td>
                            <td><?= h($commandeclients->shippingmethod_id) ?></td>
                            <td><?= h($commandeclients->envoiemail) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Commandeclients', 'action' => 'view', $commandeclients->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Commandeclients', 'action' => 'edit', $commandeclients->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Commandeclients', 'action' => 'delete', $commandeclients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commandeclients->id)]) ?>
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
