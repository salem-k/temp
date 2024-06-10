<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typefacture $typefacture
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Typefacture'), ['action' => 'edit', $typefacture->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Typefacture'), ['action' => 'delete', $typefacture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typefacture->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Typefactures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Typefacture'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="typefactures view content">
            <h3><?= h($typefacture->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($typefacture->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($typefacture->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Factureavoirs') ?></h4>
                <?php if (!empty($typefacture->factureavoirs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Utilisateur Id') ?></th>
                            <th><?= __('Factureclient Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Remise') ?></th>
                            <th><?= __('Tva') ?></th>
                            <th><?= __('Fodec') ?></th>
                            <th><?= __('Tauxtva') ?></th>
                            <th><?= __('Tauxfodec') ?></th>
                            <th><?= __('Totalht') ?></th>
                            <th><?= __('Totalttc') ?></th>
                            <th><?= __('Totalttc Anc') ?></th>
                            <th><?= __('Montant Regle') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Numeroconca') ?></th>
                            <th><?= __('Typefacture Id') ?></th>
                            <th><?= __('Etat') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Exercice Id') ?></th>
                            <th><?= __('Des') ?></th>
                            <th><?= __('Source') ?></th>
                            <th><?= __('Timbre Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Adressclient') ?></th>
                            <th><?= __('Matriculefiscaleclient') ?></th>
                            <th><?= __('Telclient') ?></th>
                            <th><?= __('Typeclient Id') ?></th>
                            <th><?= __('Numeropieceintegre') ?></th>
                            <th><?= __('Depot Id') ?></th>
                            <th><?= __('Ttc1') ?></th>
                            <th><?= __('Tva1') ?></th>
                            <th><?= __('Fodec1') ?></th>
                            <th><?= __('Rem') ?></th>
                            <th><?= __('Totalht1') ?></th>
                            <th><?= __('Totaltva1') ?></th>
                            <th><?= __('Totalttc1') ?></th>
                            <th><?= __('Totalrem') ?></th>
                            <th><?= __('Adressecl') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($typefacture->factureavoirs as $factureavoirs) : ?>
                        <tr>
                            <td><?= h($factureavoirs->id) ?></td>
                            <td><?= h($factureavoirs->client_id) ?></td>
                            <td><?= h($factureavoirs->utilisateur_id) ?></td>
                            <td><?= h($factureavoirs->factureclient_id) ?></td>
                            <td><?= h($factureavoirs->date) ?></td>
                            <td><?= h($factureavoirs->remise) ?></td>
                            <td><?= h($factureavoirs->tva) ?></td>
                            <td><?= h($factureavoirs->fodec) ?></td>
                            <td><?= h($factureavoirs->tauxtva) ?></td>
                            <td><?= h($factureavoirs->tauxfodec) ?></td>
                            <td><?= h($factureavoirs->totalht) ?></td>
                            <td><?= h($factureavoirs->totalttc) ?></td>
                            <td><?= h($factureavoirs->totalttc_anc) ?></td>
                            <td><?= h($factureavoirs->montant_regle) ?></td>
                            <td><?= h($factureavoirs->numero) ?></td>
                            <td><?= h($factureavoirs->numeroconca) ?></td>
                            <td><?= h($factureavoirs->typefacture_id) ?></td>
                            <td><?= h($factureavoirs->etat) ?></td>
                            <td><?= h($factureavoirs->pointdevente_id) ?></td>
                            <td><?= h($factureavoirs->exercice_id) ?></td>
                            <td><?= h($factureavoirs->des) ?></td>
                            <td><?= h($factureavoirs->source) ?></td>
                            <td><?= h($factureavoirs->timbre_id) ?></td>
                            <td><?= h($factureavoirs->name) ?></td>
                            <td><?= h($factureavoirs->adressclient) ?></td>
                            <td><?= h($factureavoirs->matriculefiscaleclient) ?></td>
                            <td><?= h($factureavoirs->telclient) ?></td>
                            <td><?= h($factureavoirs->typeclient_id) ?></td>
                            <td><?= h($factureavoirs->numeropieceintegre) ?></td>
                            <td><?= h($factureavoirs->depot_id) ?></td>
                            <td><?= h($factureavoirs->ttc1) ?></td>
                            <td><?= h($factureavoirs->tva1) ?></td>
                            <td><?= h($factureavoirs->fodec1) ?></td>
                            <td><?= h($factureavoirs->rem) ?></td>
                            <td><?= h($factureavoirs->totalht1) ?></td>
                            <td><?= h($factureavoirs->totaltva1) ?></td>
                            <td><?= h($factureavoirs->totalttc1) ?></td>
                            <td><?= h($factureavoirs->totalrem) ?></td>
                            <td><?= h($factureavoirs->adressecl) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Factureavoirs', 'action' => 'view', $factureavoirs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Factureavoirs', 'action' => 'edit', $factureavoirs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Factureavoirs', 'action' => 'delete', $factureavoirs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factureavoirs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Factures') ?></h4>
                <?php if (!empty($typefacture->factures)) : ?>
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
                        <?php foreach ($typefacture->factures as $factures) : ?>
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
