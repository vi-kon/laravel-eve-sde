<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeReaction
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Inventory
 * @property integer                                  $reaction_type_id
 * @property boolean                                  $input
 * @property integer                                  $type_id
 * @property integer                                  $quantity
 * @property-read \ViKon\EveSDE\Models\Inventory\Type $reactionType
 * @property-read \ViKon\EveSDE\Models\Inventory\Type $type
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\TypeReaction
 *         whereReactionTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\TypeReaction whereInput($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\TypeReaction whereTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\TypeReaction whereQuantity($value)
 */
class TypeReaction extends Model {
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
    protected $table = 'inv_type_reactions';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'inv_type_reactions';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function reactionType() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'reaction_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type() {
        return $this->hasOne('ViKon\EveSDE\Models\Inventory\Type', 'type_id', 'type_id');
    }
}
