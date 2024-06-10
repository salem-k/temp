<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bonderetoure $bonderetoure
 * @var string[]|\Cake\Collection\CollectionInterface $pointdeventes
 * @var string[]|\Cake\Collection\CollectionInterface $depots
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bonderetoure->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bonderetoure->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Bonderetoures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bonderetoures form content">
            <?= $this->Form->create($bonderetoure) ?>
            <fieldset>
                <legend><?= __('Edit Bonderetoure') ?></legend>
                <?php
                    echo $this->Form->control('date');
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes]);
                    echo $this->Form->control('depot_id', ['options' => $depots]);
                    echo $this->Form->control('numero');
                    echo $this->Form->control('kilometragedepart');
                    echo $this->Form->control('kilometragearrive');
                    echo $this->Form->control('poste');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
