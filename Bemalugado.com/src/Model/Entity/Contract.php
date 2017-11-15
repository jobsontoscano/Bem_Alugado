<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contract Entity
 *
 * @property int $id
 * @property int $id_customer
 * @property int $id_propertie
 * @property \Cake\I18n\FrozenTime $duracao_contract
 * @property \Cake\I18n\FrozenTime $end_contract
 */
class Contract extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'id_customer' => true,
        'id_propertie' => true,
        'duracao_contract' => true,
        'end_contract' => true
    ];
}
