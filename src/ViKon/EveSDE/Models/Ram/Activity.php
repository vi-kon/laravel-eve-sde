<?php

namespace ViKon\EveSDE\Models\Ram;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Activity
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Ram
 * @property integer                                                                                   $activity_id
 * @property string                                                                                    $activity_name
 * @property string                                                                                    $icon_no
 * @property string                                                                                    $description
 * @property boolean                                                                                   $published
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Ram\AssemblyLineType[]
 *                $assemblyLineTypes
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\Activity whereActivityId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\Activity whereActivityName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\Activity whereIconNo($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\Activity whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Ram\Activity wherePublished($value)
 */
class Activity extends Model {
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
    protected $table = 'ram_activities';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'ram_activities';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assemblyLineTypes() {
        return $this->hasMany('ViKon\EveSDE\Models\Ram\AssemblyLineType', 'activity_id', 'activity_id');
    }
}
