<?php

namespace App\Models\Front;
use App\Http\Controllers\Controller;
use App\Mail\CommentMessageToAdmin;
use App\Models\Admin\Comment;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use function abort;
use function redirect;
use function url;
use function view;

//class ActualitesController extends BaseController
class ActualitesController extends Controller
{
    public function index()
    {
      //  $this->AddCommonContent();
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $actualites = DB::table('page_actualites_items')->where('id', 1)->first();
        $actualites_items = DB::table('actualites')->orderby('id', 'desc')->paginate(4);
        $actualites_items_no_pagi = DB::table('actualites')->orderby('id', 'desc')->get();
        $categories = DB::table('categories')->get();
        return view('pages.actualites', compact('actualites','g_setting','actualites_items','categories','actualites_items_no_pagi'));
    }

    public function detail($slug)
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $actualites_detail = DB::table('actualites')->where('actualites_slug', $slug)->first();
        $actualites_items = DB::table('actualites')->get();
        $actualites_items_no_pagi = DB::table('actualites')->orderby('id', 'desc')->get();
        $categories = DB::table('categories')->get();
        if(!$actualites_detail) {
            return abort(404);
        }
        $comments = '';
        $comments = DB::table('comments')->where('blog_id', $actualites_detail->id)->where('comment_status', 'Approved')->get();
        return view('pages.blog_detail', compact('g_setting','blog_detail','blog_items','blog_items_no_pagi','categories','comments'));
    }

    public function comment(Request $request)
    {
        $comment = new Comment();
        $data = $request->only($comment->getFillable());

        $request->validate([
            'person_name' => 'required',
            'person_email' => 'required|email',
            'person_message' => 'required'
        ]);
        $comment->fill($data)->save();

        // Send email to admin
        $email_template_data = DB::table('email_templates')->where('id', 2)->first();
        $subject = $email_template_data->et_subject;
        $message = $email_template_data->et_content;

        $comment_see_url = url('blog/'.$request->blog_slug);

        $message = str_replace('[[person_name]]', $request->person_name, $message);
        $message = str_replace('[[person_email]]', $request->person_email, $message);
        $message = str_replace('[[person_message]]', $request->person_message, $message);
        $message = str_replace('[[comment_see_url]]', $comment_see_url, $message);

        $admin_data = DB::table('admins')->where('id',1)->first();

        Mail::to($admin_data->email)->send(new CommentMessageToAdmin($subject,$message));
        return redirect()->back()->with('success', 'Your comment is sent to admin successfully. Admin will check and approve it.');
    }
}
