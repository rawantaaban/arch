<?php

namespace App\Http\Controllers;
use DB;
use App\Models\GenerateDocs;
use App\Core\Helpers\Utilities;

use Illuminate\Http\Request;

class GenerateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
      

        $all_docs = DB::table("GenerateDocs")
        ->select("*")->where('is_deleted','=',0)->get();

        
        return view('Generate.index', compact('all_docs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
                return view('Generate.create');

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
            'doc_no' => $request->doc_no,
            'doc_date' => $request->doc_date,
            'doc_for' => $request->doc_for,
            'signer_name' => $request->signer_name,
            'doc_body' => $request->doc_body,
            'doc_title' => $request->doc_title,
        ];

            
        $attach = GenerateDocs::Create($data);
        if (!$attach) {
            return redirect()->back()->with('error', 'عذراً حدثت مشكلة في الاضافة يرجى اعادة المحاولة من جديد');
        }
        return redirect()->route('Generate.index')->with('success', 'تمت اضافة البريد الصادر بنجاح');
   
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
        $doc = GenerateDocs::where('id', '=', $doc_id)->first();
        
     
        return view(
            'Generate.edit',
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
        
       $data = [
            'doc_no' => $request->doc_no,
            'doc_date' => $request->doc_date,
            'doc_for' => $request->doc_for,
            'signer_name' => $request->signer_name,
            'doc_body' => $request->doc_body,
            'doc_title' => $request->doc_title,
        ];

       
        $attach = GenerateDocs::where('id',$id)->update($data);
        return redirect()->route('Generate.index')->with('success', 'تم تعديل البريد الصادر بنجاح');
   
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
          $all_docs = DB::table("GenerateDocs")
        ->select("*")->where('is_deleted','=',0)->get();

        $del_query=GenerateDocs::where('id', '=',$id)->update(
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
   
    


        public function display_doc($id)
    {
       
          $doc_info = DB::table("GenerateDocs")
        ->select("*")->where('id','=',$id)->first();

       
      
    return view('Generate.display_doc', compact('doc_info'));
 
       
    }
}
