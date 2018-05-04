<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CoursesGroups Model
 *
 * @method \App\Model\Entity\CoursesGroup get($primaryKey, $options = [])
 * @method \App\Model\Entity\CoursesGroup newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CoursesGroup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CoursesGroup|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CoursesGroup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CoursesGroup[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CoursesGroup findOrCreate($search, callable $callback = null, $options = [])
 */
class CoursesGroupsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('courses_groups');
        $this->setDisplayField('id_courses_groups');
        //$this->setPrimaryKey(['id_courses_groups', 'period', 'year']);
        $this->setPrimaryKey(['id_courses_groups']);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->scalar('id_courses_groups')
            ->maxLength('id_courses_groups', 10)
            ->requirePresence('id_courses_groups', 'create')
            ->notEmpty('id_courses_groups', 'create');

        $validator
            ->scalar('professor')
            ->maxLength('professor', 45)
            ->requirePresence('professor', 'create')
            ->notEmpty('professor');

        $validator
            ->scalar('schedule')
            ->maxLength('schedule', 45)
            ->requirePresence('schedule', 'create')
            ->notEmpty('schedule');

        $validator
            ->integer('period')
            ->requirePresence('period', 'create')
            ->notEmpty('period', 'create');

        $validator
            ->integer('year')
            ->requirePresence('year', 'create')
            ->notEmpty('year', 'create');

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        return $validator;
    }
}
