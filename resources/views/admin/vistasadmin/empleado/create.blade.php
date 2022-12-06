
<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
    @csrf 
    @include('admin.vistasadmin.empleado.form');
</form>