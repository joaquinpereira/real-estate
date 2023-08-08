<?php

namespace App\Http\Livewire;

use App\Events\SendMailContact;
use Livewire\Component;

use App\Models\Contact as Model;

class Contact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;

    public $success;

    protected $rules = [
        'name' => 'required|min:3|max:255',
        'email' => 'email|max:255',
        'phone' => 'nullable|numeric|digits:10',
        'subject'=>'required|min:3|max:255',
        'message' => 'required|min:10|max:4096'
    ];

    public function contactFormSubmit()
    {
        $validatedData = $this->validate();

        $model = Model::create($validatedData);

        SendMailContact::dispatch($model);

        $this->success = 'Thank you for reaching out to us!';

        $this->clearFields();
    }

    private function clearFields()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->subject = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact')
            ->extends('layouts.properties')
            ->section('content');
    }
}
