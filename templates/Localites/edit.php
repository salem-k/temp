<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Localite $localite
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $localite->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $localite->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Localites'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="localites form content">
            <?= $this->Form->create($localite) ?>
            <fieldset>
                <legend><?= __('Edit Localite') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
