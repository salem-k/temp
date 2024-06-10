<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commandeclient $commandeclient
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 * @var string[]|\Cake\Collection\CollectionInterface $pointdeventes
 * @var string[]|\Cake\Collection\CollectionInterface $depots
 * @var string[]|\Cake\Collection\CollectionInterface $factures
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $commandeclient->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $commandeclient->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Commandeclients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commandeclients form content">
            <?= $this->Form->create($commandeclient) ?>
            <fieldset>
                <legend><?= __('Edit Commandeclient') ?></legend>
                <?php
                    echo $this->Form->control('code');
                    echo $this->Form->control('client_id', ['options' => $clients]);
                    echo $this->Form->control('date');
                    echo $this->Form->control('datedecreation');
                    echo $this->Form->control('commentaire');
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes]);
                    echo $this->Form->control('depot_id', ['options' => $depots]);
                    echo $this->Form->control('totalht');
                    echo $this->Form->control('totalttc');
                    echo $this->Form->control('totalremise');
                    echo $this->Form->control('totaltva');
                    echo $this->Form->control('totalfodec');
                    echo $this->Form->control('cartecarburant_id');
                    echo $this->Form->control('materieltransport_id');
                    echo $this->Form->control('chauffeur_id');
                    echo $this->Form->control('convoyeur_id');
                    echo $this->Form->control('bonlivraison_id');
                    echo $this->Form->control('etatliv');
                    echo $this->Form->control('projet_id');
                    echo $this->Form->control('commandeclient_id');
                    echo $this->Form->control('valider');
                    echo $this->Form->control('facture_id', ['options' => $factures, 'empty' => true]);
                    echo $this->Form->control('tvaOnOff');
                    echo $this->Form->control('incoterm_id');
                    echo $this->Form->control('duree_validite');
                    echo $this->Form->control('devis_id');
                    echo $this->Form->control('total_transport');
                    echo $this->Form->control('condreglement_id');
                    echo $this->Form->control('availability_id');
                    echo $this->Form->control('shippingmethod_id');
                    echo $this->Form->control('envoiemail');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
