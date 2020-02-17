<?php

namespace App\Http\Controllers;

use App\Documents;
use App\Helpers\ImageUploadHelpers;
use App\Http\Helpers\ComplexQueryHelper;
use App\Interests;
use App\PersonalDetails;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ComplexQueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
            return view('welcome',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $personalDetails = PersonalDetails::all();
        $count = $personalDetails->count();
        $users = User::all();

        if($count == 0){

            $pd = ComplexQueryHelper::GeneratePersonalDetails();
            $interest = ComplexQueryHelper::GenerateInterest();
            $document = ComplexQueryHelper::GenerateDocuments();
            return view('welcome',compact('pd','interest','document','users'));
        }else{
            //dd("data already generated");
            return redirect()->back()->with('message','data already generated');
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $personal_details = PersonalDetails::all();

        foreach ($personal_details as $interest){
           var_dump($interest->users['name']);
           }
    }

    public function getPersonalDetails($id)
    {
        $user = User::find($id);
        $personal_detail = PersonalDetails::where('user_id',$user->id)->first();
        $interests = Interests::where('user_id',$user->id)->get();
        $documents = Documents::all();
        $all_interest = Interests::all();
        return view('personal_details',compact('user','personal_detail','interests','documents','all_interest'));


    }

    public function upload(Request $request)
    {

        $request->validate([
            'file' => 'required|max:10000|mimes:txt,xlsx,xls'
        ]);
        $doc_upload = $request->file('file');
        $path =  '/Documents/';
        $interest_id = $request->interest;


        $store_doc = ImageUploadHelpers::imageUpload($path,$doc_upload);

         Documents::create(array('file'=>str_replace(public_path(),'',$store_doc),
            'interest_id'=>$interest_id,'document_name'=> Str::random(5)
        ));

         return redirect()->back()->with('success','document successfully uploaded');
    }





    public function showInterestWithDocuments()
    {
        $interest = Interests::all();
        foreach ($interest as $value){
            $doc = Documents::where('interest_id',$value->id)->get();
            echo "<pre>";
            echo $doc->count();
            echo "</pre>";
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showDocuments($user_id)
    {
        //
        $interest = Interests::find($user_id);
        $documents = Documents::where('interest_id',$interest->id )->get();
        return view('documents',compact('documents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getFileManipulation()
    {
        //
        $all_interest = Interests::all();
        $docs = Documents::all();
        return view('file_manipulation',compact('all_interest','docs'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

    }
}
