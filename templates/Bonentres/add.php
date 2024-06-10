<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bonentre $bonentre
 * @var \Cake\Collection\CollectionInterface|string[] $depots
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Bonentres'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bonentres form content">
            <?= $this->Form->create($bonentre) ?>
            <fieldset>
                <legend><?= __('Add Bonentre') ?></legend>
                <?php
                    echo $this->Form->control('Date_Debut');
                    echo $this->Form->control('Date_Fin');
                    echo $this->Form->control('depot_id', ['options' => $depots]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
