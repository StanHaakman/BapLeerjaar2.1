<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    public function listPhotos()
    {
        $photos = Photo::all();
        return view('gallery.index', ["photos" => $photos]);
    }

    public function showPhotoForm()
    {
        return view('gallery.add_photo_form');
    }

    public function savePhotoForm(Request $request)
    {
        $validData = $request->validate([
            'title' => 'required',
            'description' => 'min:10',
            'photo' => 'required|image'
        ]);
//  dd($validData);   
        // nu gaan we eerst de foto uploaden naar de public/photos folder
        $targetFolder = public_path('photos');
        $fileName   = str_random(16).'.'.$validData['photo']->getClientOriginalExtension();

    //    hier verplaatsen we het bestand
        $validData['photo']->move($targetFolder, $fileName);

        // Nu maken we een niewe Photo object aan
        $photo = new Photo();
        $photo->fill(
            [
                'title'         => $validData['title'],
                'description'   => $validData['description'],
                'photo'         => $fileName,
            ]
            );

            $photo->save();
            return redirect()->route('gallery.index');

    }
}
