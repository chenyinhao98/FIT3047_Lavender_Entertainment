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
        $this->setDisplayField('eventID');
        $this->setPrimaryKey('eventID');
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
            ->allowEmptyString('eventID', null, 'create');

        $validator
            ->integer('customerID')
            ->requirePresence('customerID', 'create')
            ->notEmptyString('customerID');

        $validator
            ->integer('venueID')
            ->requirePresence('venueID', 'create')
            ->notEmptyString('venueID');

        $validator
            ->integer('eventAttendance')
            ->requirePresence('eventAttendance', 'create')
            ->notEmptyString('eventAttendance');

        $validator
            ->integer('eventDate')
            ->requirePresence('eventDate', 'create')
            ->notEmptyString('eventDate');

        $validator
            ->scalar('eventType')
            ->maxLength('eventType', 256)
            ->requirePresence('eventType', 'create')
            ->notEmptyString('eventType');

        $validator
            ->dateTime('eventStartTime')
            ->requirePresence('eventStartTime', 'create')
            ->notEmptyDateTime('eventStartTime');

        $validator
            ->dateTime('eventEndTime')
            ->requirePresence('eventEndTime', 'create')
            ->notEmptyDateTime('eventEndTime');

        $validator
            ->integer('paymentID')
            ->requirePresence('paymentID', 'create')
            ->notEmptyString('paymentID');

        return $validator;
    }
}
