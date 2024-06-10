<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Factremise $factremise
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $factremise->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $factremise->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Factremises'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="factremises form content">
            <?= $this->Form->create($factremise) ?>
            <fieldset>
                <legend><?= __('Edit Factremise') ?></legend>
                <?php
                    echo $this->Form->control('client_id', ['options' => $clients]);
                    echo $this->Form->control('Reduction');
                    echo $this->Form->control('Date');
                    echo $this->Form->control('Commentaire');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
