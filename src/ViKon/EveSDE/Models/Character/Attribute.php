<?php

namespace ViKon\EveSDE\Models\Character;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Attribute
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Character
 * @property integer $attribute_id
 * @property string  $attribute_name
 * @property string  $description
 * @property integer $icon_id
 * @property string  $short_description
 * @property string  $notes
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Attribute whereAttributeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Attribute
 *         whereAttributeName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Attribute whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Attribute whereIconId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Attribute
 *         whereShortDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Character\Attribute whereNotes($value)
 */
class Attribute extends Model {
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
    protected $table = 'chr_attributes';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'chr_attributes';


}
