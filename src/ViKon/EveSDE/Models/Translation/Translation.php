<?php

namespace ViKon\EveSDE\Models\Translation;

use Illuminate\Database\Eloquent\Model;

/**
 * ViKon\EveSDE\Models\Translation\Translation
 *
 * @property integer                                                 $tc_id
 * @property integer                                                 $key_id
 * @property string                                                  $language_id
 * @property string                                                  $text
 * @property-read \ViKon\EveSDE\Models\Translation\TranslationColumn $tc
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Translation\Translation whereTcId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Translation\Translation whereKeyId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Translation\Translation
 *         whereLanguageId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Translation\Translation whereText($value)
 */
class Translation extends Model {
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
    protected $table = 'trn_translations';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'trn_translations';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tc() {
        return $this->belongsTo('ViKon\EveSDE\Models\Translation\TranslationColumn', 'tc_id', 'tc_id');
    }
}
