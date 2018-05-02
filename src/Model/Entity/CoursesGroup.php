<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CoursesGroup Entity
 *
 * @property string $id_courses_groups
 * @property string $professor
 * @property string $schedule
 * @property int $period
 * @property int $year
 * @property bool $active
 */
class CoursesGroup extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'professor' => true,
        'schedule' => true,
        'active' => true
    ];
}
