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

          @foreach($defers as $defer)
            <tr>
              <td>{{$defer->id}}</td>
              <td>{{$defer->name}}</td>
              <td>{{$defer->tourtype}}</td>
              <td>{{$defer->tourdate}}</td>
              <td>{{$defer->phone}}</td>
              <td>
              
              </td>
              <td></td>


            </tr>
          @endforeach

        </tbody>
      </table>

@endsection
