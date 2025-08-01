<x-layout>
    <section class="container my-5">
        <h1 class="text-center display-6">Registrati</h1>
        <div class="row">
            <div class="col-12">
                <form class="rounded shadow p-5" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="userName" class="form-label">Inserisci Nome</label>
                        <input type="text" class="form-control" id="userName" aria-describedby="emailHelp" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Inserisci Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Inserisci Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPasswordConfirmation" class="form-label">onferma Password</label>
                        <input type="password" class="form-control" id="exampleInputPasswordConfirmation" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
        </div>
    </section>
</x-layout>
