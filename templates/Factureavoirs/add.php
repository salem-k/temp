<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Factureavoir $factureavoir
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 * @var \Cake\Collection\CollectionInterface|string[] $utilisateurs
 * @var \Cake\Collection\CollectionInterface|string[] $factureclients
 * @var \Cake\Collection\CollectionInterface|string[] $typefactures
 * @var \Cake\Collection\CollectionInterface|string[] $pointdeventes
 * @var \Cake\Collection\CollectionInterface|string[] $typeclients
 * @var \Cake\Collection\CollectionInterface|string[] $depots
 */
?>
<section class="content-header">
  <h1>

    Nouveau Facture Avoirs
    <!-- <ol class="breadcrumb">
            <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-reply"></i>
                    <?php echo __('Retour'); ?>
                </a></li>
        </ol> -->
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box ">
        <?php echo $this->Form->create($factureavoir, ['role' => 'form', 'onkeypress' => "return event.keyCode!=13", 'type' => 'file']); ?>
        <div class="row">
          <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
            <div class="col-xs-6">
                <?php
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                    echo $this->Form->control('factureclient_id', ['options' => $factureclients, 'empty' => true]);
                    echo $this->Form->control('date', ['empty' => true]);

                    echo $this->Form->control('typefacture_id', ['options' => $typefactures, 'empty' => true]);
                echo $this->Form->control('depot_id', ['options' => $depots, 'empty' => true]);

                echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes, 'empty' => true]);

                    echo $this->Form->control('typeclient_id', ['options' => $typeclients, 'empty' => true]);

                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
