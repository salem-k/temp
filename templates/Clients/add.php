<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 * @var \Cake\Collection\CollectionInterface|string[] $commercials
 * @var \Cake\Collection\CollectionInterface|string[] $gouvernorats
 * @var \Cake\Collection\CollectionInterface|string[] $paiements
 * @var \Cake\Collection\CollectionInterface|string[] $typeclients
 * @var \Cake\Collection\CollectionInterface|string[] $pointdeventes
 * @var \Cake\Collection\CollectionInterface|string[] $localites
 * @var \Cake\Collection\CollectionInterface|string[] $delegations
 * @var \Cake\Collection\CollectionInterface|string[] $pays
 * @var \Cake\Collection\CollectionInterface|string[] $devises
 */
?>

<section class="content-header">

</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box ">
        <?php echo $this->Form->create($client, ['role' => 'form', 'onkeypress' => "return event.keyCode!=13", 'type' => 'file']); ?>
        <div class="row">
          <div style=" margin: 0 auto;  margin-left: 20px; margin-right: 20px; position: static; ">
            <?= $this->Form->create($client) ?>
            <fieldset>
                <legend><?= __('Add Client') ?></legend>

<?php
echo $this->Form->control('Code');
echo $this->Form->control('nom');

                    echo $this->Form->control('commercial_id', ['options' => $commercials, 'empty' => true]);
                    echo $this->Form->control('Code_Ville');
                    echo $this->Form->control('Adresse');

                    echo $this->Form->control('Tel');

                    echo $this->Form->control('Email');

                    echo $this->Form->control('Rib');

                    echo $this->Form->control('gouvernorat_id', ['options' => $gouvernorats, 'empty' => true]);

                    echo $this->Form->control('typeclient_id', ['options' => $typeclients, 'empty' => true]);

                    echo $this->Form->control('date_ajout', ['empty' => true]);

                    echo $this->Form->control('localite_id', ['options' => $localites, 'empty' => true]);
                    echo $this->Form->control('delegation_id', ['options' => $delegations, 'empty' => true]);

                    echo $this->Form->control('pay_id', ['options' => $pays, 'empty' => true]);


                    echo $this->Form->control('devise_id', ['options' => $devises, 'empty' => true]);
                    echo $this->Form->control('datemodification', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
