@props(['aktif' => false, 'type' => 'a'])

@if ($type == 'a')
<a class="{{$aktif ? 'bg-gray-900 text-white':'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md  px-3 py-2 text-sm font-medium text-white" aria-current="{{ $aktif ? 'page':'false'}}" {{$attributes}}>{{$slot}}</a>

@else
<button class="{{$aktif ? 'bg-gray-900 text-white':'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md  px-3 py-2 text-sm font-medium text-white" aria-current="{{ $aktif ? 'page':'false'}}" {{$attributes}}>{{$slot}}</button>
@endif
<!--Bangun Panduko Johan K3522013-->