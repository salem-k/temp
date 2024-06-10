<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livraison $livraison
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Livraison'), ['action' => 'edit', $livraison->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Livraison'), ['action' => 'delete', $livraison->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livraison->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Livraisons'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Livraison'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="livraisons view content">
            <h3><?= h($livraison->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($livraison->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pointdevente') ?></th>
                    <td><?= $livraison->has('pointdevente') ? $this->Html->link($livraison->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $livraison->pointdevente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Depot') ?></th>
                    <td><?= $livraison->has('depot') ? $this->Html->link($livraison->depot->name, ['controller' => 'Depots', 'action' => 'view', $livraison->depot->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($livraison->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commandefournisseur Id') ?></th>
                    <td><?= $livraison->commandefournisseur_id === null ? '' : $this->Number->format($livraison->commandefournisseur_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fournisseur Id') ?></th>
                    <td><?= $livraison->fournisseur_id === null ? '' : $this->Number->format($livraison->fournisseur_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adresselivraisonfournisseur Id') ?></th>
                    <td><?= $livraison->adresselivraisonfournisseur_id === null ? '' : $this->Number->format($livraison->adresselivraisonfournisseur_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cartecarburant Id') ?></th>
                    <td><?= $livraison->cartecarburant_id === null ? '' : $this->Number->format($livraison->cartecarburant_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Materieltransport Id') ?></th>
                    <td><?= $livraison->materieltransport_id === null ? '' : $this->Number->format($livraison->materieltransport_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kilometragedepart') ?></th>
                    <td><?= $livraison->kilometragedepart === null ? '' : $this->Number->format($livraison->kilometragedepart) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kilometragearrive') ?></th>
                    <td><?= $livraison->kilometragearrive === null ? '' : $this->Number->format($livraison->kilometragearrive) ?></td>
                </tr>
                <tr>
                    <th><?= __('Chauffeur') ?></th>
                    <td><?= $livraison->chauffeur === null ? '' : $this->Number->format($livraison->chauffeur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Convoyeur') ?></th>
                    <td><?= $livraison->convoyeur === null ? '' : $this->Number->format($livraison->convoyeur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valide') ?></th>
                    <td><?= $this->Number->format($livraison->valide) ?></td>
                </tr>
                <tr>
                    <th><?= __('Remise') ?></th>
                    <td><?= $livraison->remise === null ? '' : $this->Number->format($livraison->remise) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tva') ?></th>
                    <td><?= $livraison->tva === null ? '' : $this->Number->format($livraison->tva) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fodec') ?></th>
                    <td><?= $livraison->fodec === null ? '' : $this->Number->format($livraison->fodec) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ttc') ?></th>
                    <td><?= $livraison->ttc === null ? '' : $this->Number->format($livraison->ttc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ht') ?></th>
                    <td><?= $livraison->ht === null ? '' : $this->Number->format($livraison->ht) ?></td>
                </tr>
                <tr>
                    <th><?= __('Facture Id') ?></th>
                    <td><?= $this->Number->format($livraison->facture_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Montant Regler') ?></th>
                    <td><?= $livraison->Montant_Regler === null ? '' : $this->Number->format($livraison->Montant_Regler) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typelivraison') ?></th>
                    <td><?= $livraison->typelivraison === null ? '' : $this->Number->format($livraison->typelivraison) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dossierimportation Id') ?></th>
                    <td><?= $livraison->dossierimportation_id === null ? '' : $this->Number->format($livraison->dossierimportation_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($livraison->date) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Factures') ?></h4>
                <?php if (!empty($livraison->factures)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Livraison Id') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Fournisseur Id') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Depot Id') ?></th>
                            <th><?= __('Cartecarburant Id') ?></th>
                            <th><?= __('Materieltransport Id') ?></th>
                            <th><?= __('Chauffeur') ?></th>
                            <th><?= __('Convoyeur') ?></th>
                            <th><?= __('Valide') ?></th>
                            <th><?= __('Remise') ?></th>
                            <th><?= __('Tva') ?></th>
                            <th><?= __('Fodec') ?></th>
                            <th><?= __('Ttc') ?></th>
                            <th><?= __('Ht') ?></th>
                            <th><?= __('Adresselivraisonfournisseur Id') ?></th>
                            <th><?= __('Kilometragedepart') ?></th>
                            <th><?= __('Kilometragearrive') ?></th>
                            <th><?= __('Montant Regler') ?></th>
                            <th><?= __('Tauxchange') ?></th>
                            <th><?= __('Totaldevise') ?></th>
                            <th><?= __('Importation Id') ?></th>
                            <th><?= __('Typef') ?></th>
                            <th><?= __('Devise Id') ?></th>
                            <th><?= __('Paiement Id') ?></th>
                            <th><?= __('Caissee Id') ?></th>
                            <th><?= __('Dossierimportation Id') ?></th>
                            <th><?= __('Typefacture Id') ?></th>
                            <th><?= __('Typefac') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Projet Id') ?></th>
                            <th><?= __('Etatgroup') ?></th>
                            <th><?= __('Groupage Id') ?></th>
                            <th><?= __('Conteneur Id') ?></th>
                            <th><?= __('TvaOnOff') ?></th>
                            <th><?= __('Incoterm Id') ?></th>
                            <th><?= __('Location Incoterms') ?></th>
                            <th><?= __('Options Incotermtotalpdf') ?></th>
                            <th><?= __('Options Istotaltransportdetaille') ?></th>
                            <th><?= __('Options Indicationenpdf') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($livraison->factures as $factures) : ?>
                        <tr>
                            <td><?= h($factures->id) ?></td>
                            <td><?= h($factures->livraison_id) ?></td>
                            <td><?= h($factures->numero) ?></td>
                            <td><?= h($factures->date) ?></td>
                            <td><?= h($factures->fournisseur_id) ?></td>
                            <td><?= h($factures->pointdevente_id) ?></td>
                            <td><?= h($factures->depot_id) ?></td>
                            <td><?= h($factures->cartecarburant_id) ?></td>
                            <td><?= h($factures->materieltransport_id) ?></td>
                            <td><?= h($factures->chauffeur) ?></td>
                            <td><?= h($factures->convoyeur) ?></td>
                            <td><?= h($factures->valide) ?></td>
                            <td><?= h($factures->remise) ?></td>
                            <td><?= h($factures->tva) ?></td>
                            <td><?= h($factures->fodec) ?></td>
                            <td><?= h($factures->ttc) ?></td>
                            <td><?= h($factures->ht) ?></td>
                            <td><?= h($factures->adresselivraisonfournisseur_id) ?></td>
                            <td><?= h($factures->kilometragedepart) ?></td>
                            <td><?= h($factures->kilometragearrive) ?></td>
                            <td><?= h($factures->Montant_Regler) ?></td>
                            <td><?= h($factures->tauxchange) ?></td>
                            <td><?= h($factures->totaldevise) ?></td>
                            <td><?= h($factures->importation_id) ?></td>
                            <td><?= h($factures->typef) ?></td>
                            <td><?= h($factures->devise_id) ?></td>
                            <td><?= h($factures->paiement_id) ?></td>
                            <td><?= h($factures->caissee_id) ?></td>
                            <td><?= h($factures->dossierimportation_id) ?></td>
                            <td><?= h($factures->typefacture_id) ?></td>
                            <td><?= h($factures->typefac) ?></td>
                            <td><?= h($factures->client_id) ?></td>
                            <td><?= h($factures->projet_id) ?></td>
                            <td><?= h($factures->etatgroup) ?></td>
                            <td><?= h($factures->groupage_id) ?></td>
                            <td><?= h($factures->conteneur_id) ?></td>
                            <td><?= h($factures->tvaOnOff) ?></td>
                            <td><?= h($factures->incoterm_id) ?></td>
                            <td><?= h($factures->location_incoterms) ?></td>
                            <td><?= h($factures->options_incotermtotalpdf) ?></td>
                            <td><?= h($factures->options_istotaltransportdetaille) ?></td>
                            <td><?= h($factures->options_indicationenpdf) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Factures', 'action' => 'view', $factures->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Factures', 'action' => 'edit', $factures->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Factures', 'action' => 'delete', $factures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factures->id)]) ?>
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
