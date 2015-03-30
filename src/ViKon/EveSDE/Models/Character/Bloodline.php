<?php

namespace ViKon\EveSDE\Models\Character;

use Illuminate\Database\Eloquent\Model;

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
