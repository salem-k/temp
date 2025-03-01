<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typearticle $typearticle
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typearticle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typearticle->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Typearticles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="typearticles form content">
            <?= $this->Form->create($typearticle) ?>
            <fieldset>
                <legend><?= __('Edit Typearticle') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
