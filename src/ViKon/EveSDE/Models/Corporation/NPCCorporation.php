<?php

namespace ViKon\EveSDE\Models\Corporation;

use Illuminate\Database\Eloquent\Model;

class NPCCorporation extends Model {
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
    protected $table = 'crp_n_p_c_corporations';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'crp_n_p_c_corporations';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agents() {
        return $this->hasMany('ViKon\EveSDE\Models\Agent\Agent', 'corporation_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bloodlines() {
        return $this->hasMany('ViKon\EveSDE\Models\Character\Bloodline', 'corporation_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nPCCorporationDivisions() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporationDivision', 'corporation_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nPCCorporationResearchFields() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporationResearchField', 'corporation_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nPCCorporationTrades() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporationTrade', 'corporation_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solarSystem() {
        return $this->belongsTo('ViKon\EveSDE\Models\Map\SolarSystem', 'solar_system_id', 'solar_system_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function investor1() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'investor_id1');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function investor2() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'investor_id2');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function investor3() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'investor_id3');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function investor4() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'investor_id4');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function friend() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'friend_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enemy() {
        return $this->belongsTo('ViKon\EveSDE\Models\Corporation\NPCCorporation', 'corporation_id', 'enemy_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assemblyLineStations() {
        return $this->hasMany('ViKon\EveSDE\Models\Ram\AssemblyLineStation', 'owner_id', 'corporation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stations() {
        return $this->hasMany('ViKon\EveSDE\Models\Station\Station', 'corporation_id', 'corporation_id');
    }
}
