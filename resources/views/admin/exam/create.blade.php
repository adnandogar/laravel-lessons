@extends('layouts.main')
@section('content')


<div class="content-wrapper">
    <div class="container-fluid">

        <h1>Create Exam</h1>

        <hr/>
<form method="post" action="{{ route('exam_create_proceed') }}">
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
        @csrf
    <div class="myForm">


		<div class="row">
			<div class="col-lg-6">
			   <div class="card">
                 <div class="card-header text-uppercase">Title</div>
                  <div class="card-body">
				    <input type="text" name="title" class="form-control"
                    placeholder="Enter Exam Title...">
				  </div>
				</div>
			</div>

            <div class="col-lg-6">
                <div class="card">
                  <div class="card-header text-uppercase">Desc</div>
                   <div class="card-body">
                     <input type="text" name="desc" class="form-control"
                     placeholder="Enter desc">
                   </div>
                 </div>
             </div>

             <div class="col-lg-6">
                <div class="card">
                  <div class="card-header text-uppercase">Marks</div>
                   <div class="card-body">
                     <input type="text" name="maks" class="form-control"
                     placeholder="Enter Marks" value="100">
                   </div>
                 </div>

             </div>

             <div class="col-lg-6">
                <div class="card">
                  <div class="card-header text-uppercase">Time to Attempt</div>
                   <div class="card-body">
                     <input type="text" name="total_time_to_attempt" class="form-control"
                     placeholder="Enter Time to attempt" value="300">
                   </div>
                 </div>
             </div>

             <div class="col-lg-6">
                <div class="card">
                  <div class="card-header text-uppercase">No of PAssings</div>
                   <div class="card-body">
                     <input type="text" name="no_of_passings" class="form-control"
                     placeholder="no_of_passings"
                     value="60"
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
