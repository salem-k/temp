<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bontransfert $bontransfert
 * @var string[]|\Cake\Collection\CollectionInterface $depots
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bontransfert->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bontransfert->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Bontransferts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bontransferts form content">
            <?= $this->Form->create($bontransfert) ?>
            <fieldset>
                <legend><?= __('Edit Bontransfert') ?></legend>
                <?php
                    echo $this->Form->control('reference');
                    echo $this->Form->control('date');
                    echo $this->Form->control('depot_id', ['options' => $depots]);
                    echo $this->Form->control('depot_to_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
