<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Enums\Gender;
use App\Models\Ad;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bookmarked;

use MoonShine\Fields\Enum;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Bookmarked>
 */
class BookmarkedResource extends ModelResource
{
    protected string $model = Bookmarked::class;

    protected string $title = 'Bookmarkeds';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make(column: 'ad_id')->sortable(),
                Textarea::make('Sarlavha', 'title', fn($model) => Ad::find($model->ad_id)->title),
                Textarea::make('Tarif', 'description', fn($model) => Ad::find($model->ad_id)->description),
                Textarea::make("Manzil", 'address', fn($model) => Ad::find($model->ad_id)->address),
                Textarea::make("xonalar", 'rooms', fn($model) => Ad::find($model->ad_id)->rooms),
                Textarea::make("Narxi", 'price', fn($model)=> Ad::find($model->ad_id)->price),
                Textarea::make("Status", 'status', fn($model)=> Ad::find($model->ad_id)->status_id == 1 ? "Active" : "InActive"),
            ]),
        ];
    }

    /**
     * @param Bookmarked $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
