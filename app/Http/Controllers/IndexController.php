<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Service;
use App\People;
use App\Portfolio;

use DB;

class IndexController extends Controller
{
    public function execute() {

            $pages = Page::all();
            $peoples = People::take(3)->get();
            $portfolios = Portfolio::get(["name","filter","images"]);
            $services = Service::where('id','<',20)->get();

            $menu = [];

            foreach ($pages as $page) {
                array_push($menu,['name'=>$page->name,'alias'=>$page->alias]);
            }

            array_push($menu,['name'=>'Services','alias'=>'service']);
            array_push($menu,['name'=>'Portfolio','alias'=>'portfolio']);
            array_push($menu,['name'=>'Team','alias'=>'team']);
            array_push($menu,['name'=>'Contacts','alias'=>'contacts']);

            $tags = DB::table('portfolios')->distinct()->pluck('filter');
            return view('site.index',[
                'menu'=>$menu,
                'pages'=>$pages,
                'services'=>$services,
                'peoples'=>$peoples,
                'portfolios'=>$portfolios,
                'tags'=>$tags,

            ]);
    }
}
