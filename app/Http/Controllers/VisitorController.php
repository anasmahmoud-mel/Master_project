<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitor = Visitor::all();

      
        return view('dashboard_view.index_visitor', compact('visitor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visitors.create_visitor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'login_name' => 'required',
            'login_email' => 'required',
            'login_password' => 'required',

        ]);

        Visitor::create($request->all());

        //return redirect()->route('visitors.index')
        return redirect('jurny/account');
           // ->with('success', 'visitor created successfully.');
    }
    public function storee(Request $request)
    {
        $request->validate([

            'login_name' => 'required',
            'login_email' => 'required',
            'login_password' => 'required',

        ]);

        Visitor::create($request->all());

        //return redirect()->route('visitors.index')
        return redirect('dashboard/visitors');
           // ->with('success', 'Post created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show(Visitor $visitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        //return view('edit_visitor', compact('visitor'));
         return view('dashboard_view.edit_visitor', compact('visitor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitor $visitor)
    {
        $request->validate([

            'login_name'     =>'required',
            'login_email'    =>'required',
            'login_password' =>'required'
        ]);
        $visitor->update($request->all());

        return redirect('/dashboard/visitors');
        // ->route('dashboard_view.index_visitor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $visitor)
    {
        $visitor->delete();

        return redirect('/dashboard/visitors');
        // ->route('visitors.dashboard_view.index_visitor');
    }
}
