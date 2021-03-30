<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Model\Vission;

class VissionController extends Controller
{
    public function view(){
   	$data['countvission'] = Vission::count();
    $data['alldata'] = Vission::all();
    return view('backend.vission.view-vission',$data);
    }

    public function add(){

    	return view('backend.vission.add-vission');
    }
    
     public function store(Request $request){
    	$data = new Vission();
      $data->title = $request->title;
    	$data->created_by = Auth::user()->id;
    	 if ($request->file('image')){
          $file = $request->file('image');
          $filename =date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('upload/vissionimage'), $filename);
          $data['image'] = $filename;
        }
    	$data->save();
    	return redirect()->route('vissions.view')->with('success','Vission Inserted Successfully');
    }
        
        public function edit($id){
            $editdata = Vission::find($id);
            return view('backend.vission.edit-vission',compact('editdata'));

        }

        public function update(Request $request,$id){
            $data = Vission::find($id);
            $data->title = $request->title;
            $data->updated_by = Auth::user()->id;
         if ($request->file('image')){
          $file = $request->file('image');
          @unlink(public_path('upload/vissionimage/'.$data->image));
          $filename =date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('upload/vissionimage'), $filename);
          $data['image'] = $filename;
        }
        $data->save();

        return redirect()->route('vissions.view')->with('success','Vission Updated Successfully');

        }

          public function delete($id){
            $vission = Vission::find($id);

          if (file_exists('public/upload/vissionimage/' . $vission->image) AND !
            empty($vission->image)){
               unlink('public/upload/vissionimage/' . $vission->image);
       }
            $vission->delete();
            return redirect()->route('vissions.view')->with('success','Vission Deleted Successfully');

          }  
}
