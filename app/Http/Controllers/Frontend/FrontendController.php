<?php
 
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Mission;
use App\Model\Vission;
use App\Model\Contact;
use App\Model\News_event;
use App\Model\Service;
use App\Model\About;
use App\Model\Banner;
use App\Model\Comm;
use Mail; 
class FrontendController extends Controller
{
    public function index(){
    	$data['logo'] = Logo::first();
    	$data['sliders'] = Slider::all();
    	$data['mission'] = Mission::first();
    	$data['vission'] = Vission::first();
    	$data['contact'] = Contact::first();
    	$data['news_events'] = News_event::orderBy('date','desc')->get();
        $data['services'] = Service::all();
        $data['banner'] = Banner::first();
    	return view('frontend.layouts.home',$data);
    } 
    public function aboutus(){
        $data['banner'] = Banner::first();
    	$data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['about'] = About::first();
    	return view('frontend.single_page.about-us',$data);
    }

    public function contactus(){
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
    	return view('frontend.single_page.contact-us',$data);
    }

    public function newsdetails($id){ 
        $data['banner'] = Banner::first();
    	$data['logo'] = Logo::first();
    	$data['contact'] = Contact::first();
    	$data['news'] = News_Event::find($id);
    	return view('frontend.single_page.news-details',$data);
    }

     public function ourmission(){
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['mission'] = Mission::first();
        return view('frontend.single_page.our-mission',$data);
    }
    public function ourvission(){
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['vission'] = Vission::first();
        return view('frontend.single_page.our-vission',$data);
    }
     public function ournews(){
        $data['banner'] = Banner::first();
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['news_events'] = News_Event::orderBy('date','desc')->get(); 
        return view('frontend.single_page.our-news',$data);
    }

    public function contactstore(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'address'=>'required',
            'mobile_no'=>'required',
            'msg'=>'required',
            'email'=>'required'

        ]);

        $con = new Comm();
        $con->name = $request->name;
        $con->email = $request->email;
        $con->mobile_no = $request->mobile_no;
        $con->address = $request->address;
        $con->msg = $request->msg;
        $con->save();

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'mobile_no' => $request->mobile_no,
            'address' => $request->address,
            'msg' => $request->msg
        );

        \Mail::send('frontend.emails.contact',$data, function($message) use($data){
            $message->from('tcpl5158806@gmail.com','TCPL5158806 STIPEND');
            $message->to($data['email']);
            $message->subject('Magician');
        });

        return redirect()->back()->with('success','Your message has been sent..');
    }
}
