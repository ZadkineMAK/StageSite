<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\location;
use App\school;
use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;

class AdminSchoolandlocationController extends Controller
{
    private function validator($input)
    {
        return Validator::make($input, [
            'address' => 'required|max:50|min:2',
            'zipcode' => 'required|max:50|min:2',
            'city' => 'required|max:50|min:2'
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = $this->validator($input);
        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }
        location::create($input);
        return redirect(route('admin.school.index'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $location)
    {
        $input = $request->all();
        $validator = $this->validator($input);
        if ($validator->fails()) {
            $this->throwValidationException($request, $validator);
        }
        $location->update($request->all());
        return redirect(route('admin.school.index'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($location)
    {
        $location->delete();
        return redirect(route('admin.school.index'));
    }
}
