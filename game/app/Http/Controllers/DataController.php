<?php

namespace App\Http\Controllers;

use App\User;
use App\DataModel;
use App\ScoreModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class DataController extends Controller
{

    function upload_check(Request $request)
    {
        $m_file = DataModel::where('username','=', Auth::user()->username)->first();

        if($m_file) {
            $m_data = [
                'video_url' => $m_file->youtube,
                'filename' => basename($m_file->file)
            ];
            return view('upload')->with($m_data);
        }
        return view('upload');

    }
    public function upload(Request $request)
    {
        if (DataModel::where('username', Auth::user()->username)->exists()) {
            $reuser = DataModel::where('username', Auth::user()->username);
            $reuser->delete();
        }


        $user = new DataModel();
        $user->username = Auth::user()->username;
        $user->school=Auth::user()->school;
        $user->youtube = $request->input('youtube');

        $file = $request->file('upload_file');
        $path='pdffile/';
        $thefile = $user->username;
        $name= $thefile . '.' . $file->getClientOriginalExtension();
        $user->file = $name;
        $request->file('upload_file')->move($path,$name);
        $user->save();
        return redirect()->back()->with('upload', '上傳成功!');
    }

    public function modified_pass(Request $request) {
        $m_user = Auth::user();
        $m_user->password = Hash::make(Input::get('password'));
        $m_user->save();

        Auth::logout();
        return redirect('/login')->with('pass', '修改成功!');
    }



    //進入不同學校的頁面
    public function selectpage($school)
    {
        $user = User::all();
        $judge =Auth::user()->username;
        $scoreuser=ScoreModel::all();
        $datauser=DataModel::all();
        return view('score',[
            'uploaders'=>$user,
            'school'=>$school,
            'datauser'=>$datauser,
            'scoreuser'=>$scoreuser,
            'judge'=>$judge
        ]);
    }

    public function setscore(Request $request){
        $judge = Auth::user()->username;
        foreach ($request->input('school-group') as $index => $group) {

           /* if(ScoreModel::where('judge', $judge)->where('upload', $group)->exists()) {
                ScoreModel::where('judge', $judge)->where('upload', $group)->first()->delete();
            }*/

            $score=ScoreModel::firstOrCreate(
                ['judge' => $judge,
                'upload' => $group]
            );


            $score->judge = $judge;
            $score->upload = $group;
            $score->score = $request->input('score')[$index];
            $score->save();
        }

        return redirect('/judge');

    }

}
