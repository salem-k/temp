<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fournisseur $fournisseur
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Fournisseur'), ['action' => 'edit', $fournisseur->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Fournisseur'), ['action' => 'delete', $fournisseur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fournisseur->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Fournisseurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Fournisseur'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="fournisseurs view content">
            <h3><?= h($fournisseur->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($fournisseur->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Compte Comptable') ?></th>
                    <td><?= h($fournisseur->compte_comptable) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ville') ?></th>
                    <td><?= $fournisseur->has('ville') ? $this->Html->link($fournisseur->ville->name, ['controller' => 'Villes', 'action' => 'view', $fournisseur->ville->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Codepostal') ?></th>
                    <td><?= h($fournisseur->codepostal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pay') ?></th>
                    <td><?= $fournisseur->has('pay') ? $this->Html->link($fournisseur->pay->name, ['controller' => 'Pays', 'action' => 'view', $fournisseur->pay->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Activite') ?></th>
                    <td><?= h($fournisseur->activite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Secteur') ?></th>
                    <td><?= h($fournisseur->secteur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tel') ?></th>
                    <td><?= h($fournisseur->tel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fax') ?></th>
                    <td><?= h($fournisseur->fax) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mail') ?></th>
                    <td><?= h($fournisseur->mail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Site') ?></th>
                    <td><?= h($fournisseur->site) ?></td>
                </tr>
                <tr>
                    <th><?= __('Paiement') ?></th>
                    <td><?= $fournisseur->has('paiement') ? $this->Html->link($fournisseur->paiement->id, ['controller' => 'Paiements', 'action' => 'view', $fournisseur->paiement->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($fournisseur->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adresse') ?></th>
                    <td><?= h($fournisseur->adresse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Delegation') ?></th>
                    <td><?= $fournisseur->has('delegation') ? $this->Html->link($fournisseur->delegation->name, ['controller' => 'Delegations', 'action' => 'view', $fournisseur->delegation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Localite') ?></th>
                    <td><?= $fournisseur->has('localite') ? $this->Html->link($fournisseur->localite->name, ['controller' => 'Localites', 'action' => 'view', $fournisseur->localite->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Villes') ?></th>
                    <td><?= h($fournisseur->villes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codecl') ?></th>
                    <td><?= h($fournisseur->codecl) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fournisseur') ?></th>
                    <td><?= h($fournisseur->fournisseur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nomalternatif') ?></th>
                    <td><?= h($fournisseur->nomalternatif) ?></td>
                </tr>
                <tr>
                    <th><?= __('RC') ?></th>
                    <td><?= h($fournisseur->RC) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codedouane') ?></th>
                    <td><?= h($fournisseur->codedouane) ?></td>
                </tr>
                <tr>
                    <th><?= __('Matricule Fiscale') ?></th>
                    <td><?= h($fournisseur->matricule_fiscale) ?></td>
                </tr>
                <tr>
                    <th><?= __('BAN') ?></th>
                    <td><?= h($fournisseur->BAN) ?></td>
                </tr>
                <tr>
                    <th><?= __('AjusterTVA') ?></th>
                    <td><?= h($fournisseur->ajusterTVA) ?></td>
                </tr>
                <tr>
                    <th><?= __('NumTVA') ?></th>
                    <td><?= h($fournisseur->numTVA) ?></td>
                </tr>
                <tr>
                    <th><?= __('Capital') ?></th>
                    <td><?= h($fournisseur->capital) ?></td>
                </tr>
                <tr>
                    <th><?= __('Port') ?></th>
                    <td><?= h($fournisseur->port) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tags') ?></th>
                    <td><?= h($fournisseur->tags) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commercial') ?></th>
                    <td><?= h($fournisseur->commercial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Logo') ?></th>
                    <td><?= h($fournisseur->logo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $fournisseur->has('category') ? $this->Html->link($fournisseur->category->Description, ['controller' => 'Categories', 'action' => 'view', $fournisseur->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($fournisseur->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typefournisseur Id') ?></th>
                    <td><?= $fournisseur->typefournisseur_id === null ? '' : $this->Number->format($fournisseur->typefournisseur_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typelocalisation Id') ?></th>
                    <td><?= $fournisseur->typelocalisation_id === null ? '' : $this->Number->format($fournisseur->typelocalisation_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Region Id') ?></th>
                    <td><?= $fournisseur->region_id === null ? '' : $this->Number->format($fournisseur->region_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Devise Id') ?></th>
                    <td><?= $fournisseur->devise_id === null ? '' : $this->Number->format($fournisseur->devise_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typeutilisateur Id') ?></th>
                    <td><?= $fournisseur->typeutilisateur_id === null ? '' : $this->Number->format($fournisseur->typeutilisateur_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Exo') ?></th>
                    <td><?= $fournisseur->exo === null ? '' : $this->Number->format($fournisseur->exo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gouvernorat Id') ?></th>
                    <td><?= $fournisseur->gouvernorat_id === null ? '' : $this->Number->format($fournisseur->gouvernorat_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typetier Id') ?></th>
                    <td><?= $fournisseur->typetier_id === null ? '' : $this->Number->format($fournisseur->typetier_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typeentite Id') ?></th>
                    <td><?= $fournisseur->typeentite_id === null ? '' : $this->Number->format($fournisseur->typeentite_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prospect Id') ?></th>
                    <td><?= $fournisseur->prospect_id === null ? '' : $this->Number->format($fournisseur->prospect_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salari Id') ?></th>
                    <td><?= $fournisseur->salari_id === null ? '' : $this->Number->format($fournisseur->salari_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Incoterm Id') ?></th>
                    <td><?= $fournisseur->incoterm_id === null ? '' : $this->Number->format($fournisseur->incoterm_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemodification') ?></th>
                    <td><?= h($fournisseur->datemodification) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Factures') ?></h4>
                <?php if (!empty($fournisseur->factures)) : ?>
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
                        <?php foreach ($fournisseur->factures as $factures) : ?>
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
            <div class="related">
                <h4><?= __('Related Livraisons') ?></h4>
                <?php if (!empty($fournisseur->livraisons)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Commandefournisseur Id') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Fournisseur Id') ?></th>
                            <th><?= __('Adresselivraisonfournisseur Id') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Depot Id') ?></th>
                            <th><?= __('Cartecarburant Id') ?></th>
                            <th><?= __('Materieltransport Id') ?></th>
                            <th><?= __('Kilometragedepart') ?></th>
                            <th><?= __('Kilometragearrive') ?></th>
                            <th><?= __('Chauffeur') ?></th>
                            <th><?= __('Convoyeur') ?></th>
                            <th><?= __('Valide') ?></th>
                            <th><?= __('Remise') ?></th>
                            <th><?= __('Tva') ?></th>
                            <th><?= __('Fodec') ?></th>
                            <th><?= __('Ttc') ?></th>
                            <th><?= __('Ht') ?></th>
                            <th><?= __('Facture Id') ?></th>
                            <th><?= __('Montant Regler') ?></th>
                            <th><?= __('Typelivraison') ?></th>
                            <th><?= __('Dossierimportation Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($fournisseur->livraisons as $livraisons) : ?>
                        <tr>
                            <td><?= h($livraisons->id) ?></td>
                            <td><?= h($livraisons->commandefournisseur_id) ?></td>
                            <td><?= h($livraisons->numero) ?></td>
                            <td><?= h($livraisons->date) ?></td>
                            <td><?= h($livraisons->fournisseur_id) ?></td>
                            <td><?= h($livraisons->adresselivraisonfournisseur_id) ?></td>
                            <td><?= h($livraisons->pointdevente_id) ?></td>
                            <td><?= h($livraisons->depot_id) ?></td>
                            <td><?= h($livraisons->cartecarburant_id) ?></td>
                            <td><?= h($livraisons->materieltransport_id) ?></td>
                            <td><?= h($livraisons->kilometragedepart) ?></td>
                            <td><?= h($livraisons->kilometragearrive) ?></td>
                            <td><?= h($livraisons->chauffeur) ?></td>
                            <td><?= h($livraisons->convoyeur) ?></td>
                            <td><?= h($livraisons->valide) ?></td>
                            <td><?= h($livraisons->remise) ?></td>
                            <td><?= h($livraisons->tva) ?></td>
                            <td><?= h($livraisons->fodec) ?></td>
                            <td><?= h($livraisons->ttc) ?></td>
                            <td><?= h($livraisons->ht) ?></td>
                            <td><?= h($livraisons->facture_id) ?></td>
                            <td><?= h($livraisons->Montant_Regler) ?></td>
                            <td><?= h($livraisons->typelivraison) ?></td>
                            <td><?= h($livraisons->dossierimportation_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Livraisons', 'action' => 'view', $livraisons->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Livraisons', 'action' => 'edit', $livraisons->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Livraisons', 'action' => 'delete', $livraisons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livraisons->id)]) ?>
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
