<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Tour;
use MoonShine\Fields\ID;

use MoonShine\Fields\Url;
use MoonShine\Fields\Date;
use MoonShine\Fields\Json;
use MoonShine\Fields\Text;
use MoonShine\Fields\Field;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\TinyMce;
use MoonShine\Fields\Position;
use MoonShine\Fields\Switcher;
use MoonShine\Handlers\ExportHandler;
use MoonShine\Handlers\ImportHandler;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Tour>
 */
class TourResource extends ModelResource
{
    protected string $model = Tour::class;

    protected string $title = 'Новогодние туры';

    public function import(): ?ImportHandler
    {
        return null;
    }

    public function export(): ?ExportHandler
    {
        return null;
    }


    /**
     * @return list<Field>
     */
    public function indexFields(): array
    {
        return [
            ID::make()->sortable(),
            Number::make('Порядок', 'order')->sortable(),
            Text::make('Название', 'title'),
            Image::make('Изображение', 'img')->dir('tours'),
            Date::make('Начало тура', 'start_data')->format('d.m.Y'),
        ];
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function formFields(): array
    {
        return [
            ID::make()->sortable(),
            Number::make('Порядок', 'order'),
            Url::make('Внешняя ссылка', 'out_lnk'),
            Text::make('Название', 'title')->required(),
            TinyMce::make('Название на баннере', 'title_input'),
            Text::make('URL', 'slug'),
            Number::make('Количество дней', 'deycount')->required(),
            Image::make('Изображение', 'img')->dir('tours'),
            Date::make('Основная дата тура', 'start_data')->format('d.m.Y')->required(),
            TinyMce::make('Верхнее описание', 'top_description')->required(),
            TinyMce::make('Программа тура', 'program'),
            TinyMce::make('Входит в стоимость', 'in_price')->required(),
            TinyMce::make('За отдельную плату', 'out_price')->required(),

            Json::make('Указать несколько дат тура', 'multi_data')
            ->removable()
            ->fields([
                Position::make(),
                Date::make('Дата тура', 'start_data')->format('d.m.Y')
            ]),

            Json::make('Программа тура', 'tour_program')
            ->removable()
                    ->fields([
                        Position::make(),
                        Text::make('Заголовок', 'title'),
                    ]),

            Json::make('Варианты цены', 'prices')
            ->removable()
                    ->fields([
                        Position::make(),
                        Text::make('Цена', 'price'),
                        Text::make('Комментарий', 'comment')
                    ]),

            Json::make('Галерея', 'galery')
            ->removable()
                    ->fields([
                        Position::make(),
                        Image::make('Изображение', 'img')->dir('tours'),
                        Text::make('Заголовок', 'title'),
                        Switcher::make('В шапке', 'in_top')
                    ])
        ];
    }

    /**
     * @return list<Field>
     */
    public function detailFields(): array
    {
        return [
            ID::make()->sortable(),
            Number::make('Порядок', 'order'),
            Url::make('Внешняя ссылка', 'out_lnk'),
            Text::make('Название', 'title'),
            TinyMce::make('Название на баннере', 'title_input'),
            Text::make('URL', 'slug'),
            Number::make('Количество дней', 'deycount'),
            Image::make('Изображение', 'img')->dir('tours'),
            Date::make('Основная дата тура', 'start_data')->format('d.m.Y'),
            TinyMce::make('Верхнее описание', 'top_description'),
            TinyMce::make('Программа тура', 'program'),
            TinyMce::make('Входит в стоимость', 'in_price'),
            TinyMce::make('За отдельную плату', 'out_price'),

            Json::make('Указать несколько дат тура', 'multi_data')
            ->fields([
                Position::make(),
                Text::make('Заголовок', 'title'),
            ]),

            Json::make('Программа тура', 'tour_program')
                    ->fields([
                        Position::make(),
                        Text::make('Заголовок', 'title'),
                    ]),

            Json::make('Варианты цены', 'prices')
                    ->fields([
                        Position::make(),
                        Text::make('Цена', 'price'),
                        Text::make('Комментарий', 'comment')
                    ]),

            Json::make('Галерея', 'galery')
                    ->fields([
                        Position::make(),
                        Image::make('Изображение', 'img')->dir('tours'),
                        Text::make('Заголовок', 'title'),
                        Switcher::make('В шапке', 'in_top')
                    ])
        ];
    }

    /**
     * @param Tour $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
