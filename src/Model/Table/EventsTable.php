<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\VenuesTable&\Cake\ORM\Association\BelongsTo $Venues
 * @property \App\Model\Table\EventTypesTable&\Cake\ORM\Association\BelongsTo $EventTypes
 * @property \App\Model\Table\SuppliersTable&\Cake\ORM\Association\BelongsToMany $Suppliers
 * @property \App\Model\Table\TalentsTable&\Cake\ORM\Association\BelongsToMany $Talents
 *
 * @method \App\Model\Entity\Event newEmptyEntity()
 * @method \App\Model\Entity\Event newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Event[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Event get($primaryKey, $options = [])
 * @method \App\Model\Entity\Event findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Event patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Event[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Event|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EventsTable extends Table
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

        $this->setTable('events');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Venues', [
            'foreignKey' => 'venue_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('EventTypes', [
            'foreignKey' => 'event_type_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsToMany('Suppliers', [
            'foreignKey' => 'event_id',
            'targetForeignKey' => 'supplier_id',
            'joinTable' => 'events_suppliers',
        ]);
        $this->belongsToMany('Talents', [
            'foreignKey' => 'event_id',
            'targetForeignKey' => 'talent_id',
            'joinTable' => 'events_talents',
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
            ->scalar('event_name')
            ->maxLength('event_name', 256)
            ->requirePresence('event_name', 'create')
            ->notEmptyString('event_name');

        $validator
            ->integer('event_attendance')
            ->requirePresence('event_attendance', 'create')
            ->notEmptyString('event_attendance');

        $validator
            ->dateTime('event_startdate')
            ->requirePresence('event_startdate', 'create')
            ->notEmptyDateTime('event_startdate');

        $validator
            ->dateTime('event_enddate')
            ->requirePresence('event_enddate', 'create')
            ->notEmptyDateTime('event_enddate');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn(['venue_id'], 'Venues'), ['errorField' => 'venue_id']);
        $rules->add($rules->existsIn(['event_type_id'], 'EventTypes'), ['errorField' => 'event_type_id']);

        return $rules;
    }
}
