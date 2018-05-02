<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoursesGroup[]|\Cake\Collection\CollectionInterface $coursesGroups
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Courses Group'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coursesGroups index large-9 medium-8 columns content">
    <h3><?= __('Courses Groups') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_courses_groups') ?></th>
                <th scope="col"><?= $this->Paginator->sort('professor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('schedule') ?></th>
                <th scope="col"><?= $this->Paginator->sort('period') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coursesGroups as $coursesGroup): ?>
            <tr>
                <td><?= h($coursesGroup->id_courses_groups) ?></td>
                <td><?= h($coursesGroup->professor) ?></td>
                <td><?= h($coursesGroup->schedule) ?></td>
                <td><?= $this->Number->format($coursesGroup->period) ?></td>
                <td><?= $this->Number->format($coursesGroup->year) ?></td>
                <td><?= h($coursesGroup->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coursesGroup->id_courses_groups]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coursesGroup->id_courses_groups]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coursesGroup->id_courses_groups], ['confirm' => __('Are you sure you want to delete # {0}?', $coursesGroup->id_courses_groups)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
