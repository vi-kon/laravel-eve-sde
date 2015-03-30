<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

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
