<?php

namespace Laravel\Nova\Tests\Fixtures;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Lenses\Lens;
use Laravel\Nova\Http\Requests\LensRequest;

class PaginatingUserLens extends Lens
{
    /**
     * Get the query builder / paginator for the lens.
     *
     * @param  \Laravel\Nova\Http\Requests\LensRequest  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return mixed
     */
    public static function query(LensRequest $request, $query)
    {
        return $request->filter($query)->simplePaginate();
    }

    /**
     * Get the fields available to the lens.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            'ID' => ID::make('ID', 'id'),
            'Name' => Text::make('Name', 'name'),
        ];
    }

    /**
     * Get the URI key for the lens.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'paginating-user-lens';
    }
}
