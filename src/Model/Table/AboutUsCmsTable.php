<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AboutUsCms Model
 *
 * @method \App\Model\Entity\AboutUsCm newEmptyEntity()
 * @method \App\Model\Entity\AboutUsCm newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\AboutUsCm[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AboutUsCm get($primaryKey, $options = [])
 * @method \App\Model\Entity\AboutUsCm findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\AboutUsCm patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AboutUsCm[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AboutUsCm|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AboutUsCm saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AboutUsCm[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AboutUsCm[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\AboutUsCm[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AboutUsCm[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AboutUsCmsTable extends Table
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

        $this->setTable('about_us_cms');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('first_section_header_1')
            ->maxLength('first_section_header_1', 100)
            ->requirePresence('first_section_header_1', 'create')
            ->notEmptyString('first_section_header_1');

        $validator
            ->scalar('first_section_body_1')
            ->maxLength('first_section_body_1', 225)
            ->requirePresence('first_section_body_1', 'create')
            ->notEmptyString('first_section_body_1');

        $validator
            ->scalar('first_section_photo_1')
            ->maxLength('first_section_photo_1', 225)
            ->requirePresence('first_section_photo_1', 'create')
            ->notEmptyString('first_section_photo_1');

        $validator
            ->scalar('first_section_header_2')
            ->maxLength('first_section_header_2', 100)
            ->requirePresence('first_section_header_2', 'create')
            ->notEmptyString('first_section_header_2');

        $validator
            ->scalar('first_section_body_2')
            ->maxLength('first_section_body_2', 225)
            ->requirePresence('first_section_body_2', 'create')
            ->notEmptyString('first_section_body_2');

        $validator
            ->scalar('first_section_photo_2')
            ->maxLength('first_section_photo_2', 225)
            ->requirePresence('first_section_photo_2', 'create')
            ->notEmptyString('first_section_photo_2');

        $validator
            ->scalar('first_section_header_3')
            ->maxLength('first_section_header_3', 100)
            ->requirePresence('first_section_header_3', 'create')
            ->notEmptyString('first_section_header_3');

        $validator
            ->scalar('first_section_body_3')
            ->maxLength('first_section_body_3', 225)
            ->requirePresence('first_section_body_3', 'create')
            ->notEmptyString('first_section_body_3');

        $validator
            ->scalar('first_section_photo_3')
            ->maxLength('first_section_photo_3', 225)
            ->requirePresence('first_section_photo_3', 'create')
            ->notEmptyString('first_section_photo_3');

        $validator
            ->scalar('what_we_offer_photo')
            ->maxLength('what_we_offer_photo', 225)
            ->requirePresence('what_we_offer_photo', 'create')
            ->notEmptyString('what_we_offer_photo');

        $validator
            ->scalar('what_we_offer_body')
            ->maxLength('what_we_offer_body', 225)
            ->requirePresence('what_we_offer_body', 'create')
            ->notEmptyString('what_we_offer_body');

        $validator
            ->scalar('what_we_offer_dot_1')
            ->requirePresence('what_we_offer_dot_1', 'create')
            ->notEmptyString('what_we_offer_dot_1');

        $validator
            ->scalar('what_we_offer_dot_2')
            ->requirePresence('what_we_offer_dot_2', 'create')
            ->notEmptyString('what_we_offer_dot_2');

        $validator
            ->scalar('what_we_offer_dot_3')
            ->requirePresence('what_we_offer_dot_3', 'create')
            ->notEmptyString('what_we_offer_dot_3');

        $validator
            ->scalar('what_we_offer_dot_4')
            ->requirePresence('what_we_offer_dot_4', 'create')
            ->notEmptyString('what_we_offer_dot_4');

        $validator
            ->scalar('what_we_offer_dot_5')
            ->requirePresence('what_we_offer_dot_5', 'create')
            ->notEmptyString('what_we_offer_dot_5');

        $validator
            ->scalar('what_we_offer_dot_6')
            ->requirePresence('what_we_offer_dot_6', 'create')
            ->notEmptyString('what_we_offer_dot_6');

        $validator
            ->scalar('what_we_offer_dot_7')
            ->requirePresence('what_we_offer_dot_7', 'create')
            ->notEmptyString('what_we_offer_dot_7');

        $validator
            ->scalar('what_we_offer_dot_8')
            ->requirePresence('what_we_offer_dot_8', 'create')
            ->notEmptyString('what_we_offer_dot_8');

        $validator
            ->scalar('annoucement_heading')
            ->maxLength('annoucement_heading', 100)
            ->requirePresence('annoucement_heading', 'create')
            ->notEmptyString('annoucement_heading');

        $validator
            ->scalar('annoucment_body')
            ->maxLength('annoucment_body', 225)
            ->requirePresence('annoucment_body', 'create')
            ->notEmptyString('annoucment_body');

        return $validator;
    }
}
