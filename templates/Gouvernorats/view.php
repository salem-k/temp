<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gouvernorat $gouvernorat
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Gouvernorat'), ['action' => 'edit', $gouvernorat->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Gouvernorat'), ['action' => 'delete', $gouvernorat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gouvernorat->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Gouvernorats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Gouvernorat'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gouvernorats view content">
            <h3><?= h($gouvernorat->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($gouvernorat->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Code') ?></th>
                    <td><?= h($gouvernorat->code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pay') ?></th>
                    <td><?= $gouvernorat->has('pay') ? $this->Html->link($gouvernorat->pay->name, ['controller' => 'Pays', 'action' => 'view', $gouvernorat->pay->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($gouvernorat->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codepostale') ?></th>
                    <td><?= $this->Number->format($gouvernorat->codepostale) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Clients') ?></h4>
                <?php if (!empty($gouvernorat->clients)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Code Socit') ?></th>
                            <th><?= __('Code') ?></th>
                            <th><?= __('Raison Sociale') ?></th>
                            <th><?= __('Contact') ?></th>
                            <th><?= __('Commercial Id') ?></th>
                            <th><?= __('Code Ville') ?></th>
                            <th><?= __('Adresse') ?></th>
                            <th><?= __('Cp') ?></th>
                            <th><?= __('Code Pays') ?></th>
                            <th><?= __('Code VilleL') ?></th>
                            <th><?= __('AdresseL') ?></th>
                            <th><?= __('CpL') ?></th>
                            <th><?= __('Code PaysL') ?></th>
                            <th><?= __('Tel') ?></th>
                            <th><?= __('Tel1') ?></th>
                            <th><?= __('Tel2') ?></th>
                            <th><?= __('Fax') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Code Monnaie') ?></th>
                            <th><?= __('Code ModePayement') ?></th>
                            <th><?= __('Code DelaiPayement') ?></th>
                            <th><?= __('Mode Facturation') ?></th>
                            <th><?= __('Priode') ?></th>
                            <th><?= __('Montant Facturation') ?></th>
                            <th><?= __('Quota') ?></th>
                            <th><?= __('Autorisation Livraison') ?></th>
                            <th><?= __('BL Tarifi') ?></th>
                            <th><?= __('Majoration') ?></th>
                            <th><?= __('Matricule Fiscale') ?></th>
                            <th><?= __('R TVA') ?></th>
                            <th><?= __('Timbre') ?></th>
                            <th><?= __('Fodec') ?></th>
                            <th><?= __('Taux Escompte') ?></th>
                            <th><?= __('Resident') ?></th>
                            <th><?= __('Facture') ?></th>
                            <th><?= __('Rib') ?></th>
                            <th><?= __('Rib1') ?></th>
                            <th><?= __('Code Secteur') ?></th>
                            <th><?= __('Piece') ?></th>
                            <th><?= __('Promotion') ?></th>
                            <th><?= __('Promotion1') ?></th>
                            <th><?= __('Descadf') ?></th>
                            <th><?= __('Descadl') ?></th>
                            <th><?= __('TxMaj') ?></th>
                            <th><?= __('Promotion2') ?></th>
                            <th><?= __('Code Gouv') ?></th>
                            <th><?= __('Gouvernorat Id') ?></th>
                            <th><?= __('Pr') ?></th>
                            <th><?= __('Edit') ?></th>
                            <th><?= __('BLC') ?></th>
                            <th><?= __('ECOLEF') ?></th>
                            <th><?= __('TPE') ?></th>
                            <th><?= __('UserAdd') ?></th>
                            <th><?= __('DateAdd') ?></th>
                            <th><?= __('UserUpdate') ?></th>
                            <th><?= __('DateUpdate') ?></th>
                            <th><?= __('Inserted') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th><?= __('Typeutilisateur Id') ?></th>
                            <th><?= __('Typeexoneration Id') ?></th>
                            <th><?= __('Paiement Id') ?></th>
                            <th><?= __('Typeclient Id') ?></th>
                            <th><?= __('Pointdevente Id') ?></th>
                            <th><?= __('Remise') ?></th>
                            <th><?= __('Etat') ?></th>
                            <th><?= __('Observation') ?></th>
                            <th><?= __('Adresse1') ?></th>
                            <th><?= __('Nouveau Client') ?></th>
                            <th><?= __('Date Ajout') ?></th>
                            <th><?= __('Compte Comptable') ?></th>
                            <th><?= __('Bureauposte') ?></th>
                            <th><?= __('Nbr Jours') ?></th>
                            <th><?= __('Localite Id') ?></th>
                            <th><?= __('Delegation Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Finmois') ?></th>
                            <th><?= __('Prix') ?></th>
                            <th><?= __('Pay Id') ?></th>
                            <th><?= __('Typeescompte') ?></th>
                            <th><?= __('Typeremise') ?></th>
                            <th><?= __('Escompte') ?></th>
                            <th><?= __('Bl') ?></th>
                            <th><?= __('Plafontheorique') ?></th>
                            <th><?= __('Compteclient') ?></th>
                            <th><?= __('Nom') ?></th>
                            <th><?= __('Client') ?></th>
                            <th><?= __('Fournisseur') ?></th>
                            <th><?= __('Salaris') ?></th>
                            <th><?= __('Typetiers') ?></th>
                            <th><?= __('Incoterms') ?></th>
                            <th><?= __('Port') ?></th>
                            <th><?= __('Affecter') ?></th>
                            <th><?= __('Logo') ?></th>
                            <th><?= __('Devise Id') ?></th>
                            <th><?= __('Tags') ?></th>
                            <th><?= __('Codefr') ?></th>
                            <th><?= __('Codeclient') ?></th>
                            <th><?= __('RC') ?></th>
                            <th><?= __('Codedouane') ?></th>
                            <th><?= __('BAN') ?></th>
                            <th><?= __('Capital') ?></th>
                            <th><?= __('Numerotva') ?></th>
                            <th><?= __('Typeentite') ?></th>
                            <th><?= __('Datemodification') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($gouvernorat->clients as $clients) : ?>
                        <tr>
                            <td><?= h($clients->id) ?></td>
                            <td><?= h($clients->Code_Socit) ?></td>
                            <td><?= h($clients->Code) ?></td>
                            <td><?= h($clients->Raison_Sociale) ?></td>
                            <td><?= h($clients->Contact) ?></td>
                            <td><?= h($clients->commercial_id) ?></td>
                            <td><?= h($clients->Code_Ville) ?></td>
                            <td><?= h($clients->Adresse) ?></td>
                            <td><?= h($clients->Cp) ?></td>
                            <td><?= h($clients->Code_Pays) ?></td>
                            <td><?= h($clients->Code_VilleL) ?></td>
                            <td><?= h($clients->AdresseL) ?></td>
                            <td><?= h($clients->CpL) ?></td>
                            <td><?= h($clients->Code_PaysL) ?></td>
                            <td><?= h($clients->Tel) ?></td>
                            <td><?= h($clients->Tel1) ?></td>
                            <td><?= h($clients->Tel2) ?></td>
                            <td><?= h($clients->Fax) ?></td>
                            <td><?= h($clients->Email) ?></td>
                            <td><?= h($clients->Code_Monnaie) ?></td>
                            <td><?= h($clients->Code_ModePayement) ?></td>
                            <td><?= h($clients->Code_DelaiPayement) ?></td>
                            <td><?= h($clients->Mode_Facturation) ?></td>
                            <td><?= h($clients->Priode) ?></td>
                            <td><?= h($clients->Montant_Facturation) ?></td>
                            <td><?= h($clients->Quota) ?></td>
                            <td><?= h($clients->Autorisation_Livraison) ?></td>
                            <td><?= h($clients->BL_Tarifi) ?></td>
                            <td><?= h($clients->Majoration) ?></td>
                            <td><?= h($clients->Matricule_Fiscale) ?></td>
                            <td><?= h($clients->R_TVA) ?></td>
                            <td><?= h($clients->Timbre) ?></td>
                            <td><?= h($clients->Fodec) ?></td>
                            <td><?= h($clients->Taux_Escompte) ?></td>
                            <td><?= h($clients->Resident) ?></td>
                            <td><?= h($clients->Facture) ?></td>
                            <td><?= h($clients->Rib) ?></td>
                            <td><?= h($clients->Rib1) ?></td>
                            <td><?= h($clients->Code_Secteur) ?></td>
                            <td><?= h($clients->piece) ?></td>
                            <td><?= h($clients->promotion) ?></td>
                            <td><?= h($clients->promotion1) ?></td>
                            <td><?= h($clients->Descadf) ?></td>
                            <td><?= h($clients->Descadl) ?></td>
                            <td><?= h($clients->txMaj) ?></td>
                            <td><?= h($clients->promotion2) ?></td>
                            <td><?= h($clients->code_gouv) ?></td>
                            <td><?= h($clients->gouvernorat_id) ?></td>
                            <td><?= h($clients->pr) ?></td>
                            <td><?= h($clients->Edit) ?></td>
                            <td><?= h($clients->BLC) ?></td>
                            <td><?= h($clients->ECOLEF) ?></td>
                            <td><?= h($clients->TPE) ?></td>
                            <td><?= h($clients->UserAdd) ?></td>
                            <td><?= h($clients->DateAdd) ?></td>
                            <td><?= h($clients->UserUpdate) ?></td>
                            <td><?= h($clients->DateUpdate) ?></td>
                            <td><?= h($clients->inserted) ?></td>
                            <td><?= h($clients->updated) ?></td>
                            <td><?= h($clients->typeutilisateur_id) ?></td>
                            <td><?= h($clients->typeexoneration_id) ?></td>
                            <td><?= h($clients->paiement_id) ?></td>
                            <td><?= h($clients->typeclient_id) ?></td>
                            <td><?= h($clients->pointdevente_id) ?></td>
                            <td><?= h($clients->remise) ?></td>
                            <td><?= h($clients->etat) ?></td>
                            <td><?= h($clients->observation) ?></td>
                            <td><?= h($clients->adresse1) ?></td>
                            <td><?= h($clients->nouveau_client) ?></td>
                            <td><?= h($clients->date_ajout) ?></td>
                            <td><?= h($clients->compte_comptable) ?></td>
                            <td><?= h($clients->bureauposte) ?></td>
                            <td><?= h($clients->nbr_jours) ?></td>
                            <td><?= h($clients->localite_id) ?></td>
                            <td><?= h($clients->delegation_id) ?></td>
                            <td><?= h($clients->client_id) ?></td>
                            <td><?= h($clients->finmois) ?></td>
                            <td><?= h($clients->prix) ?></td>
                            <td><?= h($clients->pay_id) ?></td>
                            <td><?= h($clients->typeescompte) ?></td>
                            <td><?= h($clients->typeremise) ?></td>
                            <td><?= h($clients->escompte) ?></td>
                            <td><?= h($clients->bl) ?></td>
                            <td><?= h($clients->plafontheorique) ?></td>
                            <td><?= h($clients->compteclient) ?></td>
                            <td><?= h($clients->nom) ?></td>
                            <td><?= h($clients->client) ?></td>
                            <td><?= h($clients->fournisseur) ?></td>
                            <td><?= h($clients->salaris) ?></td>
                            <td><?= h($clients->typetiers) ?></td>
                            <td><?= h($clients->incoterms) ?></td>
                            <td><?= h($clients->port) ?></td>
                            <td><?= h($clients->affecter) ?></td>
                            <td><?= h($clients->logo) ?></td>
                            <td><?= h($clients->devise_id) ?></td>
                            <td><?= h($clients->tags) ?></td>
                            <td><?= h($clients->codefr) ?></td>
                            <td><?= h($clients->codeclient) ?></td>
                            <td><?= h($clients->RC) ?></td>
                            <td><?= h($clients->codedouane) ?></td>
                            <td><?= h($clients->BAN) ?></td>
                            <td><?= h($clients->Capital) ?></td>
                            <td><?= h($clients->numerotva) ?></td>
                            <td><?= h($clients->typeentite) ?></td>
                            <td><?= h($clients->datemodification) ?></td>
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
                <h4><?= __('Related Fournisseurs') ?></h4>
                <?php if (!empty($gouvernorat->fournisseurs)) : ?>
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
                        <?php foreach ($gouvernorat->fournisseurs as $fournisseurs) : ?>
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
