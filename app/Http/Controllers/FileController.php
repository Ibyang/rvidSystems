<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class FileController extends Controller
{

    private $photos_path;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->photos_path = public_path('/images');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        $images = File::where('filetype', 'Image')->orderBy('ID', 'desc')->get(); //limit to 10 records the display for agents
//        return view('admin.listimages', compact('file_images', 'fullname'));
        return view('admin.listimages', compact('fullname', 'role', 'images', 'pic'));
    }


    /**
     * Display a listing of the resource for Audio Files.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAudio()
    {
        //
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        $audios = File::where('filetype', 'Audio')->orderBy('ID', 'desc')->get(); //limit to 10 records the display for agents
//        return view('admin.listimages', compact('file_audio', 'fullname'));
        return view('admin.listaudio', compact('fullname', 'role', 'audios', 'pic'));
    }


    /**
     * Display a listing of the resource for Voice Files.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexVoice()
    {
        //
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
//        $files = File::where('filetype', 'voice')->orderBy('ID', 'desc')->get(); //limit to 10 records the display for agents
//        return view('admin.listimages', compact('file_voice', 'fullname'));
        return view('admin.listvoice', compact('fullname', 'role', 'pic'));
    }


    /**
     * Display a listing of the resource for Video Files.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexVideo()
    {
        //
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        $videos = File::where('filetype', 'Video')->orderBy('ID', 'desc')->get(); //limit to 10 records the display for agents
//        return view('admin.listimages', compact('file_voice', 'fullname'));
        return view('admin.listvideo', compact('fullname', 'role', 'videos', 'pic'));
    }


    /**
     * Show the form for creating a new resource for Images.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        return view('admin.uploadImage', compact('fullname', 'role', 'pic'));
    }


    /**
     * Show the form for creating a new resource for Audio files.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAudio()
    {
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        return view('admin.uploadAudio', compact('fullname', 'role', 'pic'));
    }


    /**
     * Show the form for creating a new resource for Voice files.
     *
     * @return \Illuminate\Http\Response
     */
    public function createVoice()
    {
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        return view('admin.uploadVoice', compact('fullname', 'role', 'pic'));
    }


    /**
     * Show the form for creating a new resource for Voice files.
     *
     * @return \Illuminate\Http\Response
     */
    public function createVideo()
    {
        $fullname = Auth::user()->name;
        $role = Auth::user()->role;
        $pic = Auth::user()->profile_pic;
        return view('admin.uploadVideo', compact('fullname', 'role', 'pic'));
    }


    //function used for uploading Image files
    public function uploadImage(Request $request)
    {
        // Creating a new time instance, we'll use it to name our file and declare the path
        $time = Carbon::now();
//        // Requesting the file from the form
//        $image = $request->file('file');


        $photos = $request->file('file');

        if(!is_array($photos)) {
            $photos = [$photos];
        }

        for ($i = 0; $i < count($photos); $i++) {

            $photo = $photos[$i];
            $name = str_random(5).date_format($time,'d').rand(1,9).date_format($time,'h');
            $save_name = $name . '.' . $photo->getClientOriginalExtension();
            //$resize_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();

            // Creating the directory, for example, if the date = 18/10/2017, the directory will be 2017/10/
            //$directory = 'images/'. date_format($time, 'Y') . '/' . date_format($time, 'm');
            $directory = 'images/';
            $filepath = 'uploads/' . $directory;
            // Creating the file name: random string followed by the day, random number and the hour
            //$filename = str_random(5).date_format($time,'d').rand(1,9).date_format($time,'h').".".$extension;
            // This is our upload main function, storing the image in the storage that named 'public'
            $upload_success = $photo->storeAs($directory, $save_name, 'public');
            //generate a thumbnail for the image uploaded
//        Thumbnail::generate_image_thumbnail('public/uploads/'. $directory . '/' . $filename, 'public/uploads/'. $directory . '/' .'thumb_' . $filename);
            // If the upload is successful, return the name of directory/filename of the upload.
            if ($upload_success) {

                //store file details to DB
                $fileItem = new File();
                $fileItem->extension = $photo->getClientOriginalExtension();
                $fileItem->filename = $save_name;
                $fileItem->original_filename = basename($photo->getClientOriginalName());
                $fileItem->filepath = $filepath;
                $fileItem->filetype = 'Image';
                $fileItem->save();

                return response()->json($upload_success, 200);
            }
            // Else, return error 400
            else {
                return response()->json('error', 400);
            }


//            Image::make($photo)
//                ->resize(250, null, function ($constraints) {
//                    $constraints->aspectRatio();
//                })
//                ->save($this->photos_path . '/' . $resize_name);
//
//            $photo->move($this->photos_path, $save_name);

//            $upload = new File();
//            $upload->filename = $save_name;
////            $upload->resized_name = $resize_name;
//            $upload->original_filename =
//            $upload->save();
        }



    }


    //function used for uploading Audio files
    public function uploadAudio(Request $request)
    {

        $time = Carbon::now();
//        // Requesting the file from the form
//        $image = $request->file('file');


        $audios = $request->file('file');

        if(!is_array($audios)) {
            $audios = [$audios];
        }

        for ($i = 0; $i < count($audios); $i++) {

            $audio = $audios[$i];
            $name = str_random(5) . date_format($time, 'd') . rand(1, 9) . date_format($time, 'h');
            $save_name = $name . '.' . $audio->getClientOriginalExtension();
            //$resize_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();

            // Creating the directory, for example, if the date = 18/10/2017, the directory will be 2017/10/
            //$directory = 'images/'. date_format($time, 'Y') . '/' . date_format($time, 'm');
            $directory = 'audio/';
            $filepath = 'uploads/' . $directory;
            // Creating the file name: random string followed by the day, random number and the hour
            //$filename = str_random(5).date_format($time,'d').rand(1,9).date_format($time,'h').".".$extension;
            // This is our upload main function, storing the image in the storage that named 'public'
            $upload_success = $audio->storeAs($directory, $save_name, 'public');
            //generate a thumbnail for the image uploaded
//        Thumbnail::generate_image_thumbnail('public/uploads/'. $directory . '/' . $filename, 'public/uploads/'. $directory . '/' .'thumb_' . $filename);
            // If the upload is successful, return the name of directory/filename of the upload.
            if ($upload_success) {

                //store file details to DB
                $fileItem = new File();
                $fileItem->extension = $audio->getClientOriginalExtension();
                $fileItem->filename = $save_name;
                $fileItem->original_filename = basename($audio->getClientOriginalName());
                $fileItem->filepath = $filepath;
                $fileItem->filetype = 'Audio';
                $fileItem->save();

                return response()->json($upload_success, 200);
            } // Else, return error 400
            else {
                return response()->json('error', 400);
            }

        }
    }


    //function used for uploading Image files
    public function uploadVideo(Request $request)
    {

        $time = Carbon::now();
//        // Requesting the file from the form
//        $image = $request->file('file');


        $videos = $request->file('file');

        if(!is_array($videos)) {
            $videos = [$videos];
        }

        for ($i = 0; $i < count($videos); $i++) {

            $video = $videos[$i];
            $name = str_random(5) . date_format($time, 'd') . rand(1, 9) . date_format($time, 'h');
            $save_name = $name . '.' . $video->getClientOriginalExtension();
            //$resize_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();

            // Creating the directory, for example, if the date = 18/10/2017, the directory will be 2017/10/
            //$directory = 'images/'. date_format($time, 'Y') . '/' . date_format($time, 'm');
            $directory = 'videos/';
            $filepath = 'uploads/' . $directory;
            // Creating the file name: random string followed by the day, random number and the hour
            //$filename = str_random(5).date_format($time,'d').rand(1,9).date_format($time,'h').".".$extension;
            // This is our upload main function, storing the image in the storage that named 'public'
            $upload_success = $video->storeAs($directory, $save_name, 'public');
            //generate a thumbnail for the image uploaded
//        Thumbnail::generate_image_thumbnail('public/uploads/'. $directory . '/' . $filename, 'public/uploads/'. $directory . '/' .'thumb_' . $filename);
            // If the upload is successful, return the name of directory/filename of the upload.
            if ($upload_success) {

                //store file details to DB
                $fileItem = new File();
                $fileItem->extension = $video->getClientOriginalExtension();
                $fileItem->filename = $save_name;
                $fileItem->original_filename = basename($video->getClientOriginalName());
                $fileItem->filepath = $filepath;
                $fileItem->filetype = 'Video';
                $fileItem->save();

                return response()->json($upload_success, 200);
            } // Else, return error 400
            else {
                return response()->json('error', 400);
            }

        }


    }

    //for removing Image from DropZone section
    public function deleteImage($id)
    {
//        if(isset($request->id)) {
//            $upload = File::find($request->id);
//            $upload->delete();
//
//            unlink(public_path('uploads/images/'.$upload->filename));
//            unlink(public_path('uploads/images/thumb_'.$upload->filename));
//
//            if(!isset(File::find($request->id)->filename)) {
//                $success = new stdClass();
//                $success->{$upload->filename} = true;
//                return Response::json(array('files' => array($success)), 200);
//            }
//        }

        $uploaded_image = File::where('original_filename', $id)->first();

        if (!empty($uploaded_image)) {
            //remove from the Storage
            $file = 'uploads/images/' . $uploaded_image->filename;
            unlink($file);

            //remove from the DB
            $file_image = File::where('ID', $uploaded_image->ID)->delete();
        }
    }


    //for removing Audio from DropZone section
    public function deleteAudio($id)
    {

        $uploaded_audio = File::where('original_filename', $id)->first();

        if (!empty($uploaded_audio)) {
            //remove from the Storage
            $file = 'uploads/audio/' . $uploaded_audio->filename;
            unlink($file);

            //remove from the DB
            $file_audio = File::where('ID', $uploaded_audio->ID)->delete();
        }
    }

    //for removing Video from DropZone section
    public function deleteVideo($id)
    {

        $uploaded_video = File::where('original_filename', $id)->first();

        if (!empty($uploaded_video)) {
            //remove from the Storage
            $file = 'uploads/images/' . $uploaded_video->filename;
            unlink($file);

            //remove from the DB
            $file_video = File::where('ID', $uploaded_video->ID)->delete();
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from Image storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        //


//        $filename = $request->id;
//        dd($filename);
//        $uploaded_image = File::where('original_filename', basename($filename))->first();
//
//        if (empty($uploaded_image)) {
//            return Response::json(['message' => 'Sorry file does not exist'], 400);
//        }
//
//        $file_path = '/images/' . $uploaded_image->filename;
//        //$file_path = $this->photos_path . '/' . $uploaded_image->filename;
//        //$resized_file = $this->photos_path . '/' . $uploaded_image->resized_name;
//
//        if (file_exists($file_path)) {
//            unlink($file_path);
//        }
//
////        if (file_exists($resized_file)) {
////            unlink($resized_file);
////        }
//
//        if (!empty($uploaded_image)) {
//            $uploaded_image->delete();
//        }
//
//        return Response::json(['message' => 'File successfully delete'], 200);

    }


    //for removing Image from DropZone section
    public function destroyImage($id)
    {

        $uploaded_image = File::where('ID', $id)->first();

        if (!empty($uploaded_image)) {
            //remove from the Storage
            $file = 'uploads/images/' . $uploaded_image->filename;
            unlink($file);

            //remove from the DB
            $file_image = File::where('ID', $uploaded_image->ID)->delete();

            return redirect()->route('image')
                ->with('success','Image file deleted successfully');
        }
    }


    //for removing Image from DropZone section
    public function destroyAudio($id)
    {

        $uploaded_audio = File::where('ID', $id)->first();

        if (!empty($uploaded_audio)) {
            //remove from the Storage
            $file = 'uploads/audio/' . $uploaded_audio->filename;
            unlink($file);

            //remove from the DB
            $file_image = File::where('ID', $uploaded_audio->ID)->delete();

            return redirect()->route('audio')
                ->with('success','Audio file deleted successfully');

        }
    }


    //for removing Image from DropZone section
    public function destroyVideo($id)
    {

        $uploaded_video = File::where('ID', $id)->first();

        if (!empty($uploaded_video)) {
            //remove from the Storage
            $file = 'uploads/videos/' . $uploaded_video->filename;
            unlink($file);

            //remove from the DB
            $file_image = File::where('ID', $uploaded_video->ID)->delete();

            return redirect()->route('video')
                ->with('success','Video file deleted successfully');
        }
    }


}
