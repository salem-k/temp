<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Factureavoir $factureavoir
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 * @var string[]|\Cake\Collection\CollectionInterface $utilisateurs
 * @var string[]|\Cake\Collection\CollectionInterface $factureclients
 * @var string[]|\Cake\Collection\CollectionInterface $typefactures
 * @var string[]|\Cake\Collection\CollectionInterface $pointdeventes
 * @var string[]|\Cake\Collection\CollectionInterface $typeclients
 * @var string[]|\Cake\Collection\CollectionInterface $depots
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $factureavoir->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $factureavoir->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Factureavoirs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="factureavoirs form content">
            <?= $this->Form->create($factureavoir) ?>
            <fieldset>
                <legend><?= __('Edit Factureavoir') ?></legend>
                <?php
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                    echo $this->Form->control('utilisateur_id', ['options' => $utilisateurs, 'empty' => true]);
                    echo $this->Form->control('factureclient_id', ['options' => $factureclients, 'empty' => true]);
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('remise');
                    echo $this->Form->control('tva');
                    echo $this->Form->control('fodec');
                    echo $this->Form->control('tauxtva');
                    echo $this->Form->control('tauxfodec');
                    echo $this->Form->control('totalht');
                    echo $this->Form->control('totalttc');
                    echo $this->Form->control('totalttc_anc');
                    echo $this->Form->control('montant_regle');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('numeroconca');
                    echo $this->Form->control('typefacture_id', ['options' => $typefactures, 'empty' => true]);
                    echo $this->Form->control('etat');
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes, 'empty' => true]);
                    echo $this->Form->control('exercice_id');
                    echo $this->Form->control('des');
                    echo $this->Form->control('source');
                    echo $this->Form->control('timbre_id');
                    echo $this->Form->control('name');
                    echo $this->Form->control('adressclient');
                    echo $this->Form->control('matriculefiscaleclient');
                    echo $this->Form->control('telclient');
                    echo $this->Form->control('typeclient_id', ['options' => $typeclients, 'empty' => true]);
                    echo $this->Form->control('numeropieceintegre');
                    echo $this->Form->control('depot_id', ['options' => $depots, 'empty' => true]);
                    echo $this->Form->control('ttc1');
                    echo $this->Form->control('tva1');
                    echo $this->Form->control('fodec1');
                    echo $this->Form->control('rem');
                    echo $this->Form->control('totalht1');
                    echo $this->Form->control('totaltva1');
                    echo $this->Form->control('totalttc1');
                    echo $this->Form->control('totalrem');
                    echo $this->Form->control('adressecl');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
