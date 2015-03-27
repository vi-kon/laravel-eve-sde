<?php

namespace ViKon\EveSDE\Models\Character;

use Illuminate\Database\Eloquent\Model;

class Bloodlines extends Model {
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
        return $this->hasMany('ViKon\EveSDE\Models\Character\Ancestries', 'bloodline_id', 'bloodline_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function race() {
        return $this->belongsTo('ViKon\EveSDE\Models\Character\Races', 'race_id', 'race_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shipType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Types', 'type_id', 'ship_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function corporation() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporations', 'corporation_id', 'corporation_id');
    }
}
