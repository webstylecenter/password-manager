<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\AbstractModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\UploadedFile;
use App\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\Models\Media;

/**
 * Class AbstractRepository
 * @package App\Repositories
 */
abstract class AbstractRepository implements RepositoryInterface
{
    /**
     * @var Model $model
     */
    protected $model;

    /**
     * @var AbstractRepository
     */
    protected $repository;

    /**
     * BaseRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->repository = $this;
    }

    /**
     * @return Model
     */
    public function getModel(): Model
    {
        return $this->model;
    }

    /**
     * @param Model $model
     */
    public function setModel(Model $model): void
    {
        $this->model = $model;
    }

    /**
     * @return AbstractRepository
     */
    public function getRepository(): AbstractRepository
    {
        return $this->repository;
    }

    /**
     * @param AbstractRepository $repository
     */
    public function setRepository(AbstractRepository $repository): void
    {
        $this->repository = $repository;
    }

    /**
     * @param array $data
     * @return int
     */
    public function create(array $data): int
    {
        return $this->model->insertGetId($data);
    }

    /**
     * @param int $id
     * @param array $data
     * @return mixed
     */
    public function persist(?int $id, array $data): int
    {
        if ($id === null) {
            return $this->create($data);
        }

        return $this->update($id, $data);
    }

    /**
     * @param array $columns
     * @return Collection
     */
    public function all(?array $columns = ['*']): Collection
    {
        return $this->model->all($columns);
    }

    /**
     * @param int $id
     * @return bool|int
     */
    public function delete(int $id): int
    {
        return $this->model->destroy($id);
    }

    /**
     * @param int $id
     * @param array $data
     * @return int
     */
    public function update(int $id, array $data): int
    {
        $this->model->find($id)->update($data);
        return $id;
    }

    /**
     * @return mixed
     */
    protected function getTableName(): string
    {
        return $this->model->getTable();
    }

    /**
     * @param int $id
     * @param array|null $relations
     * @return AbstractModel
     */
    public function getWith(int $id, ?array $relations = []): AbstractModel
    {
        return $this->model->with($relations)->find(['id' => $id])->first();
    }

    /**
     * @param int $id
     * @return AbstractModel
     */
    public function get(int $id): ?Model
    {
        return $this->model->find($id);
    }
}
