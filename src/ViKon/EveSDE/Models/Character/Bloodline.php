<?php

namespace ViKon\EveSDE\Models\Character;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Character\Bloodline
 *
 * @property integer                                                                                 $bloodline_id
 * @property string                                                                                  $bloodline_name
 * @property integer                                                                                 $race_id
 * @property string                                                                                  $description
 * @property string                                                                                  $male_description
 * @property string
 *           $female_description
 * @property integer                                                                                 $ship_type_id
 * @property integer                                                                                 $corporation_id
 * @property integer                                                                                 $perception
 * @property integer                                                                                 $willpower
 * @property integer                                                                                 $charisma
 * @property integer                                                                                 $memory
 * @property integer                                                                                 $intelligence
 * @property integer                                                                                 $icon_id
 * @property string                                                                                  $short_description
 * @property string
 *           $short_male_description
 * @property string
 *           $short_female_description
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Character\Ancestry[] $ancestries
 * @property-read \ViKon\EveSDE\Models\Inventory\Type                                                $shipType
 * @property-read \ViKon\EveSDE\Models\Corporation\NPCCorporation                                    $corporation
 * @property-read \ViKon\EveSDE\Models\Character\Race                                                $race
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Bloodline whereBloodlineId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Bloodline
 *         whereBloodlineName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Bloodline whereRaceId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Bloodline whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Bloodline
 *         whereMaleDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Bloodline
 *         whereFemaleDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Bloodline whereShipTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Bloodline
 *         whereCorporationId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Bloodline wherePerception($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Bloodline whereWillpower($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Bloodline whereCharisma($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Bloodline whereMemory($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Bloodline whereIntelligence($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Bloodline whereIconId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Bloodline
 *         whereShortDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Bloodline
 *         whereShortMaleDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Bloodline
 *         whereShortFemaleDescription($value)
 */
class Bloodline extends Model {
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
    protected $table = 'chr_bloodlines';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'chr_bloodlines';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ancestries() {
        return $this->hasMany('ViKon\EveSDE\Models\Character\Ancestry', 'bloodline_id', 'bloodline_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shipType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'ship_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function corporation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function race() {
        return $this->belongsTo('ViKon\EveSDE\Models\Character\Race', 'race_id', 'race_id');
    }
}
