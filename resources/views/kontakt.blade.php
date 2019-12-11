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
                    <h2 class="mb-2">Katedrový koordinátori</h2>
                </div>
                <div class="container">

                    <h2 class="mb-2">Filozofická fakulta:</h2>

                    <table class="table table-dark table-striped">
                        <thead>
                        <tr>
                            <th>Meno</th>
                            <th>Mobilný telefon</th>
                            <th>Email</th>
                            <th>Katedra:</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Mgr. PaedDr. Pavol Burcl, PhD.</td>
                            <td>037/6408 372</td>
                            <td>pburcl@ukf.sk</td>
                            <td>Jazykové centrum</td>

                        </tr>
                        <tr>
                            <td>Mgr. Alena Mikulášová, PhD.</td>
                            <td>037/6408 397</td>
                            <td>amikulasova@ukf.sk</td>
                            <td>Katedra histórie</td>

                        </tr>
                        <tr>
                            <td>Mgr. Eva Bútorová, PhD.</td>
                            <td>037/6408 411 </td>
                            <td>ebutorova@ukf.sk</td>
                            <td>Katedra žurnalistiky</td>

                        </tr>
                        </tbody>
                    </table>

                    <h2 class="mb-2">Fakulta prírodných vied:</h2>

                    <table class="table table-dark table-striped">
                        <thead>
                        <tr>
                            <th>Meno</th>
                            <th>Mobilný telefon</th>
                            <th>Email</th>
                            <th>Katedra:</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>PaedDr. Viera Michaličková, PhD.</td>
                            <td>037/6408 674</td>
                            <td>vmichalickova@ukf.sk</td>
                            <td>Katedra informatiky</td>

                        </tr>
                        <tr>
                            <td>PaedDr. Janka Medová, PhD.</td>
                            <td>037/6408 691 </td>
                            <td>jmedova@ukf.sk</td>
                            <td>Katedra matematiky</td>

                        </tr>
                        <tr>
                            <td>doc. Ing. Melánia Feszterová, PhD.</td>
                            <td>037/6408 657</td>
                            <td>mfeszterova@ukf.sk</td>
                            <td>Katedra chémie</td>

                        </tr>
                        </tbody>
                    </table>

                    <h2 class="mb-2">Fakulta stredoeurópskych štúdií:</h2>

                    <table class="table table-dark table-striped">
                        <thead>
                        <tr>
                            <th>Meno</th>
                            <th>Mobilný telefon</th>
                            <th>Email</th>
                            <th>Katedra:</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>PaedDr. Viera Michaličková, PhD.</td>
                            <td>037/6408 674</td>
                            <td>vmichalickova@ukf.sk</td>
                            <td>Katedra informatiky</td>

                        </tr>
                        <tr>
                            <td>PaedDr. Janka Medová, PhD.</td>
                            <td>037/6408 691 </td>
                            <td>jmedova@ukf.sk</td>
                            <td>Katedra matematiky</td>

                        </tr>
                        <tr>
                            <td>doc. Ing. Melánia Feszterová, PhD.</td>
                            <td>037/6408 657</td>
                            <td>mfeszterova@ukf.sk</td>
                            <td>Katedra chémie</td>

                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
@endsection
