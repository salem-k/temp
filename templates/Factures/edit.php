<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Facture $facture
 * @var string[]|\Cake\Collection\CollectionInterface $pointdeventes
 * @var string[]|\Cake\Collection\CollectionInterface $depots
 * @var string[]|\Cake\Collection\CollectionInterface $paiements
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $facture->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $facture->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Factures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="factures form content">
            <?= $this->Form->create($facture) ?>
            <fieldset>
                <legend><?= __('Edit Facture') ?></legend>
                <?php
                    echo $this->Form->control('livraison_id');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('fournisseur_id');
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes, 'empty' => true]);
                    echo $this->Form->control('depot_id', ['options' => $depots, 'empty' => true]);
                    echo $this->Form->control('cartecarburant_id');
                    echo $this->Form->control('materieltransport_id');
                    echo $this->Form->control('chauffeur');
                    echo $this->Form->control('convoyeur');
                    echo $this->Form->control('valide');
                    echo $this->Form->control('remise');
                    echo $this->Form->control('tva');
                    echo $this->Form->control('fodec');
                    echo $this->Form->control('ttc');
                    echo $this->Form->control('ht');
                    echo $this->Form->control('adresselivraisonfournisseur_id');
                    echo $this->Form->control('kilometragedepart');
                    echo $this->Form->control('kilometragearrive');
                    echo $this->Form->control('Montant_Regler');
                    echo $this->Form->control('tauxchange');
                    echo $this->Form->control('totaldevise');
                    echo $this->Form->control('importation_id');
                    echo $this->Form->control('typef');
                    echo $this->Form->control('devise_id');
                    echo $this->Form->control('paiement_id', ['options' => $paiements, 'empty' => true]);
                    echo $this->Form->control('caissee_id');
                    echo $this->Form->control('dossierimportation_id');
                    echo $this->Form->control('typefacture_id');
                    echo $this->Form->control('typefac');
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                    echo $this->Form->control('projet_id');
                    echo $this->Form->control('etatgroup');
                    echo $this->Form->control('groupage_id');
                    echo $this->Form->control('conteneur_id');
                    echo $this->Form->control('tvaOnOff');
                    echo $this->Form->control('incoterm_id');
                    echo $this->Form->control('location_incoterms');
                    echo $this->Form->control('options_incotermtotalpdf');
                    echo $this->Form->control('options_istotaltransportdetaille');
                    echo $this->Form->control('options_indicationenpdf');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
