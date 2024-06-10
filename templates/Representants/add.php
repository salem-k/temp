<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Representant $representant
 * @var \Cake\Collection\CollectionInterface|string[] $personnels
 * @var \Cake\Collection\CollectionInterface|string[] $fonctions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Representants'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="representants form content">
            <?= $this->Form->create($representant) ?>
            <fieldset>
                <legend><?= __('Add Representant') ?></legend>
                <?php
                    echo $this->Form->control('Name');
                    echo $this->Form->control('personnel_id', ['options' => $personnels]);
                    echo $this->Form->control('fonction_id', ['options' => $fonctions]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
