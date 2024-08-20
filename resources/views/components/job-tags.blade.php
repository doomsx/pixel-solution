

@props(['tag','size' => "base"])

@php
    $classes = "bg-white/10 rounded-xl hover:bg-white/20 font-bold";

    if ($size === "base"){
        $classes .= " px-5 py-1 text-sm";
    }

    if ($size === "small"){
        $classes .= " px-2 py-1 text-xs";
    }
@endphp

    <a href="#" class="{{$classes}}">
        {{$tag->name}}
    </a>
