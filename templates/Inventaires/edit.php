<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventaire $inventaire
 * @var string[]|\Cake\Collection\CollectionInterface $depots
 * @var string[]|\Cake\Collection\CollectionInterface $pointdeventes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inventaire->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inventaire->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Inventaires'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="inventaires form content">
            <?= $this->Form->create($inventaire) ?>
            <fieldset>
                <legend><?= __('Edit Inventaire') ?></legend>
                <?php
                    echo $this->Form->control('numero');
                    echo $this->Form->control('depot_id', ['options' => $depots, 'empty' => true]);
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('valide');
                    echo $this->Form->control('typeinventaire');
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
