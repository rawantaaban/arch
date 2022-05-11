@extends('layouts.app')

@section('content')



 <div class="row" >
                            <div class="col-md-12" >
                            	<div class="card-box">
                            		<h4 class="m-t-0 header-title"><b style="font-family: 'Cairo'"> ادخال كتاب جديد</b></h4>
                            		<p class="text-muted m-b-30 font-13">
									</p>
									
									<form id="basic-form" method="POST" action="{{ route('Generate.store') }}" enctype="multipart/form-data">
                                          {{ csrf_field() }}
                                      <input  id="type" name="type" type="hidden" value="0" >
<div>
                                            <h3>    ادخل معلومات الكتاب</h3>
                                            <section>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="doc_no">رقم الكتاب *</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control required" id="doc_no" name="doc_no" type="number"  >
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="doc_date"> تاريخ الكتاب * </label>
                                                    <div class="col-lg-10">
                                                        <input id="doc_date" name="doc_date" type="date" class="required form-control" >

                                                    </div>
                                                </div>

                                                
                                                <!-- <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="exp_imp_no">رقم الصادر *</label>
                                                    <div class="col-lg-10">
                                                        <input id="exp_imp_no" name="exp_imp_no" type="number" class="required form-control" >
                                                    </div>
                                                </div>
                                                
                                                 <div class="form-group clearfix">

                                                    <label class="col-lg-2 control-label" for="exp_imp_date"> تاريخ الصادر *</label>
                                                    <div class="col-lg-10">
                                                        <input id="exp_imp_date" name="exp_imp_date" type="date" class="required form-control" >
                                                    </div>
                                                </div> -->
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="doc_title">  عنوان الكتاب *</label>
                                                    <div class="col-lg-10">
                                                        <input id="doc_title" name="doc_title" type="text" class="required form-control" >

                                                    </div>
                                                </div>

                                                 <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="doc_for"> موجه الى *</label>
                                                    <div class="col-lg-10">
                                                        <input id="doc_for" name="doc_for" type="text" class="required email form-control" >
                                                    </div>
                                                </div>

                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="doc_body"> متن الكتاب *</label>
                                                    <div class="col-lg-10">
                                                        <input id="doc_body" name="doc_body" type="text" class="form-control" >
                                                    </div>
                                                </div>

                                                  <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="signer_name">اسم الموقع  </label>
                                                    <div class="col-lg-10">
                                                        <input id="signer_name" name="signer_name" type="text" class="form-control" >
                                                    </div>
                                                </div>
                                            </section>
                                            <!-- <h3>معلومات اخرى</h3>
                                            <section> -->
                                               

                                                <!-- <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="hamish">هامش الكتاب </label>
                                                    <div class="col-lg-10">
                                                        <input id="hamish" name="hamish" type="text" class="required email form-control" >
                                                    </div>
                                                </div>

                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="also_send_to">يعمم الى </label>
                                                    <div class="col-lg-10">
                                                        <input id="also_send_to" name="also_send_to" type="text" class="form-control" >
                                                    </div>
                                                </div> -->

                                                
                                               
                                             
                                                 <!-- <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="importance">اهمية الكتاب : </label>
                                                    <div class="switchery-demo">

                                                   
                                                       سري
                                                <input id="importance" name="importance" type="checkbox" checked data-plugin="switchery" data-color="#f05050" />
                                               عام


                                              
                                            </div>
                                                </div> -->

                                            
                                            <!-- </section> -->
                                            <!-- <h3>ارفاق الكتاب</h3>
                                            <section>
                                        
                                      


        

                          
                            <form ></form>


          
    
                                            </section> -->
                                            
                                        </div>
                                    </form> 
                                    
                            	</div>
                        	</div>
                    	</div>
@endsection
