<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\Category;
use App\Models\Post;
use App\Models\Property;
use App\Models\Tag;
use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Home > Blog
Breadcrumbs::for('blog', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Blog', route('blog'));
});

// Home > Blog > post
Breadcrumbs::for('post', function (BreadcrumbTrail $trail, Post $post) {
    $trail->parent('blog');
    $trail->push($post->title, route('post.show', $post));
});

// Home > Blog > Categories
Breadcrumbs::for('posts.category', function (BreadcrumbTrail $trail, Category $category) {
    $trail->parent('blog');
    $trail->push("Category: {$category->title}", route('posts.category', $category));
});

// Home > Blog > Tags
Breadcrumbs::for('posts.tag', function (BreadcrumbTrail $trail, Tag $tag) {
    $trail->parent('blog');
    $trail->push("Tag: {$tag->title}", route('posts.tag', $tag));
});

// Home > Properties
Breadcrumbs::for('property.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push("Properties", route('property.index'));
});

// Home > Properties > property
Breadcrumbs::for('property.show', function (BreadcrumbTrail $trail, Property $property) {
    $trail->parent('property.index');
    $trail->push("Property: {$property->title}", route('property.show', $property));
});

// Home > Agents
Breadcrumbs::for('agent.index', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push("Agents", route('agent.index'));
});
