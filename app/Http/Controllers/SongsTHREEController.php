<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class SongsTHREEController extends Controller
{
    
    public function Index() {
        $collection3 = (new MongoDB\Client)->BEST_MUSIC->THIRD;
        $songs2014 = $collection3->find();
    return view('admin/Songs2014/index', ["songs2014" => $songs2014]);
    }

    public function Details($id) {
        $collection3 = (new MongoDB\Client)->BEST_MUSIC->THIRD;
        $songs2014 = $collection3->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('admin/Songs2014.details', [ "songs2014" => $songs2014 ]);
    }

    public function Create(){
        $collection3 = (new MongoDB\Client)->BEST_MUSIC->THIRD;
        $songs2014 = $collection3->find();
        return view('/admin/Songs2014.create', ["songs2014" => $songs2014]);
    }

    public function store() {
        $songs2014 = [
            "title" => request("title"),
            "artist" => request("artist"),
            "top genre" => request("top genre"),
            "year" => request("year"),
        ];
        $collection3 = (new MongoDB\Client)->BEST_MUSIC->THIRD;
        $insertOneResult = $collection3->insertOne($songs2014);
        if ($insertOneResult->getInsertedCount() == 1)
        return redirect('/admin/2014_2015')->with('mssg', request('title')." was added succesfuly!")-> with('alerttype', "success");
    }

    public function Edit($id) {
        $collection3 = (new MongoDB\Client)->BEST_MUSIC->THIRD;
        $songs2014 = $collection3->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('admin/Songs2014.edit', ["songs2014" => $songs2014]);
    }

    public function Delete($id) {
        $collection3 = (new MongoDB\Client)->BEST_MUSIC->THIRD;
        $songs2014 = $collection3->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('admin/Songs2014.delete',  ["songs2014" => $songs2014]);
    }

    public function update() {
        $collection3 = (new MongoDB\Client)->BEST_MUSIC->THIRD;
        $songs2014 = [
            "title" => request("title"),
            "artist" => request("artist"),
            "top genre" => request("top genre"),
            "year" => request("year"),
        ];
        $updateOneResult = $collection3->UpdateOne([
            "_id" => new MongoDB\BSON\ObjectId(request("songid"))
        ],[
            '$set' => $songs2014
            ]);

            if($updateOneResult->getModifiedCount() == 1)
                return redirect("/admin/2014_2015/".request("songid"))->with('mssg', " Updated succesfuly!")->with("alerttype", "success");;
    }

    public function userindex3() {
        $collection3 = (new MongoDB\Client)->BEST_MUSIC->THIRD;
        $songsTHREEcount =$collection3->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $songs2014 = $collection3->find([], ["limit"=> 12, "skip" => ($page - 1) * 12]);
        return view('Songs2014/index', ["songs2014" => $songs2014, "songsTHREEcount" => $songsTHREEcount]);
    }

    public function userdetails3($id) {
        $collection3 = (new MongoDB\Client)->BEST_MUSIC->THIRD;
        $songs2014 = $collection3->findOne([ "_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Songs2014/info', [ "songs2014" => $songs2014 ]);
    }

    public function remove() {
        $collection3 = (new MongoDB\Client)->BEST_MUSIC->THIRD;
        $deleteOneResult = $collection3->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("songid"))
        ]);

        if($deleteOneResult->getDeletedCount() == 1)
        return redirect("/admin/2014_2015/")->with("mssg", request('title')." was deleted succesfuly.!")->with("alerttype", "success");
    }
}



