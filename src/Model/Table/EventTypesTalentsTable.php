<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EventTypesTalents Model
 *
 * @property \App\Model\Table\TalentsTable&\Cake\ORM\Association\BelongsTo $Talents
 * @property \App\Model\Table\EventTypesTable&\Cake\ORM\Association\BelongsTo $EventTypes
 *
 * @method \App\Model\Entity\EventTypesTalent newEmptyEntity()
 * @method \App\Model\Entity\EventTypesTalent newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\EventTypesTalent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EventTypesTalent get($primaryKey, $options = [])
 * @method \App\Model\Entity\EventTypesTalent findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\EventTypesTalent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EventTypesTalent[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\EventTypesTalent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EventTypesTalent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EventTypesTalent[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EventTypesTalent[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\EventTypesTalent[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EventTypesTalent[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EventTypesTalentsTable extends Table
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

        $this->setTable('event_types_talents');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Talents', [
            'foreignKey' => 'talent_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('EventTypes', [
            'foreignKey' => 'event_type_id',
            'joinType' => 'INNER',
        ]);
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['talent_id'], 'Talents'), ['errorField' => 'talent_id']);
        $rules->add($rules->existsIn(['event_type_id'], 'EventTypes'), ['errorField' => 'event_type_id']);

        return $rules;
    }
}
