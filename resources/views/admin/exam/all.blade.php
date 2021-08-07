@extends('layouts.main')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">


        <div class="row pt-2 pb-2">
            <div class="col-sm-9">
                <h4 class="page-title">Simple Tables</h4>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
                <li class="breadcrumb-item"><a href="javaScript:void();">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
             </ol>
           </div>
           <div class="col-sm-3">
           <div class="btn-group float-sm-right">
            <button type="button" class="btn btn-light waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
            <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
            <span class="caret"></span>
            </button>
            <div class="dropdown-menu">
              <a href="javaScript:void();" class="dropdown-item">Action</a>
              <a href="javaScript:void();" class="dropdown-item">Another action</a>
              <a href="javaScript:void();" class="dropdown-item">Something else here</a>
              <div class="dropdown-divider"></div>
              <a href="javaScript:void();" class="dropdown-item">Separated link</a>
            </div>
          </div>
         </div>
         </div>


        <div class="table">
            <table class="table-responsive table">


                <tr>
                    <th>Id#</th>
                    <th>Exam Title</th>
                    <th>Desc..</th>
                    <th>Total Marks</th>
                    <th>Passing Marks</th>
                    <th>Total Time to Attempt</th>
                    <th>created By</th>
                    <th>Total Attempts</th>
                    <th>Action</th>
                </tr>


                @foreach($exams as $index => $exam)
                <tr>

                    <td>{{ $index+1 }}</td>
                    <td>{{ $exam->title }}</td>
                    <td>{{ $exam->desc }}</td>
                    <td>{{ $exam->marks }}</td>
                    <td>{{ $exam->no_of_passings }}</td>
                    <td>{{ $exam->total_time_to_attempt }}</td>
                    <td>{{ $exam->prepared_by_user_id }}</td>
                    <td>{{ $exam->total_attempts }}</td>
                    <td><a href="{{ route('exam_update',$exam->id) }}">
                        <button class="btn btn-warning">Edit</button>
                        </a>
                    <a href="{{ route('exam_delete',$exam->id) }}">
                        <button class="btn btn-danger">Delete</button>
                    </a>

                    </td>

                </tr>
                @endforeach


            </table>

            <hr/>


        </div>


    </div>
</div>

@endsection
