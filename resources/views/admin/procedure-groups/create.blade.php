@extends('layout.admin')

@section('title', isset($procedureGroup) ? "Редактировать группу процедур ID {$procedureGroup->id}" : 'Добавить группу процедур')

@section('content')
    <h1 class="mt-2 mb-3">{{ isset($procedureGroup) ? "Редактировать группу процедур ID {$procedureGroup->id}" : 'Добавить группу процедур' }}</h1>
    <form method="POST" action="{{ isset($procedureGroup) ? route('admin.procedure-groups.update', $procedureGroup->id) : route('admin.procedure-groups.store') }}" enctype="multipart/form-data">
        @csrf
        @if(isset($procedureGroup))
            @method('PUT')
        @endif
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Название группы процедур" value="{{ $procedureGroup->name ?? '' }}">
            @error('name')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>
@endsection
