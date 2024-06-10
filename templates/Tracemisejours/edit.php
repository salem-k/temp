<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tracemisejour $tracemisejour
 * @var string[]|\Cake\Collection\CollectionInterface $utilisateurs
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tracemisejour->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tracemisejour->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tracemisejours'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tracemisejours form content">
            <?= $this->Form->create($tracemisejour) ?>
            <fieldset>
                <legend><?= __('Edit Tracemisejour') ?></legend>
                <?php
                    echo $this->Form->control('model');
                    echo $this->Form->control('id_piece');
                    echo $this->Form->control('operation');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('utilisateur_id', ['options' => $utilisateurs, 'empty' => true]);
                    echo $this->Form->control('date', ['empty' => true]);
                    echo $this->Form->control('heure');
                    echo $this->Form->control('poste');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
