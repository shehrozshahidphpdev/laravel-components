<div {{ $attributes->merge(['class' => "alert alert-$type"]) }} role="alert">
    {{ $message }}
</div>

{{--
$attributes holds the classes that are passes from the view

merge holds the default classes that are applicable to every component

--}}
