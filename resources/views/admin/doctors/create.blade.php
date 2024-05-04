@extends('layout.admin')

@section('title', isset($doctor) ? "Редактировать информацию о враче {$doctor->id}" : 'Добавить врача')

@section('content')

    <h1 class="mt-2 mb-3" style="margin-left: 20px">{{ isset($doctor) ? "Редактировать информацию о враче № {$doctor->id}" : 'Добавить врача' }}</h1>

    <form enctype="multipart/form-data" style="margin-left: 20px" method="POST" action="{{ isset($doctor) ? route('admin.doctors.update', $doctor->id) : route('admin.doctors.store') }}">
        @csrf

        @if(isset($doctor))
            @method('PUT')
        @endif

        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Имя врача" value="{{ $doctor->name ?? '' }}">

            @error('name')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="category" placeholder="Категория" value="{{ $doctor->category ?? '' }}">

            @error('category')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="profession" placeholder="Профессия" value="{{ $doctor->profession ?? '' }}">

            @error('profession')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="inst" placeholder="Инст" value="{{ $doctor->inst ?? '' }}">

            @error('inst')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="link form-control" placeholder="Образование">
            <input type="text" class="amount form-control" placeholder="Год">
            <div class="add">+</div>
        </div>

        @if(isset($doctor) && $sale->thumbnail)
            <div class="form-group">
                <img class="img-size-128" style="max-width: 320px; max-height: 450px" src="{{asset('storage/'.$doctor->thumbnail)}}">
            </div>
        @endif
        <div class="form-group">
            <input type="file" class="form-control-file" name="thumbnail">

            @error('thumbnail')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить врача</button>
        </div>
    </form>
    <script>
        var $add = document.getElementsByClassName('add')[0];
        var $formGroup = document.getElementsByClassName('form-group')[0];
        $add.addEventListener('click', function(event) {
            var $inputYear = document.createElement('input');
            $inputYear.type = 'text';
            $inputYear.placeholder = 'Год';
            $inputYear.name = 'year';
            $inputYear.classList.add('year');
            $formGroup.insertBefore($inputYear, $add);

            var $inputEducation = document.createElement('input');
            $inputEducation.type = 'text';
            $inputEducation.placeholder = 'Образование';
            $inputEducation.name = 'education';
            $inputEducation.classList.add('education');
            $formGroup.insertBefore($inputEducation, $add);
        });
    </script>
@endsection

