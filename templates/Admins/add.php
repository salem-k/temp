<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Utilisateur $utilisateur
 * @var \Cake\Collection\CollectionInterface|string[] $depots
 */
?>
<div class="row">
  <aside class="column">
    <div class="side-nav">
      <h4 class="heading"><?= __('Actions') ?></h4>
      <?= $this->Html->link(__('List Utilisateurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
    </div>
  </aside>
  <div class="column-responsive column-80">
    <div class="utilisateurs form content">
      <?= $this->Form->create($utilisateur) ?>
      <fieldset>
        <legend><?= __('Add Utilisateur') ?></legend>
        <?php
        echo $this->Form->control('personnel_id');
        echo $this->Form->control('name');
        echo $this->Form->control('login');
        echo $this->Form->control('password');
        echo $this->Form->control('pointdevente_id');
        echo $this->Form->control('depot_id', ['options' => $depots, 'empty' => true]);
        ?>
      </fieldset>
      <?= $this->Form->button(__('Submit')) ?>
      <?= $this->Form->end() ?>
    </div>
  </div>
</div>
