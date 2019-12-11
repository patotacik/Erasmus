@extends('layout.mainlayout')

@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{ URL::asset('images/inf.jpg')}});"
         data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
    </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Kontakty</span>
                    <h2 class="mb-2">Fakultný koordinátori</h2>
                </div>
                <div class="container">
                    <table class="table table-dark table-striped">
                        <thead>
                        <tr>
                            <th>Meno</th>
                            <th>Mobilný telefon</th>
                            <th>Email</th>
                            <th>Fakulta:</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Mgr. Martin Drlík, PhD.</td>
                            <td>037/6408 686</td>
                            <td>mdrlik@ukf.sk</td>
                            <td>Fakulta prírodných vied</td>

                        </tr>
                        <tr>
                            <td>prof. PaedDr. Bernard Garaj, CSc.</td>
                            <td>037/6408 451</td>
                            <td>bgaraj@ukf.sk</td>
                            <td>Filozofická fakulta</td>

                        </tr>
                        <tr>
                            <td>doc. PhDr. Adriana Récka, PhD.</td>
                            <td>037/6408 224</td>
                            <td>arecka@ukf.sk</td>
                            <td>Pedagogická fakulta</td>

                        </tr>
                        <tr>
                            <td>PhDr. Miroslava Čerešníková, PhD.</td>
                            <td>037/6408 779</td>
                            <td>mceresnikova@ukf.sk</td>
                            <td>Fakulta sociálnych vied a zdravotníctva</td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
