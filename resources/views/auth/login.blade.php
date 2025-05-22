<x-panel.layout>
    <div class="form-screen">
        <a href="/" class="spur-logo"><b>Koda-Jobs</b></a>
        <div class="card account-dialog">
            <div class="card-header bg-primary text-white text-center">Login</div>
            <div class="card-body">
                <form action="/login" method="POST">
                    @csrf
                    <div class="py-2">
                        <x-panel.forms.input placeholder='Email' type="email" name="email" />
                        <x-panel.forms.input placeholder='Password' type="password" name="password" />
                    </div>

                    <x-panel.forms.button redirectTitle="Dont have an account?"
                        redirect="/register">Login</x-panel.forms.button>
                </form>
            </div>
        </div>


    </div>



</x-panel.layout>
