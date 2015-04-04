<?php

namespace ViKon\EveSDE\Models\Character;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Character\Race
 *
 * @property integer                                                                                  $race_id
 * @property string                                                                                   $race_name
 * @property string                                                                                   $description
 * @property integer                                                                                  $icon_id
 * @property string                                                                                   $short_description
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Character\Bloodline[] $bloodlines
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Inventory\Type[]      $types
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Race whereRaceId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Race whereRaceName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Race whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Race whereIconId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Race whereShortDescription($value)
 */
class Race extends Model {
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
    protected $table = 'chr_races';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'chr_races';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bloodlines() {
        return $this->hasMany('ViKon\EveSDE\Models\Character\Bloodline', 'race_id', 'race_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function types() {
        return $this->hasMany('ViKon\EveSDE\Models\Inventory\Type', 'race_id', 'race_id');
    }
}
