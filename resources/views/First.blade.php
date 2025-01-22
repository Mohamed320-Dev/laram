<h3>This is my languages programming : </h3><br>

<ul>
    @foreach($languages as $language)
        <li>{{$language}}</li>
    @endforeach
</ul>
@extends('layouts.master')