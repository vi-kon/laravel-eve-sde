<?php

namespace ViKon\EveSDE\Models\Inventory;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Inventory\Category
 *
 * @property integer
 *           $category_id
 * @property string
 *           $category_name
 * @property string
 *           $description
 * @property integer
 *           $icon_id
 * @property boolean
 *           $published
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Inventory\Group[]
 *                $groups
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerCategory[]
 *                $assemblyLineTypeDetailPerCategories
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Category whereCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Category whereCategoryName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Category whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Category whereIconId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Inventory\Category wherePublished($value)
 */
class Category extends Model {
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
    protected $table = 'inv_categories';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'inv_categories';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function groups() {
        return $this->hasMany('ViKon\EveSDE\Models\Inventory\Group', 'category_id', 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assemblyLineTypeDetailPerCategories() {
        return $this->hasMany('ViKon\EveSDE\Models\Ram\AssemblyLineTypeDetailPerCategory', 'category_id', 'category_id');
    }
}
