<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banque $banque
 * @var string[]|\Cake\Collection\CollectionInterface $devises
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $banque->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $banque->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Banques'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="banques form content">
            <?= $this->Form->create($banque) ?>
            <fieldset>
                <legend><?= __('Edit Banque') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('devise_id', ['options' => $devises, 'empty' => true]);
                    echo $this->Form->control('conditionReglement');
                    echo $this->Form->control('modetransport');
                    echo $this->Form->control('delaiLiv');
                    echo $this->Form->control('codeiban');
                    echo $this->Form->control('codeBicswift');
                    echo $this->Form->control('proprietaire');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
