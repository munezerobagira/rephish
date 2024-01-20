@props(["type"=>"text","label"=>"", "value"=>"", "placeholder"=>"", "name"=>"", "options"=>[]])
@if($type=="textarea")
<div>
    <x-input-label  :value="$label" />
    <x-text-area  :name="$name" :type="$type" {{ $attributes->merge(['class'=>'mt-1 w-full']) }}  :value="old($name)?old($name):$value" >{{$value}}</x-text-area>
    <x-input-error name="{{$name}}" class="mt-2" />
</div>
@elseif ($type=="select")
<div>
    <x-input-label  :value="$label" />
    <x-select  :name="$name" :type="$type" {{ $attributes->merge(['class'=>'mt-1 w-full']) }}  :value="old($name)?old($name):$value" >{{$slot}}</x-select>
    <x-input-error name="{{$name}}" class="mt-2" />
</div>
@else
<div>
    <x-input-label  :value="$label" />
    <x-text-input  :name="$name" :type="$type" {{ $attributes->merge(['class'=>'mt-1 block w-full']) }}  :value="old($name)?old($name):$value" :value="$value" />
    <x-input-error name="{{$name}}" class="mt-2" />
</div>
@endif
