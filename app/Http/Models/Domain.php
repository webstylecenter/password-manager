<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Domain extends AbstractModel
{
    use SoftDeletes;

    public $table = 'domains';
    public $guarded = 'id';
    public $timestamps = true;

    protected string $name;
    protected BelongsTo $server;
    protected BelongsTo $customer;
    protected string $sshUser;
    protected string $sshPassword;
    protected int $sshUpVotes;
    protected int $shhDownVotes;
    protected \DateTime $lastSshVote;
    protected string $backendUrl;
    protected string $adminUser;
    protected string $adminPassword;
    protected int $adminUpVotes;
    protected int $adminDownVotes;
    protected \DateTime $latestAdminVote;
    protected string $comments;

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return BelongsTo
     */
    public function server(): BelongsTo
    {
        return $this->belongsTo(Server::class, 'server_id');
    }

    /**
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    /**
     * @return string
     */
    public function sshUser(): string
    {
        return $this->sshUser;
    }

    /**
     * @return string
     */
    public function sshPassword(): string
    {
        return $this->sshPassword;
    }

    /**
     * @return int
     */
    public function sshUpVotes(): int
    {
        return $this->sshUpVotes;
    }

    /**
     * @return int
     */
    public function shhDownVotes(): int
    {
        return $this->shhDownVotes;
    }

    /**
     * @return \DateTime
     */
    public function lastSshVote(): \DateTime
    {
        return $this->lastSshVote;
    }

    /**
     * @return string
     */
    public function backendUrl(): string
    {
        return $this->backendUrl;
    }

    /**
     * @return string
     */
    public function adminUser(): string
    {
        return $this->adminUser;
    }

    /**
     * @return string
     */
    public function adminPassword(): string
    {
        return $this->adminPassword;
    }

    /**
     * @return int
     */
    public function adminUpVotes(): int
    {
        return $this->adminUpVotes;
    }

    /**
     * @return int
     */
    public function adminDownVotes(): int
    {
        return $this->adminDownVotes;
    }

    /**
     * @return \DateTime
     */
    public function latestAdminVote(): \DateTime
    {
        return $this->latestAdminVote;
    }

    /**
     * @return string
     */
    public function comments(): string
    {
        return $this->comments;
    }
}
