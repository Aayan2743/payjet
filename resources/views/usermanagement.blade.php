@extends('layouts.master')

@section('content')
<div id="content mt-5">
    <div class="container mt-3">
        <!-- 1st row -->

        <!-- 3rd row -->
       @livewire('addnewuser')
        <!-- end 3rd -->
    </div>
</div>


<script>
window.addEventListener('alert', (event) => {
    // console.log(event);
    $('#kt_modal_invite_friends').modal('hide');

    let data = event.detail;
    Swal.fire({
        position: 'center',
        // icon: "success",
        icon: data.icon,
        title: data.title,
        showConfirmButton: false,
        timer: 1500
    });
})

</script>
@endsection