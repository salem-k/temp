<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sousfamille $sousfamille
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sousfamille'), ['action' => 'edit', $sousfamille->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sousfamille'), ['action' => 'delete', $sousfamille->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sousfamille->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sousfamilles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sousfamille'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sousfamilles view content">
            <h3><?= h($sousfamille->Description) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($sousfamille->Description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $sousfamille->has('category') ? $this->Html->link($sousfamille->category->Description, ['controller' => 'Categories', 'action' => 'view', $sousfamille->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sousfamille->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
