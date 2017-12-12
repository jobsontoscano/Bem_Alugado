<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Wishes Model
 *
 * @method \App\Model\Entity\Wish get($primaryKey, $options = [])
 * @method \App\Model\Entity\Wish newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Wish[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Wish|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Wish patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Wish[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Wish findOrCreate($search, callable $callback = null, $options = [])
 */
class WishesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('wishes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->belongsTo('Users',[
            'foreignKey' => 'id_user',
            'joinType' => 'INNER'
            ]);
        $this->belongsTo('Properties',[
            'foreignKey' => 'id_propertie',
            'joinType' => 'INNER'
            ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->integer('id_user')
            ->requirePresence('id_user', 'create')
            ->notEmpty('id_user');

        $validator
            ->integer('id_propertie')
            ->requirePresence('id_propertie', 'create')
            ->notEmpty('id_propertie');

         $validator
            ->boolean('chekin')
            ->requirePresence('chekin', 'create')
            ->notEmpty('chekin');

        return $validator;
    }
}
