<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoursesGroup $coursesGroup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Courses Groups'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="coursesGroups form large-9 medium-8 columns content">
    <?= $this->Form->create($coursesGroup) ?>
    <fieldset>
        <legend><?= __('Add Courses Group') ?></legend>
        <?php
            echo $this->Form->control('professor');
            echo $this->Form->control('schedule');
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
