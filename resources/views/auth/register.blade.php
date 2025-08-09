<x-layout>
    <section class="container my-5">
        <h1 class="text-center display-6 m-5">Registrati</h1>
        <div class="row">
            <div class="col-12">
                <form class="formRegister p-5" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="userName" class="form-label">Inserisci Nome</label>
                        <input type="text" class="form-control" id="userName" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="userEmail" class="form-label">Inserisci Email</label>
                        <input type="email" class="form-control" id="userEmail" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Inserisci Password</label>
                        <input type="password" class="form-control" id="inputPassword" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="inputPasswordConfirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="inputPasswordConfirmation" name="password_confirmation">
                    </div>
                    <button type="submit" class="btnRgistrati">Registrati</button>
                </form>
            </div>
        </div>
    </section>
</x-layout>
