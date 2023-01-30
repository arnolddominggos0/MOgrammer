<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
  public function saveComment(Request $request){
    $request->validate([
        'name' => 'required',
        'msg' => 'required',
    ]);

    Forum::create([
        'parent_comment' => $request->id,
        'name' => $request->name,
        'post' => $request->msg,
        'date' => Carbon::now()
    ]);

    // return response()->json(['statusCode' => 200]);

    return json_encode(array("statusCode"=>200));
  }
  
  public function viewComment()
  {
        $forums  = Forum::all();
        return response()->json($forums);
  }


  public function index()
  {
    $forums = DB::table('forums')
    ->select(
        'id as id',
        'parent_comment as parent_comment',
        'name as name',
        'post as post',
        'date as date'
    )
    ->orderBy('id', 'asc')
    ->get();

    return view('forum.daftarForum', compact('forums'));
  }
  public function create()
  {
    return view('forum.registrasi');
  }

  public function update(Request $request, $id)
  {
    // dd($request->all());
    $request->validate([
      'parent_comment' => ['required'],
      'name' => ['required'],
      'post' => ['required']
    ]);

    DB::table('forums')
      ->where('id', "=", $request->id)
      ->update([
        'parent_comment' => $request->parent_comment,
        'name' => $request->name,
        'post' => $request->post
      ]);

    return redirect()->route('forum');
  }

  public function store(Request $request)
  {
    $request->validate(
      [
        'parent_comment' => ['required', 'numeric'],
        'name' => ['required', 'string', 'max:255'],
        'post' => ['required', 'string'],
        'date' => ['required', 'date', 'max:255']
      ],
      [
        'parent_comment.unique' => 'Komen tersebut sudah ada'
      ]
    );

    $forums = Forum::create([
      'parent_comment' => $request->parent_comment,
      'name' => $request->name,
      'post' => $request->post,
      'date' => Carbon::now()
    ]);
    return view('forum.daftarForum', compact('forums'));
  }

  public function show($id)
  {

    $forums = Forum::findorFail($id);
    return view('forum.infoForum', compact('forums'));
  }

  public function edit($id)
  {
    $forum = Forum::findorFail($id);
    return view('forumEdit', compact('forums'));
  }

  public function destroy($id)
  {

    // dd($id);
      try {
          $forum = Forum::findOrFail($id);
          $forum->delete();
          return redirect()->route('adminforum')->with('success', 'Forum deleted successfully');
      } catch (Exception $forum) {
          return redirect()->route('adminforum')->with('error', 'Forum not found');
      }
  }
  
  

  public function getAllForums()
  {
    $forums = Forum::all();
    return datatables()->of($forums)->toJson();
  }
}