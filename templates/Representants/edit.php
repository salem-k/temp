<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Representant $representant
 * @var string[]|\Cake\Collection\CollectionInterface $personnels
 * @var string[]|\Cake\Collection\CollectionInterface $fonctions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $representant->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $representant->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Representants'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="representants form content">
            <?= $this->Form->create($representant) ?>
            <fieldset>
                <legend><?= __('Edit Representant') ?></legend>
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
