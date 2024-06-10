<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lignecommandeclient $lignecommandeclient
 * @var \Cake\Collection\CollectionInterface|string[] $commandeclients
 * @var \Cake\Collection\CollectionInterface|string[] $articles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Lignecommandeclients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="lignecommandeclients form content">
            <?= $this->Form->create($lignecommandeclient) ?>
            <fieldset>
                <legend><?= __('Add Lignecommandeclient') ?></legend>
                <?php
                    echo $this->Form->control('commandeclient_id', ['options' => $commandeclients, 'empty' => true]);
                    echo $this->Form->control('article_id', ['options' => $articles, 'empty' => true]);
                    echo $this->Form->control('qtestock');
                    echo $this->Form->control('qte');
                    echo $this->Form->control('prixht');
                    echo $this->Form->control('remise');
                    echo $this->Form->control('punht');
                    echo $this->Form->control('tva');
                    echo $this->Form->control('fodec');
                    echo $this->Form->control('ttc');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
