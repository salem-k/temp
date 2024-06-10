<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commandegros $commandegros
 * @var string[]|\Cake\Collection\CollectionInterface $repgros
 * @var string[]|\Cake\Collection\CollectionInterface $repsectoriels
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $commandegros->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $commandegros->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Commandegross'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commandegross form content">
            <?= $this->Form->create($commandegros) ?>
            <fieldset>
                <legend><?= __('Edit Commandegros') ?></legend>
                <?php
                    echo $this->Form->control('Date_debut');
                    echo $this->Form->control('Date_din');
                    echo $this->Form->control('repsommsects_id');
                    echo $this->Form->control('repgros_id', ['options' => $repgros]);
                    echo $this->Form->control('repsectoriel_id', ['options' => $repsectoriels]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
