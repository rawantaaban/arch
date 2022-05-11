<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Docs;
use App\Core\Helpers\Utilities;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {

        
        $all_docs = DB::table("docs")
        ->select("*")->where('type','=',0)->where('is_deleted','=',0)->get();

        
        return view('import.index', compact('all_docs'));
    }
      
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view('import.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
       $data = $request->validate([
            'doc_no' => 'numeric|required',
            'doc_date' => 'required',
            'from' => 'required',
            'to' => 'required',
            'subject' => 'required',
            'notes' => 'nullable',
        ]);
        $data['type'] = $request->type;

               $image=$request['attach'];
        $image->move('Docs/import', $request['doc_no'].'.' . $request['attach']->getClientOriginalExtension());
         $data['attach'] ='Docs/import/'.$request['doc_no'].'.' . $request['attach']->getClientOriginalExtension();

        $attach = Docs::Create($data);
        if (!$attach) {
            return redirect()->back()->with('error', 'عذراً حدثت مشكلة في الاضافة يرجى اعادة المحاولة من جديد');
        }
        return redirect()->route('Import.index')->with('success', 'تمت اضافة البريد الوارد بنجاح');
   
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
        $doc = Docs::where('id', '=', $doc_id)->first();
        
     
        return view(
            'import.edit',
            [
               
                'doc' => $doc
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
            'doc_no' => 'numeric|required',
            'doc_date' => 'required',
            'from' => 'required',
            'to' => 'required',
            'subject' => 'required',
            'notes' => 'nullable',
        ]);

        if($request['attach'] != null){
        $image=$request['attach'];
      
        $image->move('Docs/import', $request['attach'].'.' . $request['attach']->getClientOriginalExtension());
        $data['attach'] ='Docs/import/'.$request['doc_no'].'.' . $request['attach']->getClientOriginalExtension();

        }
       
        $attach = Docs::where('id',$id)->update($data);
        return redirect()->route('Import.index')->with('success', 'تم تعديل البريد الوارد بنجاح');
   
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
          $all_docs = DB::table("docs")
        ->select("*")->where('type','=',0)->where('is_deleted','=',0)->get();

        $del_query=Docs::where('id', '=',$id)->update(
            [
                'is_deleted'=> 1
            ]
            );
       if($del_query) {
    return back()->with('success', 'تم مسح البريد بنجاح');
  } else {
    return back()->with('error', 'حدثت مشكلة في المسح يرجى اعادة المحاولة من جديد');
  }
       
    }
    
}
