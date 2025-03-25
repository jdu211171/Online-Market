<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Select;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Layout;

/**
 * @extends ModelResource<Category>
 */
class CategoryResource extends ModelResource
{
    protected string $model = Category::class;

    protected string $title = 'Categories';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Name')->sortable(),
            Select::make('Parent', 'parent_id')
                ->options(function() {
                    $categories = Category::query()->pluck('name', 'id')->toArray();
                    $result = [];
                    foreach ($categories as $id => $name) {
                        $result[(string)$id] = (string)$name;
                    }
                    return $result;
                })
                ->nullable(),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('Name'),
                Select::make('Parent', 'parent_id')
                    ->options(function() {
                        $categories = Category::query()->pluck('name', 'id')->toArray();
                        $result = [];
                        foreach ($categories as $id => $name) {
                            $result[(string)$id] = (string)$name;
                        }
                        return $result;
                    })
                    ->nullable()
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Name'),
            Select::make('Parent', 'parent_id')
                ->options(function() {
                    $categories = Category::query()->pluck('name', 'id')->toArray();
                    $result = [];
                    foreach ($categories as $id => $name) {
                        $result[(string)$id] = (string)$name;
                    }
                    return $result;
                })
                ->nullable()
        ];
    }

    /**
     * @param Category $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }

    public function build(): Layout
    {
        return parent::build();
    }
}
