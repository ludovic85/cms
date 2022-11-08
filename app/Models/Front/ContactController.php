<?php

namespace App\Models\Front;
use App\Http\Controllers\Controller;
use App\Mail\ContactPageMessage;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use function redirect;
use function view;

class ContactController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $contact = DB::table('page_contact_items')->where('id', 1)->first();
        return view('pages.contact', compact('contact','g_setting'));
    }

    public function send_email(Request $request)
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $request->validate([
            'visitor_name' => 'required',
            'visitor_email' => 'required|email',
            'visitor_message' => 'required'
        ]);

        if($g_setting->google_recaptcha_status == 'Show') {
            $request->validate([
                'g-recaptcha-response' => 'required'
            ],
            [
                'g-recaptcha-response.required'    => 'You must have to input recaptcha correctly'
            ]);
        }

        // Send Email
        $email_template_data = DB::table('email_templates')->where('id', 1)->first();
        $subject = $email_template_data->et_subject;
        $message = $email_template_data->et_content;

        $message = str_replace('[[visitor_name]]', $request->visitor_name, $message);
        $message = str_replace('[[visitor_email]]', $request->visitor_email, $message);
        $message = str_replace('[[visitor_phone]]', $request->visitor_phone, $message);
        $message = str_replace('[[visitor_message]]', $request->visitor_message, $message);

        $admin_data = DB::table('admins')->where('id',1)->first();

        Mail::to($admin_data->email)->send(new ContactPageMessage($subject,$message));

        return redirect()->back()->with('success', 'Message is sent successfully! Admin will contact you soon');
    }
}