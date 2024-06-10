<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sousfamille $sousfamille
 * @var \Cake\Collection\CollectionInterface|string[] $categories
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Sousfamilles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sousfamilles form content">
            <?= $this->Form->create($sousfamille) ?>
            <fieldset>
                <legend><?= __('Add Sousfamille') ?></legend>
                <?php
                    echo $this->Form->control('Description');
                    echo $this->Form->control('categories_id', ['options' => $categories]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
