@extends('layout.admin')

@section('title', 'Список групп процедур')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Список групп процедур</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Название группы</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($procedureGroups as $procedureGroup)
                    <tr>
                        <td>{{ $procedureGroup->id }}</td>
                        <td>{{ $procedureGroup->name }}</td>
                        <td>
                            <a href="{{ route('admin.procedure-groups.show', $procedureGroup->id) }}" class="btn btn-info">Просмотр</a>
                            <a href="{{ route('admin.procedure-groups.edit', $procedureGroup->id) }}" class="btn btn-primary">Редактировать</a>
                            <form action="{{ route('admin.procedure-groups.destroy', $procedureGroup->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
