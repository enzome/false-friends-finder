<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Scores Model
 *
 * @method \App\Model\Entity\Score get($primaryKey, $options = [])
 * @method \App\Model\Entity\Score newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Score[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Score|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Score patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Score[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Score findOrCreate($search, callable $callback = null, $options = [])
 */
class ScoresTable extends Table
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

        $this->setTable('scores');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->scalar('name')
            ->maxLength('name', 45)
            ->allowEmpty('name');

        $validator
            ->integer('hidden')
            ->allowEmpty('hidden');

        $validator
            ->integer('explained')
            ->allowEmpty('explained');

        $validator
            ->decimal('points')
            ->allowEmpty('points');

        return $validator;
    }
    public function addpoints ($name, $action) {
        if (null != $name) {
           $score = $this->find()->where(['name' => $name])->first();
            if (null != $score) {
                $score = $this->get($score['id']);
            } else {
                $score = $this->newEntity();
                $score->name = $name;
                $score->hidden = 0;
                $score->explained = 0;

            }
            switch ($action) {
                case 'hide':
                    $score->hidden++;
                    break;
                case 'explain':
                    $score->explained++;
                    break;
                default:
                    break;
            }

            return $this->save($score);
        }

    }

}
