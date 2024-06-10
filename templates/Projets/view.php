<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projet $projet
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Projet'), ['action' => 'edit', $projet->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Projet'), ['action' => 'delete', $projet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projet->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Projets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Projet'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projets view content">
            <h3><?= h($projet->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $projet->has('client') ? $this->Html->link($projet->client->id, ['controller' => 'Clients', 'action' => 'view', $projet->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($projet->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Libelle') ?></th>
                    <td><?= h($projet->libelle) ?></td>
                </tr>
                <tr>
                    <th><?= __('Visibilite') ?></th>
                    <td><?= h($projet->visibilite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Probabilite') ?></th>
                    <td><?= h($projet->probabilite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Montant') ?></th>
                    <td><?= h($projet->montant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Budget') ?></th>
                    <td><?= h($projet->budget) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($projet->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Commercial') ?></th>
                    <td><?= $projet->has('commercial') ? $this->Html->link($projet->commercial->name, ['controller' => 'Commercials', 'action' => 'view', $projet->commercial->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Personnel') ?></th>
                    <td><?= $projet->has('personnel') ? $this->Html->link($projet->personnel->id, ['controller' => 'Personnels', 'action' => 'view', $projet->personnel->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Devise') ?></th>
                    <td><?= $projet->has('devise') ? $this->Html->link($projet->devise->name, ['controller' => 'Devises', 'action' => 'view', $projet->devise->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Banque') ?></th>
                    <td><?= $projet->has('banque') ? $this->Html->link($projet->banque->name, ['controller' => 'Banques', 'action' => 'view', $projet->banque->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Lien') ?></th>
                    <td><?= h($projet->lien) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($projet->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Opportunite Id') ?></th>
                    <td><?= $projet->opportunite_id === null ? '' : $this->Number->format($projet->opportunite_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valide') ?></th>
                    <td><?= $projet->valide === null ? '' : $this->Number->format($projet->valide) ?></td>
                </tr>
                <tr>
                    <th><?= __('Suivre Opportunite') ?></th>
                    <td><?= $projet->suivre_opportunite === null ? '' : $this->Number->format($projet->suivre_opportunite) ?></td>
                </tr>
                <tr>
                    <th><?= __('Suivre Tache') ?></th>
                    <td><?= $projet->suivre_tache === null ? '' : $this->Number->format($projet->suivre_tache) ?></td>
                </tr>
                <tr>
                    <th><?= __('Facturer Temps Passe') ?></th>
                    <td><?= $projet->facturer_temps_passe === null ? '' : $this->Number->format($projet->facturer_temps_passe) ?></td>
                </tr>
                <tr>
                    <th><?= __('EtatTache') ?></th>
                    <td><?= $projet->etatTache === null ? '' : $this->Number->format($projet->etatTache) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tagcategorie Id') ?></th>
                    <td><?= $projet->tagcategorie_id === null ? '' : $this->Number->format($projet->tagcategorie_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($projet->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datefin') ?></th>
                    <td><?= h($projet->datefin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datemodification') ?></th>
                    <td><?= h($projet->datemodification) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Commandefournisseurs') ?></h4>
                <?php if (!empty($projet->commandefournisseurs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Demandeoffredeprix Id') ?></th>
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
                            <th><?= __('Livraison Id') ?></th>
                            <th><?= __('Etatliv') ?></th>
                            <th><?= __('Typecommande') ?></th>
                            <th><?= __('Projet Id') ?></th>
                            <th><?= __('Facture Id') ?></th>
                            <th><?= __('Conteneur Id') ?></th>
                            <th><?= __('TvaOnOff') ?></th>
                            <th><?= __('Envoiemail') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($projet->commandefournisseurs as $commandefournisseurs) : ?>
                        <tr>
                            <td><?= h($commandefournisseurs->id) ?></td>
                            <td><?= h($commandefournisseurs->demandeoffredeprix_id) ?></td>
                            <td><?= h($commandefournisseurs->numero) ?></td>
                            <td><?= h($commandefournisseurs->date) ?></td>
                            <td><?= h($commandefournisseurs->fournisseur_id) ?></td>
                            <td><?= h($commandefournisseurs->pointdevente_id) ?></td>
                            <td><?= h($commandefournisseurs->depot_id) ?></td>
                            <td><?= h($commandefournisseurs->cartecarburant_id) ?></td>
                            <td><?= h($commandefournisseurs->materieltransport_id) ?></td>
                            <td><?= h($commandefournisseurs->chauffeur) ?></td>
                            <td><?= h($commandefournisseurs->convoyeur) ?></td>
                            <td><?= h($commandefournisseurs->valide) ?></td>
                            <td><?= h($commandefournisseurs->remise) ?></td>
                            <td><?= h($commandefournisseurs->tva) ?></td>
                            <td><?= h($commandefournisseurs->fodec) ?></td>
                            <td><?= h($commandefournisseurs->ttc) ?></td>
                            <td><?= h($commandefournisseurs->ht) ?></td>
                            <td><?= h($commandefournisseurs->livraison_id) ?></td>
                            <td><?= h($commandefournisseurs->etatliv) ?></td>
                            <td><?= h($commandefournisseurs->typecommande) ?></td>
                            <td><?= h($commandefournisseurs->projet_id) ?></td>
                            <td><?= h($commandefournisseurs->facture_id) ?></td>
                            <td><?= h($commandefournisseurs->conteneur_id) ?></td>
                            <td><?= h($commandefournisseurs->tvaOnOff) ?></td>
                            <td><?= h($commandefournisseurs->envoiemail) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Commandefournisseurs', 'action' => 'view', $commandefournisseurs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Commandefournisseurs', 'action' => 'edit', $commandefournisseurs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Commandefournisseurs', 'action' => 'delete', $commandefournisseurs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commandefournisseurs->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Demandeoffredeprixes') ?></h4>
                <?php if (!empty($projet->demandeoffredeprixes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Consultation') ?></th>
                            <th><?= __('Commande') ?></th>
                            <th><?= __('Typeoffredeprix') ?></th>
                            <th><?= __('Projet Id') ?></th>
                            <th><?= __('Commandeclient') ?></th>
                            <th><?= __('Envoiemail') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($projet->demandeoffredeprixes as $demandeoffredeprixes) : ?>
                        <tr>
                            <td><?= h($demandeoffredeprixes->id) ?></td>
                            <td><?= h($demandeoffredeprixes->date) ?></td>
                            <td><?= h($demandeoffredeprixes->numero) ?></td>
                            <td><?= h($demandeoffredeprixes->consultation) ?></td>
                            <td><?= h($demandeoffredeprixes->commande) ?></td>
                            <td><?= h($demandeoffredeprixes->typeoffredeprix) ?></td>
                            <td><?= h($demandeoffredeprixes->projet_id) ?></td>
                            <td><?= h($demandeoffredeprixes->commandeclient) ?></td>
                            <td><?= h($demandeoffredeprixes->envoiemail) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Demandeoffredeprixes', 'action' => 'view', $demandeoffredeprixes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Demandeoffredeprixes', 'action' => 'edit', $demandeoffredeprixes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Demandeoffredeprixes', 'action' => 'delete', $demandeoffredeprixes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demandeoffredeprixes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Factureclients') ?></h4>
                <?php if (!empty($projet->factureclients)) : ?>
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
                        <?php foreach ($projet->factureclients as $factureclients) : ?>
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
                <?php if (!empty($projet->factures)) : ?>
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
                        <?php foreach ($projet->factures as $factures) : ?>
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
                <h4><?= __('Related Reglementclients') ?></h4>
                <?php if (!empty($projet->reglementclients)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Montant') ?></th>
                            <th><?= __('Montantaffecte') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Numeroconca') ?></th>
                            <th><?= __('SR') ?></th>
                            <th><?= __('NB') ?></th>
                            <th><?= __('NumNB') ?></th>
                            <th><?= __('Client') ?></th>
                            <th><?= __('Mg') ?></th>
                            <th><?= __('Exercice Id') ?></th>
                            <th><?= __('Utilisateur Id') ?></th>
                            <th><?= __('Type') ?></th>
                            <th><?= __('Affectation Id') ?></th>
                            <th><?= __('Emi') ?></th>
                            <th><?= __('Numeropieceintegre') ?></th>
                            <th><?= __('Group Id') ?></th>
                            <th><?= __('Differance') ?></th>
                            <th><?= __('Observation') ?></th>
                            <th><?= __('Projet Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($projet->reglementclients as $reglementclients) : ?>
                        <tr>
                            <td><?= h($reglementclients->id) ?></td>
                            <td><?= h($reglementclients->client_id) ?></td>
                            <td><?= h($reglementclients->Date) ?></td>
                            <td><?= h($reglementclients->Montant) ?></td>
                            <td><?= h($reglementclients->montantaffecte) ?></td>
                            <td><?= h($reglementclients->pointdevente_id) ?></td>
                            <td><?= h($reglementclients->numero) ?></td>
                            <td><?= h($reglementclients->numeroconca) ?></td>
                            <td><?= h($reglementclients->SR) ?></td>
                            <td><?= h($reglementclients->NB) ?></td>
                            <td><?= h($reglementclients->NumNB) ?></td>
                            <td><?= h($reglementclients->client) ?></td>
                            <td><?= h($reglementclients->mg) ?></td>
                            <td><?= h($reglementclients->exercice_id) ?></td>
                            <td><?= h($reglementclients->utilisateur_id) ?></td>
                            <td><?= h($reglementclients->type) ?></td>
                            <td><?= h($reglementclients->affectation_id) ?></td>
                            <td><?= h($reglementclients->emi) ?></td>
                            <td><?= h($reglementclients->numeropieceintegre) ?></td>
                            <td><?= h($reglementclients->group_id) ?></td>
                            <td><?= h($reglementclients->differance) ?></td>
                            <td><?= h($reglementclients->observation) ?></td>
                            <td><?= h($reglementclients->projet_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Reglementclients', 'action' => 'view', $reglementclients->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Reglementclients', 'action' => 'edit', $reglementclients->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reglementclients', 'action' => 'delete', $reglementclients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reglementclients->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Reglements') ?></h4>
                <?php if (!empty($projet->reglements)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Numeroconca') ?></th>
                            <th><?= __('Fournisseur Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Montant') ?></th>
                            <th><?= __('Importation Id') ?></th>
                            <th><?= __('Montantdevise') ?></th>
                            <th><?= __('Libre') ?></th>
                            <th><?= __('Utilisateur Id') ?></th>
                            <th><?= __('Exercice Id') ?></th>
                            <th><?= __('Designation') ?></th>
                            <th><?= __('Impaye') ?></th>
                            <th><?= __('Differance') ?></th>
                            <th><?= __('Numeropieceintegre') ?></th>
                            <th><?= __('RG NO') ?></th>
                            <th><?= __('Devise Id') ?></th>
                            <th><?= __('Taux') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Projet Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($projet->reglements as $reglements) : ?>
                        <tr>
                            <td><?= h($reglements->id) ?></td>
                            <td><?= h($reglements->numeroconca) ?></td>
                            <td><?= h($reglements->fournisseur_id) ?></td>
                            <td><?= h($reglements->Date) ?></td>
                            <td><?= h($reglements->Montant) ?></td>
                            <td><?= h($reglements->importation_id) ?></td>
                            <td><?= h($reglements->montantdevise) ?></td>
                            <td><?= h($reglements->libre) ?></td>
                            <td><?= h($reglements->utilisateur_id) ?></td>
                            <td><?= h($reglements->exercice_id) ?></td>
                            <td><?= h($reglements->designation) ?></td>
                            <td><?= h($reglements->impaye) ?></td>
                            <td><?= h($reglements->differance) ?></td>
                            <td><?= h($reglements->numeropieceintegre) ?></td>
                            <td><?= h($reglements->RG_NO) ?></td>
                            <td><?= h($reglements->devise_id) ?></td>
                            <td><?= h($reglements->taux) ?></td>
                            <td><?= h($reglements->pointdevente_id) ?></td>
                            <td><?= h($reglements->projet_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Reglements', 'action' => 'view', $reglements->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Reglements', 'action' => 'edit', $reglements->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reglements', 'action' => 'delete', $reglements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reglements->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Taches') ?></h4>
                <?php if (!empty($projet->taches)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Ref') ?></th>
                            <th><?= __('Libelle') ?></th>
                            <th><?= __('Projet Id') ?></th>
                            <th><?= __('Dated') ?></th>
                            <th><?= __('Datefin') ?></th>
                            <th><?= __('Duree') ?></th>
                            <th><?= __('Progression Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Contact') ?></th>
                            <th><?= __('Dureem') ?></th>
                            <th><?= __('Personnel Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($projet->taches as $taches) : ?>
                        <tr>
                            <td><?= h($taches->id) ?></td>
                            <td><?= h($taches->ref) ?></td>
                            <td><?= h($taches->libelle) ?></td>
                            <td><?= h($taches->projet_id) ?></td>
                            <td><?= h($taches->dated) ?></td>
                            <td><?= h($taches->datefin) ?></td>
                            <td><?= h($taches->duree) ?></td>
                            <td><?= h($taches->progression_id) ?></td>
                            <td><?= h($taches->description) ?></td>
                            <td><?= h($taches->contact) ?></td>
                            <td><?= h($taches->dureem) ?></td>
                            <td><?= h($taches->personnel_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Taches', 'action' => 'view', $taches->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Taches', 'action' => 'edit', $taches->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Taches', 'action' => 'delete', $taches->id], ['confirm' => __('Are you sure you want to delete # {0}?', $taches->id)]) ?>
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
