@extends('layout.admin')

@section('title', isset($equipment) ? "Редактировать оборудование ID {$equipment->id}" : 'Добавить оборудование')

@section('content')

    <h1 class="mt-2 mb-3" style="margin-left: 20px">{{isset($equipment) ? "Редактировать оборудование {$equipment->title}" : 'Добавить оборудование'}}</h1>
    <form enctype="multipart/form-data" style="margin-left: 20px" method="POST" action=" {{ isset($equipment) ? route('admin.equipments.update', $equipment->id) : route('admin.equipments.store')}}">
        @csrf

        @if(isset($equipment))
            @method('PUT')
        @endif

        <div class="form-group">
            <input type="text" class="form-control" name="title"
                   placeholder="Название оборудования" value="{{ $equipment->title ?? '' }}">

            @error('title')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="description"
                   placeholder="Текст оборудования" value="{{ $equipment->description ?? '' }}">
            @error('description')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        @if(isset($equipment) && $equipment->thumbnail)
            <div class="form-group">
                <img class="img-size-128" style="max-width: 320px; max-height: 450px" src="{{asset('storage/'.$equipment->thumbnail)}}">
            </div>
        @endif
        <div class="form-group">
            <input type="file" class="form-control-file" name="thumbnail">

            @error('thumbnail')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>
@endsection
