<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reglement $reglement
 * @var \Cake\Collection\CollectionInterface|string[] $fournisseurs
 * @var \Cake\Collection\CollectionInterface|string[] $utilisateurs
 * @var \Cake\Collection\CollectionInterface|string[] $devises
 * @var \Cake\Collection\CollectionInterface|string[] $pointdeventes
 */
?>

<section class="content-header">

</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box ">
        <?php echo $this->Form->create($reglement, ['role' => 'form', 'onkeypress' => "return event.keyCode!=13", 'type' => 'file']); ?>
        <div class="row">
          <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
            <?= $this->Form->create($reglement) ?>
            <fieldset>
                <legend><?= __('Add Reglement') ?></legend>
                <?php
                    echo $this->Form->control('fournisseur_id', ['options' => $fournisseurs, 'empty' => true]);
                    echo $this->Form->control('Date', ['empty' => true]);
                    echo $this->Form->control('Montant');
                    echo $this->Form->control('designation');
                    echo $this->Form->control('impaye');
                    echo $this->Form->control('devise_id', ['options' => $devises, 'empty' => true]);
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
