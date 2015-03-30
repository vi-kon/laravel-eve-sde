<?php

namespace ViKon\EveSDE\Models\Damage;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Expression
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Damage
 * @property integer $expression_id
 * @property integer $operand_id
 * @property integer $arg1
 * @property integer $arg2
 * @property string  $expression_value
 * @property string  $description
 * @property string  $expression_name
 * @property integer $expression_type_id
 * @property integer $expression_group_id
 * @property integer $expression_attribute_id
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Expression whereExpressionId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Expression whereOperandId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Expression whereArg1($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Expression whereArg2($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Expression
 *         whereExpressionValue($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Expression whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Expression whereExpressionName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Expression
 *         whereExpressionTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Expression
 *         whereExpressionGroupId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Damage\Expression
 *         whereExpressionAttributeId($value)
 */
class Expression extends Model {
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
    protected $table = 'dgm_expressions';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'dgm_expressions';


}
