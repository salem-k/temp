<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sex $sex
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sex->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sex->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sexes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sexes form content">
            <?= $this->Form->create($sex) ?>
            <fieldset>
                <legend><?= __('Edit Sex') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
