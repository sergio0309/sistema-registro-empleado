@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Esto imprimira una llave de seguridad -->
    <form action=" {{url('/empleado')}} " method="post" enctype="multipart/form-data">
        @csrf
        @include('empleado.form',['modo'=>'CREAR'])
    </form>
</div>
@endsection
