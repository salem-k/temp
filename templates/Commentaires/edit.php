<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commentaire $commentaire
 * @var string[]|\Cake\Collection\CollectionInterface $repgros
 * @var string[]|\Cake\Collection\CollectionInterface $repsectoriels
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $commentaire->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $commentaire->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Commentaires'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commentaires form content">
            <?= $this->Form->create($commentaire) ?>
            <fieldset>
                <legend><?= __('Edit Commentaire') ?></legend>
                <?php
                    echo $this->Form->control('Description');
                    echo $this->Form->control('Repgros_id', ['options' => $repgros]);
                    echo $this->Form->control('repcommsects_id');
                    echo $this->Form->control('replivreures_id');
                    echo $this->Form->control('Date');
                    echo $this->Form->control('repsectoriel_id', ['options' => $repsectoriels]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
