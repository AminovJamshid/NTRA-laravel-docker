<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Enums\Gender;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;

use MoonShine\Fields\Enum;
use MoonShine\Fields\Relationships\HasMany;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;


/**
 * @extends ModelResource<Users>
 */
class UsersResource extends ModelResource
{
    protected string $model = User::class;

    protected string $title = 'Users';

    /**
     * @return list<Field>
     */
    public function indexFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make("Foydlanuvchi","name")->sortable(),
            Text::make("Telefon raqami", "phone")->sortable(),
            Text::make("email", "email")->sortable(),
//            HasMany::make("E'lonlar",relationName: "ads", resource: new AdResource())->onlyLink(),

            Enum::make("jinsi", "gender")->attach(Gender::class),
            Text::make("Positsiyasi", "position")->sortable(),
            Text::make("Royxatdan otkazish sanasi", "created_at")->sortable(),



        ];
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function formFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make("Foydlanuvchi","name")->sortable(),


        ];
    }

    /**
     * @return list<Field>
     */
    public function detailFields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make("Ismi    ","name")->sortable(),
            Text::make("Telefon raqami", "phone")->sortable(),
            Text::make("email", "email")->sortable(),

        ];
    }

    /**
     * @param Users $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
