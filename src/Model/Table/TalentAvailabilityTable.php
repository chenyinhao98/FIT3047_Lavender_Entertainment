<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TalentAvailability Model
 *
 * @property \App\Model\Table\TalentsTable&\Cake\ORM\Association\BelongsTo $Talents
 *
 * @method \App\Model\Entity\TalentAvailability newEmptyEntity()
 * @method \App\Model\Entity\TalentAvailability newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TalentAvailability[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TalentAvailability get($primaryKey, $options = [])
 * @method \App\Model\Entity\TalentAvailability findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TalentAvailability patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TalentAvailability[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TalentAvailability|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TalentAvailability saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TalentAvailability[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TalentAvailability[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TalentAvailability[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TalentAvailability[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TalentAvailabilityTable extends Table
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

        $this->setTable('talent_availability');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Talents', [
            'foreignKey' => 'talent_id',
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

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmptyDate('date');

        $validator
            ->scalar('description')
            ->maxLength('description', 225)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->boolean('avaliable')
            ->requirePresence('avaliable', 'create')
            ->notEmptyString('avaliable');

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

        return $rules;
    }
}
