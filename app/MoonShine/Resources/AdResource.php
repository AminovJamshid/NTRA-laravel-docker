<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Enums\Gender;
use App\Models\AdImage;
use Faker\Provider\Text;
use Illuminate\Database\Eloquent\Factories\Relationship;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ad;

use MoonShine\Fields\Enum;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;
use Nette\Utils\Image;
use PhpOption\Some;

/**
 * @extends ModelResource<Ad>
 */
class AdResource extends ModelResource
{
    protected string $model = Ad::class;

    protected string $title = "E'lonlar";


    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
//        dd(Gender::class);

        return [
            Block::make([
                ID::make()->sortable(),
                Textarea::make('Sarlavha', 'title'),
                Textarea::make('Tarif', 'description')->hideOnIndex(),
                Textarea::make("Manzil",'address')->sortable(),
                Textarea::make("xonalar",'rooms')->sortable(),
                Textarea::make("Narxi",'price'),

                Enum::make("kim uchun", "gender")->attach(Gender::class),


                BelongsTo::make(label:"Filial",relationName: "branch", resource:new BranchResource()),
//                BelongsTo::make(label:"Elonlar",relationName: "ads", resource: new UsersResource()),

                HasMany::make(label: "Rasmlari", relationName: "images", resource: new AdImagesResource())->onlyLink(),



            ]),
        ];

    }

    /**
     * @param Ad $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
