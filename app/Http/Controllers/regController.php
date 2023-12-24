<?php

namespace App\Http\Controllers;

use App\Models\regModel;
use Illuminate\Http\Request;

class regController extends Controller
{
    //data insert into table
    public function addData(Request $req)
    {
        $req->validate([
            "name" => "required",
            "phone" => "required",
            "email" => "required",
            "password" => "required",
            "image" => "required",
        ]);
        $allData = $req->all();

        // image check if yes image insert
        if ($req->hasFile("image")) {
            $randName = rand(1000, 9999) . "." . $req->image->extension();
            $path = $req->image->storeAs("image", $randName, "public");
            $allData["image"] = "storage/" . $path;
        }
        // data insert
        $queryInsert = regModel::create($allData);
        return redirect("user-registration")->with("status", "Successfully Registered..");
    }
    // fetch data to database to show
    public function dataFetch()
    {
        $data = regModel::all();
        return view("userData", compact('data'));
    }
    // fetch edit data to update
    public function editFetch($id)
    {
        $data = regModel::find($id);
        return view("editReg")->with("data", $data);
    }
    public function update(Request $request, $id)
    {
        $data = regModel::find($id);
        if ($data) {
            if ($request->name) {
                $data->name = $request->name;
            }
            if ($request->phone) {
                $data->phone = $request->phone;
            }
            if ($request->email) {
                $data->email = $request->email;
            }
            if ($request->password) {
                $data->password = $request->password;
            }
            if ($request->hasFile('image')) {
                $image = rand(1000, 9999) . '.' . $request->image->extension();
                $path = $request->image->storeAs('image', $image, 'public');
                $data->image = 'storage/' . $path;
            }
        }
        $data->save();
        return redirect("User-Data")->with("status", "Successfully update..");
    }
// delete data here
    public function delete($id)
    {
        $data = regModel::find($id);
        if ($data) {
            $data->delete();
        }
        return redirect("User-Data")->with("status", "Successfully Deleted..");
    }
//login system here
public function login(Request $req)
{
    $req->validate([
        "email" => "required",
        "password" => "required"
    ]);
    
    $data = regModel::where("email", $req->email)->where("password", $req->password)->first();

    if ($data) {
        $msg = "ok";
    } else {
        $msg = "Not ok";
    }

    return response()->json(["status" => $msg]);
}

}
