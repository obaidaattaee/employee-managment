<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanySettings;

class SettingsController extends Controller{
    public function services(){
        $settings = CompanySettings::where('type' , request()['type'])->get() ;
        return view('admin.settings.index')
                ->with('settings' , $settings) ;
    }
    public function create($service){
        if (in_array($service ,['slider' , 'services' , 'abouts' , 'projects'])){
            return view('admin.settings.create');
        }
        else{
            abort(404) ;
        }
    }
    public function store($service){
        if (in_array($service ,['slider' , 'services' , 'abouts' , 'projects'])){
            request()['type'] = $service;
            // dd(request()->all());
            $data = request()->validate([
                'title' => ['required'],
                'description' => ['required'],
                'details' => ['required'],
                'type' => ['required'],
            ]);
            if (empty(request()['imageFile'])) {
                session()->flash('msg', 'w: ارجى ادراج صورة ') ;
                return redirect(route('company.settings.create' , ['services' => $service , 'type' =>$service ]));
            }
            $data['image'] = basename(request()->imageFile->store('settings' , 'public')) ;
            CompanySettings::create($data);
            session()->flash('msg', 's: تم اضافة العنصر الجديد   ') ;
            return redirect(route('company.settings.index' , ['type' =>$service ]));
        }
        else{
            abort(404) ;
        }
    }
    public function edit($service){
        $setting = CompanySettings::findOrFail($service);
        return view('admin.settings.edit')
                ->with('setting' , $setting) ;
    }
    public function delete($service){
        $setting = CompanySettings::findOrFail($service);
        $setting->delete() ;
        session()->flash('msg', 'w: تم حذف العنصر    ') ;
        return redirect(route('company.settings.index' , ['type' =>$setting->type ]));

    }
    public function update($id , $service){
        if (in_array($service ,['slider' , 'services' , 'abouts' , 'projects'])){
            request()['type'] = $service;
            $data = request()->validate([
                'title' => ['required'],
                'description' => ['required'],
                'details' => ['required'],
                'type' => ['required'],
            ]);
            $setting = CompanySettings::findOrFail($id) ;
            if (empty(request()['imageFile'])) {
                $data['image'] = $setting->image ;
            }
            else{
                $data['image'] = basename(request()->imageFile->store('settings' , 'public')) ;
            }
            $setting->update($data);
            session()->flash('msg', 's: تم تعديل العنصر الجديد   ') ;
            return redirect(route('company.settings.index' , ['type' =>$service ]));
        }
        else{
            abort(404) ;
        }
    }
}
