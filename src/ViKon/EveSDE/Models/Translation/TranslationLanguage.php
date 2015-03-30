<?php

namespace ViKon\EveSDE\Models\Translation;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TranslationLanguage
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 * @package ViKon\EveSDE\Models\Translation
 * @property integer $numeric_language_id
 * @property string  $language_id
 * @property string  $language_name
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Translation\TranslationLanguage
 *         whereNumericLanguageId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Translation\TranslationLanguage
 *         whereLanguageId($value)
 * @method static \Illuminate\Database\Query\Builder|\ViKon\EveSDE\Models\Translation\TranslationLanguage
 *         whereLanguageName($value)
 */
class TranslationLanguage extends Model {
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
    protected $table = 'trn_translation_languages';

    /**
     * The database table used by the model (mongodb).
     *
     * @var string
     */
    protected $collection = 'trn_translation_languages';


}
