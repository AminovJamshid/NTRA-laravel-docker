<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Ad;
use App\Models\Bookmarked;
use App\MoonShine\Resources\AdImagesResource;
use App\MoonShine\Resources\AdResource;
use App\MoonShine\Resources\BookmarkedResource;
use App\MoonShine\Resources\BranchResource;
use App\MoonShine\Resources\UsersResource;
use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Menu\MenuElement;
use MoonShine\Pages\Page;
use Closure;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    /**
     * @return list<ResourceContract>
     */
    protected function resources(): array
    {
        return [];
    }

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [];
    }

    /**
     * @return Closure|list<MenuElement>
     */
    protected function menu(): array
    {
        return [
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.admins_title'),
                    new MoonShineUserResource()
                ),
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.role_title'),
                    new MoonShineUserRoleResource()
                ),
            ]),

            MenuItem::make("E'lonlar", new AdResource())->icon("heroicons.home-modern"),
            MenuItem::make("Home", url('/'))->icon("heroicons.home")->customLinkAttributes(['target' => '_blank']),

            MenuItem::make("Filiallar",new BranchResource())->icon("heroicons.map-pin"),


            MenuItem::make("Foydalanuvchilar",new UsersResource())->icon("heroicons.users"),

            MenuItem::make("Saqlanmalar",new BookmarkedResource())->icon("heroicons.bookmark"),

            MenuItem::make("Rasmlar", new AdImagesResource())->icon("heroicons.photo"),




        ];
    }

    /**
     * @return Closure|array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [];
    }
}
