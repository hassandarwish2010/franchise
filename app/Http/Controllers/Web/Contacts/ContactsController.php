<?php

namespace App\Http\Controllers\Web\Contacts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    /**
     * Show contact page
     *
     * @return response
     */
    public function index($lang) {
      return view('web.contacts.index');
    }
}
