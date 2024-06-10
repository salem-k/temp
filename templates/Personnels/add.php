<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Personnel $personnel
 * @var \Cake\Collection\CollectionInterface|string[] $fonctions
 * @var \Cake\Collection\CollectionInterface|string[] $sexes
 * @var \Cake\Collection\CollectionInterface|string[] $situationfamiliales
 * @var \Cake\Collection\CollectionInterface|string[] $typecontrats
 * @var \Cake\Collection\CollectionInterface|string[] $pointdeventes
 * @var \Cake\Collection\CollectionInterface|string[] $pays
 */
?>
<section class="content-header">
  <h1>

    Nouveau Personnel
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
        <?php echo $this->Form->create($personnel, ['role' => 'form', 'onkeypress' => "return event.keyCode!=13", 'type' => 'file']); ?>
        <div class="row">
          <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
            <div class="col-xs-6">
                <?php
                    echo $this->Form->control('nom');
                    echo $this->Form->control('prenom');
                    echo $this->Form->control('fonction_id', ['options' => $fonctions, 'empty' => true]);
                    echo $this->Form->control('code');
                    echo $this->Form->control('sexe_id', ['options' => $sexes, 'empty' => true]);
                    echo $this->Form->control('dateentre', ['empty' => true]);
                    echo $this->Form->control('situationfamiliale_id', ['options' => $situationfamiliales, 'empty' => true]);
                    echo $this->Form->control('nombreenfant');
                    echo $this->Form->control('matriculecnss');
                    echo $this->Form->control('age');
                    echo $this->Form->control('typecontrat_id', ['options' => $typecontrats, 'empty' => true]);
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes, 'empty' => true]);
                    echo $this->Form->control('image');
                    echo $this->Form->control('tel');
                    echo $this->Form->control('email');

                    echo $this->Form->control('ville_id');
                    echo $this->Form->control('pay_id', ['options' => $pays, 'empty' => true]);

                    echo $this->Form->control('signature');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
