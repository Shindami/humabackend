<?php

namespace App\Http\Controllers;

use App\Models\FormDataContact;
use App\Models\FormData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonaliaController extends Controller
{
    public function personalia()
    {
        return view('auth.personalia.personalia');
    }

    public function contact()
    {
        return view('auth.personalia.contact');
    }
    public function submitFormContact(Request $request)
    {
        $validatedData = $request->validate([
        'fn' => 'required|max:255',
        'ln' => 'required|max:255',
        'pa' => 'required|max:255',
        'province' => 'required|max:255',
        'cor' => 'required|max:255',
        'relationship' => 'required|max:255',
        'iempn' => 'required|max:255',
        'ieea' => 'required|max:255',
        'min' => 'required|max:255',
        'address1' => 'required|max:255',
        'postal1' => 'required|max:255',
        'province1' => 'required|max:255',
        'cor1' => 'required|max:255',
        'iempn1' => 'required|max:255',
        'ieea1' => 'required|max:255',
        'pn' => 'required|max:255',
        'address2' => 'required|max:255',
        'postal2' => 'required|max:255',
        'province2' => 'required|max:255',
        'cor2' => 'required|max:255',
        'iempn2' => 'required|max:255',
        'ieea2' => 'required|max:255',
        
        
        
        
    ], [
        'fn.required' => '',
        'ln.required' => '',
        'pa.required' => '',
        'province.required' => '',
        'cor.required' => '',
        'relationship.required' => '',
        'iempn.required' => '',
        'ieea.required' => '',
        'min.required' => '',
        'address1.required' => '',
        'postal1.required' => '',
        'province1.required' => '',
        'cor1.required' => '',
        'iempn1.required' => '',
        'ieea1.required' => '',
        'pn.required' => '',
        'address2.required' => '',
        'postal2.required' => '',
        'province2.required' => '',
        'cor2.required' => '',
        'iempn2.required' => '',
        'ieea2.required' => '',
        
        
    ]);

    $formData = new FormDataContact;
    $formData->fn = $request->fn;
    $formData->ln = $request->ln;
    $formData->pa = $request->pa;
    $formData->province = $request->province;
    $formData->cor = $request->cor;
    $formData->relationship = $request->relationship;
    $formData->iempn = $request->iempn;
    $formData->ieea = $request->ieea;
    $formData->min = $request->min;
    $formData->address1 = $request->address1;
    $formData->postal1 = $request->postal1;
    $formData->province1 = $request->province1;
    $formData->cor1 = $request->cor1;
    $formData->iempn1 = $request->iempn1;
    $formData->ieea1 = $request->ieea1;
    $formData->pn = $request->pn;
    $formData->address2 = $request->address2;
    $formData->postal2 = $request->postal2;
    $formData->province2 = $request->province2;
    $formData->cor2 = $request->cor2;
    $formData->iempn2 = $request->iempn2;
    $formData->ieea2 = $request->ieea2;
    
    $formData->save();

        return redirect()->route('id')
        ->withSuccess('You have successfully registered & logged in!');
    }




    public function id()
    {
        return view('auth.personalia.id');
    }

    public function insurance()
    {
        return view('auth.personalia.insurance');
    }

    public function bmc()
    {
        return view('auth.personalia.bmc');
    }

    public function smi()
    {
        return view('auth.personalia.smi');
    }

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
     
    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
}
