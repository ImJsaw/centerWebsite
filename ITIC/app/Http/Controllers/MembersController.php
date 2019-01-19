<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MembersController extends Controller
{
    public function member() {
        $members = Member::all();
        return view('member.memberback',[
            'members'=>$members
        ]);
    }

    public function add(Request $request)
    {
        $member = new Member();
        $member->name_ch = $request->input('name_ch');
        $member->name_en = $request->input('name_en');
        $member->position_id = $request->input('position_id');

        $photo = $request->file('photo');
        $path='pic/';
        $thefile = $member->name_en;
        $name= $thefile . '.' . $photo->getClientOriginalExtension();
        $member->photo = $name;
        $request->file('photo')->move($path,$name);


        $member->info = $request->input('info');
        $member->website = $request->input('website');
        $member->tel = $request->input('tel');
        $member->email = $request->input('email');
        $member->identity = $request->input('identity');
        $member->save();
        return redirect('member.backmember');
    }

    public function delete($id) {
        $member = Member::where('id', $id);
        unlink('pic/' . $member->first()->photo);
        $member->delete();
        return redirect('member.backmember');
    }

    public function modify($id)
    {
        $members = Member::all()->where('id',$id);

        return view('member.membermodify',[
            'members'=>$members,
        ]);
    }

    public function modify_check(Request $request,$id)
    {
        $member = Member::where('id', $id)->first();
        $member->name_ch = $request->input('name_ch');
        $member->name_en = $request->input('name_en');
        $member->position_id = $request->input('position_id');
        if(!is_null($request->file('photo'))){
            unlink('pic/' . $member->first()->photo);
            $photo = $request->file('photo');
            $path='pic/';
            $thefile = $member->name_en;
            $name= $thefile . '.' . $photo->getClientOriginalExtension();
            $member->photo = $name;
            $request->file('photo')->move($path,$name);
        }

        $member->info = $request->input('info');
        $member->website = $request->input('website');
        $member->tel = $request->input('tel');
        $member->email = $request->input('email');
        $member->identity = $request->input('identity');
        $member->save();
        return redirect('member.backmember');
    }

}
