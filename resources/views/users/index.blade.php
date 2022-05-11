@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b style="font-family: 'Cairo'">عرض جميع  المستخدمين</b></h4>
                           @if ($message = Session::get('error'))
                                    <div class="alert alert-danger" style="text-align: center">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif


                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success" style="text-align: center">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif 
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>التسلسل</th>
                                    <th> نوع الحساب</th>
                                    <th> الاسم</th>
                                    <th> البريد الالكتروني</th>
                                  
                                    <th> تعديل</th>
                                    <th> حذف</th>
                                    <!-- <th> حذف</th> -->
                               
                                </tr>
                                </thead>

                                <tbody>

                                @foreach($all_users as $user)

                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->role_id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                   
                                    <td><button class="btn btn-primary waves-effect waves-light btn-sm"  ><a href="{{ route('User.edit',$user->id) }}" style="color: inherit;"><i class="ti-pencil-alt"></i></a></button></td>
                                    <td><button class="btn btn-danger " id ="btn_delete" onclick="delete_user('{{$user->id}}');"><i class="ti-trash"></i></button></td>
                                   

                                  
                                </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>

<script>
    function delete_user(idd){
   swal.fire({
    title:  "سيتم مسح المستخدم الذي تم اختياره، هل انت متأكد ؟",


       type: "question",
       showCancelButton: !0,
       confirmButtonColor: "#3085d6",
       cancelButtonColor: "#d33",
       confirmButtonText: "نعم متأكد",
       cancelButtonText: "خروج",
}).then(function(results) {
               if(results['dismiss'] != 'cancel' && results['dismiss'] != 'overlay'){

        window.location = "/reg_archive/public/User/".concat(idd, "/destroy")  ;

               }
                    
                    });

    }
 
 
</script>
@endsection
