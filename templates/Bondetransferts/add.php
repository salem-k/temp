<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bondetransfert $bondetransfert
 * @var \Cake\Collection\CollectionInterface|string[] $pointdeventes
 * @var \Cake\Collection\CollectionInterface|string[] $depots
 * @var \Cake\Collection\CollectionInterface|string[] $bonreceptionstocks
 */
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js" type="text/javascript"></script>


<section class="content-header">
  <h1>

    Nouveau Bon
    <!-- <ol class="breadcrumb">
            <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-reply"></i>
                    <?php echo __('Retour'); ?>
                </a></li>
        </ol> -->
</section>
<section class="content">
  <div class="row">
    <div class="col-md-8">
      <!-- general form elements -->

      <div class="box ">
        <div class="row">
            <div class="col-xs-6">
              <div class="col-xs-6">
<fieldset>
                <?php echo $this->Form->control('numero');?>

                <?php echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes]); ?>
                    <?php echo $this->Form->control('depot_id', ['options' => $depots]);?>
                   <?php echo $this->Form->control('depot_to_id', ['options' => $depotes]);?>
                   <?php echo $this->Form->control('bonreceptionstock_id', ['options' => $bonreceptionstocks, 'empty' => true]);?>

              </div>
            </div>
        </div>
        </fieldset>
            <?php echo $this->Form->button(__('Submit')) ?>
            <?php echo $this->Form->end() ?>
        </div>
    </div>
</div>
