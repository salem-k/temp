<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commande $commande
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 * @var \Cake\Collection\CollectionInterface|string[] $commercials
 * @var \Cake\Collection\CollectionInterface|string[] $pointdeventes
 * @var \Cake\Collection\CollectionInterface|string[] $depots
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Commandes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commandes form content">
            <?= $this->Form->create($commande) ?>
            <fieldset>
                <legend><?= __('Add Commande') ?></legend>
                <?php
                    echo $this->Form->control('date');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('num_tab');
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                    echo $this->Form->control('remise');
                    echo $this->Form->control('total');
                    echo $this->Form->control('totalttc');
                    echo $this->Form->control('commercial_id', ['options' => $commercials, 'empty' => true]);
                    echo $this->Form->control('payementcomptant');
                    echo $this->Form->control('observation');
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes, 'empty' => true]);
                    echo $this->Form->control('depot_id', ['options' => $depots, 'empty' => true]);
                    echo $this->Form->control('fodec');
                    echo $this->Form->control('tpe');
                    echo $this->Form->control('escompte');
                    echo $this->Form->control('tva');
                    echo $this->Form->control('etatliv');
                    echo $this->Form->control('valide');
                    echo $this->Form->control('dateimp', ['empty' => true]);
                    echo $this->Form->control('dateintfin', ['empty' => true]);
                    echo $this->Form->control('dateintdebut', ['empty' => true]);
                    echo $this->Form->control('dateupdateclient', ['empty' => true]);
                    echo $this->Form->control('nouv_client');
                    echo $this->Form->control('brut');
                    echo $this->Form->control('pallette');
                    echo $this->Form->control('Coeff');
                    echo $this->Form->control('Poids');
                    echo $this->Form->control('type');
                    echo $this->Form->control('nbligne');
                    echo $this->Form->control('bl');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
