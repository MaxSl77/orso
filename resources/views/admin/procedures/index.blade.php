@extends('layout.admin')

@section('title', 'Все процедуры')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Все процедуры</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Группа</th>
                    <th>Цена, бел.р.</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($procedures as $procedure)
                    <tr>
                        <td>{{ $procedure->id }}</td>
                        <td>{{ $procedure->name }}</td>
                        <td> @foreach($procedure->groups as $group) {{ $group->name }} @endforeach</td>
                        <td>{{ $procedure->price }}</td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{ route('admin.procedures.edit', $procedure->id) }}">Редактировать</a>
                            <form action="{{ route('admin.procedures.destroy', $procedure->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
