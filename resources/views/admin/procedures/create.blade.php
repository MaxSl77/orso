@extends('layout.admin')

@section('title', isset($procedure) ? "Редактировать процедуру ID {$procedure->id}" : 'Добавить процедуру')

@section('content')
    <h1 class="mt-2 mb-3">{{ isset($procedure) ? "Редактировать процедуру ID {$procedure->id}" : 'Добавить процедуру' }}</h1>
    <form method="POST" action="{{ isset($procedure) ? route('admin.procedures.update', $procedure->id) : route('admin.procedures.store') }}">
        @csrf
        @if(isset($procedure))
            @method('PUT')
        @endif
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Название процедуры" value="{{ $procedure->name ?? '' }}">
            @error('name')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <select class="form-control" name="group_id">
                <option value="">Выберите группу процедур</option>
                @foreach($procedureGroups as $group)
                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                @endforeach
            </select>
            @error('group_id')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="price" placeholder="Цена" value="{{ $procedure->price ?? '' }}">
            @error('price')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>
@endsection
