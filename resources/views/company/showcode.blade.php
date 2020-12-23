@extends('company.layouts.app')
@section('content')
<center>
<h1>
    كود الشركة : 
    {{ auth()->user()->code  }}
</h1>
</center>
@endsection
