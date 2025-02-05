<?php

namespace Botble\RealEstate\Enums;

use Botble\Base\Supports\Enum;

/**
 * @method static ConsultCustomFieldTypeEnum TEXT()
 * @method static ConsultCustomFieldTypeEnum NUMBER()
 * @method static ConsultCustomFieldTypeEnum TEXTAREA()
 * @method static ConsultCustomFieldTypeEnum DROPDOWN()
 * @method static ConsultCustomFieldTypeEnum CHECKBOX()
 * @method static ConsultCustomFieldTypeEnum RADIO()
 */
class ConsultCustomFieldTypeEnum extends Enum
{
    public const TEXT = 'text';

    public const NUMBER = 'number';

    public const TEXTAREA = 'textarea';

    public const DROPDOWN = 'dropdown';

    public const CHECKBOX = 'checkbox';

    public const RADIO = 'radio';

    public const DATE = 'date';

    public static $langPath = 'plugins/real-estate::consult.custom_field.enums.types';
}
