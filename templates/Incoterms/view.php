<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Incoterm $incoterm
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Incoterm'), ['action' => 'edit', $incoterm->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Incoterm'), ['action' => 'delete', $incoterm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $incoterm->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Incoterms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Incoterm'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="incoterms view content">
            <h3><?= h($incoterm->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($incoterm->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($incoterm->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($incoterm->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Commandeclients') ?></h4>
                <?php if (!empty($incoterm->commandeclients)) : ?>
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
                        <?php foreach ($incoterm->commandeclients as $commandeclients) : ?>
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
            <div class="related">
                <h4><?= __('Related Factureclients') ?></h4>
                <?php if (!empty($incoterm->factureclients)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Depot Id') ?></th>
                            <th><?= __('Materieltransport Id') ?></th>
                            <th><?= __('Cartecarburant Id') ?></th>
                            <th><?= __('Chauffeur Id') ?></th>
                            <th><?= __('Convoyeur Id') ?></th>
                            <th><?= __('Totalht') ?></th>
                            <th><?= __('Totalremise') ?></th>
                            <th><?= __('Totalfodec') ?></th>
                            <th><?= __('Totaltva') ?></th>
                            <th><?= __('Totalttc') ?></th>
                            <th><?= __('Kilometragearrive') ?></th>
                            <th><?= __('Kilometragedepart') ?></th>
                            <th><?= __('Adresselivraisonclient Id') ?></th>
                            <th><?= __('Payementcomptant') ?></th>
                            <th><?= __('Tpe') ?></th>
                            <th><?= __('Poste') ?></th>
                            <th><?= __('Bonlivraison Id') ?></th>
                            <th><?= __('Escompte') ?></th>
                            <th><?= __('Montant Regler') ?></th>
                            <th><?= __('Commandeclient Id') ?></th>
                            <th><?= __('Projet Id') ?></th>
                            <th><?= __('TvaOnOff') ?></th>
                            <th><?= __('Incoterm Id') ?></th>
                            <th><?= __('Location Incoterms') ?></th>
                            <th><?= __('Options Incotermtotalpdf') ?></th>
                            <th><?= __('Options Istotaltransportdetaille') ?></th>
                            <th><?= __('Options Indicationenpdf') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($incoterm->factureclients as $factureclients) : ?>
                        <tr>
                            <td><?= h($factureclients->id) ?></td>
                            <td><?= h($factureclients->numero) ?></td>
                            <td><?= h($factureclients->date) ?></td>
                            <td><?= h($factureclients->client_id) ?></td>
                            <td><?= h($factureclients->pointdevente_id) ?></td>
                            <td><?= h($factureclients->depot_id) ?></td>
                            <td><?= h($factureclients->materieltransport_id) ?></td>
                            <td><?= h($factureclients->cartecarburant_id) ?></td>
                            <td><?= h($factureclients->chauffeur_id) ?></td>
                            <td><?= h($factureclients->convoyeur_id) ?></td>
                            <td><?= h($factureclients->totalht) ?></td>
                            <td><?= h($factureclients->totalremise) ?></td>
                            <td><?= h($factureclients->totalfodec) ?></td>
                            <td><?= h($factureclients->totaltva) ?></td>
                            <td><?= h($factureclients->totalttc) ?></td>
                            <td><?= h($factureclients->kilometragearrive) ?></td>
                            <td><?= h($factureclients->kilometragedepart) ?></td>
                            <td><?= h($factureclients->adresselivraisonclient_id) ?></td>
                            <td><?= h($factureclients->payementcomptant) ?></td>
                            <td><?= h($factureclients->tpe) ?></td>
                            <td><?= h($factureclients->poste) ?></td>
                            <td><?= h($factureclients->bonlivraison_id) ?></td>
                            <td><?= h($factureclients->escompte) ?></td>
                            <td><?= h($factureclients->Montant_Regler) ?></td>
                            <td><?= h($factureclients->commandeclient_id) ?></td>
                            <td><?= h($factureclients->projet_id) ?></td>
                            <td><?= h($factureclients->tvaOnOff) ?></td>
                            <td><?= h($factureclients->incoterm_id) ?></td>
                            <td><?= h($factureclients->location_incoterms) ?></td>
                            <td><?= h($factureclients->options_incotermtotalpdf) ?></td>
                            <td><?= h($factureclients->options_istotaltransportdetaille) ?></td>
                            <td><?= h($factureclients->options_indicationenpdf) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Factureclients', 'action' => 'view', $factureclients->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Factureclients', 'action' => 'edit', $factureclients->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Factureclients', 'action' => 'delete', $factureclients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factureclients->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Factures') ?></h4>
                <?php if (!empty($incoterm->factures)) : ?>
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
                        <?php foreach ($incoterm->factures as $factures) : ?>
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
                <h4><?= __('Related Fournisseurs') ?></h4>
                <?php if (!empty($incoterm->fournisseurs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Typefournisseur Id') ?></th>
                            <th><?= __('Typelocalisation Id') ?></th>
                            <th><?= __('Compte Comptable') ?></th>
                            <th><?= __('Ville Id') ?></th>
                            <th><?= __('Codepostal') ?></th>
                            <th><?= __('Region Id') ?></th>
                            <th><?= __('Pay Id') ?></th>
                            <th><?= __('Activite') ?></th>
                            <th><?= __('Secteur') ?></th>
                            <th><?= __('Tel') ?></th>
                            <th><?= __('Fax') ?></th>
                            <th><?= __('Mail') ?></th>
                            <th><?= __('Site') ?></th>
                            <th><?= __('Paiement Id') ?></th>
                            <th><?= __('Devise Id') ?></th>
                            <th><?= __('Typeutilisateur Id') ?></th>
                            <th><?= __('Exo') ?></th>
                            <th><?= __('Code') ?></th>
                            <th><?= __('Adresse') ?></th>
                            <th><?= __('Gouvernorat Id') ?></th>
                            <th><?= __('Delegation Id') ?></th>
                            <th><?= __('Localite Id') ?></th>
                            <th><?= __('Typetier Id') ?></th>
                            <th><?= __('Typeentite Id') ?></th>
                            <th><?= __('Villes') ?></th>
                            <th><?= __('Prospect Id') ?></th>
                            <th><?= __('Codecl') ?></th>
                            <th><?= __('Fournisseur') ?></th>
                            <th><?= __('Nomalternatif') ?></th>
                            <th><?= __('RC') ?></th>
                            <th><?= __('Codedouane') ?></th>
                            <th><?= __('Matricule Fiscale') ?></th>
                            <th><?= __('BAN') ?></th>
                            <th><?= __('AjusterTVA') ?></th>
                            <th><?= __('NumTVA') ?></th>
                            <th><?= __('Salari Id') ?></th>
                            <th><?= __('Capital') ?></th>
                            <th><?= __('Incoterm Id') ?></th>
                            <th><?= __('Port') ?></th>
                            <th><?= __('Tags') ?></th>
                            <th><?= __('Commercial') ?></th>
                            <th><?= __('Logo') ?></th>
                            <th><?= __('Datemodification') ?></th>
                            <th><?= __('Categorie Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($incoterm->fournisseurs as $fournisseurs) : ?>
                        <tr>
                            <td><?= h($fournisseurs->id) ?></td>
                            <td><?= h($fournisseurs->name) ?></td>
                            <td><?= h($fournisseurs->typefournisseur_id) ?></td>
                            <td><?= h($fournisseurs->typelocalisation_id) ?></td>
                            <td><?= h($fournisseurs->compte_comptable) ?></td>
                            <td><?= h($fournisseurs->ville_id) ?></td>
                            <td><?= h($fournisseurs->codepostal) ?></td>
                            <td><?= h($fournisseurs->region_id) ?></td>
                            <td><?= h($fournisseurs->pay_id) ?></td>
                            <td><?= h($fournisseurs->activite) ?></td>
                            <td><?= h($fournisseurs->secteur) ?></td>
                            <td><?= h($fournisseurs->tel) ?></td>
                            <td><?= h($fournisseurs->fax) ?></td>
                            <td><?= h($fournisseurs->mail) ?></td>
                            <td><?= h($fournisseurs->site) ?></td>
                            <td><?= h($fournisseurs->paiement_id) ?></td>
                            <td><?= h($fournisseurs->devise_id) ?></td>
                            <td><?= h($fournisseurs->typeutilisateur_id) ?></td>
                            <td><?= h($fournisseurs->exo) ?></td>
                            <td><?= h($fournisseurs->code) ?></td>
                            <td><?= h($fournisseurs->adresse) ?></td>
                            <td><?= h($fournisseurs->gouvernorat_id) ?></td>
                            <td><?= h($fournisseurs->delegation_id) ?></td>
                            <td><?= h($fournisseurs->localite_id) ?></td>
                            <td><?= h($fournisseurs->typetier_id) ?></td>
                            <td><?= h($fournisseurs->typeentite_id) ?></td>
                            <td><?= h($fournisseurs->villes) ?></td>
                            <td><?= h($fournisseurs->prospect_id) ?></td>
                            <td><?= h($fournisseurs->codecl) ?></td>
                            <td><?= h($fournisseurs->fournisseur) ?></td>
                            <td><?= h($fournisseurs->nomalternatif) ?></td>
                            <td><?= h($fournisseurs->RC) ?></td>
                            <td><?= h($fournisseurs->codedouane) ?></td>
                            <td><?= h($fournisseurs->matricule_fiscale) ?></td>
                            <td><?= h($fournisseurs->BAN) ?></td>
                            <td><?= h($fournisseurs->ajusterTVA) ?></td>
                            <td><?= h($fournisseurs->numTVA) ?></td>
                            <td><?= h($fournisseurs->salari_id) ?></td>
                            <td><?= h($fournisseurs->capital) ?></td>
                            <td><?= h($fournisseurs->incoterm_id) ?></td>
                            <td><?= h($fournisseurs->port) ?></td>
                            <td><?= h($fournisseurs->tags) ?></td>
                            <td><?= h($fournisseurs->commercial) ?></td>
                            <td><?= h($fournisseurs->logo) ?></td>
                            <td><?= h($fournisseurs->datemodification) ?></td>
                            <td><?= h($fournisseurs->categorie_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Fournisseurs', 'action' => 'view', $fournisseurs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Fournisseurs', 'action' => 'edit', $fournisseurs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fournisseurs', 'action' => 'delete', $fournisseurs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fournisseurs->id)]) ?>
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
