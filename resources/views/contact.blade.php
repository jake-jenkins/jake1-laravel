@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<h1 class="text-5xl my-16 text-indigo-700 font-bold">Contact</h1>
<form>

<label for="name">Name</label>
<input type="text" name="name" id="name" class="border border-indigo-700 p-2 w-full mt-1" />

<label for="email">Email</label>
<input type="text" name="email" id="email" class="border border-indigo-700 p-2 w-full mt-1" />

<label for="message">Message</label>
<textarea name="message" id="message" class="border border-indigo-700 p-2 w-full mt-1"></textarea>
<button class="bg-indigo-800 px-4 py-2 text-white">Send</button>
</form>
            
@endsection
