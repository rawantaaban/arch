@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="row">
                    <div class="col-sm-12" style="margin-top: 100px">
                        <div class="card-box table-responsive">
                            <h1 style="text-align: center; color: red"><b  style="font-family: 'Cairo'">مرحبا بك {{ Auth::user()->name }} في نظام الصادر والوارد ... يمكنك من خلال هذا النظام ادارة بريد الدائرة بشكل كامل وستتوفر اقسام اخرى داخل النظام في الفترة القادمة</b></h1>
                          
                         
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
@endsection
