<?php

namespace App\Repositories\Interfaces;

use Illuminate\Support\Collection;

interface RepositoryInterface
{
    /*
     * Gets a single record
     */
    public function get(int $id);

    /**
     * Get all records
     * @param array|null $columns
     * @return mixed
     */
    public function all(?array $columns = ['*']): Collection;

    /**
     * Delete a record
     * @param int $id
     * @return bool
     */
    public function delete(int $id);

    /**
     * @param int $id
     * @param array|null $relations
     * @return mixed
     */
    public function getWith(int $id, ?array $relations = []);
}
