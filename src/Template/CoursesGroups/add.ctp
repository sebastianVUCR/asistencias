<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoursesGroup $coursesGroup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Lista de cursos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="coursesGroups form large-9 medium-8 columns content">
    <?= $this->Form->create($coursesGroup) ?>
    <fieldset>
        <legend><?= __('Agregar curso') ?></legend>
        <?php
            echo $this->Form->control('id_courses_groups');
            echo $this->Form->control('professor');
            echo $this->Form->control('schedule');
            echo $this->Form->control('active');
            echo $this->Form->control('period');
            echo $this->Form->control('year');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Aceptar')) ?>
    <?= $this->Form->end() ?>
</div>
