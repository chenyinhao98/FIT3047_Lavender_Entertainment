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
            ->integer('venueID')
            ->allowEmptyString('venueID', null, 'create');

        $validator
            ->scalar('venueName')
            ->maxLength('venueName', 256)
            ->requirePresence('venueName', 'create')
            ->notEmptyString('venueName');

        $validator
            ->scalar('venueAddress')
            ->maxLength('venueAddress', 256)
            ->requirePresence('venueAddress', 'create')
            ->notEmptyString('venueAddress');

        $validator
            ->scalar('venueMiniCap')
            ->maxLength('venueMiniCap', 256)
            ->requirePresence('venueMiniCap', 'create')
            ->notEmptyString('venueMiniCap');

        $validator
            ->scalar('venuePreferred')
            ->maxLength('venuePreferred', 256)
            ->requirePresence('venuePreferred', 'create')
            ->notEmptyString('venuePreferred');

        $validator
            ->scalar('venuePPH')
            ->maxLength('venuePPH', 256)
            ->requirePresence('venuePPH', 'create')
            ->notEmptyString('venuePPH');

        $validator
            ->numeric('venueMiniHour')
            ->requirePresence('venueMiniHour', 'create')
            ->notEmptyString('venueMiniHour');

        $validator
            ->scalar('venueContactName')
            ->maxLength('venueContactName', 256)
            ->requirePresence('venueContactName', 'create')
            ->notEmptyString('venueContactName');

        $validator
            ->scalar('venueContactNumber')
            ->maxLength('venueContactNumber', 256)
            ->requirePresence('venueContactNumber', 'create')
            ->notEmptyString('venueContactNumber');

        $validator
            ->scalar('venueContactEmail')
            ->maxLength('venueContactEmail', 256)
            ->requirePresence('venueContactEmail', 'create')
            ->notEmptyString('venueContactEmail');

        return $validator;
    }
}
