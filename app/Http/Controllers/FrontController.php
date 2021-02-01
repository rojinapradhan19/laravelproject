<?php

namespace App\Http\Controllers;

use App\Item;
use DB;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function insert(){
        return view('itemList');
    }

    public function index(){
        $d = DB::select('select * from posts');
        $data = Item::orderBy('id', 'desc')->get();

        return view('itemlist',['data'=>$data]);
        }

    // public function getAllItems(){
    //     $items = Item::all();
    //     return view ('itemlist', compact('items'));
    // }
    public function viewUpdate($id){
      $result = Item::find($id);
//         Session::flash('message', 'Update successfully!');
//         Session::flash('alert-class', 'alert-success');
//              if($result->viewUpdate($id)){
//  return redirect()->route('data');
//      }else{
//         Session::flash('message', 'Data not updated!');
//         Session::flash('alert-class', 'alert-danger');
//      }
      
      return view('items.update',compact("result"));
      return redirect('/itemlist')->with('success', 'item deleted!');
    }
    
    public function update(Request $request){
      $id=$request->id;
      
      Item::find($id)->update($request->all());
     // dd($id);
     return redirect('/itemlist')->with('success', 'item deleted!');

    }

    public function destroy($id) {
     
        DB::delete('delete from posts where id = ?',[$id]);
        echo "Record deleted successfully.";
        
        return redirect('/itemlist')->with('success', 'item deleted!');

        }


    public function store(Request $request){
        $attribute = $request->all();
        $a = Item::create($attribute)
                        -> orderBy('id')->get();

        //dd($attribute);
        if ($a){
            $request->session()->flash('success_message',' Successfully  ! ');
            return redirect('/itemlist')->with('success', 'item insert!');

           // echo '<script>alert("Successfull to insert")</script>';

            //echo "data inserted successfully";
        }
        // if ($a){
        //     //$request->session()->flash('success_message',' Successfully  ! ');
        //     return redirect()->route('welcome');

        // }
        else{
           // $request->session()->flash('error_message','Something went wrong  ! ');
            return redirect()->route('itemList');
        }
        // else{
        //     $data = $request->input();
        //     try{
        //         $item = new Item;
        //         $item->name = $data['name'];
        //         $item->quantity = $data['quantity'];
        //         $item->price = $data['price'];
        //         $item->image = $data['image'];
        //         $item->save();
        //         return redirect('insert')->with('status',"insert successfully");

        //     }
        //     catch(Exception $e){
        //         return redirect('failed'," Unsuccessfull");
        //     }
        //     }
          
        }
    }
    

