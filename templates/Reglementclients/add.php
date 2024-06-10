<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reglementclient $reglementclient
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 * @var \Cake\Collection\CollectionInterface|string[] $pointdeventes
 * @var \Cake\Collection\CollectionInterface|string[] $utilisateurs
 */
?>
<section class="content-header">
  <h1>

    Nouveau Reglement
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
        <?php echo $this->Form->create($reglementclient, ['role' => 'form', 'onkeypress' => "return event.keyCode!=13", 'type' => 'file']); ?>
        <div class="row">
          <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
            <div class="col-xs-6">
                <?php
echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
echo $this->Form->control('Date', ['empty' => true]);
                    echo $this->Form->control('Montant');
                    echo $this->Form->control('montantaffecte');
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes, 'empty' => true]);

                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
