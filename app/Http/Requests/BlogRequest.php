<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogRequest extends FormRequest
{
    protected function saveImage()
    {
        if ($this->file('thumbnail')) {

            $file = $this->file('thumbnail');
            $newFileName = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('assets/admin/image/blogs');
            $file->move($path, $newFileName);
            return $newFileName;
        }

        if ($this->file('author_image')) {

            $file = $this->file('author_image');
            $newFileName = time() . '.' . $file->getClientOriginalExtension();
            $path = public_path('assets/admin/image/authors');
            $file->move($path, $newFileName);
            return $newFileName;
        }
    }
}
