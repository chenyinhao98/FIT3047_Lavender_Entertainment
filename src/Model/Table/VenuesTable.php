<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Venues Model
 *
 * @method \App\Model\Entity\Venue newEmptyEntity()
 * @method \App\Model\Entity\Venue newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Venue[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Venue get($primaryKey, $options = [])
 * @method \App\Model\Entity\Venue findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Venue patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Venue[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Venue|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Venue saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Venue[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Venue[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Venue[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Venue[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VenuesTable extends Table
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

        $this->setTable('venues');
        $this->setDisplayField('venueID');
        $this->setPrimaryKey('venueID');

        $this->hasMany('Events', [
            'foreignKey' => 'venue_id',
        ]);
        $this->belongsToMany('EventTypes', [
            'foreignKey' => 'venue_id',
            'targetForeignKey' => 'event_type_id',
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
            ->scalar('venue_name')
            ->maxLength('venue_name', 256)
            ->requirePresence('venue_name', 'create')
            ->notEmptyString('venue_name');

        $validator
            ->scalar('venue_address')
            ->maxLength('venue_address', 256)
            ->requirePresence('venue_address', 'create')
            ->notEmptyString('venue_address');

        $validator
            ->scalar('venue_min_capacity')
            ->maxLength('venue_min_capacity', 256)
            ->requirePresence('venue_min_capacity', 'create')
            ->notEmptyString('venue_min_capacity');

        $validator
            ->numeric('venue_payrate')
            ->requirePresence('venue_payrate', 'create')
            ->notEmptyString('venue_payrate');

        $validator
            ->numeric('venue_min_hour')
            ->requirePresence('venue_min_hour', 'create')
            ->notEmptyString('venue_min_hour');

        $validator
            ->scalar('venue_contact_name')
            ->maxLength('venue_contact_name', 256)
            ->requirePresence('venue_contact_name', 'create')
            ->notEmptyString('venue_contact_name');

        $validator
            ->scalar('venue_contact_number')
            ->maxLength('venue_contact_number', 256)
            ->requirePresence('venue_contact_number', 'create')
            ->notEmptyString('venue_contact_number');

        $validator
            ->scalar('venue_email')
            ->maxLength('venue_email', 256)
            ->requirePresence('venue_email', 'create')
            ->notEmptyString('venue_email');

        return $validator;
    }
}
