<?php

namespace App\Http\Controllers;

use App\Models\build;
use App\Models\development;
use App\Models\Educate;
use App\Models\evaluate;
use App\Models\expert;
use App\Models\improve;
use App\Models\ment;
use App\Models\plan;
use App\Models\security;
use App\Models\society;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home.index');
    }
    public function plan(){
        $doc=plan::paginate(1);
        return view('home.plan', compact('doc'));
    }
    public function view(){
        $data=evaluate::paginate(2);
        return view('home.view', compact('data'));
    }
    public function delete_view(){
        $data=DB::table('evaluates')->truncate();
        return redirect()->back();
    }
    public function upload(Request $request){
        $request->validate([
            'document'=>'required|mimes:pdf,doc,docx',
        ]);
        $file=$request->file('document');
        $orginalName=$file->getClientOriginalName();
        $fileName=time().'.'.$file->getClientOriginalName();
        $file->storeAs("documents", $fileName, 'public');
        $doc=new plan;
        $doc->file_name=$fileName;
        $doc->original_name=$orginalName;
        $doc->save();
        toastr()->timeOut(1000)->closeButton()->addSuccess('تم  تحميل الملف بنجاح');
        return redirect()->back();
    }
    public function download($id){
        $document=plan::find($id);
        $filePath=storage_path("app/public/documents/{$document->file_name}");
        return response()->download($filePath, $document->original_name);
    }
    public function upload_file(Request $request){
        $request->validate([
            'document'=>'required|mimes:pdf,doc,docs',
        ]);
        $file=$request->file('document');
        $orginName=$file->getClientOriginalName();
        $fileName=time().'.'. $file->getClientOriginalName();
        $file->storeAs('documents', $fileName, 'public');
        $doc=new evaluate;
        $doc->name=$fileName;
        $doc->origin_name=$orginName;
        $doc->save();
        toastr()->timeOut(1000)->closeButton()->addSuccess('تم اضافة الملف');
        return redirect()->back();

     
    }
    public function down($id){
        $docmented=evaluate::find($id);
        $filePath=storage_path("app/public/documents/{$docmented->name}");
        return response()->download($filePath, $docmented->origin_name);
    
    }
    public function delete($id){
        $data=plan::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function delete_data($id){
        $data=evaluate::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function delete_all(){
        $data=DB::table('plans')->truncate();
        return redirect()->back();

    }
    public function society(){
        $data=society::paginate(2);
        return view('home.society', compact('data'));
    }
    public function upload_society(Request $request){
        $request->validate([
            'document'=>'required|mimes:pdf,doc,docx',
        ]);
        $file=$request->file('document');
        $orginalName=$file->getClientOriginalName();
        $fileName=time().'.'.$file->getClientOriginalName();
        $file->storeAs("documents", $fileName, 'public');
        $doc=new society();
        $doc->file_name=$fileName;
        $doc->original_name=$orginalName;
        $doc->save();
        toastr()->timeOut(1000)->closeButton()->addSuccess('تم  تحميل الملف بنجاح');
        return redirect()->back();

    }
    public function down_society($id){
        $document=society::find($id);
        $filePath=storage_path("app/public/documents/{$document->file_name}");
        return response()->download($filePath, $document->original_name);
    }
    public function delete_society(){
        $soc=DB::table('societies')->truncate();
        return redirect()->back();
    }
    public function del($id){
        $del=society::find($id);
        $del->delete();
        return redirect()->back();
    }
    public function improve(){
        $improve=improve::paginate(2);
        return view('home.improve', compact('improve'));
    }
    public function upload_improve(Request $request){
        $request->validate([
            'document'=>'required|mimes:pdf,doc,docx',
        ]);
        $file=$request->file('document');
        $orginalName=$file->getClientOriginalName();
        $fileName=time().'.'.$file->getClientOriginalName();
        $file->storeAs("documents", $fileName, 'public');
        $doc=new improve;
        $doc->file_name=$fileName;
        $doc->original_name=$orginalName;
        $doc->save();
        toastr()->timeOut(1000)->closeButton()->addSuccess('تم  تحميل الملف بنجاح');
        return redirect()->back();
    }
    public function down_improve($id){
        $document=improve::find($id);
        $filePath=storage_path("app/public/documents/{$document->file_name}");
        return response()->download($filePath, $document->original_name);

    }

    public function delete_improve(){
        $post=DB::table('improves')->truncate();
        return redirect()->back();
    }
    public function del_improve($id){
        $post=improve::find($id);
        $post->delete();
        return redirect()->back();
    }
    public function expert(){
        $expert=expert::paginate(2);
        return view('home.expert', compact('expert'));
    }
    public function upload_expert(Request $request){
        $request->validate([
            'document'=>'required|mimes:pdf,doc,docx',
        ]);
        $file=$request->file('document');
        $orginalName=$file->getClientOriginalName();
        $fileName=time().'.'.$file->getClientOriginalName();
        $file->storeAs("documents", $fileName, 'public');
        $doc=new expert;
        $doc->file_name=$fileName;
        $doc->original_name=$orginalName;
        $doc->save();
        toastr()->timeOut(1000)->closeButton()->addSuccess('تم  تحميل الملف بنجاح');
        return redirect()->back();


    }
    public function down_expert($id){
        $document=expert::find($id);
        $filePath=storage_path("app/public/documents/{$document->file_name}");
        return response()->download($filePath, $document->original_name);
    }
    public function edu(){
        $edu=Educate::paginate(2);
        return view('home.edu', compact('edu'));
    }
    public function upload_edu(Request $request){
        $request->validate([
            'document'=>'required|mimes:pdf,doc,docx',
        ]);
        $file=$request->file('document');
        $orginalName=$file->getClientOriginalName();
        $fileName=time().'.'.$file->getClientOriginalName();
        $file->storeAs("documents", $fileName, 'public');
        $doc=new Educate;
        $doc->file_name=$fileName;
        $doc->original_name=$orginalName;
        $doc->save();
        toastr()->timeOut(1000)->closeButton()->addSuccess('تم  تحميل الملف بنجاح');
        return redirect()->back();

    }
    public function down_edu($id){
        $document=Educate::find($id);
        $filePath=storage_path("app/public/documents/{$document->file_name}");
        return response()->download($filePath, $document->original_name);

    }
    public function delete_expert($id){
        $expert=expert::find($id);
        $expert->delete();
        return redirect()->back();
    }
    public function delete_experted(){
        $expert=DB::table('experts')->truncate();
        return redirect()->back();

    }
    public function delete_edu($id){
        $edu=Educate::find($id);
        $edu->delete();
        return redirect()->back();

    }
    public function delete_educat(){
        $edu=DB::table('educates')->truncate();
        return redirect()->back();

    }
    public function ment(){
        $ment=ment::paginate(2);
        return view('home.ment', compact('ment'));
    }
    public function upload_ment(Request $request){
        $request->validate([
            'document'=>'required|mimes:pdf,doc,docx',
        ]);
        $file=$request->file('document');
        $orginalName=$file->getClientOriginalName();
        $fileName=time().'.'.$file->getClientOriginalName();
        $file->storeAs("documents", $fileName, 'public');
        $doc=new ment;
        $doc->file_name=$fileName;
        $doc->original_name=$orginalName;
        $doc->save();
        toastr()->timeOut(1000)->closeButton()->addSuccess('تم  تحميل الملف بنجاح');
        return redirect()->back();

    }
    public function delete_men($id){
        $ment=ment::find($id);
        $ment->delete();
        return redirect()->back();
    }
    public function delete_ment(){
        $ment=DB::table('ments')->truncate();
        return redirect()->back();
    }
    public function upload_men($id){
        $document=ment::find($id);
        $filePath=storage_path("app/public/documents/{$document->file_name}");
        return response()->download($filePath, $document->original_name);

    }
    public function develop(){
        $develop=development::paginate(2);
        return view('home.develop', compact('develop'));

    }
    public function upload_dev(Request $request){
        $request->validate([
            'document'=>'required|mimes:pdf,doc,docx',
        ]);
        $file=$request->file('document');
        $orginalName=$file->getClientOriginalName();
        $fileName=time().'.'.$file->getClientOriginalName();
        $file->storeAs("documents", $fileName, 'public');
        $doc=new development();
        $doc->file_name=$fileName;
        $doc->original_name=$orginalName;
        $doc->save();
        toastr()->timeOut(1000)->closeButton()->addSuccess('تم  تحميل الملف بنجاح');
        return redirect()->back();

    }
    public function upload_develop($id){
        $document=development::find($id);
        $filePath=storage_path("app/public/documents/{$document->file_name}");
        return response()->download($filePath, $document->original_name);

    }
    public function delete_dev($id){
        $dev=development::find($id);
        $dev->delete();
        return redirect()->back();
    }
    public function delete_develop(){
        $dev=DB::table('develpments')->truncate();
        return redirect()->back();
    }

    public function build(){
        $build=build::paginate(2);
        return view('home.build', compact('build'));
    }
    public function upload_build(Request $request){
        $request->validate([
            'document'=>'required|mimes:pdf,doc,docx',
        ]);
        $file=$request->file('document');
        $orginalName=$file->getClientOriginalName();
        $fileName=time().'.'.$file->getClientOriginalName();
        $file->storeAs("documents", $fileName, 'public');
        $doc=new build;
        $doc->file_name=$fileName;
        $doc->original_name=$orginalName;
        $doc->save();
        toastr()->timeOut(1000)->closeButton()->addSuccess('تم  تحميل الملف بنجاح');
        return redirect()->back();

    }
    public function down_build($id){
        $document=build::find($id);
        $filePath=storage_path("app/public/documents/{$document->file_name}");
        return response()->download($filePath, $document->original_name);

    }
    public function delete_build($id){
        $data=build::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function delete_bu(){
        $data=DB::table('builds')->truncate();
        return redirect()->back();
    }
    public function security(){
        $security=security::paginate(2);
        return view('home.security', compact('security'));
    }
    public function upload_security(Request $request){
        $request->validate([
            'document'=>'required|mimes:pdf,doc,docx',
        ]);
        $file=$request->file('document');
        $orginalName=$file->getClientOriginalName();
        $fileName=time().'.'.$file->getClientOriginalName();
        $file->storeAs("documents", $fileName, 'public');
        $doc=new security;
        $doc->file_name=$fileName;
        $doc->original_name=$orginalName;
        $doc->save();
        toastr()->timeOut(1000)->closeButton()->addSuccess('تم  تحميل الملف بنجاح');
        return redirect()->back();

    }
    public function down_security($id){
        $document=security::find($id);
        $filePath=storage_path("app/public/documents/{$document->file_name}");
        return response()->download($filePath, $document->original_name);

    }
    public function delete_securited($id){
        $sec=security::find($id);
        $sec->delete();
        return redirect()->back();
    }
    public function delete_security(){
        $sec=DB::table('securities')->truncate();
        return redirect()->back();
    }
}
