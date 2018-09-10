<?php
/* @var $gen \Fba\Crud\Commands\Crud */
/* @var $fields [] */
?>

@extends('<?=config('crud.layout')?>')
@section('title', 'صفحه')
@section('content')

	<h2>{{__('app.<?= $gen->titlePlural() ?>')}}</h2>

	<table class="table table-striped table-borderd table-responsive table-hover grid-view-tbl">
	    
	    <thead>
		<tr class="header-row">
			<?php foreach ( $fields as $field )  { ?>
                <?php if ($field->name != 'id' and $field->name != 'created_at' and $field->name != 'updated_at'): ?>
{!!\Fba\Crud\Html::sortableTh('<?=$field->name?>','<?= $gen->route() ?>.index',__('validation.attributes.<?=$field->name?>'))!!}
                <?php endif;?>
			<?php } ?>
<th></th>
		</tr>
		<tr class="search-row">
			<form class="search-form">
				<?php foreach ( $fields as $field )  { ?>
                    <?php if ($field->name != 'id' and $field->name != 'created_at' and $field->name != 'updated_at'): ?>
<td><?=\Fba\Crud\Db::getSearchInputStr($field)?></td>
                    <?php endif;?>
				<?php } ?>
<td style="min-width: 6em;">@include('<?=$gen->templatesDir()?>.common.search-btn')</td>
			</form>
		</tr>
	    </thead>

	    <tbody>
	    	@forelse ( $records as $record )
		    	<tr>
					<?php foreach ( $fields as $field )  { ?>
                        <?php if ($field->name != 'id' and $field->name != 'created_at' and $field->name != 'updated_at'): ?>
<td>
						<?php if( !\Fba\Crud\Db::isGuarded($field->name) ) {?>
<span class="editable"
							  data-type="<?=\Fba\Crud\Html::getInputType($field)?>"
							  data-name="<?=$field->name?>"
							  data-value="{{ $record-><?=$field->name?> }}"
							  data-pk="{{ $record->{$record->getKeyName()} }}"
							  data-url="/<?=$gen->route()?>/{{ $record->{$record->getKeyName()} }}"
							  <?=\Fba\Crud\Html::getSourceForEnum($field)?>>{{ $record-><?=$field->name?> }}</span>
						<?php } else { ?>
{{ $record-><?=$field->name?> }}
						<?php } ?>
</td>
                        <?php endif;?>
					<?php } ?>
@include( '<?=$gen->templatesDir()?>.common.actions', [ 'url' => '<?= $gen->route() ?>', 'record' => $record ] )
		    	</tr>
			@empty
				@include ('<?=$gen->templatesDir()?>.common.not-found-tr',['colspan' => <?=count($fields)+1?>])
	    	@endforelse
	    </tbody>

	</table>

    @include('<?=$gen->viewsDirName()?>.create')

	@include('<?=$gen->templatesDir()?>.common.pagination', [ 'records' => $records ] )


@endsection

@section('scripts')
<script>
    $(".editable").editable({ajaxOptions:{method:'PUT'}});
</script>
@endsection