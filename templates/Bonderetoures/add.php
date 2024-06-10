<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bonderetoure $bonderetoure
 * @var \Cake\Collection\CollectionInterface|string[] $pointdeventes
 * @var \Cake\Collection\CollectionInterface|string[] $depots
 */
?>
<section class="content-header">

</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box ">
        <?php echo $this->Form->create($bonderetoure, ['role' => 'form', 'onkeypress' => "return event.keyCode!=13", 'type' => 'file']); ?>
        <div class="row">
          <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
            <?= $this->Form->create($bonderetoure) ?>
            <fieldset>
                <legend><?= __('Add Bonderetoure') ?></legend>
                <?php
                                    echo $this->Form->control('numero');

                    echo $this->Form->control('date');
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes]);
                    echo $this->Form->control('depot_id', ['options' => $depots]);
                   
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
