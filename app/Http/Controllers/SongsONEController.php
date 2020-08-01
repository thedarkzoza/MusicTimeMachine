<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class SongsONEController extends Controller
{
    public function Index() {
        $collection = (new MongoDB\Client)->BEST_MUSIC->FIRST;
        $songs2010 = $collection->find();
    return view('admin/Songs2010/index', ["songs2010" => $songs2010]);
    }

    public function Details($id) {
        $collection = (new MongoDB\Client)->BEST_MUSIC->FIRST;
        $songs2010 = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('admin/Songs2010.details', [ "songs2010" => $songs2010 ]);
    }

    public function Create(){
        $collection = (new MongoDB\Client)->BEST_MUSIC->FIRST;
        $songs2010 = $collection->find();
        return view('/admin/Songs2010.create', ["songs2010" => $songs2010]);
    }

    public function store() {
        $songs2010 = [
            "title" => request("title"),
            "artist" => request("artist"),
            "top genre" => request("top genre"),
            "year" => request("year"),
        ];
        $collection = (new MongoDB\Client)->BEST_MUSIC->FIRST;
        $insertOneResult = $collection->insertOne($songs2010);
        if ($insertOneResult->getInsertedCount() == 1)
        return redirect('/admin/2010_2011')->with('mssg', request('title')." was added succesfuly!")-> with('alerttype', "success");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->BEST_MUSIC->FIRST;
        $songs2010 = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('admin/Songs2010.edit', ["songs2010" => $songs2010]);
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->BEST_MUSIC->FIRST;
        $songs2010 = $collection->findOne(["_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('admin/Songs2010.delete',  ["songs2010" => $songs2010]);
    }

    public function update() {
        $collection = (new MongoDB\Client)->BEST_MUSIC->FIRST;
        $songs2010 = [
            "title" => request("title"),
            "artist" => request("artist"),
            "top genre" => request("top genre"),
            "year" => request("year"),
        ];
        $updateOneResult = $collection->UpdateOne([
            "_id" => new MongoDB\BSON\ObjectId(request("songid"))
        ],[
            '$set' => $songs2010
            ]);

            if($updateOneResult->getModifiedCount() == 1)
                return redirect("/admin/2010_2011/".request("songid"))->with('mssg', " Updated succesfuly!")->with("alerttype", "success");;
    }

    public function userindex1() {
        $collection = (new MongoDB\Client)->BEST_MUSIC->FIRST;
        $songsONEcount =$collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $songs2010 = $collection->find([], ["limit"=> 12, "skip" => ($page - 1) * 12]);
        return view('Songs2010/index', ["songs2010" => $songs2010, "songsONEcount" => $songsONEcount]);
    }

    public function userdetails1($id) {
        $collection = (new MongoDB\Client)->BEST_MUSIC->FIRST;
        $songs2010 = $collection->findOne([ "_id" => new \MongoDB\BSON\ObjectId($id) ]);
        return view('Songs2010/info', [ "songs2010" => $songs2010 ]);
    }

    public function remove() {
        $collection = (new MongoDB\Client)->BEST_MUSIC->FIRST;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("songid"))
        ]);

        if($deleteOneResult->getDeletedCount() == 1)
        return redirect("/admin/2010_2011/")->with("mssg", request('title')." was deleted succesfuly.!")->with("alerttype", "success");
    }
}
