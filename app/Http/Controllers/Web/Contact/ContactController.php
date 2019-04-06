<?php

namespace App\Http\Controllers\Web\Contact;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Contact\ContactRequest;
use App\Mail;

class ContactController extends Controller
{
    /**
     * Submit sending contact
     *
     * @return response
     */
    public function submit(ContactRequest $request, $lang) {
      Mail::create($request->only(['name', 'email', 'details']))->save();

      return response()->json(['errors' => '-1']);
    }
}
