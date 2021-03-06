<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use \Illuminate\Database\Eloquent\Model;

/**
 * Class AbstractModel
 * @package App\Models
 */
abstract class AbstractModel extends Model
{
    use SoftDeletes;
}
