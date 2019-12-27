<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        $nationalities = [];
        $data = [];
        $users = User::all();
        foreach ($users as $user){
            if (!(in_array($user->nationality, $nationalities))){
                $nationalities[]=$user->nationality;
            }
        }

        for ($i=0; $i<(count($nationalities)); $i++){
            $data[$i]=0;
        }

        foreach ($users as $user) {
            $data[array_search($user->nationality, $nationalities)] += 1;
        }

        return view('index', [
            'nationalities'=>$nationalities,
            'data'=>$data
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
