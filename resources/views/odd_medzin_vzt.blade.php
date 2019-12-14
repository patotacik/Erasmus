@extends('layout.mainlayout')

@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url({{ URL::asset('images/inf.jpg')}});"
         data-stellar-background-ratio="0.5" xmlns:color="http://www.w3.org/1999/xhtml">
    </div>


    <section class="ftco-section">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Prorektorka pre medzinárodné vzťahy</span>
                    <h2 class="mb-2">Informácie</h2>
                </div>

            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/medzin_vsth.jpg);">
                </div>
                <div class="col-md-6 wrap-about py-md-5 ftco-animate">
                    <div class="heading-section p-md-5">
                        <h2 class="mb-4">Prorektorka pre medzinárodné vzťahy</h2>
                        <h2 class="mb-3">PhDr. Martina Pavlíková, PhD.</h2>

                        <a>absolvovala štúdium anglického jazyka a literatúry na Pedagogickej fakulte Univerzity Komenského v Bratislave v roku 2005. Doktorandské štúdium absolvovala v študijnom odbore kulturológia na Filozofickej fakulte Univerzity Konštantína Filozofa v Nitre v roku 2016. Odvtedy vedecky a pedagogicky pôsobí na Katedre žurnalistiky Filozofickej fakulty.
                            Absolvovala prednáškové a vedeckovýskumné pobyty na Akademii vied ČR, na Karlovej Univerzite v Prahe, na Pedagogickej Univerzite v Krakove, taktiež na University of Toronto, University of Ottawa, University of Buenos Aires, University of Skopje, University of Sevilla, University of Granada a St. Olaf College v USA.
                            Je členkou medzinárodných vedeckých organizácií v Slovinsku, v Kanade, v Španielsku a v Argentíne. Výskumne sa venuje literatúre anglofónnych krajín, etike v masmédiách a moderným trendom vo výtvarnom umení. V rámci pôsobenia na UKF niekoľkokrát získala Cenu rektora za medzinárodne akceptovanú publikačnú činnosť a participovala na viacerých medzinárodných projektoch. Má bohaté pracovné skúsenosti s nadväzovaním a rozvíjaním pracovných vzťahov so zahraničnými vysokoškolskými a vedeckými inštitúciami, ako aj s predstaviteľmi zahraničných zastupiteľských úradov na Slovensku i v zahraničí.
                            Prorektorkou pre medzinárodné vzťahy je od 3. decembra 2018.</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex mb-5 contact-info justify-content-center">
                <div class="col-md-8">
                    <div class="row mb-5">
                        <div class="col-md-4 text-center py-4">
                            <div class="icon mb-3 d-flex align-items-center justify-content-center">
                                <span class="icon-map-o"></span>
                            </div>
                            <p><span>Address:</span> Oddelenie pre medzinárodné vzťahy
                                Tr. A. Hlinku 1
                                949 74 Nitra</p>
                        </div>
                        <div class="col-md-4 text-center border-height py-4">
                            <div class="icon mb-3 d-flex align-items-center justify-content-center">
                                <span class="icon-mobile-phone"></span>
                            </div>
                            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                        </div>
                        <div class="col-md-4 text-center py-4">
                            <div class="icon mb-3 d-flex align-items-center justify-content-center">
                                <span class="icon-envelope-o"></span>
                            </div>
                            <p><span>Email:</span> <a href="mailto:info@yoursite.com">mpavlikova@ukf.sk</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="container">
        <h2>Ďalšie kontakty</h2>
        <p>Oddelenie pre medzinárodné vzťahy</p>
        <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th>Meno</th>
                <th>Mobilný telefon</th>
                <th>Email</th>
                <th>Označenie kancelárie:</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Ing. Silvia Hrozenská, PhD.</td>
                <td>+421 948 261622</td>
                <td>shrozenska@ukf.sk</td>
                <td>THA217</td>

            </tr>
            <tr>
                <td>Ing. Anita Garajová, PhD.</td>
                <td>+421 37 6408 031</td>
                <td>agarajova@ukf.sk</td>
                <td></td>

            </tr>
            <tr>
                <td>Ing. Katarína Butorová, PhD.</td>
                <td>+421 37 6408 031</td>
                <td>kbutorova@ukf.sk</td>
                <td>THA211</td>

            </tr>
            </tbody>
        </table>
    </div>
@endsection
