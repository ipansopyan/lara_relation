<?php

namespace App\Http\Controllers;

use App\User;
use App\Passport;
use App\Lesson;
use App\City;
use App\Forum;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showprofile($id)
    {
        dd(City::find(1)->forums);
        $data['user'] = User::with(['forums'=> function($query) {
          $query->where('title','like','%1%');
        }])->where('id',$id)->first();
        return view('user.profile',$data);
    }
    public function showpassport($id)
    {
        $data['passport'] = Passport::findOrFail($id);
        return view('user.passport',$data);
    }
    public function showlesson($id)
    {
        $data['lessons'] = Lesson::findOrFail($id);
        return view('user.lesson',$data);
    }

    public function createforum()
    {
        $forum = new Forum([
          'title'   => 'ini ttitle baru',
          'body'    => 'ini body baru',

        ]);
        $user = User::find(1);

        $user->forums()->save($forum);
    }

    //belongsTo
    public function updateforum()
    {
        $forum  = Forum::find(6);
        $user   = User::find(2);

        $forum->user()->associate($user);
        $forum->save();
    }
    public function deleteforum()
    {
      $forum  = Forum::find(6);
      // $user   = User::find(2);

      $forum->user()->dissociate();
      $forum->save();
    }

    // many to many
    public function createlesson()
    {
        $user   = User::find(2);
        $user->lessons()->attach(2);
    }
    public function deletelesson()
    {
      $user   = User::find(2);
      $user->lessons()->detach(2);
    }
    public function updatelesson()
    {
      $user   = User::find(1);
      $atribute = [
        'data'    => 'heni',
      ];
      $user->lessons()->updateExistingPivot(1, $atribute);
    }
    public function synclesson()
    {
      $user   = User::find(1);
      $list   = [1,2];
      $user->lessons()->sync($list);
    }

    //update parrent
    public function editpassport()
    {
      $passport = Passport::find(1);
      $passport->no_pass = '123456789';
      $passport->save();
    }
}
