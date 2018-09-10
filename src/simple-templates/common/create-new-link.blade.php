<?php
/* @var $url */
/* @var $label */
?>
<p>
    <a href="/{{$url}}/create" class="create-link">
        <i class="fa fa-plus"></i>
        {{__('app.create')}} {{$label or ucwords(str_replace("-"," ", $url))}}
    </a>
</p>