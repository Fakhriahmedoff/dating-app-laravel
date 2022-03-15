<?php

namespace App\Http\Controllers\Api;

use App\CommandBus\CommandBusInterface;
use App\Http\Controllers\AbstractController;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\Abstracts\AbstractUserRepository;
use App\Repositories\Concretes\UserRepository;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public $user;
    public CommandBusInterface $bus;

    public function __construct(AbstractUserRepository $user, CommandBusInterface $bus)
    {
        $this->user = $user;
        $this->bus = $bus;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUserDetails()
    {

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
