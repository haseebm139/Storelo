<?php

use App\Models\User;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Product;
use App\Models\Event;

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Spatie\Permission\Models\Role;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('dashboard'));
});

// Home > Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Dashboard', route('dashboard'));
});

// Home > Dashboard > User Management
Breadcrumbs::for('user-management.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('User Management', route('user-management.users.index'));
});


// Home > Dashboard > User Management > Users
Breadcrumbs::for('user-management.users.index', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Users', route('user-management.users.index'));
});

// Home > Dashboard > User Management > Users > [User]
Breadcrumbs::for('user-management.users.show', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('user-management.users.index');
    $trail->push(ucwords($user->name), route('user-management.users.show', $user));
});

// Home > Dashboard > User Management > Roles
Breadcrumbs::for('user-management.roles.index', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Roles', route('user-management.roles.index'));
});

// Home > Dashboard > User Management > Roles > [Role]
Breadcrumbs::for('user-management.roles.show', function (BreadcrumbTrail $trail, Role $role) {
    $trail->parent('user-management.roles.index');
    $trail->push(ucwords($role->name), route('user-management.roles.show', $role));
});

// Home > Dashboard > User Management > Permission
Breadcrumbs::for('user-management.permissions.index', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Permissions', route('user-management.permissions.index'));
});

// Home > Product Management
Breadcrumbs::for('product.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Products', route('product.index'));
});

/* begin::Menu */
Breadcrumbs::for('product-management.menu.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Menu', route('product-management.menu.index'));

});
Breadcrumbs::for('product-management.menu.show', function (BreadcrumbTrail $trail, Menu $data) {

    $trail->parent('product-management.menu.index');
    $trail->push(ucwords($data->name), route('product-management.menu.show', $data));
});


/* begin::Category */
Breadcrumbs::for('product-management.category.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Category', route('product-management.category.index'));

});
Breadcrumbs::for('product-management.category.show', function (BreadcrumbTrail $trail, Category $data) {

    $trail->parent('product-management.category.index');
    $trail->push(ucwords($data->name), route('product-management.category.show', $data));
});
/* end::Category */


/* begin::Product */
Breadcrumbs::for('product-management.product.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Products', route('product-management.product.index'));

});
Breadcrumbs::for('product-management.product.show', function (BreadcrumbTrail $trail, Product $data) {

    $trail->parent('product-management.product.index');
    $trail->push(ucwords($data->name), route('product-management.product.show', $data));
});
/* end::Product */

/* begin::Events */
Breadcrumbs::for('product-management.events.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Events', route('product-management.events.index'));

});
Breadcrumbs::for('product-management.events.show', function (BreadcrumbTrail $trail, Event $data) {

    $trail->parent('product-management.events.index');
    $trail->push(ucwords($data->name), route('product-management.events.show', $data));
});
/* end::Events */
