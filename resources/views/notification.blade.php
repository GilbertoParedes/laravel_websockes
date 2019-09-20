@extends('welcome')

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nuevo usuario</div>

                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        window.Echo.channel('test-notification')
            .listen('TestNotification', (data) => {
                $(".alert-success > p")
                    .empty()
                    .append('El' + data.user.name + 'se a regístrado');
            });
    });
</script>

@endsection
<!-- <script src="{{ mix('js/app.js') }}"></script> -->

