<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Creitive\Breadcrumbs\Breadcrumbs;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Mail\MessageSent;
use App\Message;
use Mail;
use Helper;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs = new Breadcrumbs();
        $breadcrumbs->addCrumb('Admin', 'admin')
        ->addCrumb('Messages')
        ->setCssClasses('breadcrumb')
        ->setDivider('')
        ->render();

        return view('admin/messages/index', ['bread' => $breadcrumbs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = [
            'body' => 'Message',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'location' => 'Location',
        ];

        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|max:50|min:3',
            'email' => 'max:50',
            'phone' => 'max:25',
            'location' => 'max:25',
            'body' => 'required|string|max:1000|min:3',
        ],[],$attributes)->validate();

        $message = new Message();
        $message->fill($request->all());
        $message->save();

        Mail::to('waynedemetra@gmail.com', 'zickpranks@gmail.com')->send(new MessageSent($message));

        return redirect()->route('home')->with('success', 'Thank you for contacting us, you will hear back from us shortly.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Message::findOrFail($id);
        $message->read = true;
        $message->save();

        $breadcrumbs = new Breadcrumbs();
        $breadcrumbs->addCrumb('Admin', 'admin')
        ->addCrumb('Messages', 'messages')
        ->addCrumb('View')
        ->setCssClasses('breadcrumb')
        ->setDivider('')
        ->render();


        return view('admin/messages/show', ['message' => $message, 'bread' => $breadcrumbs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();

        $notification = array(
            'message' => 'Message deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect('admin/messages')->with($notification);
    }

       /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function markAllRead()
    {
        $affected = DB::table('messages')->where('read', '=', 0)->update(array('read' => 1));

        $notification = array(
            'message' => 'Messages updated successfully!',
            'alert-type' => 'success'
        );
        return redirect('admin/messages')->with($notification);
    }

}
