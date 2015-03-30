<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Group
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Inventory
 * @property integer                                                                                   $group_id
 * @property integer                                                                                   $category_id
 * @property string                                                                                    $group_name
 * @property string                                                                                    $description
 * @property integer                                                                                   $icon_id
 * @property boolean                                                                                   $use_base_price
 * @property boolean
 *           $allow_manufacture
 * @property boolean                                                                                   $allow_recycler
 * @property boolean                                                                                   $anchored
 * @property boolean                                                                                   $anchorable
 * @property boolean
 *           $fittable_non_singleton
 * @property boolean                                                                                   $published
 * @property-read \ViKon\EveSDE\Models\Inventory\Category                                              $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Inventory\Type[]       $types
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Inventory\UniqueName[] $uniqueNames
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Map\Denormalize[]      $denormalize
 * @property-read \ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerGroup
 *                $assemblyLineTypeDetailPerGroup
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Group whereGroupId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Group whereCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Group whereGroupName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Group whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Group whereIconId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Group whereUseBasePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Group whereAllowManufacture($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Group whereAllowRecycler($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Group whereAnchored($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Group whereAnchorable($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Group
 *         whereFittableNonSingleton($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Group wherePublished($value)
 */
class Group extends Model {
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
    protected $table = 'inv_groups';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'inv_groups';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category() {
        return $this->belongsTo('ViKon\EveSDE\Models\Inventory\Category', 'category_id', 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function types() {
        return $this->hasMany('ViKon\EveSDE\Models\Inventory\Type', 'group_id', 'group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function uniqueNames() {
        return $this->hasMany('ViKon\EveSDE\Models\Inventory\UniqueName', 'group_id', 'group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function denormalize() {
        return $this->hasMany('ViKon\EveSDE\Models\Map\Denormalize', 'group_id', 'group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function assemblyLineTypeDetailPerGroup() {
        return $this->belongsTo('ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerGroup', 'group_id', 'group_id');
    }
}
