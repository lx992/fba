<?php
/* @var $gen \Fba\Crud\Commands\Crud */
/* @var $fields [] */
?>
@extends('<?= config('crud.layout') ?>')

@section('content')

<h2>{{__('app.<?= $gen->titleSingular() ?>')}} : {{$<?= $gen->modelVariableName() ?>-><?= array_values($fields)[1]->name ?>}}</h2>

<ul class="list-group">

    <?php foreach ($fields as $field) { ?>
        <?php if ($field->name != 'id' and $field->name != 'created_at' and $field->name != 'updated_at'): ?>
            <li class="list-group-item">
                <h4>{{__('validation.attributes.<?= $field->name ?>')}}</h4>
                <h5>{{$<?= $gen->modelVariableName() ?>-><?= $field->name ?>}}</h5>
            </li>
        <?php endif; ?>
    <?php } ?>

</ul>

@endsection