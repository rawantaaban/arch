@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b style="font-family: 'Cairo'">عرض جميع الكتب الصادرة</b></h4>
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
                                    <th style="text-align:center">#</th>
                                    <th style="text-align:center"> المرفق</th>
                                    <th style="text-align:center">رقم الكتاب</th>
                                    <th hidden>تاريخ الكتاب</th>
                                    <th hidden>صادر من</th>
                                    <th hidden>وارد الى</th>
                                    <th hidden>الموضوع</th>
                                    <th hidden>رقم الصادر/ الوارد</th>
                                    <th hidden>تاريخ الصادر/ الوارد</th>
                                    <th style="text-align:center">QRcode</th>
                                    <th hidden>الملاحظات</th>
                                    <th hidden>اضيف بواسطة</th>
                                    <th style="text-align:center"> تعديل</th>
                                    <th style="text-align:center"> حذف</th>
                               
                                </tr>
                                </thead>

                                <tbody>

                                @foreach($all_docs as $docs)

                                <tr>
                                    <td style="text-align:center">{{$docs->id}}</td>
<td style="text-align: center">
               <a data-toggle="modal" data-target="#show-category-attach{{$docs->id}}" href="#"><i class="ti-file" style="font-size: 25px; color:blue"></i></a>
               </td>                                   
                <td style="text-align:center">{{$docs->doc_no}}</td>
                                    <td hidden>{{$docs->doc_date}}</td>
                                    <td hidden>{{$docs->from}}</td>
                                    <td hidden>{{$docs->to}}</td>
                                    <td hidden>{{$docs->subject}}</td>
                                     <td hidden>{{$docs->exp_imp_no}}</td>
                                    <td hidden>{{$docs->exp_imp_date}}</td> 
                                    <td style="text-align:center"><a href="/reg_archive/public/Export/{{$docs->id}}/printQR">  {{QrCode::size(50)->generate("http://localhost/reg_archive/public/".$docs->attach);}}</a></td>
                                    <td hidden>{{$docs->notes}}</td> 
                                     <td hidden>{{$docs->created_by}}</td>
                                    <td style="text-align:center">
                                        @if(Auth::user()->can_update == 1)
                                        <button class="btn btn-primary waves-effect waves-light btn-sm"  ><a href="{{ route('Export.edit',$docs->id) }}" style="color: inherit;"><i class="ti-pencil-alt"></i></a></button>
                                        @else
                                        <button class="btn btn-primary waves-effect waves-light btn-sm"  disabled><a href="{{ route('Export.edit',$docs->id) }}" style="color: inherit;" disabled><i class="ti-pencil-alt" disabled></i></a></button> 
                                        @endif
                                    </td >
                                    <td style="text-align:center">
                                        @if(Auth::user()->can_delete == 1)
                                        <button class="btn btn-danger " id ="btn_delete" onclick="delete_doc('{{$docs->id}}');"><i class="ti-trash"></i></button>
                                        @else
                                        <button class="btn btn-danger " id ="btn_delete" onclick="delete_doc('{{$docs->id}}');" disabled><i class="ti-trash" disabled></i></button>
                                        @endif
                                    </td>
                                   

                                  
                                </tr>

                                @endforeach
                                </tbody>
                            </table>




@foreach($all_docs as $docs)

<div class="modal fade" id="show-category-attach{{$docs->id}}" tabindex="-1">
    <div class="modal-dialog ">

<center>

@if($docs->attach == '')



        <div  height="900" width="600" class="row d-xl-block d-none " style=" height: 900px; width:600px; background-color: white" >
       <br><br><br>
       <center>
        <h2> لم تتوفر الصورة الشخصية !! </h2>
       <br><br><br><br><br><br> 
       <i class="bx bx-sad" style="font-size: 250px; color:red"></i>
       
       
       </center>
       
       </div>


@else
        <img src="http://localhost/reg_archive/public/{{$docs->attach }}" height="900" width="600" class="d-xl-block d-none"/>



@endif
       
        </center>

    </div>
</div>

@endforeach

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

        window.location = "/reg_archive/public/Export/".concat(idd, "/destroy")  ;

               }
                    
                    });

    }
 
</script>
@endsection
