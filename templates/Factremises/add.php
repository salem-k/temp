<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Factremise $factremise
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 */
?>


<section class="content-header">
  <h1>

Ajouter Facture de Remise    <!-- <ol class="breadcrumb">
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
        <?php echo $this->Form->create($factremise, ['role' => 'form', 'onkeypress' => "return event.keyCode!=13", 'type' => 'file']); ?>
        <div class="row">
          <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
            <div class="col-xs-6">
                <?php
                echo $this->Form->control('client_id', ['options' => $clients]);
                    echo $this->Form->control('Reduction');
                    echo $this->Form->control('Date');
                    echo $this->Form->control('Commentaire');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
