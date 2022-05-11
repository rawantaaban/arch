<?php

namespace App\Http\Controllers;
use DB;
use App\Models\User;
use App\Core\Helpers\Utilities;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
      

        $all_users = DB::table("users")
        ->select("*")->where('is_deleted','=',0)->get();

        
        return view('users.index', compact('all_users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view('users.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
       $data = [
            'name' => $request->name,
            'email' => $request->email,
         
        
        ];
       
        $data['password'] = bcrypt($request->password);

        if($request->can_delete != 1){
         $data['can_delete'] = 0;

        }else{
         $data['can_delete'] = 1;

        }
         if($request->can_update != 1){
         $data['can_update'] = 0;

        }else{
         $data['can_update'] = 1;

        }
         if($request->show_users != 1){
         $data['show_users'] = 0;

        }else{
         $data['show_users'] = 1;

        }
         if($request->show_export != 1){
         $data['show_export'] = 0;

        }else{
         $data['show_export'] = 1;

        }
         if($request->show_import != 1){
         $data['show_import'] = 0;

        }else{
         $data['show_import'] = 1;

        }
        if($request->add_import != 1){
         $data['add_import'] = 0;

        }else{
         $data['add_import'] = 1;

        }
        if($request->add_export != 1){
         $data['add_export'] = 0;

        }else{
         $data['add_export'] = 1;

        }
        $user = User::Create($data);

     
        if (!$user) {
            return redirect()->route('User.index')->with('error', 'عذراً حدثت مشكلة في الاضافة يرجى اعادة المحاولة من جديد');
        }
            return redirect()->route('User.index')->with('success', 'تم انشاء الحساب بنجاح');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($doc_id)
    {
        $user = User::where('id', '=', $doc_id)->first();
        
     
        return view(
            'users.edit',
            [
               
                'user' => $user
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       
    public function update(Request $request, $id)
    {
        
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
        
        ]);
        if($request->password != ""){
       $data['password'] = bcrypt($request->password);

        }

            if($request->can_delete != 1){
         $data['can_delete'] = 0;

        }else{
         $data['can_delete'] = 1;

        }
         if($request->can_update != 1){
         $data['can_update'] = 0;

        }else{
         $data['can_update'] = 1;

        }
         if($request->show_users != 1){
         $data['show_users'] = 0;

        }else{
         $data['show_users'] = 1;

        }
         if($request->show_export != 1){
         $data['show_export'] = 0;

        }else{
         $data['show_export'] = 1;

        }
         if($request->show_import != 1){
         $data['show_import'] = 0;

        }else{
         $data['show_import'] = 1;

        }
        if($request->add_import != 1){
         $data['add_import'] = 0;

        }else{
         $data['add_import'] = 1;

        }
        if($request->add_export != 1){
         $data['add_export'] = 0;

        }else{
         $data['add_export'] = 1;

        }
       
        $user = User::where('id',$id)->update($data);
        return redirect()->route('User.index')->with('success', 'تم تعديل معلومات المستخدم بنجاح');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    } 
    public function delete($id)
    {
          $all_docs = DB::table("users")
        ->select("*")->where('is_deleted','=',0)->get();

        $del_query=User::where('id', '=',$id)->update(
            [
                'is_deleted'=> 1
            ]
            );
       if($del_query) {
    return back()->with('success', 'تم مسح المستخدم بنجاح');
  } else {
    return back()->with('error', 'حدثت مشكلة في المسح يرجى اعادة المحاولة من جديد');
  }
       
    }
    
}
