<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Server extends AbstractModel
{
    use SoftDeletes;

    public $table = 'servers';
    public $guarded = 'id';
    public $timestamps = true;

    protected string $name;
    protected string $ip;
    protected string $rootUserName;
    protected string $rootPassword;
    protected HasMany $domains;
    protected string $comments;
    protected int $upVotes;
    protected int $downVotes;
    protected \DateTime $latestUpVote;
    protected \DateTime $latestDownVote;

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
    public function ip(): string
    {
        return $this->ip;
    }

    /**
     * @return string
     */
    public function rootUserName(): string
    {
        return $this->rootUserName;
    }

    /**
     * @return string
     */
    public function rootPassword(): string
    {
        return $this->rootPassword;
    }

    /**
     * @return HasMany
     */
    public function domains(): HasMany
    {
        return $this->hasMany(Domain::class, 'server_id');
    }

    /**
     * @return string
     */
    public function comments(): string
    {
        return $this->comments;
    }

    /**
     * @return int
     */
    public function upVotes(): int
    {
        return $this->upVotes;
    }

    /**
     * @return int
     */
    public function downVotes(): int
    {
        return $this->downVotes;
    }

    /**
     * @return \DateTime
     */
    public function latestUpVote(): \DateTime
    {
        return $this->latestUpVote;
    }

    /**
     * @return \DateTime
     */
    public function latestDownVote(): \DateTime
    {
        return $this->latestDownVote;
    }
}
