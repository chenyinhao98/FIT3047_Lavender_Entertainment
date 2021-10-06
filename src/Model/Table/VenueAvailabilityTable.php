<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VenueAvailability Model
 *
 * @property \App\Model\Table\VenuesTable&\Cake\ORM\Association\BelongsTo $Venues
 *
 * @method \App\Model\Entity\VenueAvailability newEmptyEntity()
 * @method \App\Model\Entity\VenueAvailability newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\VenueAvailability[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VenueAvailability get($primaryKey, $options = [])
 * @method \App\Model\Entity\VenueAvailability findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\VenueAvailability patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\VenueAvailability[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\VenueAvailability|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VenueAvailability saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VenueAvailability[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\VenueAvailability[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\VenueAvailability[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\VenueAvailability[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VenueAvailabilityTable extends Table
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

        $this->setTable('venue_availability');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Venues', [
            'foreignKey' => 'venue_id',
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
        $rules->add($rules->existsIn(['venue_id'], 'Venues'), ['errorField' => 'venue_id']);

        return $rules;
    }
}
