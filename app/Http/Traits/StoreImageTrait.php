<?php

namespace App\Http\Traits;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Http\Requests\HomeRequest;
use Illuminate\Support\Facades\Storage;

trait StoreImageTrait {

    public function verifyAndStoreImage2( Request $request, $fieldname = 'img', $directory = 'uploads' ) {

        if( $request->hasFile( $fieldname ) ) {
            $file = $request->file($fieldname ?? 'img');
            $ext = $file->getClientOriginalExtension();
            $filename = 'imgs'.'_'.time().'.'.$ext;
            $storagePath = Storage::disk('public_uploads')->put('/'.$directory, $file);
            $storageName = basename($storagePath);
            return $directory . '/' . $storageName;
        }
    }
    public function verifyAndStoreImage( Request $request, $fieldname = 'file', $directory = 'unknown' ) {

        if( $request->hasFile( $fieldname ) ) {
            foreach($request->file as $myfile) {
                $file = $myfile;
                $ext = $file->getClientOriginalExtension();
                $filename = $directory.'_'.time().'.'.$ext;
                $storagePath = Storage::disk('public_uploads')->put('/'.$directory, $file);
                $storageName = basename($storagePath);
                $myff = $directory . '/' . $storageName;
                $mydata[] = $myff;
            }
            return $mydata;
        }
        else {
            return [];
        }



    }

    public function verifyAndStoreVideo( Request $request, $fieldname = 'video', $directory = 'uploads' ) {

        if( $request->hasFile( $fieldname ) ) {
            $file = $request->file('video');
            $ext = $file->getClientOriginalExtension();
            $filename = 'videos'.'_'.time().'.'.$ext;
            $storagePath = Storage::disk('public_uploads')->put('/'.$directory, $file);
            $storageName = basename($storagePath);
            return $directory . '/' . $storageName;

        }
    }

}
