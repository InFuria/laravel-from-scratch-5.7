<?php
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// Home
Breadcrumbs::for('home', function ($trail){
   $trail->push('Inicio', route('/'));
});

// Contact
Breadcrumbs::for('contact', function ($trail){
    $trail->parent('home');
    $trail->push('Contacto', route('contact'));
});

// About
Breadcrumbs::for('about', function ($trail){
    $trail->parent('home');
    $trail->push('Sobre Nosotros', route('about'));
});


/**
 * PROJECTS
 **/

// INDEX
Breadcrumbs::for('projects', function ($trail){
    $trail->parent('home');
    $trail->push('Proyectos', route('projects.index'));
});

// CREATE
Breadcrumbs::for('create', function ($trail){
    $trail->parent('home');
    $trail->push('Crear Proyectos', route('projects.create'));
});

// EDIT
Breadcrumbs::for('edit', function ($trail){
    $trail->parent('home');
    $trail->push('Editar Proyecto', route('projects.edit', 'id'));
});

// SHOW
Breadcrumbs::for('show', function ($trail){
    $trail->parent('home');
    $trail->push('Detalle del Proyecto', route('projects.show', 'id'));
});