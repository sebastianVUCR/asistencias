<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoursesGroup $coursesGroup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Lista de cursos'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="coursesGroups view large-9 medium-8 columns content">
    <h3><?= h($coursesGroup->id_courses_groups) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sigla') ?></th>
            <td><?= h($coursesGroup->id_courses_groups) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profesor') ?></th>
            <td><?= h($coursesGroup->professor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horario') ?></th>
            <td><?= h($coursesGroup->schedule) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodo') ?></th>
            <td><?= $this->Number->format($coursesGroup->period) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Año') ?></th>
            <td><?= $this->Number->format($coursesGroup->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activo') ?></th>
            <td><?= $coursesGroup->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
