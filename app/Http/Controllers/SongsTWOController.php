<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class SongsTWOController extends Controller
{
    
    public function Index() {
        $collection2 = (new MongoDB\Client)->BEST_MUSIC->TWO;
        $songs2012 = $collection2->find();
    return view('admin/Songs2012/index', ["songs2012" => $songs2012]);
    }

    public function Details($id) {
        $collection2 = (new MongoDB\Client)->BEST_MUSIC->TWO;
        $songs2012 = $collection2->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('admin/Songs2012.details', [ "songs2012" => $songs2012 ]);
    }

    public function Create(){
        $collection2 = (new MongoDB\Client)->BEST_MUSIC->TWO;
        $songs2012 = $collection2->find();
        return view('/admin/Songs2012.create', ["songs2012" => $songs2012]);
    }

    public function store() {
        $songs2012 = [
            "title" => request("title"),
            "artist" => request("artist"),
            "top genre" => request("top genre"),
            "year" => request("year"),
        ];
        $collection2 = (new MongoDB\Client)->BEST_MUSIC->TWO;
        $insertOneResult = $collection2->insertOne($songs2012);
        if ($insertOneResult->getInsertedCount() == 1)
        return redirect('/admin/2012_2013')->with('mssg', request('title')." was added succesfuly!")-> with('alerttype', "success");
    }

    public function Edit($id) {
        $collection2 = (new MongoDB\Client)->BEST_MUSIC->TWO;
        $songs2012 = $collection2->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('admin/Songs2012.edit', ["songs2012" => $songs2012]);
    }

    public function Delete($id) {
        $collection2 = (new MongoDB\Client)->BEST_MUSIC->TWO;
        $songs2012 = $collection2->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('admin/Songs2012.delete',  ["songs2012" => $songs2012]);
    }

    public function update() {
        $collection2 = (new MongoDB\Client)->BEST_MUSIC->TWO;
        $songs2012 = [
            "title" => request("title"),
            "artist" => request("artist"),
            "top genre" => request("top genre"),
            "year" => request("year"),
        ];
        $updateOneResult = $collection2->UpdateOne([
            "_id" => new MongoDB\BSON\ObjectId(request("songid"))
        ],[
            '$set' => $songs2012
            ]);

            if($updateOneResult->getModifiedCount() == 1)
                return redirect("/admin/2012_2013/".request("songid"))->with('mssg', " Updated succesfuly!")->with("alerttype", "success");;
    }

    public function userindex2() {
        $collection2 = (new MongoDB\Client)->BEST_MUSIC->TWO;
        $songsTWOcount =$collection2->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $songs2012 = $collection2->find([], ["limit"=> 12, "skip" => ($page - 1) * 12]);
        return view('Songs2012/index', ["songs2012" => $songs2012, "songsTWOcount" => $songsTWOcount]);
    }

    public function userdetails2($id) {
        $collection2 = (new MongoDB\Client)->BEST_MUSIC->TWO;
        $songs2012 = $collection2->findOne([ "_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Songs2012/info', [ "songs2012" => $songs2012 ]);
    }

    public function remove() {
        $collection2 = (new MongoDB\Client)->BEST_MUSIC->TWO;
        $deleteOneResult = $collection2->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("songid"))
        ]);

        if($deleteOneResult->getDeletedCount() == 1)
        return redirect("/admin/2012_2013/")->with("mssg", request('title')." was deleted succesfuly.!")->with("alerttype", "success");
    }
}



