<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Repcommsect $repcommsect
 * @var string[]|\Cake\Collection\CollectionInterface $depots
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $repcommsect->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $repcommsect->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Repcommsects'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="repcommsects form content">
            <?= $this->Form->create($repcommsect) ?>
            <fieldset>
                <legend><?= __('Edit Repcommsect') ?></legend>
                <?php
                    echo $this->Form->control('Responsable');
                    echo $this->Form->control('Telephone');
                    echo $this->Form->control('Adresse');
                    echo $this->Form->control('Username');
                    echo $this->Form->control('Email');
                    echo $this->Form->control('Password');
                    echo $this->Form->control('Voiture');
                    echo $this->Form->control('Activity');
                    echo $this->Form->control('depot_id', ['options' => $depots]);
                    echo $this->Form->control('Responsable_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
