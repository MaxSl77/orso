@extends('layout.admin')

@section('title', 'Все врачи')

@section('content')

    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 5%">
                        ID
                    </th>
                    <th>
                        Имя
                    </th>
                    <th>
                        Образование
                    </th>
                    <th style="width: 30%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @if(is_array($doctors) || is_object($doctors))
                    @foreach($doctors as $doctor)
                        <tr>
                            <td>
                                {{$doctor->id}}
                            </td>
                            <td>
                                {{$doctor->name}}
                            </td>
                            <td>
                                <!-- Отображение образования врача -->
                                @foreach($doctor->educations as $education)
                                    <p>{{$education->university}}, {{$education->year}}</p>
                                @endforeach
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{route('admin.doctors.edit', $doctor->id)}}">
                                    <i class="fas fa-pencil-alt"></i>
                                    Редактировать
                                </a>
                                <form action="{{route('admin.doctors.destroy', $doctor->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash"></i>
                                        Удалить
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

@endsection
