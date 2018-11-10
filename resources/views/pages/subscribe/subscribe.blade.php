@extends('layouts.app')

@section('content')
<!-- BREADCRUMB -->
		@if (\Session::has('success'))
                <div class="alert alert-success">
                   <p>{{ \Session::get('success') }}</p>
                </div><br />
             @endif
             @if (\Session::has('failure'))
                <div class="alert alert-danger">
                   <p>{{ \Session::get('failure') }}</p>
                </div><br />
             @endif
		<!-- /SECTION -->
@endsection
