<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Facture $facture
 * @var \Cake\Collection\CollectionInterface|string[] $pointdeventes
 * @var \Cake\Collection\CollectionInterface|string[] $depots
 * @var \Cake\Collection\CollectionInterface|string[] $paiements
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 */
?>
<section class="content-header">

</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box ">
        <?php echo $this->Form->create($facture, ['role' => 'form', 'onkeypress' => "return event.keyCode!=13", 'type' => 'file']); ?>
        <div class="row">
          <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
            <?= $this->Form->create($facture) ?>
            <fieldset>
                <legend><?= __('Add Facture') ?></legend>
                <?php
                echo $this->Form->control('numero');

                echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                echo $this->Form->control('fournisseur_id',['options' => $fournisseurs, 'empty' => true]);

                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes, 'empty' => true]);
                    echo $this->Form->control('depot_id', ['options' => $depots, 'empty' => true]);
                    echo $this->Form->control('Montant_Regler');

                    echo $this->Form->control('paiement_id', ['options' => $paiements, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
