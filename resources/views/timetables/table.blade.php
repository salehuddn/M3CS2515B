@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Timetables</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success mb-4" href="{{ route('timetables.create') }}"> Add New Timetable</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>User Id</th>
            <th>Subject </th>
            <th>Day </th>
            <th>Hall </th>
            <th>Lecturer Group</th>
            <th>Start</th>
            <th>End</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($timetables as $index => $s)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $s->user->name }} </td>
            <td>{{ $s->subject->subject_code }}  </td>
            <td>{{ $s->day->day_name }} </td>
            <td>{{ $s->hall->lecture_hall_name }} </td>
            <td>{{$s->group->name}}</td>
            <td>{{$s->time_from}}</td>
            <td>{{$s->time_to}}</td>
            <td>{{$s->created_at}}</td>
            <td>{{$s->updated_at}}</td>
            <td>
                <form action="{{ route('timetables.destroy',$s) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('timetables.show',$s) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('timetables.edit',$s) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" >Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
