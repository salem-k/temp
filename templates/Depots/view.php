<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Depot $depot
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Depot'), ['action' => 'edit', $depot->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Depot'), ['action' => 'delete', $depot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $depot->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Depots'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Depot'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="depots view content">
            <h3><?= h($depot->name) ?></h3>
            <style>
                      /* Add spacing between table rows */
                      table {
                        border-collapse: separate;
                        border-spacing: 10px; /* Adjust as needed */
                      }
                    </style>
            <table>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($depot->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($depot->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adresse') ?></th>
                    <td><?= h($depot->adresse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Matriclefiscale') ?></th>
                    <td><?= h($depot->matriclefiscale) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pointdevente') ?></th>
                    <td><?= $depot->has('pointdevente') ? $this->Html->link($depot->pointdevente->name, ['controller' => 'Pointdeventes', 'action' => 'view', $depot->pointdevente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($depot->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Bonreceptionstocks') ?></h4>
                <?php if (!empty($depot->bonreceptionstocks)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Depot Id') ?></th>
                            <th><?= __('Materieltransport Id') ?></th>
                            <th><?= __('Cartecarburant Id') ?></th>
                            <th><?= __('Personnel Id') ?></th>
                            <th><?= __('Conffaieur Id') ?></th>
                            <th><?= __('Chauffeur Id') ?></th>
                            <th><?= __('Kilometragedepart') ?></th>
                            <th><?= __('Kilometragearrive') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($depot->bonreceptionstocks as $bonreceptionstocks) : ?>
                        <tr>
                            <td><?= h($bonreceptionstocks->id) ?></td>
                            <td><?= h($bonreceptionstocks->numero) ?></td>
                            <td><?= h($bonreceptionstocks->date) ?></td>
                            <td><?= h($bonreceptionstocks->pointdevente_id) ?></td>
                            <td><?= h($bonreceptionstocks->depot_id) ?></td>
                            <td><?= h($bonreceptionstocks->materieltransport_id) ?></td>
                            <td><?= h($bonreceptionstocks->cartecarburant_id) ?></td>
                            <td><?= h($bonreceptionstocks->personnel_id) ?></td>
                            <td><?= h($bonreceptionstocks->conffaieur_id) ?></td>
                            <td><?= h($bonreceptionstocks->chauffeur_id) ?></td>
                            <td><?= h($bonreceptionstocks->kilometragedepart) ?></td>
                            <td><?= h($bonreceptionstocks->kilometragearrive) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Bonreceptionstocks', 'action' => 'view', $bonreceptionstocks->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Bonreceptionstocks', 'action' => 'edit', $bonreceptionstocks->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bonreceptionstocks', 'action' => 'delete', $bonreceptionstocks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bonreceptionstocks->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Bontransferts') ?></h4>
                <?php if (!empty($depot->bontransferts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Depot Id') ?></th>
                            <th><?= __('Depot To Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($depot->bontransferts as $bontransferts) : ?>
                        <tr>
                            <td><?= h($bontransferts->id) ?></td>
                            <td><?= h($bontransferts->reference) ?></td>
                            <td><?= h($bontransferts->date) ?></td>
                            <td><?= h($bontransferts->depot_id) ?></td>
                            <td><?= h($bontransferts->depot_to_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Bontransferts', 'action' => 'view', $bontransferts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Bontransferts', 'action' => 'edit', $bontransferts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bontransferts', 'action' => 'delete', $bontransferts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bontransferts->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Clients') ?></h4>
                <?php if (!empty($depot->clients)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nom') ?></th>
                            <th><?= __('Prenom') ?></th>
                            <th><?= __('DateNaissance') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Depot Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($depot->clients as $clients) : ?>
                        <tr>
                            <td><?= h($clients->id) ?></td>
                            <td><?= h($clients->nom) ?></td>
                            <td><?= h($clients->prenom) ?></td>
                            <td><?= h($clients->DateNaissance) ?></td>
                            <td><?= h($clients->created) ?></td>
                            <td><?= h($clients->email) ?></td>
                            <td><?= h($clients->depot_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Clients', 'action' => 'view', $clients->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Clients', 'action' => 'edit', $clients->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clients', 'action' => 'delete', $clients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clients->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Factureavoirs') ?></h4>
                <?php if (!empty($depot->factureavoirs)) : ?>
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
                        <?php foreach ($depot->factureavoirs as $factureavoirs) : ?>
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
                <?php if (!empty($depot->factures)) : ?>
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
                        <?php foreach ($depot->factures as $factures) : ?>
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
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($depot->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Personnel Id') ?></th>
                            <th><?= __('Utilisateur Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Login') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Depot Id') ?></th>
                            <th><?= __('Stocknegatif') ?></th>
                            <th><?= __('Notifdevis') ?></th>
                            <th><?= __('Notifcaisse') ?></th>
                            <th><?= __('Notifbsstock') ?></th>
                            <th><?= __('Notifaffaire') ?></th>
                            <th><?= __('Notifvisite') ?></th>
                            <th><?= __('Modifpmp') ?></th>
                            <th><?= __('Notifartdevis') ?></th>
                            <th><?= __('Imp Val Inventaire') ?></th>
                            <th><?= __('Imp Val Bonecart') ?></th>
                            <th><?= __('Trans Vers Prod') ?></th>
                            <th><?= __('Factureclient') ?></th>
                            <th><?= __('Notifcommandeclient') ?></th>
                            <th><?= __('MajNumero') ?></th>
                            <th><?= __('Poste') ?></th>
                            <th><?= __('Mail') ?></th>
                            <th><?= __('Validation') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($depot->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->personnel_id) ?></td>
                            <td><?= h($users->utilisateur_id) ?></td>
                            <td><?= h($users->name) ?></td>
                            <td><?= h($users->login) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->pointdevente_id) ?></td>
                            <td><?= h($users->depot_id) ?></td>
                            <td><?= h($users->stocknegatif) ?></td>
                            <td><?= h($users->notifdevis) ?></td>
                            <td><?= h($users->notifcaisse) ?></td>
                            <td><?= h($users->notifbsstock) ?></td>
                            <td><?= h($users->notifaffaire) ?></td>
                            <td><?= h($users->notifvisite) ?></td>
                            <td><?= h($users->modifpmp) ?></td>
                            <td><?= h($users->notifartdevis) ?></td>
                            <td><?= h($users->imp_val_inventaire) ?></td>
                            <td><?= h($users->imp_val_bonecart) ?></td>
                            <td><?= h($users->trans_vers_prod) ?></td>
                            <td><?= h($users->factureclient) ?></td>
                            <td><?= h($users->notifcommandeclient) ?></td>
                            <td><?= h($users->MajNumero) ?></td>
                            <td><?= h($users->poste) ?></td>
                            <td><?= h($users->mail) ?></td>
                            <td><?= h($users->validation) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Utilisateurs') ?></h4>
                <?php if (!empty($depot->utilisateurs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Personnel Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Login') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Depot Id') ?></th>
                            <th><?= __('Stocknegatif') ?></th>
                            <th><?= __('Notifdevis') ?></th>
                            <th><?= __('Notifcaisse') ?></th>
                            <th><?= __('Notifbsstock') ?></th>
                            <th><?= __('Notifaffaire') ?></th>
                            <th><?= __('Notifvisite') ?></th>
                            <th><?= __('Modifpmp') ?></th>
                            <th><?= __('Notifartdevis') ?></th>
                            <th><?= __('Imp Val Inventaire') ?></th>
                            <th><?= __('Imp Val Bonecart') ?></th>
                            <th><?= __('Trans Vers Prod') ?></th>
                            <th><?= __('Factureclient') ?></th>
                            <th><?= __('Notifcommandeclient') ?></th>
                            <th><?= __('MajNumero') ?></th>
                            <th><?= __('Commercial') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($depot->utilisateurs as $utilisateurs) : ?>
                        <tr>
                            <td><?= h($utilisateurs->id) ?></td>
                            <td><?= h($utilisateurs->personnel_id) ?></td>
                            <td><?= h($utilisateurs->name) ?></td>
                            <td><?= h($utilisateurs->login) ?></td>
                            <td><?= h($utilisateurs->password) ?></td>
                            <td><?= h($utilisateurs->pointdevente_id) ?></td>
                            <td><?= h($utilisateurs->depot_id) ?></td>
                            <td><?= h($utilisateurs->stocknegatif) ?></td>
                            <td><?= h($utilisateurs->notifdevis) ?></td>
                            <td><?= h($utilisateurs->notifcaisse) ?></td>
                            <td><?= h($utilisateurs->notifbsstock) ?></td>
                            <td><?= h($utilisateurs->notifaffaire) ?></td>
                            <td><?= h($utilisateurs->notifvisite) ?></td>
                            <td><?= h($utilisateurs->modifpmp) ?></td>
                            <td><?= h($utilisateurs->notifartdevis) ?></td>
                            <td><?= h($utilisateurs->imp_val_inventaire) ?></td>
                            <td><?= h($utilisateurs->imp_val_bonecart) ?></td>
                            <td><?= h($utilisateurs->trans_vers_prod) ?></td>
                            <td><?= h($utilisateurs->factureclient) ?></td>
                            <td><?= h($utilisateurs->notifcommandeclient) ?></td>
                            <td><?= h($utilisateurs->MajNumero) ?></td>
                            <td><?= h($utilisateurs->commercial) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Utilisateurs', 'action' => 'view', $utilisateurs->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Utilisateurs', 'action' => 'edit', $utilisateurs->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Utilisateurs', 'action' => 'delete', $utilisateurs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utilisateurs->id)]) ?>
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
