@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Esto imprimira una llave de seguridad -->
    <form action=" {{ url('/empleado/'.$empleado->id) }} " method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        @include('empleado.form',['modo'=>'EDITAR'])
    </form>
</div>
@endsection

