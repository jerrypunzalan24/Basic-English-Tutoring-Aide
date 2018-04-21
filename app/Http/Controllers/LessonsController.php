<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonsController extends Controller
{
  public function add(Request $request){
    if($request->has('submit')){
      $lesson_no = trim($request->lessonNumber);
      $lesson_name =trim($request->lessonName);
      $game_type = trim($request->gameType);
      \DB::table('lessons')->insertgetID([
        'lesson_no' => $lesson_no,
        'lesson_name' => $lesson_name,
        'game_type' => $game_type,
        'status' => 0,
        'lesson_difficulty' => 0
      ]);
      return redirect('/dashboard/lessons/add')->with('success','Lesson has been added');
    }
    return view('dashboard.admin.add_lesson');
  }
  public function edit(Request $request, $id){
    $lesson = \DB::table('lessons')->where('id', $id)->first();
    if($request->has('submit')){
      $lesson_no = trim($request->lessonNumber);
      $lesson_name =trim($request->lessonName);
      $game_type = trim($request->gameType);
      \DB::table('lessons')->where('id',$id)->update(
        [
          'lesson_no' => $lesson_no,
          'lesson_name' => $lesson_name,
          'game_type' => $game_type
        ]);
      return redirect("dashboard/lessons/edit/{$id}")->with('success','Lesson has been updated');
    }
    return view('dashboard.admin.edit_lesson',['lesson'=> $lesson]);
  }

  public function delete(Request $request){
    \DB::table('lessons')->where('id',$request->id)->delete();
    return redirect('dashboard/lessons')->with('success','Lesson has been deleted');
  }
}
