<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Delegation $delegation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Delegation'), ['action' => 'edit', $delegation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Delegation'), ['action' => 'delete', $delegation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $delegation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Delegations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Delegation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="delegations view content">
            <h3><?= h($delegation->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($delegation->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($delegation->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codepostale') ?></th>
                    <td><?= $this->Number->format($delegation->codepostale) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Clients') ?></h4>
                <?php if (!empty($delegation->clients)) : ?>
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
                        <?php foreach ($delegation->clients as $clients) : ?>
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
        </div>
    </div>
</div>
