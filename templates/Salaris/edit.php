<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salari $salari
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $salari->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $salari->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Salaris'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="salaris form content">
            <?= $this->Form->create($salari) ?>
            <fieldset>
                <legend><?= __('Edit Salari') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
