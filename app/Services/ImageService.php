<?php

namespace App\Services;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageService extends Service
{
    public function upload(Request $request)
    {
        $paths = [];
        $isExtensionFail = false;
        $files = $request->file('pictures');
        foreach ($files as $file) {
            $extension = $file->extension();
            if (!in_array($extension, ['jpg', 'jpeg', 'gif', 'png', 'webp', 'jiff'])) {
                $isExtensionFail = true;
                continue;
            }
            $filePath = $file->getRealPath();
            $uuid = md5(file_get_contents($filePath));
            $image = Image::firstWhere('uuid', $uuid);
            if ($image) {
                $paths[] = $request->getSchemeAndHttpHost().$image->path;
                continue;
            }

            $fileName = $uuid.'.'.$extension;
            $path = $file->storePubliclyAs('images', $fileName, 'public');
            $path = Storage::url($path);
            $url = $request->getSchemeAndHttpHost().$path;

            // 保存图片信息到 album_list 表中
            $image = new Image();
            $image->uuid = $uuid;
            $image->path = $path;
            $image->extension = $extension;
            $image->size = $file->getSize();
            $image->content = base64_encode(file_get_contents($filePath));
            $image->save();
            $paths[] = $url;
        }
        $message = '保存成功';
        if ($isExtensionFail) {
            $message = '保存成功，部分文件格式不匹配';
        }
        return ['data'=>$paths, 'message' => $message];
    }

    public function index(Request $request)
    {
        $page = $request->input('page', 0);
        $limit = $request->input('limit', 12);
        $offset = $page * $limit;
        return Image::query()->select(['id', 'path', 'created_at'])->orderByDesc('created_at')->offset($offset)->limit($limit)->get();
    }


}
