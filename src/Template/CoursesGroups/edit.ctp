<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoursesGroup $coursesGroup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $coursesGroup->id_courses_groups],
                ['confirm' => __('Are you sure you want to delete # {0}?', $coursesGroup->id_courses_groups)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Courses Groups'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="coursesGroups form large-9 medium-8 columns content">
    <?= $this->Form->create($coursesGroup) ?>
    <fieldset>
        <legend><?= __('Edit Courses Group') ?></legend>
        <?php
            echo $this->Form->control('professor');
            echo $this->Form->control('schedule');
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
