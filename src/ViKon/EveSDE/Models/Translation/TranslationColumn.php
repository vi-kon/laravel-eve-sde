<?php

namespace ViKon\EveSDE\Models\Translation;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Translation\TranslationColumn
 *
 * @property integer                                                                                      $tc_group_id
 * @property integer                                                                                      $tc_id
 * @property string                                                                                       $table_name
 * @property string                                                                                       $column_name
 * @property string                                                                                       $master_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\ViKon\EveSDE\Models\Translation\Translation[] $translations
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Translation\TranslationColumn
 *         whereTcGroupId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Translation\TranslationColumn
 *         whereTcId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Translation\TranslationColumn
 *         whereTableName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Translation\TranslationColumn
 *         whereColumnName($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Translation\TranslationColumn
 *         whereMasterId($value)
 */
class TranslationColumn extends Model {
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
    protected $table = 'trn_translation_columns';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'trn_translation_columns';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function translations() {
        return $this->hasMany('ViKon\EveSDE\Models\Translation\Translation', 'tc_id', 'tc_id');
    }
}
