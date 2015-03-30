<?php

namespace ViKon\EveSDE\Models\Corporation;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NPCDivision
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Corporation
 * @property integer                                                                          $division_id
 * @property string                                                                           $division_name
 * @property string                                                                           $description
 * @property string                                                                           $leader_type
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Agent\Agent[] $agents
 * @property-read \ViKon\EveSDE\Models\Corporation\NPCCorporationDivision                     $nPCCorporationDivisions
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCDivision
 *         whereDivisionId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCDivision
 *         whereDivisionName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCDivision
 *         whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\NPCDivision
 *         whereLeaderType($value)
 */
class NPCDivision extends Model {
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
    protected $table = 'crp_n_p_c_divisions';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'crp_n_p_c_divisions';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agents() {
        return $this->hasMany('ViKon\EveSDE\Models\Agent\Agent', 'division_id', 'division_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nPCCorporationDivisions() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporationDivision', 'division_id', 'division_id');
    }
}
