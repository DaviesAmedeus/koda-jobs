<x-auth.auth-layout title="Login">
    <form action="/login" method="POST" >

       <div class="py-2">
        <x-auth.auth-input placeholder='Email' type="email" name="email" />
        <x-auth.auth-input placeholder='Password' type="password" name="password" />
       </div>

       <x-auth.auth-button redirectTitle="Dont have an account?" redirect="/register">Login</x-auth.auth-button>



    </form>


</x-auth.auth-layout>
