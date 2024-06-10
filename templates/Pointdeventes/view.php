<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pointdevente $pointdevente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pointdevente'), ['action' => 'edit', $pointdevente->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pointdevente'), ['action' => 'delete', $pointdevente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pointdevente->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pointdeventes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pointdevente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pointdeventes view content">
            <h3><?= h($pointdevente->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($pointdevente->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($pointdevente->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adresse') ?></th>
                    <td><?= h($pointdevente->adresse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Matriclefiscale') ?></th>
                    <td><?= h($pointdevente->matriclefiscale) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pointdevente->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ville Id') ?></th>
                    <td><?= $pointdevente->ville_id === null ? '' : $this->Number->format($pointdevente->ville_id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Bondetransferts') ?></h4>
                <?php if (!empty($pointdevente->bondetransferts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Depotarrive Id') ?></th>
                            <th><?= __('Depotsortie Id') ?></th>
                            <th><?= __('Cartecarburant Id') ?></th>
                            <th><?= __('Materieltransport Id') ?></th>
                            <th><?= __('Chauffeur Id') ?></th>
                            <th><?= __('Conffaieur Id') ?></th>
                            <th><?= __('Bonreceptionstock Id') ?></th>
                            <th><?= __('Kilometragedepart') ?></th>
                            <th><?= __('Kilometragearrive') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($pointdevente->bondetransferts as $bondetransferts) : ?>
                        <tr>
                            <td><?= h($bondetransferts->id) ?></td>
                            <td><?= h($bondetransferts->numero) ?></td>
                            <td><?= h($bondetransferts->date) ?></td>
                            <td><?= h($bondetransferts->pointdevente_id) ?></td>
                            <td><?= h($bondetransferts->depotarrive_id) ?></td>
                            <td><?= h($bondetransferts->depotsortie_id) ?></td>
                            <td><?= h($bondetransferts->cartecarburant_id) ?></td>
                            <td><?= h($bondetransferts->materieltransport_id) ?></td>
                            <td><?= h($bondetransferts->chauffeur_id) ?></td>
                            <td><?= h($bondetransferts->conffaieur_id) ?></td>
                            <td><?= h($bondetransferts->bonreceptionstock_id) ?></td>
                            <td><?= h($bondetransferts->kilometragedepart) ?></td>
                            <td><?= h($bondetransferts->kilometragearrive) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Bondetransferts', 'action' => 'view', $bondetransferts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Bondetransferts', 'action' => 'edit', $bondetransferts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bondetransferts', 'action' => 'delete', $bondetransferts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bondetransferts->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Factures') ?></h4>
                <?php if (!empty($pointdevente->factures)) : ?>
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
                        <?php foreach ($pointdevente->factures as $factures) : ?>
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
                <h4><?= __('Related Personnels') ?></h4>
                <?php if (!empty($pointdevente->personnels)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nom') ?></th>
                            <th><?= __('Prenom') ?></th>
                            <th><?= __('Fonction Id') ?></th>
                            <th><?= __('Code') ?></th>
                            <th><?= __('Sexe Id') ?></th>
                            <th><?= __('Dateentre') ?></th>
                            <th><?= __('Situationfamiliale Id') ?></th>
                            <th><?= __('Nombreenfant') ?></th>
                            <th><?= __('Matriculecnss') ?></th>
                            <th><?= __('Age') ?></th>
                            <th><?= __('Chefdefamille') ?></th>
                            <th><?= __('Typecontrat Id') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Image') ?></th>
                            <th><?= __('Tel') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Salarie') ?></th>
                            <th><?= __('Responsable') ?></th>
                            <th><?= __('Report Validator') ?></th>
                            <th><?= __('Request Validator') ?></th>
                            <th><?= __('Adresse') ?></th>
                            <th><?= __('Codepostal') ?></th>
                            <th><?= __('Ville') ?></th>
                            <th><?= __('Pay Id') ?></th>
                            <th><?= __('Canton Id') ?></th>
                            <th><?= __('Telportable') ?></th>
                            <th><?= __('Fax') ?></th>
                            <th><?= __('Compte Comptable') ?></th>
                            <th><?= __('Tarif Horaire Moyen') ?></th>
                            <th><?= __('Tarif Journalier Moyen') ?></th>
                            <th><?= __('Salaire') ?></th>
                            <th><?= __('Heures De Travail') ?></th>
                            <th><?= __('Date Fin') ?></th>
                            <th><?= __('Datedenaissance') ?></th>
                            <th><?= __('Notes') ?></th>
                            <th><?= __('Signature') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($pointdevente->personnels as $personnels) : ?>
                        <tr>
                            <td><?= h($personnels->id) ?></td>
                            <td><?= h($personnels->nom) ?></td>
                            <td><?= h($personnels->prenom) ?></td>
                            <td><?= h($personnels->fonction_id) ?></td>
                            <td><?= h($personnels->code) ?></td>
                            <td><?= h($personnels->sexe_id) ?></td>
                            <td><?= h($personnels->dateentre) ?></td>
                            <td><?= h($personnels->situationfamiliale_id) ?></td>
                            <td><?= h($personnels->nombreenfant) ?></td>
                            <td><?= h($personnels->matriculecnss) ?></td>
                            <td><?= h($personnels->age) ?></td>
                            <td><?= h($personnels->chefdefamille) ?></td>
                            <td><?= h($personnels->typecontrat_id) ?></td>
                            <td><?= h($personnels->pointdevente_id) ?></td>
                            <td><?= h($personnels->image) ?></td>
                            <td><?= h($personnels->tel) ?></td>
                            <td><?= h($personnels->email) ?></td>
                            <td><?= h($personnels->salarie) ?></td>
                            <td><?= h($personnels->responsable) ?></td>
                            <td><?= h($personnels->report_validator) ?></td>
                            <td><?= h($personnels->request_validator) ?></td>
                            <td><?= h($personnels->adresse) ?></td>
                            <td><?= h($personnels->codepostal) ?></td>
                            <td><?= h($personnels->ville) ?></td>
                            <td><?= h($personnels->pay_id) ?></td>
                            <td><?= h($personnels->canton_id) ?></td>
                            <td><?= h($personnels->telportable) ?></td>
                            <td><?= h($personnels->fax) ?></td>
                            <td><?= h($personnels->compte_comptable) ?></td>
                            <td><?= h($personnels->tarif_horaire_moyen) ?></td>
                            <td><?= h($personnels->tarif_journalier_moyen) ?></td>
                            <td><?= h($personnels->salaire) ?></td>
                            <td><?= h($personnels->heures_de_travail) ?></td>
                            <td><?= h($personnels->date_fin) ?></td>
                            <td><?= h($personnels->datedenaissance) ?></td>
                            <td><?= h($personnels->notes) ?></td>
                            <td><?= h($personnels->signature) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Personnels', 'action' => 'view', $personnels->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Personnels', 'action' => 'edit', $personnels->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Personnels', 'action' => 'delete', $personnels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personnels->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($pointdevente->users)) : ?>
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
                        <?php foreach ($pointdevente->users as $users) : ?>
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
                <?php if (!empty($pointdevente->utilisateurs)) : ?>
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
                        <?php foreach ($pointdevente->utilisateurs as $utilisateurs) : ?>
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
