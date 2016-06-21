<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\school;
use App\location;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class AdminSchoolController extends Controller
{
    private function validator($input)
    {
        return Validator::make($input, [
            'name' => 'required|max:50|min:2'
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = $this->validator($input);
        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }
        school::create($input);
        return redirect(route('admin.school.index'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($school)
    {
        $school->delete();
        return redirect(route('admin.school.index'));
    }
//        if($school->delete()) {
//            return response(1, 200);
//        }
//        return response(0, 200);
//    }
}
