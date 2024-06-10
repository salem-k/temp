<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 * @var string[]|\Cake\Collection\CollectionInterface $commercials
 * @var string[]|\Cake\Collection\CollectionInterface $gouvernorats
 * @var string[]|\Cake\Collection\CollectionInterface $paiements
 * @var string[]|\Cake\Collection\CollectionInterface $typeclients
 * @var string[]|\Cake\Collection\CollectionInterface $pointdeventes
 * @var string[]|\Cake\Collection\CollectionInterface $localites
 * @var string[]|\Cake\Collection\CollectionInterface $delegations
 * @var string[]|\Cake\Collection\CollectionInterface $pays
 * @var string[]|\Cake\Collection\CollectionInterface $devises
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $client->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $client->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Clients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients form content">
            <?= $this->Form->create($client) ?>
            <fieldset>
                <legend><?= __('Edit Client') ?></legend>
                <?php
                    echo $this->Form->control('Code_Socit');
                    echo $this->Form->control('Code');
                    echo $this->Form->control('Raison_Sociale');
                    echo $this->Form->control('Contact');
                    echo $this->Form->control('commercial_id', ['options' => $commercials, 'empty' => true]);
                    echo $this->Form->control('Code_Ville');
                    echo $this->Form->control('Adresse');
                    echo $this->Form->control('Cp');
                    echo $this->Form->control('Code_Pays');
                    echo $this->Form->control('Code_VilleL');
                    echo $this->Form->control('AdresseL');
                    echo $this->Form->control('CpL');
                    echo $this->Form->control('Code_PaysL');
                    echo $this->Form->control('Tel');
                    echo $this->Form->control('Tel1');
                    echo $this->Form->control('Tel2');
                    echo $this->Form->control('Fax');
                    echo $this->Form->control('Email');
                    echo $this->Form->control('Code_Monnaie');
                    echo $this->Form->control('Code_ModePayement');
                    echo $this->Form->control('Code_DelaiPayement');
                    echo $this->Form->control('Mode_Facturation');
                    echo $this->Form->control('Priode');
                    echo $this->Form->control('Montant_Facturation');
                    echo $this->Form->control('Quota');
                    echo $this->Form->control('Autorisation_Livraison');
                    echo $this->Form->control('BL_Tarifi');
                    echo $this->Form->control('Majoration');
                    echo $this->Form->control('Matricule_Fiscale');
                    echo $this->Form->control('R_TVA');
                    echo $this->Form->control('Timbre');
                    echo $this->Form->control('Fodec');
                    echo $this->Form->control('Taux_Escompte');
                    echo $this->Form->control('Resident');
                    echo $this->Form->control('Facture');
                    echo $this->Form->control('Rib');
                    echo $this->Form->control('Rib1');
                    echo $this->Form->control('Code_Secteur');
                    echo $this->Form->control('piece');
                    echo $this->Form->control('promotion');
                    echo $this->Form->control('promotion1');
                    echo $this->Form->control('Descadf');
                    echo $this->Form->control('Descadl');
                    echo $this->Form->control('txMaj');
                    echo $this->Form->control('promotion2');
                    echo $this->Form->control('code_gouv');
                    echo $this->Form->control('gouvernorat_id', ['options' => $gouvernorats, 'empty' => true]);
                    echo $this->Form->control('pr');
                    echo $this->Form->control('Edit');
                    echo $this->Form->control('BLC');
                    echo $this->Form->control('ECOLEF');
                    echo $this->Form->control('TPE');
                    echo $this->Form->control('UserAdd');
                    echo $this->Form->control('DateAdd');
                    echo $this->Form->control('UserUpdate');
                    echo $this->Form->control('DateUpdate');
                    echo $this->Form->control('inserted');
                    echo $this->Form->control('typeutilisateur_id');
                    echo $this->Form->control('typeexoneration_id');
                    echo $this->Form->control('paiement_id', ['options' => $paiements, 'empty' => true]);
                    echo $this->Form->control('typeclient_id', ['options' => $typeclients, 'empty' => true]);
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes, 'empty' => true]);
                    echo $this->Form->control('remise');
                    echo $this->Form->control('etat');
                    echo $this->Form->control('observation');
                    echo $this->Form->control('adresse1');
                    echo $this->Form->control('nouveau_client');
                    echo $this->Form->control('date_ajout', ['empty' => true]);
                    echo $this->Form->control('compte_comptable');
                    echo $this->Form->control('bureauposte');
                    echo $this->Form->control('nbr_jours');
                    echo $this->Form->control('localite_id', ['options' => $localites, 'empty' => true]);
                    echo $this->Form->control('delegation_id', ['options' => $delegations, 'empty' => true]);
                    echo $this->Form->control('client_id');
                    echo $this->Form->control('finmois');
                    echo $this->Form->control('prix');
                    echo $this->Form->control('pay_id', ['options' => $pays, 'empty' => true]);
                    echo $this->Form->control('typeescompte');
                    echo $this->Form->control('typeremise');
                    echo $this->Form->control('escompte');
                    echo $this->Form->control('bl');
                    echo $this->Form->control('plafontheorique');
                    echo $this->Form->control('compteclient');
                    echo $this->Form->control('nom');
                    echo $this->Form->control('client');
                    echo $this->Form->control('fournisseur');
                    echo $this->Form->control('salaris');
                    echo $this->Form->control('typetiers');
                    echo $this->Form->control('incoterms');
                    echo $this->Form->control('port');
                    echo $this->Form->control('affecter');
                    echo $this->Form->control('logo');
                    echo $this->Form->control('devise_id', ['options' => $devises, 'empty' => true]);
                    echo $this->Form->control('tags');
                    echo $this->Form->control('codefr');
                    echo $this->Form->control('codeclient');
                    echo $this->Form->control('RC');
                    echo $this->Form->control('codedouane');
                    echo $this->Form->control('BAN');
                    echo $this->Form->control('Capital');
                    echo $this->Form->control('numerotva');
                    echo $this->Form->control('typeentite');
                    echo $this->Form->control('datemodification', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
