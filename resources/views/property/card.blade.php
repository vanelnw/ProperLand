<div class="bg-red-500">
    <h5 class="card_title">
        <a href={{route('property.show', ['slug' => $property->getSlug(), 'property'=>$property])}}>{{$property->title}}</a>
    </h5>
    <p class="card-text">{{$property->surface}}</p>
    <div class="card-text">{{number_format($property->price,thousands_separator:' ')}}</div>
</div>