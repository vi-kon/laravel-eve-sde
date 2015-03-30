<?php

namespace ViKon\EveSDE\Models\Character;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ancestry
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Character
 * @property integer                                       $ancestry_id
 * @property string                                        $ancestry_name
 * @property integer                                       $bloodline_id
 * @property string                                        $description
 * @property integer                                       $perception
 * @property integer                                       $willpower
 * @property integer                                       $charisma
 * @property integer                                       $memory
 * @property integer                                       $intelligence
 * @property integer                                       $icon_id
 * @property string                                        $short_description
 * @property-read \ViKon\EveSDE\Models\Character\Bloodline $bloodline
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Ancestry whereAncestryId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Ancestry whereAncestryName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Ancestry whereBloodlineId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Ancestry whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Ancestry wherePerception($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Ancestry whereWillpower($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Ancestry whereCharisma($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Ancestry whereMemory($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Ancestry whereIntelligence($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Ancestry whereIconId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Ancestry
 *         whereShortDescription($value)
 */
class Ancestry extends Model {
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
    protected $table = 'chr_ancestries';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'chr_ancestries';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bloodline() {
        return $this->belongsTo('ViKon\EveSDE\Models\Character\Bloodline', 'bloodline_id', 'bloodline_id');
    }
}
