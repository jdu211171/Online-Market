<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\Image as ImageField;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\MorphTo;
use MoonShine\Decorations\Block;
use MoonShine\Fields\Date;

class ImageResource extends Resource
{
    protected string $model = Image::class;

    protected string $title = 'Images';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                ImageField::make('Preview', 'path')
                    ->disk('public')
                    ->dir('images')
                    ->allowedExtensions(['jpg', 'jpeg', 'png', 'gif', 'webp']),
                Text::make('Path'),
                Text::make('Original Filename'),
                Text::make('MIME Type'),
                Number::make('Size (bytes)'),
                MorphTo::make('Related To', 'imageable')
                    ->searchable(),
                Date::make('Created At')->sortable(),
                Date::make('Updated At')->sortable(),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'path' => 'required|string',
        ];
    }

    public function search(): array
    {
        return ['id', 'path', 'original_filename'];
    }

    public function filters(): array
    {
        return [
            //
        ];
    }

    public function actions(): array
    {
        return [
            //
        ];
    }
}
