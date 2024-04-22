<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use DB;
use App\Services\User1Service;

Class User1Controller extends Controller {

    use ApiResponser;

    
    public $user1Service;
    
    
    
    public function __construct(User1Service $user1Service){
        $this->user1Service = $user1Service;
    }

    //Index
    public function index()
    {
        return $this->successResponse($this->user1Service->obtainUsers1());
    }

    // Add User
    public function add(Request $request )
    {
        return $this->successResponse($this->user1Service->createUser1($request->all(),Response::HTTP_CREATED));
    }

    //Show ID
    public function show($id)
    {
        return $this->successResponse($this->user1Service->obtainUser1($id));
    }

    //Update
    public function update(Request $request,$id)
    {
        return $this->successResponse($this->user1Service->editUser1($request->all(),$id));
    }

    // Delete
    /**
    * Remove an existing user
    * @return Illuminate\Http\Response
    */
    public function delete($id)
    {
        return $this->successResponse($this->user1Service->deleteUser1($id));
    }
}   