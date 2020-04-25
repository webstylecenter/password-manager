<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends AbstractModel
{
    use SoftDeletes;

    public $table = 'customers';
    public $guarded = 'id';
    public $timestamps = true;

    protected string $name;
    protected string $email;
    protected hasMany $domains;

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function email(): string
    {
        return $this->email;
    }

    /**
     * @return HasMany
     */
    public function domains(): HasMany
    {
        return $this->hasMany(Domain::class, 'customer_id');
    }
}
