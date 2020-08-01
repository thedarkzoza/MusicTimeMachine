<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class SongsFOURController extends Controller
{
    
    public function Index() {
        $collection4 = (new MongoDB\Client)->BEST_MUSIC->FOUR;
        $songs2016 = $collection4->find();
    return view('admin/Songs2016/index', ["songs2016" => $songs2016]);
    }

    public function Details($id) {
        $collection4 = (new MongoDB\Client)->BEST_MUSIC->FOUR;
        $songs2016 = $collection4->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('admin/Songs2016.details', [ "songs2016" => $songs2016 ]);
    }

    public function Create(){
        $collection4 = (new MongoDB\Client)->BEST_MUSIC->FOUR;
        $songs2016 = $collection4->find();
        return view('/admin/Songs2016.create', ["songs2016" => $songs2016]);
    }

    public function store() {
        $songs2016 = [
            "title" => request("title"),
            "artist" => request("artist"),
            "top genre" => request("top genre"),
            "year" => request("year"),
        ];
        $collection4 = (new MongoDB\Client)->BEST_MUSIC->FOUR;
        $insertOneResult = $collection4->insertOne($songs2016);
        if ($insertOneResult->getInsertedCount() == 1)
        return redirect('/admin/2016_2017')->with('mssg', request('title')." was added succesfuly!")-> with('alerttype', "success");
    }

    public function Edit($id) {
        $collection4 = (new MongoDB\Client)->BEST_MUSIC->FOUR;
        $songs2016 = $collection4->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('admin/Songs2016.edit', ["songs2016" => $songs2016]);
    }

    public function Delete($id) {
        $collection4 = (new MongoDB\Client)->BEST_MUSIC->FOUR;
        $songs2016 = $collection4->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('admin/Songs2016.delete',  ["songs2016" => $songs2016]);
    }

    public function update() {
        $collection4 = (new MongoDB\Client)->BEST_MUSIC->FOUR;
        $songs2016 = [
            "title" => request("title"),
            "artist" => request("artist"),
            "top genre" => request("top genre"),
            "year" => request("year"),
        ];
        $updateOneResult = $collection4->UpdateOne([
            "_id" => new MongoDB\BSON\ObjectId(request("songid"))
        ],[
            '$set' => $songs2016
            ]);

            if($updateOneResult->getModifiedCount() == 1)
                return redirect("/admin/2016_2017/".request("songid"))->with('mssg', " Updated succesfuly!")->with("alerttype", "success");;
    }

    public function userindex4() {
        $collection4 = (new MongoDB\Client)->BEST_MUSIC->FOUR;
        $songsFOURcount =$collection4->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $songs2016 = $collection4->find([], ["limit"=> 12, "skip" => ($page - 1) * 12]);
        return view('Songs2016/index', ["songs2016" => $songs2016, "songsFOURcount" => $songsFOURcount]);
    }

    public function userdetails4($id) {
        $collection4 = (new MongoDB\Client)->BEST_MUSIC->FOUR;
        $songs2016 = $collection4->findOne([ "_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Songs2016/info', [ "songs2016" => $songs2016 ]);
    }

    public function remove() {
        $collection4 = (new MongoDB\Client)->BEST_MUSIC->FOUR;
        $deleteOneResult = $collection4->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("songid"))
        ]);

        if($deleteOneResult->getDeletedCount() == 1)
        return redirect("/admin/2016_2017/")->with("mssg", request('title')." was deleted succesfuly.!")->with("alerttype", "success");
    }
}



