<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livraison $livraison
 * @var \Cake\Collection\CollectionInterface|string[] $pointdeventes
 * @var \Cake\Collection\CollectionInterface|string[] $depots
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Livraisons'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="livraisons form content">
            <?= $this->Form->create($livraison) ?>
            <fieldset>
                <legend><?= __('Add Livraison') ?></legend>
                <?php
                    echo $this->Form->control('commandefournisseur_id');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('fournisseur_id');
                    echo $this->Form->control('adresselivraisonfournisseur_id');
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes, 'empty' => true]);
                    echo $this->Form->control('depot_id', ['options' => $depots, 'empty' => true]);
                    echo $this->Form->control('cartecarburant_id');
                    echo $this->Form->control('materieltransport_id');
                    echo $this->Form->control('kilometragedepart');
                    echo $this->Form->control('kilometragearrive');
                    echo $this->Form->control('chauffeur');
                    echo $this->Form->control('convoyeur');
                    echo $this->Form->control('valide');
                    echo $this->Form->control('remise');
                    echo $this->Form->control('tva');
                    echo $this->Form->control('fodec');
                    echo $this->Form->control('ttc');
                    echo $this->Form->control('ht');
                    echo $this->Form->control('facture_id');
                    echo $this->Form->control('Montant_Regler');
                    echo $this->Form->control('typelivraison');
                    echo $this->Form->control('dossierimportation_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
