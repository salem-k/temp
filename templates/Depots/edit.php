<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Depot $depot
 * @var string[]|\Cake\Collection\CollectionInterface $pointdeventes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $depot->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $depot->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Depots'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="depots form content">
            <?= $this->Form->create($depot) ?>
            <fieldset>
                <legend><?= __('Edit Depot') ?></legend>
                <?php
                    echo $this->Form->control('code');
                    echo $this->Form->control('name');
                    echo $this->Form->control('adresse');
                    echo $this->Form->control('matriclefiscale');
                    echo $this->Form->control('pointdevente_id', ['options' => $pointdeventes]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
