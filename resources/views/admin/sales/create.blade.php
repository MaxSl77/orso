@extends('layout.admin')

@section('title', isset($sale) ? "Редактировать акцию ID {$sale->id}" : 'Добавить акцию')

@section('content')

    <h1 class="mt-2 mb-3" style="margin-left: 20px">{{isset($sale) ? "Редактировать акцию № {$sale->id}" : 'Добавить акцию'}}</h1>
    <form enctype="multipart/form-data" style="margin-left: 20px" method="POST" action=" {{ isset($sale) ? route('admin.sales.update', $sale->id) : route('admin.sales.store')}}">
        @csrf

        @if(isset($sale))
            @method('PUT')
        @endif

        <div class="form-group">
            <input type="text" class="form-control" name="title"
                   placeholder="Название" value="{{ $sale->title ?? '' }}">

            @error('title')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="appeal"
                   placeholder="Обращение" value="{{ $sale->appeal ?? '' }}">
            @error('appeal')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="description"
                   placeholder="Текст акции" value="{{ $sale->description ?? '' }}">
            @error('description')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        @if(isset($sale) && $sale->thumbnail)
            <div class="form-group">
                <img class="img-size-128" style="max-width: 320px; max-height: 450px" src="{{asset('storage/'.$sale->thumbnail)}}">
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
