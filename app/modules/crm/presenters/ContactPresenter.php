<?php

namespace Dashboard\App\Crm;
use McCool\LaravelAutoPresenter\BasePresenter;

//Pull in the models required for this record
use Dashboard\App\Crm\Contact as Model;
use Dashboard\App\Crm\Action as Action;
use Dashboard\App\Crm\Note as Note;
use Dashboard\App\Crm\Tag as Tag;
use Dashboard\App\Admin\User as User;

use \Carbon;

class ContactPresenter extends BasePresenter {

     public function __construct(Model $object)
    {
        $this->resource = $object;
    }

    public function fullName()
    {
        //Do we have first name?
        if ( isset($this->resource->first_name) )
            return 'This is ' . $this->resource->first_name . ' ' . $this->resource->last_name;
        
        //if not, do we have title?
        if ( isset($this->resource->title) )
            return 'This is ' . $this->resource->title . ' ' . $this->resource->last_name;
        
        //If not, put 
        return 'You only know this contact by their surname (' . $this->resource->last_name . ')';
    }

    public function created_at()
    {
        return $this->resource->created_at->diffForHumans();
    }

    public function getNotes()
    {
        // return Note::where('contact_id', $this->resource->id)->get();
        // return Note::where('contact_id', $this->resource->id)->get();
        //return Note::with('user')->get();
    }

    public function getActions()
    {
        //Get associated records
        //$this->resources = Action::get() 


        return $this->resource->actions;
    }

    public function user_name($user_id)
    {
        $user = User::find($user_id);

        return $user->first_name . ' ' . $user->last_name;
    }

}