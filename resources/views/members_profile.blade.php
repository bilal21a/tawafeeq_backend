@extends('layouts.app')
@section('css')
@endsection
@section('content')
<main>
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">
            <div class="card mb-5">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="tab-content">
                            @include('common.members')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
