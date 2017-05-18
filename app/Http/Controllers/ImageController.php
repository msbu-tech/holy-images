<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hashids\Hashids;

class ImageController extends Controller
{
    public function item($id)
    {
        $hashids = new Hashids();
        $rawHashId = $hashids->encode($id);
        return [
            'raw_hash_id' => $rawHashId
        ];
    }

    public function create($id)
    {
        $hashids = new Hashids();
        $hashids->encode($id);
    }
}
