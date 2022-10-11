<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <table class="table table-striped table-dark table-hover">
                    <tr class="text-uppercase">
                        <th>Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Salary</th>
                    </tr>

                    <?php

                    $data = '[
                    {
                    "name": "Bianca B. Mack",
                    "email": "dui.Fusce@miDuis.org",
                    "city": "Tarzo",
                    "salary": 35237
                    },
                    {
                    "name": "Winter X. Hays",
                    "email": "accumsan.sed@tellusimperdiet.net",
                    "city": "Broken Arrow",
                    "salary": 20872
                    },
                    {
                    "name": "Ginger U. David",
                    "email": "arcu.Morbi.sit@sagittis.ca",
                    "city": "Jhelum",
                    "salary": 53739
                    },
                    {
                    "name": "Wyoming J. Franklin",
                    "email": "accumsan.laoreet.ipsum@molestietortor.edu",
                    "city": "Jasper",
                    "salary": 89042
                    },
                    {
                    "name": "Odessa G. Bass",
                    "email": "elementum.at@ultrices.co.uk",
                    "city": "Imphal",
                    "salary": 14535
                    },
                    {
                    "name": "Laura S. Silva",
                    "email": "purus@bibendumsed.com",
                    "city": "Las Cabras",
                    "salary": 31758
                    },
                    {
                    "name": "Thaddeus S. Hurst",
                    "email": "vitae.posuere.at@magnaSedeu.org",
                    "city": "Hindeloopen",
                    "salary": 58674
                    },
                    {
                    "name": "Hedy U. Cannon",
                    "email": "nunc.ullamcorper@a.ca",
                    "city": "Cap-Saint-Ignace",
                    "salary": 41169
                    },
                    {
                    "name": "Cecilia W. Palmer",
                    "email": "augue.Sed.molestie@est.com",
                    "city": "Castlegar",
                    "salary": 11813
                    },
                    {
                    "name": "Macon W. Dejesus",
                    "email": "id@vel.com",
                    "city": "Teralfene",
                    "salary": 75396
                    },
                    {
                    "name": "Breanna W. Perkins",
                    "email": "adipiscing.non.luctus@netus.ca",
                    "city": "Serralunga dAlba",
                    "salary": 69402
                    },
                    {
                    "name": "Bradley Y. Pratt",
                    "email": "ipsum.dolor.sit@duiCumsociis.edu",
                    "city": "Couillet",
                    "salary": 42282
                    },
                    {
                    "name": "Alma I. Harrison",
                    "email": "at.egestas.a@pretiumaliquetmetus.edu",
                    "city": "Ledeberg",
                    "salary": 72039
                    },
                    {
                    "name": "Venus W. Trujillo",
                    "email": "ornare@sempercursus.co.uk",
                    "city": "San Floriano del Collio",
                    "salary": 21283
                    },
                    {
                    "name": "Signe J. Stanley",
                    "email": "molestie.dapibus.ligula@arcu.net",
                    "city": "Harlow",
                    "salary": 61926
                    },
                    {
                    "name": "Neil O. Flores",
                    "email": "nunc.interdum.feugiat@erosNam.co.uk",
                    "city": "Fort Good Hope",
                    "salary": 42627
                    },
                    {
                    "name": "Zane L. Dickson",
                    "email": "Phasellus.in@duinec.edu",
                    "city": "Bregenz",
                    "salary": 63402
                    },
                    {
                    "name": "Rigel L. Bishop",
                    "email": "vel.quam.dignissim@a.ca",
                    "city": "Qambar Shahdadkot",
                    "salary": 71572
                    },
                    {
                    "name": "Zelenia N. Freeman",
                    "email": "enim.Mauris.quis@ametnulla.org",
                    "city": "Vaux-sous-ChŽvremont",
                    "salary": 91973
                    },
                    {
                    "name": "Oliver L. Sherman",
                    "email": "lorem.lorem.luctus@elit.edu",
                    "city": "Kamoke",
                    "salary": 97148
                    },
                    {
                    "name": "Tobias H. Herrera",
                    "email": "non@orci.net",
                    "city": "Betim",
                    "salary": 22849
                    },
                    {
                    "name": "Stephanie Z. Gates",
                    "email": "eu@iaculisnec.org",
                    "city": "Whitby",
                    "salary": 58621
                    },
                    {
                    "name": "Alfonso R. Galloway",
                    "email": "ac@elit.net",
                    "city": "Laken",
                    "salary": 69748
                    },
                    {
                    "name": "Jeremy Q. Hewitt",
                    "email": "Cras.eu.tellus@semmolestie.co.uk",
                    "city": "Rochester",
                    "salary": 24633
                    },
                    {
                    "name": "Tiger F. Kaufman",
                    "email": "sodales.nisi@senectusetnetus.co.uk",
                    "city": "MabomprŽ",
                    "salary": 33513
                    },
                    {
                    "name": "Lewis T. Dunn",
                    "email": "malesuada.augue.ut@cursusluctusipsum.org",
                    "city": "Buizingen",
                    "salary": 48646
                    },
                    {
                    "name": "Miranda L. Mercer",
                    "email": "Sed@egestas.ca",
                    "city": "Sahiwal",
                    "salary": 49930
                    },
                    {
                    "name": "Ethan B. Shepard",
                    "email": "sagittis.lobortis@quis.co.uk",
                    "city": "Ekeren",
                    "salary": 11156
                    },
                    {
                    "name": "Herrod K. Yang",
                    "email": "at.libero@maurisipsum.net",
                    "city": "Thurso",
                    "salary": 74889
                    },
                    {
                    "name": "Yoko L. Short",
                    "email": "rutrum.urna.nec@mollisneccursus.com",
                    "city": "Pitalito",
                    "salary": 50163
                    },
                    {
                    "name": "Steven M. Keller",
                    "email": "Sed.et.libero@Maecenaslibero.com",
                    "city": "Nagaon",
                    "salary": 90347
                    },
                    {
                    "name": "Kyla R. Sharpe",
                    "email": "neque@etmagnis.net",
                    "city": "Casole dElsa",
                    "salary": 89359
                    },
                    {
                    "name": "Linus E. Madden",
                    "email": "non.luctus.sit@pretium.edu",
                    "city": "Matamoros",
                    "salary": 18940
                    },
                    {
                    "name": "Minerva G. Wall",
                    "email": "mauris@dis.co.uk",
                    "city": "Emmen",
                    "salary": 66306
                    },
                    {
                    "name": "Lareina P. Erickson",
                    "email": "mollis.Phasellus.libero@nonsollicitudina.net",
                    "city": "Mildura",
                    "salary": 36103
                    },
                    {
                    "name": "Barclay U. Gibson",
                    "email": "egestas.nunc@cubiliaCuraePhasellus.org",
                    "city": "Sanquhar",
                    "salary": 22435
                    },
                    {
                    "name": "Kylynn I. Compton",
                    "email": "fermentum@mattis.com",
                    "city": "Drumheller",
                    "salary": 39739
                    },
                    {
                    "name": "Lillian R. Reynolds",
                    "email": "Proin.vel.arcu@cursuspurusNullam.net",
                    "city": "Hamme",
                    "salary": 69039
                    },
                    {
                    "name": "Zeus K. Morse",
                    "email": "urna.justo@inaliquet.org",
                    "city": "Brentwood",
                    "salary": 83384
                    },
                    {
                    "name": "Troy B. Schultz",
                    "email": "ligula.Nullam@velquamdignissim.net",
                    "city": "Butte",
                    "salary": 89123
                    },
                    {
                    "name": "Joshua R. Bush",
                    "email": "Vestibulum.ut@laoreetipsum.org",
                    "city": "Kidderminster",
                    "salary": 99094
                    },
                    {
                    "name": "Cullen P. Cleveland",
                    "email": "sed.dictum@seddictumeleifend.com",
                    "city": "Chepstow",
                    "salary": 38915
                    },
                    {
                    "name": "Eliana Q. Miles",
                    "email": "et.ultrices.posuere@Vivamussit.co.uk",
                    "city": "Kings Lynn",
                    "salary": 17795
                    },
                    {
                    "name": "Tucker U. Castaneda",
                    "email": "non@diamvel.net",
                    "city": "Barranca",
                    "salary": 27758
                    },
                    {
                    "name": "Colby K. West",
                    "email": "aliquet@Nullainterdum.com",
                    "city": "Kaluga",
                    "salary": 64043
                    },
                    {
                    "name": "Vanna O. Cantu",
                    "email": "molestie.dapibus@malesuada.net",
                    "city": "St. Andrews",
                    "salary": 98600
                    },
                    {
                    "name": "Baker H. Berry",
                    "email": "Phasellus.nulla.Integer@tellusjustosit.co.uk",
                    "city": "Longano",
                    "salary": 73795
                    },
                    {
                    "name": "Carissa W. Burks",
                    "email": "interdum@mitemporlorem.org",
                    "city": "HomprŽ",
                    "salary": 75917
                    },
                    {
                    "name": "Rylee R. Acosta",
                    "email": "parturient.montes.nascetur@nonummy.net",
                    "city": "Nancagua",
                    "salary": 17532
                    },
                    {
                    "name": "Timothy F. Wilkinson",
                    "email": "ante@egetmollis.net",
                    "city": "Nocera Umbra",
                    "salary": 29716
                    },
                    {
                    "name": "Aurora F. Griffith",
                    "email": "Nunc.mauris@loremloremluctus.edu",
                    "city": "Dunkerque",
                    "salary": 81540
                    },
                    {
                    "name": "Uta J. Love",
                    "email": "cursus.luctus@nislMaecenas.net",
                    "city": "Oyace",
                    "salary": 78757
                    },
                    {
                    "name": "Amery Z. Merrill",
                    "email": "interdum.Nunc.sollicitudin@iaculisodio.co.uk",
                    "city": "Birecik",
                    "salary": 30811
                    },
                    {
                    "name": "Ora T. Hampton",
                    "email": "nec@ac.org",
                    "city": "Terlago",
                    "salary": 99800
                    },
                    {
                    "name": "Sybill Z. Cohen",
                    "email": "tortor@elitNulla.net",
                    "city": "Husum",
                    "salary": 40027
                    },
                    {
                    "name": "Leilani J. Romero",
                    "email": "vestibulum.nec.euismod@penatibus.org",
                    "city": "Hearst",
                    "salary": 78379
                    },
                    {
                    "name": "Caryn G. Murray",
                    "email": "Quisque.ornare.tortor@Suspendissesagittis.net",
                    "city": "Ebenthal in Kärnten",
                    "salary": 51030
                    },
                    {
                    "name": "Dahlia Z. Miller",
                    "email": "Donec.fringilla@scelerisquemollisPhasellus.ca",
                    "city": "Montemignaio",
                    "salary": 71027
                    },
                    {
                    "name": "Dean H. Mullins",
                    "email": "lacus@dictumcursusNunc.net",
                    "city": "Rionero in Vulture",
                    "salary": 40069
                    },
                    {
                    "name": "Colton N. Morris",
                    "email": "vitae@acturpis.ca",
                    "city": "Gojra",
                    "salary": 89268
                    },
                    {
                    "name": "Libby Y. Fischer",
                    "email": "eget@natoque.org",
                    "city": "Albury",
                    "salary": 87293
                    },
                    {
                    "name": "Sebastian F. Owens",
                    "email": "Ut@famesac.com",
                    "city": "La Cruz",
                    "salary": 67502
                    },
                    {
                    "name": "Chastity D. Wells",
                    "email": "Vivamus@euismod.org",
                    "city": "Maple Ridge",
                    "salary": 74210
                    },
                    {
                    "name": "Gwendolyn H. Simmons",
                    "email": "mauris.sit.amet@odio.edu",
                    "city": "Reus",
                    "salary": 38083
                    },
                    {
                    "name": "Dustin B. Butler",
                    "email": "Donec.at.arcu@ligulaNullamfeugiat.edu",
                    "city": "Huancayo",
                    "salary": 26254
                    },
                    {
                    "name": "Melissa F. Fitzgerald",
                    "email": "fringilla.ornare.placerat@orci.edu",
                    "city": "Chancay",
                    "salary": 59640
                    },
                    {
                    "name": "Adrian Q. Melton",
                    "email": "et.pede@quamvel.edu",
                    "city": "Mayerthorpe",
                    "salary": 15242
                    },
                    {
                    "name": "Jacob Z. Wood",
                    "email": "pede.ultrices@arcu.ca",
                    "city": "Traun",
                    "salary": 22405
                    },
                    {
                    "name": "Aphrodite D. Collier",
                    "email": "commodo@nuncIn.edu",
                    "city": "Compiano",
                    "salary": 59252
                    },
                    {
                    "name": "Diana O. Kaufman",
                    "email": "a.arcu.Sed@purusin.co.uk",
                    "city": "Vichte",
                    "salary": 32128
                    },
                    {
                    "name": "Hamilton T. Short",
                    "email": "scelerisque.dui.Suspendisse@felisullamcorperviverra.net",
                    "city": "Gravelbourg",
                    "salary": 74132
                    },
                    {
                    "name": "Miriam Q. Keller",
                    "email": "mauris.erat.eget@sitamet.edu",
                    "city": "Deline",
                    "salary": 84965
                    },
                    {
                    "name": "Bert X. Valdez",
                    "email": "mi.Aliquam.gravida@eutempor.co.uk",
                    "city": "Delmenhorst",
                    "salary": 60443
                    },
                    {
                    "name": "Abel Y. Hewitt",
                    "email": "molestie.Sed@ultriciesadipiscingenim.com",
                    "city": "Castelseprio",
                    "salary": 30413
                    },
                    {
                    "name": "Dalton Q. Chang",
                    "email": "metus.Aenean@acfeugiatnon.org",
                    "city": "Villa Latina",
                    "salary": 71721
                    },
                    {
                    "name": "Rinah E. Strickland",
                    "email": "enim.Etiam@id.co.uk",
                    "city": "Ruvo del Monte",
                    "salary": 16692
                    },
                    {
                    "name": "Ryan J. Lamb",
                    "email": "vulputate.dui@actellusSuspendisse.co.uk",
                    "city": "Rocky Mountain House",
                    "salary": 54016
                    },
                    {
                    "name": "Natalie T. Dalton",
                    "email": "rhoncus@Nam.co.uk",
                    "city": "Clermont-Ferrand",
                    "salary": 27032
                    },
                    {
                    "name": "Olivia P. Nash",
                    "email": "nec@Nullam.co.uk",
                    "city": "Montenero Val Cocchiara",
                    "salary": 25505
                    },
                    {
                    "name": "Macey F. Moss",
                    "email": "nisi.magna.sed@intempuseu.co.uk",
                    "city": "Duque de Caxias",
                    "salary": 39487
                    },
                    {
                    "name": "Victoria F. Melton",
                    "email": "elit@pedeac.ca",
                    "city": "Olympia",
                    "salary": 53419
                    },
                    {
                    "name": "Daria Q. Payne",
                    "email": "justo.sit.amet@facilisisfacilisismagna.edu",
                    "city": "Kharmang",
                    "salary": 76051
                    },
                    {
                    "name": "Kelly W. Mcfadden",
                    "email": "mus.Proin@lorem.ca",
                    "city": "Retford",
                    "salary": 47463
                    },
                    {
                    "name": "Astra R. Mcpherson",
                    "email": "ligula.Nullam@tempusmauris.net",
                    "city": "Sherborne",
                    "salary": 68166
                    },
                    {
                    "name": "Mariko M. Le",
                    "email": "massa@augueporttitor.ca",
                    "city": "Cartagena",
                    "salary": 41438
                    },
                    {
                    "name": "Brandon S. Thornton",
                    "email": "enim@Suspendissecommodotincidunt.com",
                    "city": "West Jordan",
                    "salary": 88969
                    },
                    {
                    "name": "Cairo F. Witt",
                    "email": "sem.Pellentesque@sagittisDuis.edu",
                    "city": "Wayaux",
                    "salary": 94689
                    },
                    {
                    "name": "Melvin L. Burns",
                    "email": "molestie@orci.co.uk",
                    "city": "Froidchapelle",
                    "salary": 49922
                    },
                    {
                    "name": "Adrian Z. Sanford",
                    "email": "velit@Seddictum.edu",
                    "city": "Tofield",
                    "salary": 41836
                    },
                    {
                    "name": "Cynthia B. Fletcher",
                    "email": "Cras@dictumProin.ca",
                    "city": "Toernich",
                    "salary": 35066
                    },
                    {
                    "name": "Frances J. Rios",
                    "email": "mollis.Phasellus.libero@InloremDonec.com",
                    "city": "Dillingen",
                    "salary": 60700
                    },
                    {
                    "name": "Fulton F. Holman",
                    "email": "tellus.Phasellus@odiotristique.ca",
                    "city": "Oostmalle",
                    "salary": 11269
                    },
                    {
                    "name": "MacKenzie K. Nieves",
                    "email": "Phasellus@metusAeneansed.co.uk",
                    "city": "Jundiaí",
                    "salary": 99621
                    },
                    {
                    "name": "Maggy X. Mcclain",
                    "email": "justo.nec@metusIn.org",
                    "city": "Lelystad",
                    "salary": 87426
                    },
                    {
                    "name": "Madeson S. Houston",
                    "email": "Aliquam.auctor@scelerisquemollisPhasellus.net",
                    "city": "Casacalenda",
                    "salary": 50388
                    },
                    {
                    "name": "Caesar H. Montoya",
                    "email": "dolor.dapibus@porttitor.edu",
                    "city": "Grand Rapids",
                    "salary": 61175
                    },
                    {
                    "name": "Ainsley T. Ball",
                    "email": "nec@eteuismod.com",
                    "city": "Gujrat",
                    "salary": 57714
                    },
                    {
                    "name": "Xander F. Hale",
                    "email": "orci.in@cursusin.edu",
                    "city": "Campinas",
                    "salary": 99831
                    },
                    {
                    "name": "Helen X. Conner",
                    "email": "sagittis.Duis.gravida@Craseu.com",
                    "city": "San Nicolás",
                    "salary": 89571
                    },
                    {
                    "name": "Aiko Y. Leon",
                    "email": "Ut.semper@at.org",
                    "city": "Tramonti di Sopra",
                    "salary": 66457
                    }
                    ]';

                    // convert a string to json array
                    $employees = json_decode($data);

                    foreach ($employees as $person) {
                        echo "<tr>";
                        echo "<td>$person->name</td>";
                        echo "<td>$person->email</td>";
                        echo "<td>$person->city</td>";
                        echo "<td>$person->salary</td>";
                        echo "</tr>";
                    }

                    ?>

                </table>

            </div>
        </div>
    </div>


</body>

</html>