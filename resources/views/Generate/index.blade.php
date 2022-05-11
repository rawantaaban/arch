@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b style="font-family: 'Cairo'">عرض جميع الكتب الواردة</b></h4>
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
                                    <th>#</th>
                                    <th>عنوان الكتاب</th>
                                    <th>رقم الكتاب</th>
                                    <th>تاريخ الكتاب</th>
                                    <th>موجه الي </th>
                                    <th> موقع الكتاب</th>
                                   
                                    <th> تعديل</th>
                                    <th> حذف</th>
                                    <th> عرض</th>
                                    <!-- <th> حذف</th> -->
                               
                                </tr>
                                </thead>

                                <tbody>

                                @foreach($all_docs as $docs)

                                <tr>
                                    <td>{{$docs->id}}</td>
                                    <td>{{$docs->doc_title}}</td>
                                    <td>{{$docs->doc_no}}</td>
                                    <td>{{$docs->doc_date}}</td>
                                    <td>{{$docs->doc_for}}</td>
                                    <td>{{$docs->signer_name}}</td>
                                   
                                    <td>
                                        @if(Auth::user()->can_update == 1)
                                        <button class="btn btn-primary waves-effect waves-light btn-sm"  ><a href="{{ route('Generate.edit',$docs->id) }}" style="color: inherit;" ><i class="ti-pencil-alt"></i></a></button></td>
                                        @else
                                        <button class="btn btn-primary waves-effect waves-light btn-sm"  disabled><a href="{{ route('Generate.edit',$docs->id) }}" style="color: inherit;" ><i class="ti-pencil-alt" disabled></i></a></button></td>
                                        @endif
                                    <td>
                                        @if(Auth::user()->can_delete == 1)
                                        <button class="btn btn-danger " id ="btn_delete" onclick="delete_doc('{{$docs->id}}');"><i class="ti-trash"></i></button>
                                        @else
                                        <button class="btn btn-danger " id ="btn_delete" onclick="delete_doc('{{$docs->id}}');" disabled><i class="ti-trash" disabled></i></button>
                                        @endif
                                    
                                    </td>

                                    <td>
                                        <button class="btn btn-info waves-effect waves-light btn-sm"  ><a href="/reg_archive/public/Generate/{{$docs->id}}/display" style="color: inherit;" ><i class="ti-menu"></i></a></button></td>
                                   

                                  
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
    function delete_doc(idd){
   swal.fire({
    title:  "سيتم مسح البريد الذي تم اختياره، هل انت متأكد ؟",


       type: "question",
       showCancelButton: !0,
       confirmButtonColor: "#3085d6",
       cancelButtonColor: "#d33",
       confirmButtonText: "نعم متأكد",
       cancelButtonText: "خروج",
}).then(function(results) {
               if(results['dismiss'] != 'cancel' && results['dismiss'] != 'overlay'){

        window.location = "/reg_archive/public/Generate/".concat(idd, "/destroy")  ;

               }
                    
                    });

    }
 
 
</script>
@endsection
