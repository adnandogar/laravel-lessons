@extends('layouts.main')
@section('content')
<div class="content-wrapper">

    <div class="container fluid">
        <h1>Update</h1>

        <form method="post" action="{{ route('exam_update_proceed') }}">
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
                @csrf
                <input type="hidden" name="id" value="{{ $exam->id }}" />
            <div class="myForm">


                <div class="row">
                    <div class="col-lg-6">
                       <div class="card">
                         <div class="card-header text-uppercase">Title</div>
                          <div class="card-body">
                            <input type="text" name="title" class="form-control"
                            placeholder="Enter Exam Title..."
                            value="{{ $exam->title }}"

                            >
                          </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                          <div class="card-header text-uppercase">Desc</div>
                           <div class="card-body">
                             <input type="text" name="desc" class="form-control"
                             placeholder="Enter desc"
                             value="{{ $exam->desc }}"

                             >
                           </div>
                         </div>
                     </div>

                     <div class="col-lg-6">
                        <div class="card">
                          <div class="card-header text-uppercase">Marks</div>
                           <div class="card-body">
                             <input type="text" name="marks" class="form-control"
                             placeholder="Enter Marks" value="{{ $exam->marks }}">
                           </div>
                         </div>

                     </div>

                     <div class="col-lg-6">
                        <div class="card">
                          <div class="card-header text-uppercase">Time to Attempt</div>
                           <div class="card-body">
                             <input type="text" name="total_time_to_attempt" class="form-control"
                             placeholder="Enter Time to attempt" value="{{ $exam->total_time_to_attempt }}">
                           </div>
                         </div>
                     </div>

                     <div class="col-lg-6">
                        <div class="card">
                          <div class="card-header text-uppercase">No of PAssings</div>
                           <div class="card-body">
                             <input type="text" name="no_of_passings" class="form-control"
                             placeholder="no_of_passings"
                             value="{{ $exam->no_of_passings }}"
                             >

                           </div>
                         </div>
                     </div>


                </div><!--End Row-->


            </div>

            <button class="btn btn-success">Create Exam Proceed!</button>

        </form>

    </div>

</div>


@endsection
