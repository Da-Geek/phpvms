@extends('admin.app')

@section('title', 'Edit Flight')
@section('content')
<div class="card  border-blue-bottom">
    @include('admin.flash.message')
   <div class="content">
        {!! Form::model($flight, ['route' => ['admin.flights.update', $flight->id], 'method' => 'patch']) !!}
            @include('admin.flights.fields')
        {!! Form::close() !!}
   </div>
</div>

<div class="card  border-blue-bottom">
    <div class="content">
       @include('admin.flights.flight_fields')
    </div>
</div>

<div class="card  border-blue-bottom">
    <div class="content">
        @include('admin.flights.subfleets')
    </div>
</div>
@endsection
@include('admin.flights.scripts')
