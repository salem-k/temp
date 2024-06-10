<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Unite $unite
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $unite->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $unite->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Unites'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="unites form content">
            <?= $this->Form->create($unite) ?>
            <fieldset>
                <legend><?= __('Edit Unite') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('typeU');
                    echo $this->Form->control('formule');
                    echo $this->Form->control('reference');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
