<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoursesGroup $coursesGroup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Courses Group'), ['action' => 'edit', $coursesGroup->id_courses_groups]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Courses Group'), ['action' => 'delete', $coursesGroup->id_courses_groups], ['confirm' => __('Are you sure you want to delete # {0}?', $coursesGroup->id_courses_groups)]) ?> </li>
        <li><?= $this->Html->link(__('List Courses Groups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Courses Group'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coursesGroups view large-9 medium-8 columns content">
    <h3><?= h($coursesGroup->id_courses_groups) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Courses Groups') ?></th>
            <td><?= h($coursesGroup->id_courses_groups) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Professor') ?></th>
            <td><?= h($coursesGroup->professor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Schedule') ?></th>
            <td><?= h($coursesGroup->schedule) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Period') ?></th>
            <td><?= $this->Number->format($coursesGroup->period) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= $this->Number->format($coursesGroup->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $coursesGroup->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
