<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Incoterm $incoterm
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $incoterm->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $incoterm->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Incoterms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="incoterms form content">
            <?= $this->Form->create($incoterm) ?>
            <fieldset>
                <legend><?= __('Edit Incoterm') ?></legend>
                <?php
                    echo $this->Form->control('code');
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
