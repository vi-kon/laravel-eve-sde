<?php

namespace ViKon\EveSDE\Models\Corporation;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NPCCorporationTrade
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Corporation
 * @property integer                                              $corporation_id
 * @property integer                                              $type_id
 * @property-read \ViKon\EveSDE\Models\Corporation\NPCCorporation $corporation
 * @property-read \ViKon\EveSDE\Models\Inventory\Type             $type
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporationTrade
 *         whereCorporationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCCorporationTrade
 *         whereTypeId($value)
 */
class NPCCorporationTrade extends Model {
    /**
     *
     * Disable updated_at and created_at columns
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * The database table used by the model (mysql).
     *
     * @var string
     */
    protected $table = 'crp_n_p_c_corporation_trades';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'crp_n_p_c_corporation_trades';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function corporation() {
        return $this->hasOne('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'type_id');
    }
}
