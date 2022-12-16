<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    //
    function registration()
    {
        return view('registration');

    }

    function store(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'fname' => [
                    'required',
                ],
                'lname' => [
                    'required',
                ],
                'email' => [
                    'required',
                    'unique:registrations',
                ],
                'password' => [
                    'required',
                    'min:8',
                ],
                'address' => [
                    'required',
                ],
                'state' => [
                    'required',
                ],
                'city' => [
                    'required',
                ],
                'zip' => [
                    'required',
                ]
            ]
        );



        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $registrations = Registration::create($request->all());
        return view('registration');

        if ($registrations) {
            return back()->with('pass', ' password  is not match.');
        } else {
            return back()->with('fail', ' password  is not match.');
        }
    }

    function login()
    {
        return view('login');
    }

    function login_store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => [
                    'required',
                ],
                'password' => [
                    'required',
                    'min:8'
                ],

            ]
        );



        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }


        $user = Registration::where('email', '=', $request->email)->first();
        $request->session()->put('key', $request->email);

        if ($user) {
            $user = Registration::where('password', '=', $request->password)->first();
            if ($user) {
                return redirect()->route('admin');
            } else {
                return back()->with('fail', ' password  is not match.');
            }


        } else {
            return back()->with('fail', ' email is not match.');
        }
    }

    function show()
    {
        $registrations = Registration::all();
        $data = compact('registrations');

        return view('admin')->with($data);

    }

    function delete(Request $request, $id)
    {
        $registrations = Registration::find($id);
        if (!is_null($registrations)) {
            $registrations->delete();
            return redirect()->route('admin');
        }
    }
    function edit(Request $request, $id)
    {

        $registrations = Registration::find($id);
        if (!is_null($registrations)) {
            return view('edit_registration', compact('registrations'));
        } else {
            return redirect()->route('admin');
        }
    }


    function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'fname' => [
                    'required',
                ],
                'lname' => [
                    'required',
                ],
                'email' => [
                    'required',
                    'unique:registrations,email,'.$id,
                ],
                'password' => [
                    'required',
                    'min:8',
                ],
                'address' => [
                    'required',
                ],
                'state' => [
                    'required',
                ],
                'city' => [
                    'required',
                ],
                'zip' => [
                    'required',
                ]
            ]
        );



        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $registrations = Registration::find($id);
        $registrations->fname = $request->fname;
        $registrations->lname = $request->lname;
        $registrations->email = $request->email;
        $registrations->password = $request->password;
        $registrations->address = $request->address;
        $registrations->city = $request->city;
        $registrations->state = $request->state;
        $registrations->zip = $request->zip;
        $registrations->save();
        return redirect()->route('admin');
    }



}
