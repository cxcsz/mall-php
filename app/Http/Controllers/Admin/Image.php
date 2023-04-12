<?php

namespace App\Http\Controllers\admin;

use App\Services\ImageService;
use Illuminate\Http\Request;

class Image extends Controller
{

    private $service;

    public function __construct()
    {
        $this->service = new ImageService();
    }

    //
    public function upload(Request $request)
    {
        if (!$request->hasFile('pictures')) {
            return response(['message'=>'没有上传相关文件'], 401);
        }
        return $this->service->upload($request);
    }

    public function index(Request $request)
    {
        $list = $this->service->index($request);
        return response()->json(['data'=>$list, 'message'=>'请求成功']);
    }


}
