<?php

declare(strict_types=1);

use App\Orchid\Screens\Advantage\AdvantageEditScreen;
use App\Orchid\Screens\Advantage\AdvantageListScreen;
use App\Orchid\Screens\Cabinet\CabinetEditScreen;
use App\Orchid\Screens\Cabinet\CabinetListScreen;
use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\FormResult\FormResultEditScreen;
use App\Orchid\Screens\FormResult\FormResultListScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\Service\ServiceEditScreen;
use App\Orchid\Screens\Service\ServiceListScreen;
use App\Orchid\Screens\ServicePrice\ServicePriceEditScreen;
use App\Orchid\Screens\ServicePrice\ServicePriceListScreen;
use App\Orchid\Screens\TextBlock\TextBlockEditScreen;
use App\Orchid\Screens\TextBlock\TextBlockListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;
use App\Orchid\Screens\Social\SocialListScreen;
use App\Orchid\Screens\Social\SocialEditScreen;
use App\Orchid\Screens\Contact\ContactListScreen;
use App\Orchid\Screens\Contact\ContactEditScreen;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Profile'), route('platform.profile')));

// Platform > System > Users
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(fn (Trail $trail, $user) => $trail
        ->parent('platform.systems.users')
        ->push(__('User'), route('platform.systems.users.edit', $user)));

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.users')
        ->push(__('Create'), route('platform.systems.users.create')));

// Platform > System > Users > User
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Users'), route('platform.systems.users')));

// Platform > System > Roles > Role
Route::screen('roles/{role}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(fn (Trail $trail, $role) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Role'), route('platform.systems.roles.edit', $role)));

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Create'), route('platform.systems.roles.create')));

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Roles'), route('platform.systems.roles')));

// Example...
Route::screen('example', ExampleScreen::class)
    ->name('platform.example')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push('Example screen'));

Route::screen('example-fields', ExampleFieldsScreen::class)->name('platform.example.fields');
Route::screen('example-layouts', ExampleLayoutsScreen::class)->name('platform.example.layouts');
Route::screen('example-charts', ExampleChartsScreen::class)->name('platform.example.charts');
Route::screen('example-editors', ExampleTextEditorsScreen::class)->name('platform.example.editors');
Route::screen('example-cards', ExampleCardsScreen::class)->name('platform.example.cards');
Route::screen('example-advanced', ExampleFieldsAdvancedScreen::class)->name('platform.example.advanced');

// Platform > Socials
Route::screen('socials', SocialListScreen::class)
    ->name('platform.social.list')
    ->breadcrumbs(fn(Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('platform.social.name')));
// Platform > Socials > Social
Route::screen('social/{id?}', SocialEditScreen::class)
    ->name('platform.social.edit')
    ->breadcrumbs(fn(Trail $trail) => $trail
        ->parent('platform.social.list')
        ->push(__('platform.social.name_once')));


// Platform > Socials
Route::screen('contacts', ContactListScreen::class)
    ->name('platform.contact.list')
    ->breadcrumbs(fn(Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('platform.contact.name')));
// Platform > Socials > Social
Route::screen('contact/{id?}', ContactEditScreen::class)
    ->name('platform.contacts.edit')
    ->breadcrumbs(fn(Trail $trail) => $trail
        ->parent('platform.contact.list')
        ->push(__('platform.contact.name')));


Route::screen('cabinets', CabinetListScreen::class)
    ->name('platform.cabinet.list')
    ->breadcrumbs(fn(Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('platform.cabinet.name')));
// Platform > Socials > Social
Route::screen('cabinet/{id?}', CabinetEditScreen::class)
    ->name('platform.cabinets.edit')
    ->breadcrumbs(fn(Trail $trail) => $trail
        ->parent('platform.cabinet.list')
        ->push(__('platform.cabinet.name')));


Route::screen('advantages', AdvantageListScreen::class)
    ->name('platform.advantage.list')
    ->breadcrumbs(fn(Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('platform.advantage.name')));
Route::screen('advantage/{id?}', AdvantageEditScreen::class)
    ->name('platform.advantages.edit')
    ->breadcrumbs(fn(Trail $trail) => $trail
        ->parent('platform.advantage.list')
        ->push(__('platform.advantage.name')));

Route::screen('text_blocks', TextBlockListScreen::class)
    ->name('platform.text_block.list')
    ->breadcrumbs(fn(Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('platform.text_block.name')));
Route::screen('text_block/{id?}', TextBlockEditScreen::class)
    ->name('platform.text_blocks.edit')
    ->breadcrumbs(fn(Trail $trail) => $trail
        ->parent('platform.text_block.list')
        ->push(__('platform.text_block.name')));

Route::screen('form_results', FormResultListScreen::class)
    ->name('platform.form_result.list')
    ->breadcrumbs(fn(Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('platform.form_result.name')));
Route::screen('form_result/{id?}', FormResultEditScreen::class)
    ->name('platform.form_results.edit')
    ->breadcrumbs(fn(Trail $trail) => $trail
        ->parent('platform.form_result.list')
        ->push(__('platform.form_result.name')));

// Platform > Service Prices
Route::screen('service_prices', ServicePriceListScreen::class)
    ->name('platform.service_price.list')
    ->breadcrumbs(fn(Trail $trail) => $trail
    ->parent('platform.index')
    ->push(__('platform.service_prices.name')));

// Platform > Service Prices > Service Price
Route::screen('service_price/{id?}', ServicePriceEditScreen::class)
    ->name('platform.service_price.edit')
    ->breadcrumbs(fn(Trail $trail) => $trail
    ->parent('platform.service_price.list')
    ->push(__('platform.service_prices.name')));

// Platform > Services
Route::screen('services', ServiceListScreen::class)
    ->name('platform.service.list')
    ->breadcrumbs(fn(Trail $trail) => $trail
    ->parent('platform.index')
    ->push(__('platform.services.name')));

// Platform > Services > Service
Route::screen('service/{id?}', ServiceEditScreen::class)
    ->name('platform.service.edit')
    ->breadcrumbs(fn(Trail $trail) => $trail
    ->parent('platform.service.list')
    ->push(__('platform.services.name')));
