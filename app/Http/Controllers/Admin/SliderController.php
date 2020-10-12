<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use DB;

class SliderController extends Controller
{
   
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index',compact('sliders'));
    }

    public function create(Request $request)
    {
        \App\Slider::create($request->all());
        return redirect('/slider');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        $image = $result->file('image');
        $slug = str_slug($result->title);
        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image -> getClientOriginalExstension();
            if(!file_exists('uploads/slider'))
           {
            mkdir('uploads/slider',0777,true);
           }
            $image -> move('uploads/slider',$imagename);
        }
        else
        {
            $imagename = 'default.png';
        }
        $sliders = new Slider();
        $sliders -> title = $request->title;
        $sliders -> sub_title = $request->sub_title;
        $sliders -> image = $imagename;
        $sliders -> save();
        return redirect('/slider');
    }

    public function show(Slider $slider)
    {
        
    }

    public function edit($id)
    {
        $sliders = \App\slider::find($id);
        return view('admin.slider.edit',['sliders'=>$sliders]);
    }

    public function update(Request $request,$id)
    {
        $sliders = \App\slider::find($id);
        $sliders->update($request ->all());
        if($request->hasFile('avatar')){
             $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
             $msworkflow->avatar = $request->file('avatar')->getClientOriginalName();
             $msworkflow->save();
         }
        return redirect('/slider')->with('sukses','Data Berhasil Di Update');
    }

    public function destroy($id)
    {
        $sliders = \App\slider::find($id);
        $sliders ->delete($sliders);
        return redirect('/slider');
    }
}
