<?php

Breadcrumbs::for('admin', function ($trail) {
     $trail->push('Dashboard', route('admin'));
});

//users
Breadcrumbs::for('user.index', function ($trail) {
    $trail->parent('admin');
    $trail->push('Users', route('user.index'));
});

// users > Create users
Breadcrumbs::for('user.create', function ($trail) {
    $trail->parent('admin');
    $trail->push('All User', route('user.index'));
    $trail->push('Users Create', route('user.create'));
});

// users > [users Name] > Edit users
Breadcrumbs::for('user.edit', function ($trail, $user) {
    $trail->parent('admin');
    $trail->push('All User', route('user.index'));
    $trail->push('User Edit', route('user.edit', $user));
});

//Department
Breadcrumbs::for('departments.index', function ($trail) {
    $trail->parent('admin');
    $trail->push('All Department', route('departments.index'));
});

Breadcrumbs::for('departments.create', function ($trail) {
    $trail->parent('admin');
    $trail->push('All Deperatment', route('departments.index'));
    $trail->push('Departments Create', route('departments.create'));
});

Breadcrumbs::for('departments.edit', function ($trail, $department) {
    $trail->parent('admin');
    $trail->push('All Deperatment', route('departments.index'));
    $trail->push('Departments Edit', route('departments.edit',$department));
});

//Information
Breadcrumbs::for('informations.index', function ($trail) {
    $trail->parent('admin');
    $trail->push('All Information', route('informations.index'));
});

Breadcrumbs::for('informations.create', function ($trail) {
    $trail->parent('admin');
    $trail->push('All Information', route('informations.index'));
    $trail->push('Infromation Create', route('informations.create'));
});

Breadcrumbs::for('informations.show', function ($trail, $information) {
    $trail->parent('admin');
    $trail->push('All Information', route('informations.index'));
    $trail->push('Infromation Edit', route('informations.edit',$information->id));
    $trail->push($information->name, route('informations.show',$information->id));
});

Breadcrumbs::for('informations.edit', function ($trail, $information) {
    $trail->parent('admin');
    $trail->push('All Information', route('informations.index'));
    $trail->push($information->name, route('informations.show',$information->id));
    $trail->push('Infromation Edit', route('informations.edit',$information));
});


// Attendance

Breadcrumbs::for('attendance.index', function ($trail) {
    $trail->parent('admin');
    $trail->push('All Attendance', route('attendance.index'));
});

// Timetable

Breadcrumbs::for('timetable.index', function ($trail) {
    $trail->parent('admin');
    $trail->push('All Timetable', route('timetable.index'));
});

Breadcrumbs::for('timetable.generalsettings', function ($trail) {
    $trail->parent('admin');
    $trail->push('All Timetable', route('timetable.index'));
    $trail->push('General Settings', route('timetable.create'));    
});

Breadcrumbs::for('timetable.edit', function ($trail, $timetable) {
    $trail->parent('admin');
    $trail->push('All Timetable', route('timetable.index'));
    $trail->push('General Settings Edit', route('timetable.edit', $timetable));    
});

Breadcrumbs::for('rounding.index', function ($trail) {
    $trail->parent('admin');
    $trail->push('All Timetable', route('timetable.index'));
    $trail->push('Rounding Settings', route('rounding.index'));    
});

// Report

Breadcrumbs::for('report.custom', function ($trail) {
    $trail->parent('admin');
    $trail->push('Report Custom', route('report.custom'));
});

Breadcrumbs::for('report.daily', function ($trail) {
    $trail->parent('admin');
    $trail->push('Report Daily', route('report.daily'));
});

Breadcrumbs::for('report.absence', function ($trail) {
    $trail->parent('admin');
    $trail->push('Report Absence', route('report.absence'));
});


// Search

Breadcrumbs::for('search.store', function ($trail) {
    $trail->parent('admin');
    $trail->push('Search', route('search.store'));
});





