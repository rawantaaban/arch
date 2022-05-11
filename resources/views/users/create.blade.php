@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            

 <div class="row" >
                            <div class="col-md-12" >
                            	<div class="card-box">
                            		<h4 class="m-t-0 header-title"><b style="font-family: 'Cairo'"> انشاء حساب جديد  </b></h4>
                            		<p class="text-muted m-b-30 font-13">
									</p>
									
									<form id="basic-form" method="POST" action="{{ route('User.store') }}" enctype="multipart/form-data">
                                          {{ csrf_field() }}

                                          <div>

                                           <h3 style="font-family: 'Cairo'">ادخل معلومات المستخدم</h3>
                                            <section>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="name"> اسم المستخدم *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control required" id="name" name="name" type="text"  >
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="email">  البريد الالكتروني * </label>
                                                    <div class="col-lg-10">
                                                        <input id="email" name="email" type="email" class="required form-control" >

                                                    </div>
                                                </div>

                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="password"> رمز المرور *</label>
                                                    <div class="col-lg-10">
                                                        <input id="password" name="password" type="text" class="required email form-control" >
                                                    </div>
                                                </div>

                                               
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="role_id">  الصلاحيات *</label>
                                                    <div class="col-lg-10">
                                                        <input type="checkbox" name="can_delete" id="can_delete" value="1">
                                                        <label for="can_delete">صلاحية المسح</label><br>
                                                        
                                                        <input type="checkbox" name="can_update" id="can_update" value="1">
                                                        <label for="can_update">صلاحية التعديل</label><br>
                                                        
                                                        <input type="checkbox" name="show_import" id="show_import" value="1">
                                                        <label for="show_import">صلاحية عرض الوارد</label><br>
                                                        
                                                        <input type="checkbox" name="show_export" id="show_export" value="1">
                                                        <label for="show_export">صلاحية عرض الصادر</label><br>
                                                        
                                                        <input type="checkbox" name="add_import" id="add_import" value="1">
                                                        <label for="add_import">صلاحية اضافة وارد</label><br>
                                                        
                                                        <input type="checkbox" name="add_export" id="add_export" value="1">
                                                        <label for="add_export">صلاحية اضافة صادر</label><br>
                                                      
                                                        <input type="checkbox" name="show_users" id="show_users" value="1">
                                                        <label for="show_users">صلاحية ادارة المستخدمين</label><br>

                                                    </div>
                                                </div>

                                        
                                               
                                              
                                            </section>
                                        </div>
                                    </form> 
                                    
                            	</div>
                        	</div>
                    	</div>
                        </div>
                        	</div>
                    	</div>
@endsection
