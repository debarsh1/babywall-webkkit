<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function getURLList()
    {
        $imageUrls = [
            "https://i.pinimg.com/474x/97/b5/00/97b500946c1de6ac99af6195a3521257.jpg",
            "https://i.pinimg.com/474x/95/3d/50/953d507d0fb2abe270862ee8dff17871.jpg",
            // Add more URLs here
        ];

        return response()->json($imageUrls);
    }
}
