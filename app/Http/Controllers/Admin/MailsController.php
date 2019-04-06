<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail as MailDB;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendReplyToMail;

class MailsController extends Controller
{
  /**
   * Show all mails
   *
   * @return response
   */
  public function index($status) {
     $mails = MailDB::where('status', $status)->get();

     foreach ($mails as $mail) {
       $mail->details = clean_limit($mail->details);
     }

     if ($status == 0) {
       $page_name = 'Not seen mails';
     } else if ($status == 1) {
       $page_name = 'Seen mails';
     } else if ($status == 2) {
       $page_name = 'Replied mails';
     } else{
       return redirect()->route('mails.index', 0);
     }

     return view('admin.mails.index', compact('mails', 'status', 'page_name'));
  }

  /**
   * Show all mails
   *
   * @return response
   */
  public function show($status, $mail_id) {
     $mail = MailDB::where('status', $status)->where('id', $mail_id)->first();

     if (! $mail) {
       return redirect()->route('mails.index', $status)->with(['error' => 'Data not found']);
     }

     if ($mail->status == 0) {
       DB::table('mails')->where('status', $status)->where('id', $mail_id)->update([
         'status' => 1,
       ]);
     }

     return view('admin.mails.show', compact('mail', 'status'));
  }

  /**
   * Reply to contact
   *
   * @return response
   */
   public function reply($mail_id, Request $request) {
     $mail = MailDB::where('id', $mail_id)->first();

     if (! $mail) {
       return redirect()->back()->with(['error' => 'Data not found']);
     }

     $request->validate([
       'details' => 'required',
     ]);

     $mailAddress = $mail->email;
     $text_message = $request->details;

     Mail::to($mailAddress)->send(new SendReplyToMail($text_message));
     DB::table('mails')->where('id', $mail_id)->update([
       'status' => 2,
     ]);

     return redirect()->route('mails.index', 2)->with(['success' => 'Message Sent successfully']);
   }

  /**
   * Delete mail by the given id
   *
   * @return message
   */
  public function destroy($status, $id) {
      $mail = MailDB::where('id', $id)->where('status', $status)->first();
      if (! $mail) {
        return redirect()->back()->with(['error' => 'Data not found']);
      }

      $mail->delete();
      return redirect()->route('mails.index', $status)->with(['success' => 'Mail deleting succesfully']);
  }
}
