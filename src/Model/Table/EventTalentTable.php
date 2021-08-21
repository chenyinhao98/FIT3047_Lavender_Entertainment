<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EventTalent Model
 *
 * @method \App\Model\Entity\EventTalent newEmptyEntity()
 * @method \App\Model\Entity\EventTalent newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\EventTalent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EventTalent get($primaryKey, $options = [])
 * @method \App\Model\Entity\EventTalent findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\EventTalent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EventTalent[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\EventTalent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EventTalent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EventTalent[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EventTalent[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\EventTalent[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EventTalent[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EventTalentTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('event_talent');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('eventID')
            ->requirePresence('eventID', 'create')
            ->notEmptyString('eventID');

        $validator
            ->integer('talentID')
            ->requirePresence('talentID', 'create')
            ->notEmptyString('talentID');

        return $validator;
    }
}
