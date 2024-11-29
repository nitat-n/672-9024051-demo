@extends('../layouts.app')


@section('title','ebd-w01-lecturer')


@section('header')
    <h1 class="text-center text-6xl text-red-600">Lectuer</h1>
@endsection
   
@section('content')
    <div class="container mx-auto">
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ชื่อ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lecturers as $lecturer)
                    <tr>
                        <td>{{ $lecturer->id }}</td>
                        <td>{{ $lecturer->title->ttl_name }}
                            {{ $lecturer->ltr_fname }}
                            {{ $lecturer->ltr_lname }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
