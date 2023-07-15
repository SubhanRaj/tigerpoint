@if(session()->has('message'))
<div class="d-flex justify-content-center">
    <div class="alert {{session()->get('alert-class')}} alert-dismissible fade show d-block text-center" role="alert">
        {{session()->get('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif