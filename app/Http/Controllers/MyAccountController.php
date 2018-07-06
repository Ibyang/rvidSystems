<?php

namespace App\Http\Controllers;

use App\Agent;
use App\AgentBilling;
use App\AgentPreferences;
use App\User;
use App\AgentInvoice;
use App\FAQ;
use App\AgentInvoiceList;
use App\Content;
use App\AgentTemplate;
use App\videoProgress;
use App\State;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class MyAccountController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        $email = Auth::user()->email;
        $fname = Auth::user()->name;
        $fullname = preg_replace('/\s/', '', $fname);
        $passwd = Auth::user()->passwd;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;
        $billing = AgentBilling::where('agent_ID', $userid)->latest('created_at')->orderBy('ID')->get();

        //path for logo pic
        $username = Auth::user()->name;
        $path = '/storage/client_images/' . $username . '/general_images/';
        $logo_pic = $path . $logo;

        $states = State::get(['state_code', 'state_name']);
        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        $invoice = AgentInvoice::where('email', $email)->first();
        return view('frontend.pages.my-account', compact('fullname', 'passwd', 'agent', 'states', 'invoice', 'billing', 'logo_pic'));
    }


    public function editAccount(Request $request)
    {
        $details_arr = array(
            'role_title' => request()->input('title'),
            'name_agency' => request()->input('company'),
            'group' => request()->input('agency')
        );

        $user_details_arr = array(
            'name' => request()->input('name'),
            'password' => bcrypt(request()->input('password')),
            'passwd' => request()->input('password')
        );

        $email = request()->input('email');
        $agentID = request()->input('agentID');
        //dd($email);
        Agent::where('email', $email)->update($details_arr);
        User::where('email', $email)->update($user_details_arr);

        return redirect('/account/home');

    }


    public function editInvoice(Request $request)
    {
        $invoice_arr = array(
            'invoice_to' => request()->input('invoiceTo'),
            'invoice_to_type' => request()->input('invoice_to'),
            'address' => request()->input('invoice_address'),
            'suburb' => request()->input('invoice_suburb'),
            'state' => request()->input('invoice_state'),
            'postcode' => request()->input('invoice_postcode'),
            'person_name' => request()->input('invoice_agent'),
            'contact_num' => request()->input('invoice_contact'),
            'email' => request()->input('invoice_email')
        );

        $agentID = request()->input('agentID');
        //dd($email);
        AgentInvoice::where('agent_ID', $agentID)->update($invoice_arr);

        return redirect('/account/home');

    }


    public function editSubscription()
    {
        $subscription = Input::get('subscription1');
        $storage_plan = '';

        foreach($subscription as $sub){
            if($sub === 'Casual'){
                $subscription_arr = array(
                    'subscription_type' => $sub,
                    'storage_plan' => '$11'
                );
            }
            else if($sub === 'Basic'){
                $subscription_arr = array(
                    'subscription_type' => $sub,
                    'storage_plan' => '$33'
                );
            }
            else if($sub === 'Standard') {
                $subscription_arr = array(
                    'subscription_type' => $sub,
                    'storage_plan' => '$66'
                );
            }
            else if($sub === 'Premium') {
                $subscription_arr = array(
                    'subscription_type' => $sub,
                    'storage_plan' => '$99'
                );
            }
        }

        $agentID = Input::get('agentID');
        AgentInvoice::where('agent_ID', $agentID)->update($subscription_arr);

        return redirect('/account/home');
    }

    public function getBilling(){

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $uname = Auth::user()->name;
        $username = preg_replace('/\s/', '', $uname);
        $path = '/storage/client_images/' . $username . '/general_images/';
        $logo_pic = $path . $logo;

        //for generic billing
//        $genericBilling = AgentBilling::where('agent_ID', $userid)->latest('created_at')->orderBy('ID')->get();
        $invoices = AgentInvoiceList::where('agent_ID', $userid)->get();

        $billing_details = AgentInvoiceList::where('agent_ID', $userid)->get(['billing_date', 'video_ID'])->first();
//        $bill_date = $billing_date->billing_date;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile','address','suburb','state','postcode'])->first();
        return view('frontend.pages.video-creator.billing-history', compact('fullname', 'agent', 'billing_details', 'invoices', 'logo_pic'));

    }

    public function makeVideo(){

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $uname = Auth::user()->name;
        $username = preg_replace('/\s/', '', $uname);
        $path = '/storage/client_images/' . $username . '/general_images/';
        $logo_pic = $path . $logo;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        return view('frontend.pages.video-creator.make-video', compact('fullname', 'agent', 'userid', 'logo_pic'));

    }


    public function getTermsCondition(){

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $uname = Auth::user()->name;
        $username = preg_replace('/\s/', '', $uname);
        $path = '/storage/client_images/' . $username . '/general_images/';
        $logo_pic = $path . $logo;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        $content = Content::where('ID', 1)->get(['content_text'])->first();
        return view('frontend.pages.account-terms-condition', compact('fullname', 'agent', 'userid', 'content', 'logo_pic'));

    }


    public function getCopyright(){

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $uname = Auth::user()->name;
        $username = preg_replace('/\s/', '', $uname);
        $path = '/storage/client_images/' . $username . '/general_images/';
        $logo_pic = $path . $logo;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        $content = Content::where('ID', 2)->get(['content_text'])->first();
        return view('frontend.pages.account-copyright', compact('fullname', 'agent', 'userid', 'content', 'logo_pic'));

    }


    public function getPrivacy(){

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        //path for logo pic
        $uname = Auth::user()->name;
        $username = preg_replace('/\s/', '', $uname);
        $path = '/storage/client_images/' . $username . '/general_images/';
        $logo_pic = $path . $logo;

        $agent = Agent::where('email', $email)->get(['role_title','name_agency','group','email','address','mobile'])->first();
        $content = Content::where('ID', 1)->get(['content_text'])->first();
        return view('frontend.pages.account-privacy-terms', compact('fullname', 'agent', 'userid', 'content', 'logo_pic'));

    }


    public function getInvoiceDetails($vidid){

        $details = AgentBilling::where('video_ID', $vidid)->get();
        return json_encode($details);

    }


    public function getInvoicePDF(Request $request){

        $invoice_arr = array(
            'company' => Input::get('company'),
            'address' => Input::get('address'),
            'suburb' => Input::get('suburb'),
            'state' => Input::get('state'),
            'postcode' => Input::get('postcode'),
        );

//        dd($invoice_arr['company']);
        $bill_date = Input::get('bill_date');

        $video_id = Input::get('video_id');

        $details = AgentBilling::where('video_ID', $video_id)->get();

        $pdf = PDF::loadView('frontend.pages.video-creator.billing-invoice-details-pdf', compact('invoice_arr', 'details', 'video_id', 'bill_date'));
        return $pdf->download('#'. $video_id.$invoice_arr['address'].'_invoice.pdf');

    }


    public function emailInvoice(){

        $invoice_arr = array(
            'video_id' => Input::get('video_id'),
            'bill_date' => Input::get('bill_date'),
            'email' => Input::get('email'),
            'company' => Input::get('company'),
            'address' => Input::get('address'),
            'suburb' => Input::get('suburb'),
            'state' => Input::get('state'),
            'postcode' => Input::get('postcode'),
        );

        $videoid = Input::get('video_id');
        $userid = Auth::user()->id;
        $invoices = AgentBilling::where('video_ID', $videoid)->get();

//        dd($videoid);

        Mail::send('emails.invoiceEmailTemplate', ['invoice_arr' => $invoice_arr, 'invoices' => $invoices], function ($message) {
            $to_email = Input::get('email');
            $videoid = Input::get('video_id');
            $address = Input::get('address');

            $message->from('ivy@revid.com.au', 'Ivy Lane');
            $message->to($to_email)->subject('Invoice - #' . $videoid . $address );
        });

        return redirect()->route('account-billing-history');

    }


    public function taxInquiry()
    {

        $email = Auth::user()->email;
        $fullname = Auth::user()->name;
        $userid = Auth::user()->id;
        $logo = Auth::user()->logo_user;

        $video_id = Input::get('video_id');

        //path for logo pic
//        $username = Auth::user()->name;
        $username = preg_replace('/\s/', '', Session::get('fullname'));
        $path = '/storage/client_images/' . $username . '/general_images/';
        $logo_pic = $path . $logo;

        $invoice = AgentInvoiceList::where('agent_ID', $userid)->where('video_ID', $video_id)->get()->first();
        $details = AgentBilling::where('video_ID', $video_id)->get();

        $agent = Agent::where('email', $email)->get(['role_title', 'name_agency', 'group', 'email', 'address', 'mobile', 'address', 'suburb', 'state', 'postcode'])->first();
        return view('frontend.pages.tax-invoice', compact('fullname', 'agent', 'details', 'invoice', 'logo_pic'));

    }

    public function updateSurgeOffer()
    {

        $userid = Auth::user()->id;
        $surge_offer = Input::get('surgeoffer');

        $surge_arr = array(
            'surge_offer_option' => $surge_offer[0]
        );

        AgentPreferences::where('agent_ID', $userid)->update($surge_arr);

        return redirect('/account/video-tracker');

    }

    public function getSurgeDetails($vidid)
    {
        $userid = Auth::user()->id;
        $details = videoProgress::where('video_ID', $vidid)->where('agent_ID', $userid)->first();
        return json_encode($details);
    }

    public function updateSurgeVideo()
    {
        $vid = Input::get('vid');
        $userid = Auth::user()->id;

        $surgeoption = Input::get('surgeoption');

        $surge_arr = array(
            'surge_offer' => $surgeoption[0]
        );

        videoProgress::where('agent_ID', $userid)->where('video_ID', $vid)->update($surge_arr);

        return redirect('/account/video-tracker');

    }


}
