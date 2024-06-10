<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Factureclient $factureclient
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 * @var string[]|\Cake\Collection\CollectionInterface $pointdeventes
 * @var string[]|\Cake\Collection\CollectionInterface $depots
 * @var string[]|\Cake\Collection\CollectionInterface $commandeclients
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $factureclient->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $factureclient->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Factureclients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="factureclients form content">
            <?= $this->Form->create($factureclient) ?>
            <fieldset>
                <legend><?= __('Edit Factureclient') ?></legend>
                <?php
                    echo $this->Form->control('numero');
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes, 'empty' => true]);
                    echo $this->Form->control('depot_id', ['options' => $depots, 'empty' => true]);
                    echo $this->Form->control('materieltransport_id');
                    echo $this->Form->control('cartecarburant_id');
                    echo $this->Form->control('chauffeur_id');
                    echo $this->Form->control('convoyeur_id');
                    echo $this->Form->control('totalht');
                    echo $this->Form->control('totalremise');
                    echo $this->Form->control('totalfodec');
                    echo $this->Form->control('totaltva');
                    echo $this->Form->control('totalttc');
                    echo $this->Form->control('kilometragearrive');
                    echo $this->Form->control('kilometragedepart');
                    echo $this->Form->control('adresselivraisonclient_id');
                    echo $this->Form->control('payementcomptant');
                    echo $this->Form->control('tpe');
                    echo $this->Form->control('poste');
                    echo $this->Form->control('bonlivraison_id');
                    echo $this->Form->control('escompte');
                    echo $this->Form->control('Montant_Regler');
                    echo $this->Form->control('commandeclient_id', ['options' => $commandeclients, 'empty' => true]);
                    echo $this->Form->control('projet_id');
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
