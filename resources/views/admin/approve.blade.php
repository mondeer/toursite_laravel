@extends('admin.dashboard')

@section('content')
    <table class="table table-striped table-positive table-hover">
        <thead>
        <tr>
            <th> Id.</th>
            <th>Name of Applicant</th>
            <th>Tour Type</th>
            <th> Tour Date.</th>
            <th> Phone Number</th>
            <th> Defer</th>
            <th> Approves</th>
        </tr>
        </thead>
        <tbody>

          @foreach($books as $book)
            <tr>
              <td>{{$book->id}}</td>
              <td>{{$book->name}}</td>
              <td>{{$book->tourtype}}</td>
              <td>{{$book->tourdate}}</td>
              <td>{{$book->phone}}</td>
              <td>
                <form class="success delete" action="/defer/{{ $book->id }}" method="post">
                  <input type="hidden" name="_method" value="delete">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button class="btn btn-primary" type="submit" value="Delete">Delete</button>
                </form>
              </td>
              <td>Approve</td>


            </tr>
          @endforeach

        </tbody>
      </table>

@endsection
