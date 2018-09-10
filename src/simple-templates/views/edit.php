<?php
/* @var $gen \Fba\Crud\Commands\Crud */
/* @var $fields [] */
?>

@extends('<?=config('crud.layout')?>')

@section('content')

    <h2>{{__('app.update')}} {{__('app.<?=$gen->titleSingular()?>')}} : {{$<?=$gen->modelVariableName()?>-><?=array_values($fields)[1]->name?>}}</h2>

    <form action="/<?=$gen->route()?>/{{$<?=$gen->modelVariableName()?>->id}}" method="post">

        {{ csrf_field() }}

        {{ method_field("PUT") }}
<?php foreach ( $fields as $field )  { ?>
<?php if( $str = \Fba\Crud\Db::getFormInputMarkup( $field, $gen->modelVariableName() ) ) { ?>

        <?=$str?>

<?php } ?>
<?php } ?>

        <button type="submit" class="btn btn-default">{{__('app.update')}}</button>

    </form>

@endsection