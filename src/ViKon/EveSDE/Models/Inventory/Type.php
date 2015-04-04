<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Inventory\Type
 *
 * @property integer
 *             $type_id
 * @property integer
 *             $group_id
 * @property string
 *             $type_name
 * @property string
 *             $description
 * @property float
 *             $mass
 * @property float
 *             $volume
 * @property float
 *             $capacity
 * @property integer
 *             $portion_size
 * @property integer
 *             $race_id
 * @property integer
 *             $base_price
 * @property boolean
 *             $published
 * @property integer
 *             $market_group_id
 * @property float
 *             $chance_of_duplicating
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Agent\ResearchAgent[]
 *                  $researchAgents
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Character\Bloodline[]
 *                  $bloodlines
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Corporation\NPCCorporationResearchField[]
 *                $nPCCorporationResearchFields
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Corporation\NPCCorporationTrade[]
 *                  $nPCCorporationTrades
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Damage\TypeAttribute[]
 *                  $typeAttributes
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Damage\TypeEffect[]
 *                  $typeEffects
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Inventory\ContrabandType[]
 *                  $contrabandTypes
 * @property-read \ViKon\EveSDE\Models\Inventory\MetaType
 *                  $metaType
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Inventory\MetaType[]
 *                  $metaTypes
 * @property-read \ViKon\EveSDE\Models\Inventory\Group
 *                  $group
 * @property-read \ViKon\EveSDE\Models\Character\Race
 *                  $race
 * @property-read \ViKon\EveSDE\Models\Inventory\MarketGroup
 *                  $marketGroup
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Map\Denormalize[]
 *                  $denormalizes
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Map\SolarSystem[]
 *                  $solarSystems
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Planet\SchematicsPinMap[]
 *                  $schematicsPinMaps
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Planet\SchematicsTypeMap[]
 *                  $schematicsTypeMaps
 * @property-read \ViKon\EveSDE\Models\Station\StationType
 *                  $stationType
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Type whereTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Type whereGroupId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Type whereTypeName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Type whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Type whereMass($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Type whereVolume($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Type whereCapacity($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Type wherePortionSize($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Type whereRaceId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Type whereBasePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Type wherePublished($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Type whereMarketGroupId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Type
 *         whereChanceOfDuplicating($value)
 */
class Type extends Model {
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
    protected $table = 'inv_types';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'inv_types';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function researchAgents() {
        return $this->hasMany('ViKon\EveSDE\Models\Agent\ResearchAgent', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bloodlines() {
        return $this->hasMany('ViKon\EveSDE\Models\Character\Bloodline', 'ship_type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nPCCorporationResearchFields() {
        return $this->hasMany('ViKon\EveSDE\Models\Corporation\NPCCorporationResearchField', 'skill_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nPCCorporationTrades() {
        return $this->hasMany('ViKon\EveSDE\Models\Corporation\NPCCorporationTrade', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function typeAttributes() {
        return $this->hasMany('ViKon\EveSDE\Models\Damage\TypeAttribute', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function typeEffects() {
        return $this->hasMany('ViKon\EveSDE\Models\Damage\TypeEffect', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contrabandTypes() {
        return $this->hasMany('ViKon\EveSDE\Models\Inventory\ContrabandType', 'type_id', 'type_id');
    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function controlTowerResources() {
//        return $this->hasMany('ViKon\EveSDE\Models\Inventory\ControlTowerResource', 'control_tower_type_id', 'type_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function controlTowerResources() {
//        return $this->hasMany('ViKon\EveSDE\Models\Inventory\ControlTowerResource', 'resource_type_id', 'type_id');
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function metaType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\MetaType', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function metaTypes() {
        return $this->hasMany('ViKon\EveSDE\Models\Inventory\MetaType', 'parent_type_id', 'type_id');
    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function typeMaterials() {
//        return $this->hasMany('ViKon\EveSDE\Models\Inventory\TypeMaterial', 'type_id', 'type_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function typeMaterials() {
//        return $this->hasMany('ViKon\EveSDE\Models\Inventory\TypeMaterial', 'material_type_id', 'type_id');
//    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function typeReactions() {
//        return $this->hasMany('ViKon\EveSDE\Models\Inventory\TypeReaction', 'reaction_type_id', 'type_id');
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function typeReactions() {
//        return $this->hasMany('ViKon\EveSDE\Models\Inventory\TypeReaction', 'type_id', 'type_id');
//    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Group', 'group_id', 'group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function race() {
        return $this->belongsTo('ViKon\EveSDE\Models\Character\Race', 'race_id', 'race_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function marketGroup() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\MarketGroup', 'market_group_id', 'market_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function denormalizes() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\Denormalize', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function solarSystems() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\SolarSystem', 'sun_type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schematicsPinMaps() {
        return $this->hasMany('ViKon\EveSDE\Models\Planet\SchematicsPinMap', 'pin_type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schematicsTypeMaps() {
        return $this->hasMany('ViKon\EveSDE\Models\Planet\SchematicsTypeMap', 'type_id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stationType() {
        return $this->belongsTo('ViKon\EveSDE\Models\Station\StationType', 'type_id', 'station_type_id');
    }
}
