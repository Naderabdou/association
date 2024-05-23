<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\OurValue;
use Illuminate\Http\Request;
use App\Models\CommitteeCategory;
use App\Http\Controllers\Controller;
use App\Models\OurProgram;

class CeckController extends Controller
{
    public function checkCommitteesCategory(Request $request){

        if($request->name_ar){
            return $this->checkRecordExists('CommitteeCategory', 'name_ar', $request->name_ar , $request , 'اسم القسم بالعربي مستخدم بالفعل') ;

        }

        if($request->name_en){
        return $this->checkRecordExists('CommitteeCategory', 'name_en', $request->name_en , $request , 'اسم القسم بالانجليزي مستخدم بالفعل');

        }
    }

    public function checkValueName(Request $request){

        if($request->title_ar){
            return $this->checkRecordExists('OurValue', 'title_ar', $request->title_ar , $request , 'اسم القيمة بالعربي مستخدم بالفعل');

        }

        if($request->title_en){
        return $this->checkRecordExists('OurValue', 'title_en', $request->title_en , $request , 'اسم القيمة بالانجليزي مستخدم بالفعل');

        }

    }
    public function checkProgramName(Request $request){

        if($request->name_ar){
            return $this->checkRecordExists('OurProgram', 'name_ar', $request->name_ar , $request , 'اسم البرنامج بالعربي مستخدم بالفعل');

        }

        if($request->name_en){
        return $this->checkRecordExists('OurProgram', 'name_en', $request->name_en , $request , 'اسم البرنامج بالانجليزي مستخدم بالفعل');

        }

    }

    public function checkPathName(Request $request){

        if($request->name_ar){
            return $this->checkRecordExists('OurPaths', 'name_ar', $request->name_ar , $request , 'اسم المسار بالعربي مستخدم بالفعل');

        }

        if($request->name_en){
        return $this->checkRecordExists('OurPaths', 'name_en', $request->name_en , $request , 'اسم المسار بالانجليزي مستخدم بالفعل');

        }

    }

    public function cregulationCategoriesName(Request $request){

        if($request->name_ar){
            return $this->checkRecordExists('RegulationCategory', 'name_ar', $request->name_ar , $request , 'اسم القسم بالعربي مستخدم بالفعل');

        }

        if($request->name_en){
        return $this->checkRecordExists('RegulationCategory', 'name_en', $request->name_en , $request , 'اسم القسم بالانجليزي مستخدم بالفعل');

        }

    }

    public function checkEmailMembership(Request $request){

        return $this->checkRecordExists('Membership', 'email', $request->email , $request , 'البريد الاكتروني موجود بالفعل');
    }
    public function checkPhoneMembership(Request $request){

        return $this->checkRecordExists('Membership', 'phone', $request->phone , $request , 'رقم الهاتف موجود بالفعل');
    }
    public function checkIDMembership(Request $request){

        return $this->checkRecordExists('Membership', 'ID_number', $request->ID_number , $request , 'رقم الهوية موجود بالفعل');
    }

    public function checkEmail(Request $request){

        return $this->checkRecordExists('Subscribe', 'email', $request->email , $request , 'البريد الاكتروني مشترك بالفعل');
    }




    private function checkRecordExists($model, $field, $value, $request, $message) {
        $query = 'App\Models\\' . $model;
        $query = new $query;

        if ($request->id) {
            if($query->where($field, $value)->where('id', '!=', $request->id)->exists()) {
                return response()-> json(['message' => transWord($message)]);
             }

        } else {
            if($query->where($field, $value)->exists()) {
                return response()-> json(['message' => transWord($message)]);
            }
        }

        return response()->json(true);
    }
}
