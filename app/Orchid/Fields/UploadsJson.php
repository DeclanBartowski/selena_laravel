<?php

declare(strict_types=1);

namespace App\Orchid\Fields;

use Illuminate\Support\Arr;
use Orchid\Attachment\Models\Attachment;
use Orchid\Platform\Dashboard;
use Orchid\Screen\Field;
use Orchid\Support\Assert;
use Orchid\Support\Init;

/**
 * Class UploadsJson.
 *
 * @method UploadsJson form($value = true)
 * @method UploadsJson formaction($value = true)
 * @method UploadsJson formenctype($value = true)
 * @method UploadsJson formmethod($value = true)
 * @method UploadsJson formnovalidate($value = true)
 * @method UploadsJson formtarget($value = true)
 * @method UploadsJson name(string $value = null)
 * @method UploadsJson placeholder(string $value = null)
 * @method UploadsJson value($value = true)
 * @method UploadsJson help(string $value = null)
 * @method UploadsJson parallelUploads($value = true)
 * @method UploadsJson maxFileSize($value = true)
 * @method UploadsJson maxFiles($value = true)
 * @method UploadsJson timeOut(int $second = null)
 * @method UploadsJson acceptedFiles($value = true)
 * @method UploadsJson resizeQuality($value = true)
 * @method UploadsJson resizeWidth($value = true)
 * @method UploadsJson resizeHeight($value = true)
 * @method UploadsJson popover(string $value = null)
 * @method UploadsJson groups($value = true)
 * @method UploadsJson media($value = true)
 * @method UploadsJson closeOnAdd($value = true)
 * @method UploadsJson title(string $value = null)
 */
class UploadsJson extends Field
{
    /**
     * @var string
     */
    protected $view = 'orchid.fields.upload';

    /**
     * All attributes that are available to the field.
     *
     * @var array
     */
    protected $attributes = [
        'value'           => null,
        'multiple'        => true,
        'parallelUploads' => 10,
        'maxFileSize'     => null,
        'maxFiles'        => 9999,
        'timeOut'         => 0,
        'acceptedFiles'   => null,
        'resizeQuality'   => 0.8,
        'resizeWidth'     => null,
        'resizeHeight'    => null,
        'media'           => false,
        'closeOnAdd'      => false,
        'visibility'      => 'public',
    ];

    /**
     * Attributes available for a particular tag.
     *
     * @var array
     */
    protected $inlineAttributes = [
        'accept',
        'form',
        'formaction',
        'formenctype',
        'formmethod',
        'formnovalidate',
        'formtarget',
        'name',
        'multiple',
        'placeholder',
        'required',
        'groups',
        'storage',
        'media',
        'closeOnAdd',
        'path',
    ];

    /**
     * Upload constructor.
     */
    public function __construct()
    {

    }

}
