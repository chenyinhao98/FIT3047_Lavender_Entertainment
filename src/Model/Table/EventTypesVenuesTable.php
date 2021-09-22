<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EventTypesVenues Model
 *
 * @property \App\Model\Table\VenuesTable&\Cake\ORM\Association\BelongsTo $Venues
 * @property \App\Model\Table\EventTypesTable&\Cake\ORM\Association\BelongsTo $EventTypes
 *
 * @method \App\Model\Entity\EventTypesVenue newEmptyEntity()
 * @method \App\Model\Entity\EventTypesVenue newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\EventTypesVenue[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EventTypesVenue get($primaryKey, $options = [])
 * @method \App\Model\Entity\EventTypesVenue findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\EventTypesVenue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EventTypesVenue[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\EventTypesVenue|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EventTypesVenue saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EventTypesVenue[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EventTypesVenue[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\EventTypesVenue[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EventTypesVenue[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EventTypesVenuesTable extends Table
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

        $this->setTable('event_types_venues');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Venues', [
            'foreignKey' => 'venue_id',
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
        $rules->add($rules->existsIn(['venue_id'], 'Venues'), ['errorField' => 'venue_id']);
        $rules->add($rules->existsIn(['event_type_id'], 'EventTypes'), ['errorField' => 'event_type_id']);

        return $rules;
    }
}
