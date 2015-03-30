<?php

namespace ViKon\EveSDE\Models\Corporation;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Activity
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Corporation
 * @property integer                                                                                $activity_id
 * @property string                                                                                 $activity_name
 * @property string                                                                                 $description
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Station\Operation[] $operations
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\Activity whereActivityId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\Activity whereActivityName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Corporation\Activity whereDescription($value)
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
    protected $table = 'crp_activities';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'crp_activities';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function operations() {
        return $this->hasMany('ViKon\EveSDE\Models\Station\Operation', 'activity_id', 'activity_id');
    }
}
