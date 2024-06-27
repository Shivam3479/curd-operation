<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataList;

class formDataController extends Controller
{
    public function index(){
        $data_lists = DataList::get();
        // return view('data-list',['data_lists'=>$data_lists]);
        return response()->json(['dataLists'=>$data_lists]);
    }

    public function store(Request $request){
        // dd($request->all());
        try{
            $request->validate([
                'name'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'message'=>'required',
            ]);
            $data_lists = new DataList;
            $data_lists->name = $request->name;
            $data_lists->email = $request->email;
            $data_lists->phone = $request->phone;
            $data_lists->message = $request->message;
            $data_lists->save();
        }catch(\Exception $e){
            $message = $e->getMessage();
            //return redirect()->back()->with('error',$message);
            return json_encode(["returnCode"=>"0", "status"=>200, 'error'=>$message]);
        }
        // return redirect()->back()->with("success","Thankyou for submitting your details with Us!!");        
        return json_encode(["returnCode"=>"1", "status"=>200, "message"=>"Thankyou for submitting your details with Us!!"]);
    }

    public function edit($id){
        // dd($id);
        $data_lists = DataList::where('id',$id)->first();
        // return view('edit-data',['data_lists'=>$data_lists]);
        return response()->json(['dataLists'=>$data_lists]);
    }

    public function update(Request $request, $id){
        // dd($id);        
        try{
            $request->validate([
                'name'=>'required',
                'email'=>'required',
                'phone'=>'required',
                'message'=>'nullable',
            ]);
            $data_lists = DataList::where('id',$id)->first();
            if (isset($request->message)) {                
                $data_lists->message = $request->message;
            }
            $data_lists->name = $request->name;
            $data_lists->email = $request->email;
            $data_lists->phone = $request->phone;
            $data_lists->save();
            //return back()->withSuccess(['success'=>'Data Submitted']);
        }catch(\Exception $e){
            $message = $e->getMessage();
            return json_encode(["returnCode"=>"0", "status"=>200, 'error'=>$message]);
            //return redirect()->back()->with('error',$message);
        }
        return json_encode(["returnCode"=>"1", "status"=>200, "message"=>"Updated Data Successfully!!"]);
        //return redirect()->back()->with("success","Thankyou Updated Your Data!!");
    }

    public function destroy($id){
        // dd($id);
        try{
            $data_lists = DataList::where('id',$id)->first();
            $data_lists->delete();
        }catch(\Exception $e){
            $message = $e->getMessage();
            // return redirect()->back()->with('error',$message);
            return json_encode(["returnCode"=>"0", "status"=>200, 'error'=>$message]);
        }
        // return redirect()->back()->with("success","Deleted Successfully");
        return json_encode(["returnCode"=>"1", "status"=>200, "message"=>"Deleted Data Successfully!!"]);        
    }
}
