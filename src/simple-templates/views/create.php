<?php
/* @var $gen \Fba\Crud\Commands\Crud */
/* @var $fields [] */
?>
<div class="panel-group col-md-12 col-sm-12" id="accordion" style="padding-left: 0">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    <i class="fa fa-plus"></i>
                    {{__('app.create')}} {{__('app.<?= $gen->titleSingular() ?>')}}
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">

                <form action="/<?= $gen->route() ?>" method="post">

                    {{ csrf_field() }}
                    <?php foreach ($fields as $field) { ?>
                        <?php if ($str = \Fba\Crud\Db::getFormInputMarkup($field)) { ?>

                            <?= $str ?>

                        <?php } ?>
                    <?php } ?>

                    <button type="submit" class="btn btn-primary">{{__('app.create')}}</button>

                </form>

            </div>
        </div>
    </div>
</div>