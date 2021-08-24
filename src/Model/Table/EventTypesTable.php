<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EventTypes Model
 *
 * @property \App\Model\Table\EventsTable&\Cake\ORM\Association\HasMany $Events
 * @property \App\Model\Table\SuppliersTable&\Cake\ORM\Association\BelongsToMany $Suppliers
 * @property \App\Model\Table\TalentsTable&\Cake\ORM\Association\BelongsToMany $Talents
 * @property \App\Model\Table\VenuesTable&\Cake\ORM\Association\BelongsToMany $Venues
 *
 * @method \App\Model\Entity\EventType newEmptyEntity()
 * @method \App\Model\Entity\EventType newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\EventType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EventType get($primaryKey, $options = [])
 * @method \App\Model\Entity\EventType findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\EventType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EventType[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\EventType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EventType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EventType[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EventType[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\EventType[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EventType[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EventTypesTable extends Table
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

        $this->setTable('event_types');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Events', [
            'foreignKey' => 'event_type_id',
        ]);
        $this->belongsToMany('Suppliers', [
            'foreignKey' => 'event_type_id',
            'targetForeignKey' => 'supplier_id',
            'joinTable' => 'suppliers_event_types',
        ]);
        $this->belongsToMany('Talents', [
            'foreignKey' => 'event_type_id',
            'targetForeignKey' => 'talent_id',
            'joinTable' => 'talents_event_types',
        ]);
        $this->belongsToMany('Venues', [
            'foreignKey' => 'event_type_id',
            'targetForeignKey' => 'venue_id',
            'joinTable' => 'venues_event_types',
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
            ->integer('event_name')
            ->requirePresence('event_name', 'create')
            ->notEmptyString('event_name');

        return $validator;
    }
}
