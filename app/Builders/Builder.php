<?php


namespace App\Builders;

use App\Filters\Filter;
use App\Sorts\Sort;
use Closure;
use DateTimeInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder as BaseBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use InvalidArgumentException;

class Builder extends BaseBuilder
{
    /**
     * @param Filter $filter
     * @return Builder
     */
    public function filter(Filter $filter): Builder
    {
        return $filter->apply($this);
    }

    /**
     * @param Sort $sort
     * @return Builder
     */
    public function sortBy(Sort $sort): Builder
    {
        return $sort->apply($this);
    }

    /**
     * Paginate the given query.
     *
     * @param int|null $perPage
     * @param array $columns
     * @param string $pageName
     * @param int|null $page
     * @return LengthAwarePaginator
     *
     * @throws InvalidArgumentException
     */
    public function paginate($perPage = null,
                             $columns = ['*'],
                             $pageName = 'page',
                             $page = null): LengthAwarePaginator
    {
        $page = $page ?: Paginator::resolveCurrentPage($pageName);

        $total = $this->toBase()->getCountForPagination();

        $perPage = $perPage ?: ($total != 0 ? $total : 1);

        $results = $total
            ? $this->forPage($page, $perPage)->get($columns)
            : $this->model->newCollection();

        return $this->paginator($results, $total, $perPage, $page, [
            'path'     => Paginator::resolveCurrentPath(),
            'pageName' => $pageName,
        ]);
    }

    /**
     * @param $request
     * @return LengthAwarePaginator|Collection
     */
    public function allowPaginate($request)
    {
        return $this->paginate(
            $request->input('page.size', 15),
            ['*'],
            'page[number]',
            $request->input('page.number', 1)
        );
    }

    /**
     * @param $column
     * @param null $value
     * @return Builder
     */
    public function whereStartsWith($column, $value = null): Builder
    {
        return $this->where($column, 'like', $value . '%');
    }

    /**
     * @param Closure|string|array $column
     * @param string|null $value
     *
     * @return $this
     */
    public function whereEndsWith($column, $value = null): Builder
    {
        return $this->where($column, 'like', '%' . $value);
    }

    /**
     * @param Closure|string|array $column
     * @param string|null $value
     *
     * @return $this
     */
    public function whereLike($column, $value = null): Builder
    {
        $value = str_replace('_', '\_', $value);
        $value = str_replace('%', '\%', $value);
        return $this->where($column, 'like', '%' . $value . '%');
    }

    /**
     * @param $column
     * @param null $value
     * @return Builder
     */
    public function orWhereLike($column, $value = null): Builder
    {
        $value = str_replace('_', '\_', $value);
        $value = str_replace('%', '\%', $value);
        return $this->orwhere($column, 'like', '%' . $value . '%');
    }

    /**
     * @param Closure|string|array $column
     * @param string|null $value
     *
     * @return $this
     */
    public function whereEqual($column, $value = null): Builder
    {
        return $this->where($column, '=', $value);
    }

    /**
     * @param Closure|string|array $column
     * @param string|null $value
     *
     * @return $this
     */
    public function whereNotEqual($column, $value = null): Builder
    {
        return $this->where($column, '<>', $value);
    }

    /**
     * @param string $column
     * @param array $value
     *
     * @return QueryBuilder
     */
    public function whereDateRange(string $column, array $value = []): QueryBuilder
    {
        $from = Arr::get($value, 'from', '');
        $to = Arr::get($value, 'to', '');

        return $this->query->where(function (QueryBuilder $query) use ($column, $from, $to) {
            return $query
                ->when($from, function (QueryBuilder $query) use ($column, $from) {
                    return $query->where($column, '>=', $from);
                })
                ->when($to, function (QueryBuilder $query) use ($column, $to) {
                    return $query->where($column, '<=', $to);
                });
        });
    }

    /**
     * @param $column
     * @param null $operator
     * @param null $value
     * @return Builder
     */
    public function whereDateTime($column, $operator = null, $value = null): Builder
    {
        if ($value instanceof DateTimeInterface) {
            $value = $value->format('H:i:s');
        }

        return $this->where($column, $operator, $value);
    }

    /**
     * @param $keySearch
     * @param $column
     * @return $this|Builder
     */
    public function whereUnicode($column, $keySearch): Builder
    {
        $checkKey = preg_match('[d|D]', $keySearch);

        if ((boolean)$checkKey) {
            $keySearchRegex = preg_replace('[d|D]', 'đ', $keySearch);

            return $this->whereLike($column, '%' . $keySearchRegex . '%')
                ->orWhereLike($column, '%' . $keySearch . '%');
        }

        return $this->whereLike($column, '%' . $keySearch . '%');
    }
}
