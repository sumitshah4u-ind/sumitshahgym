<?php

namespace App\Http\Controllers;

use App\Members;
use Illuminate\Http\Request;
use App\Repositories\MembersRepository;

class MembersController extends Controller
{

// The Members repository instance.

protected $members;

public function __construct(MembersRepository $members)
{
    // $this->middleware('auth');

    $this->members = $members;
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //List all Members
        $data = [
          'members' => $this->members->listMembers()
        ];

        return view('admin.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //add a new member

        $data = [
          'members' => $this->members->listMembers()
        ];

        return view('admin.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //save new Member
        $member = \App\Members::create([
          'firstName' => $request->firstName,
          'lastName' => $request->lastName,
          'email' => $request->email,
          'address1' => $request->address1,
          'address2' => $request->address2,
          'postcode' => $request->postcode,
          'DOB' => $request->DOB,
          'phone' => $request->phone,
          'subscription' => $request->subscription
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function show(Members $members, Request $request)
    {
        //
        $member_id = str_after($request->path(), 'members/');

        $data = [
          'member' => $members::find($member_id),
        ];
        return view('admin.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function edit(Members $members)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Members $members)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function destroy(Members $members)
    {
        //
    }
}
