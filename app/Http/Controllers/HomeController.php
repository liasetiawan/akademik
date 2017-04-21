<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\UserRole;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $parents = UserRole::query()->where('ParentId' ,'=', 0)->orderBy('SortNum')->get();

        $menus = '';

        foreach($parents as $parent){
          if ($parent->HaveChild == 0) {
            $menus = $menus."<li>
              <a href='".$parent->Url."'><i class='".$parent->Icon."'></i> <span>".$parent->Caption."</span></a>
            </li>";
          } else {
            $menus = $menus."<li>
                              <a href='".$parent->Url."'><i class='".$parent->Icon."'></i> <span>".$parent->Caption."</span></a>";

            $menus = $menus."<ul>";

            $childs = UserRole::query()->where('ParentId' ,'=', $parent->Id)->orderBy('SortNum')->get();
            // dd($childs);
            foreach ($childs as $child) {
              $menus = $menus."<li><a href='".$child->Url."'><i class='".$child->Icon."'></i>".$child->Caption."</a></li>";
            }

            $menus = $menus."</ul>";
            $menus = $menus."</li>";
          }

        }

        $data['menus'] = $menus;


        return view('home/dashboard',$data);
    }
}
