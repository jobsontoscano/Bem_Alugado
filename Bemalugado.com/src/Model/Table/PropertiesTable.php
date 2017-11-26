<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Properties Model
 *
 * @method \App\Model\Entity\Property get($primaryKey, $options = [])
 * @method \App\Model\Entity\Property newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Property[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Property|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Property patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Property[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Property findOrCreate($search, callable $callback = null, $options = [])
 */
class PropertiesTable extends Table
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

        $this->setTable('properties');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->belongsTo('Users',[
            'foreignKey' => 'id_user',
            'joinType' => 'INNER'
            ]);
        $this->hasMany('Contracts', [
            'foreignKey' => 'id_propertie',
            'joinType' => 'INNER'
            ]);
    }
    public function isOwnedBy($propertiesid, $userId)
    {
        return $this->exists(['id' => $propertiesid, 'id_user' => $userId]);
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
            ->scalar('kind')
            ->requirePresence('kind', 'create')
            ->notEmpty('kind');

        $validator
            ->scalar('cep')
            ->requirePresence('cep', 'create')
            ->notEmpty('cep');

        $validator
            ->scalar('state')
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        $validator
            ->scalar('city')
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->scalar('neighborhood')
            ->requirePresence('neighborhood', 'create')
            ->notEmpty('neighborhood');

        $validator
            ->scalar('address')
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->integer('number')
            ->requirePresence('number', 'create')
            ->notEmpty('number');

        $validator
            ->scalar('complement')
            ->requirePresence('complement', 'create')
            ->notEmpty('complement');

        $validator
            ->scalar('descricao')
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->boolean('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
