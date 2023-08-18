<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;
use Illuminate\Support\Facades\DB;

class ChannelController extends Controller
{
    //GET: channels (SELECT)
    public function index()
    {
        $channels = Channel::orderBy('ChannelID', 'desc')->paginate(5);
        return view("index", compact("channels"));
    }


    //ADD (INSERT): (1) Hiển thị FORM (GET) / (2) Lưu dữ liệu từ FORM vào CSDL
    //GET: channels/create
    public function create()
    {
        return view("create");
    }

    //POST: channels
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'ChannelName' => 'required|string|max:255',
            'Description' => 'required|string',
            'SubscribersCount' => 'required|integer',
            'URL' => 'required|string|max:255',
            'manualCreated_At' => 'nullable|date', // Validate the manualCreated_At field
        ]);

        // Determine the value for Created_At
        if ($request->has('manualCreated_At')) {
            $created_at = $request->input('manualCreated_At');
        } else {
            $created_at = now();
        }

        // Create a new channel record with the validated data
        Channel::create(array_merge($validatedData, ['Created_At' => $created_at]));

        return redirect()->route('channels.index')->with('success', 'Channel has been created successfully.');
    }

    //GET; channels/{Channel}
    public function show(string $id)
    {
        //ORM
        //$Channel = Channel::find($id);
        //Query Builder $Channel = DB::table("channels")->where('id',15)->first();
        //Raw SQL
        $Channel = DB::selectOne("SELECT * FROM channels WHERE id = ?", [15]);
        return response()->json($Channel);
    }

    //EDIT (UPDATE): (1) Hiển thị FORM (GET) / (2) Lưu dữ liệu từ FORM vào CSDL
    //GET: channels/{Channel}/edit
    public function edit(string $ChannelID)
    {
        $Channel = Channel::find($ChannelID);
        return view("edit", compact('Channel'));
    }


    //PUT: channels/{Channel}
    public function update(Request $request, string $id)
    {
        $Channel = Channel::find($id); //Tìm ra xem thằng nào trong CSDL cần sửa

        //        $Channel->name = $request->name;
        //        $Channel->email = $request->email;
        //        $Channel->address = $request->address;
        //
        //        $Channel->save(); //Tự so sánh với ví dụ ở Tutorial để hiểu thêm các cách làm khác nhau
        $Channel->fill($request->post())->save();

        return redirect()->route('channels.index')->with('success', 'Channel Has Been updated successfully');
    }

    //DELETE: channels/{Channel}
    public function destroy(int $ChannelID)
    {
        $channel = Channel::find($ChannelID);
        $channel->delete();
        return redirect()->route('channels.index')->with('success', 'Channel has been deleted successfully: ' . $ChannelID);
    }
}
