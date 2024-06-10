<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Depot $depot
 * @var \Cake\Collection\CollectionInterface|string[] $pointdeventes
 */
?>
<section class="content-header">
  <h1>

    Ajouter Depot
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
        <div class="col-md-12">

        <?php echo $this->Form->control('code');?>
        </div>
        <div class="row">
          <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
            <div class="col-xs-6">
                   <?php echo $this->Form->control('name');?>
            </div>
            <div class="col-xs-6">

            <?php echo $this->Form->control('adresse');?>
            </div>
            <div class="row">
              <div class="col-md-12">
                    <?php echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes]); ?>
              </div>

          </div>
        </div>
      </div>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>

    </div>
</div>
