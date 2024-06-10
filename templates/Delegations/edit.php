<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Delegation $delegation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $delegation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $delegation->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Delegations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="delegations form content">
            <?= $this->Form->create($delegation) ?>
            <fieldset>
                <legend><?= __('Edit Delegation') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('codepostale');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
