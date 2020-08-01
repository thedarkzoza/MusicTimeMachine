<?php

// $collection == (new MongoDB\Client)->BEST_MUSIC->users;

// $cursor = $collection->find(
//     [],
//     [
//         'limit' => 5,
//         'sort' => ['pop => -1'],
//     ]
// );

// foreach($cursor as $document){
//     print_r($document);
// } 

//Create Functions
$collection = (new MongoDB\Client)->BEST_MUSIC->FIRST;
$collection2 = (new MongoDB\Client)->BEST_MUSIC->TWO;


// $insertResult = $collection->insertOne([
//     "title" => "Take me to church",
//     "artist" => "Hozier",
//     "top genre" => "Pop",
//     "year" => "2018",
// ]);

// printf("Inserted %d document(s)<br />", $insertResult->getInsertedCount());
// var_dump($insertResult->getInsertedID());

//Read Function

// $table = $collection ->find();

// foreach ($table as $record) {
//     echo "<br />";
//     echo "ID: ".$record["_id"]."<br />";
//     echo "title: ".$record->title."<br />";
//     echo "artist: ".$record["artist"]."<br />";
//     echo "top genre: ".$record["top genre"]."<br />";
//     echo "year: ".$record["year"]."<br />";
// }

//Update Function

// $updateOneResult = $collection->updateOne([
//     "title" => "Take me to"
// ],[
//     '$set' => ["title" => "Llevame a la iglesia"]
// ]);

// printf("Marched %d Document(s)<br/>", $updateOneResult->getMatchedCount());
// printf("Updated %d Document(s)<br/>", $updateOneResult->getModifiedCount());

//Delete Function

// $delteResult = $collection->deleteOne([
//     "title" => "Llevame a la iglesia"
// ]);
//     printf("Deleted %d Document(s)<br />", $delteResult->getDeletedCount());


$collection = (new MongoDB\Client)->BEST_MUSIC->TWO;
        $songs2012 = $collection->find();
        print_r($songs2012);