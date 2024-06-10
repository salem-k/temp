<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bontransfert $bontransfert
 * @var \Cake\Collection\CollectionInterface|string[] $depots
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Bontransferts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bontransferts form content">
            <?= $this->Form->create($bontransfert) ?>
            <fieldset>
                <legend><?= __('Add Bontransfert') ?></legend>
                <?php
                    echo $this->Form->control('reference');
                    echo $this->Form->control('date');
                    echo $this->Form->control('depot_from_id', ['options' => $depots]);
                    echo $this->Form->control('depot_to_id', ['options' => $depots]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
