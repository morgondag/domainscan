<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Stat Entity
 *
 * @property int $id
 * @property \Cake\I18n\Time $date
 * @property int $vendor_id
 * @property int $total_domains
 *
 * @property \App\Model\Entity\Vendor $vendor
 */
class Stat extends Entity
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
        '*' => true,
        'id' => false
    ];
}
