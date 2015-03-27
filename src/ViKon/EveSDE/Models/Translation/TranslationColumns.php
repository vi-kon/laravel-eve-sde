<?php

namespace ViKon\EveSDE\Models\Translation;

use Illuminate\Database\Eloquent\Model;

class TranslationColumns extends Model {
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function translations() {
        return $this->belongsTo('ViKon\EveSDE\Models\Translation\Translations', 'tc_id', 'tc_id');
    }
}
