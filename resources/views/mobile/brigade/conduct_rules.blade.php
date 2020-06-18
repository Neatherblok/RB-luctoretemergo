@extends('layout.mainlayout')

@section('pageTitle', 'Regels')

@section('content')
    <div class="m-agendaContent text-center pt-3">
        <p class="mt-3">Uiteraard hebben wij als vereniging ook een gedragsreglement, huishoudelijke reglement en
            statuten. Deze vind je hieronder:</p>
    </div>

    <div class="m-row-striped text-left">
        <a id="hide1" onclick="clickedActivity(this)" class="d-flex">
            <div class="col-10">
                <h5>
                    <strong>Gedragsreglement</strong>
                </h5>
            </div>
            <div class="col-2">
                <div id="symbolActivity1">
                    <i class="fas fa-plus"></i>
                </div>
            </div>
        </a>
        <div class="details" id="details1">
            <p>De onderstaande gedragsregels die onze brigade hanteert zijn afgeleid van die van het
                NOC*NSF. Waar begeleider in de gedragsregels is geschreven moet gelezen worden:
                (hulp)instructeur, lesbegeleider of coördinator.</p>
            <p><strong>1. De begeleider moet zorgen voor een omgeving en een sfeer waarbinnen de sporter
                    zich veilig voelt (om te bewegen).</strong></p>
            <p>De sporter moet als mens worden gerespecteerd. Er mag geen onderscheid worden gemaakt naar of
                nadruk worden gelegd op godsdienst, levensovertuiging, politieke gezindheid, ras, geslacht,
                nationaliteit, seksuele gerichtheid, culturele achtergrond, leeftijd, lichamelijke kenmerken
                of burgerlijke staat.</p>
            <p>Dat betekent dat de sporter zich zowel tijdens het sporten maar ook daarbuiten, bijvoorbeeld
                in de kleedruimtes, veilig moet voelen en het gevoel moet hebben dat hij zich – letterlijk –
                vrij kan bewegen.</p>
            <p><strong>2. De begeleider onthoudt zich ervan de sporter te bejegenen op een wijze die de sporter
                    in zijn waardigheid aantast, én verder in het privé-leven van de sporter door te dringen
                    dan nodig is voor het gezamenlijk gestelde doel.</strong></p>
            <p>Hierbij gaat het erom dat de begeleider niet onnodig binnendringt in het privé-leven van de
                sporter, bijvoorbeeld door er vragen over te stellen, afspraken te maken, contact op te
                nemen enzovoort.</p>
            <p><strong>3. De begeleider onthoudt zich van elke vorm van seksueel (machts)misbruik of ongewenste
                    intimiteiten tegenover de sporter.</strong></p>
            <p>De begeleider mag zijn specifieke situatie en relatie niet gebruiken voor doeleinden ten
                eigen nutte die in strijd zijn met zijn verantwoordelijkheid voor de sporter of die de
                grenzen van de relatie overschrijden.</p>
            <p>In de (professionele) relatie met de sporter kunnen bij beide gevoelens ontstaan die zich
                niet verhouden met de relatie tot het trainen, begeleiden en dergelijke. Deze gevoelens
                kunnen bijvoorbeeld zijn: verliefdheid, afkeer of agressie.</p>
            <p>Beide partijen moeten alert zijn op deze gevoelens. De begeleider moet – zelfs als de sporter
                dat verlangt of daartoe uitnodigt – dan ook niet metterdaad ingaan op seksuele en/of al dan
                niet agressieve toenaderingspogingen, dan wel dergelijke toenaderingspogingen zelf
                ondernemen.</p>
            <p><strong>4. Seksuele handelingen en seksuele relaties tussen de begeleider en de jeugdige sporter tot
                    zestien jaar zijn onder geen beding geoorloofd en worden beschouwd als seksueel
                    misbruik.</strong></p>
            <p>Tussen volwassenen en jeugdigen is sprake van een natuurlijk overwicht. Het natuurlijke
                overwicht van de ‘dader’ en angst voor de gevolgen maken het vele malen moeilijker om hem
                ‘lik op stuk’ te geven bij ongewenst gedrag.</p>
            <p><strong>5. De begeleider mag de sporter niet op een zodanige wijze aanraken dat de sporter en/of
                    de begeleider deze aanraking naar redelijke verwachting als seksueel of erotisch van
                    aard zal ervaren, zoals doorgaans het geval zal zijn bij het doelbewust (doen) aanraken
                    van geslachtsdelen, billen en borsten.</strong></p>
            <p>De begeleider dient ervoor te zorgen dat daar waar lichamelijk contact noodzakelijk en
                functioneel is voor de sportbeoefening, dit contact of deze aanrakingen nooit verkeerd – in
                de zin van seksueel intimiderend – kan worden geïnterpreteerd.</p>
            <p><strong> 6. De begeleider onthoudt zich van seksueel getinte verbale intimiteiten. </strong></p>
            <p>Hierbij kan worden gedacht aan:</p>
            <p>• seksueel getinte opmerkingen en insinuaties, zoals grove taal en schuine moppen, onder het
                mom van ‘dat moet kunnen’<br> • het stellen van niet-functionele vragen – vaak onnodig in
                detail – over het seksleven van de sporter.</p>
            <p><strong>7. De begeleider zal tijdens trainingen met respect omgaan met de sporter en de ruimten
                    waarin de sporter zich bevindt, zoals de kleedkamer.</strong></p>
            <p>Gereserveerd en met respect omgaan met de ruimtes waarin de sporter zich kan bevinden,
                betekent dat de sporter zich daar veilig moet voelen, zijn privacy gewaarborgd is en sociale
                controle niet is uitgesloten.</p>
            <p><strong> 8. De begeleider heeft de plicht de sporter te beschermen tegen schade en
                    (machts)misbruik als gevolg van de ongewenste intimiteiten. </strong></p>
            <p>Daar waar bekend of geregeld is wie de belangen van de (jeugdige) sporter behartigt, is de
                begeleider verplicht met deze personen of instanties samen te werken opdat zij hun werk goed
                kunnen uitoefenen.</p>
            <p>Binnen zijn mogelijkheden heeft de begeleider de verantwoordelijkheid voor de veiligheid en
                het welzijn van de sporter. De begeleider zal de daarvoor redelijke en noodzakelijke
                maatregelen moeten nemen ter voorkoming van lichamelijke en geestelijke schade en misbruik,
                veroorzaakt door ongewenste intimiteit.</p>
            <p>De begeleider zal moeten samenwerken met bijvoorbeeld jeugdconsulenten, vertrouwenspersonen
                of ouders of hen van informatie voorzien. De begeleider zal feiten van vertrouwelijke aard,
                aan hem toevertrouwd, te allen tijde dienen te respecteren. Er zullen slechts mededelingen
                aan derden worden gedaan – indien enigszins mogelijk in overleg met de sporter – wanneer de
                begeleider ervan overtuigd is dat de belangen van de sporter of zijn omgeving hiermee zullen
                zijn gediend.</p>
            <p><strong> 9. De begeleider zal er actief op toezien dat deze regels door iedereen die betrokken
                    is bij de sporter worden nageleefd. </strong></p>
            <p>Indien hij gedrag signaleert dat niet in overeenstemming is met deze regels zal hij de
                betreffende persoon daarop aanspreken. De begeleider heeft een voorbeeldfunctie. Hij zal
                maatregelen moeten nemen op het moment dat hij grensoverschrijdend gedrag constateert.</p>
            <p>In eerste instantie dient hij de betreffende persoon erop aan te spreken. De begeleider kan
                hem bijvoorbeeld verwijzen naar een vertrouwenspersoon of hem helpen een klacht in te
                dienen.</p>
            <p><strong>10. In die gevallen waarin de gedragsregels niet (direct) voorzien, ligt het binnen de
                    verantwoordelijkheid van de begeleider in de geest hiervan te handelen.</strong></p>
            <p>Dit betekent dat de begeleider ook alert moet zijn op gedragingen die niet direct seksueel
                intimiderend zijn, maar wel als grensoverschrijdend worden ervaren. Ook in dit geval dienen
                door hem passende maatregelen te worden genomen, zoals het aanspreken van de betreffende
                persoon.</p>
            <p><strong>Wat verstaan we onder ongewenste intimiteiten?</strong></p>
            <p>Een ongewenste intimiteit is elke vorm van gedrag –al dan niet seksueel van aard-, of
                toenadering, in verbale, non-verbale, fysieke of schriftelijke zin, opzettelijk of
                onopzettelijk, die door de persoon die het ondergaat als ongewenst of gedwongen wordt
                ervaren.</p>
            <p>Ongewenste intimiteit kan voorkomen tussen sporters onderling, tussen kader onderling en
                tussen sporters en kader. Het is een breed begrip. Dubbelzinnige grapjes, onverwachte
                aanrakingen en pin-ups in de verzorgingsruimte kúnnen als intimiderend worden ervaren.</p>
            <p>Ook ondubbelzinnige, strafbare vormen van seksueel misbruik, zoals aanranding en
                verkrachting, vallen onder seksuele intimidatie. Dergelijke vormen van seksuele intimidatie
                beginnen vaak met ‘onschuldige’ vormen van intimidatie.</p>
            <p>Ongewenste intimiteit komt het meest voor in relaties waarbij sprake is van een
                machtsverschil. Dat machtsverschil kan te maken hebben met leeftijd (volwassene tegenover
                kind), positie (trainer tegenover sporter) of getal (groep tegenover eenling).</p>
            <p>Naast een sportieve taak heeft een sportbegeleider ook een (weliswaar gedeelde) opvoedkundige
                opdracht. De begeleider is medeverantwoordelijk voor de veiligheid, de gezondheid en het
                welzijn van de (jonge) sporter en voor diens ontwikkeling naar zelfstandigheid. Daarbij moet
                de begeleider zelf de persoonlijke grenzen van de sporter respecteren en de grenzen van
                professioneel gedrag niet overschrijden. Ook moet een begeleider de sporter ondersteunen in
                het zelf stellen van grenzen naar anderen toe.</p>
            <p>De omgang tussen mensen en het lichamelijke contact bij het sporten laten zich niet tot in
                detail regelen. Dat is ook niet de bedoeling van de gedragsregels. Lichamelijk contact kan
                functioneel zijn en een ‘aai over de bol’ kan motiverend en prettig zijn. Aanrakingen en
                bijvoorbeeld het geven van complimentjes moeten in de sport geen taboe worden.</p>
            <p>De gedragsregels zijn richtlijnen voor de begeleider, waarmee seksuele intimidatie kan worden
                voorkomen. Ze geven de grenzen aan van het handelen. Ze fungeren als toetssteen voor het
                gedrag van begeleiders en sporters in concrete situaties. Ze nodigen uit tot nadenken en
                discussiëren over het eigen handelen en dat van anderen in de sportomgeving.</p>
        </div>
    </div>
    <div class="m-row-striped text-left">
        <a id="hide2" onclick="clickedActivity(this)" class="d-flex">
            <div class="col-10">
                <h5>
                    <strong>Huishoudelijk reglement</strong>
                </h5>
            </div>
            <div class="col-2">
                <div id="symbolActivity2">
                    <i class="fas fa-plus"></i>
                </div>
            </div>
        </a>
        <div class="details" id="details2">
            <p><strong>Artikel&nbsp; 1.</strong></p>
            <p>De Reddingsbrigade “Luctor et Emergo” is aangesloten bij de Koninklijke Nederlandse Bond tot
                het redden van Drenkelingen.<br>
                Het terrein der werkzaamheden van de vereniging bestrijkt, voor zover het Zwemmend redden
                betreft, behalve het gebied der Gemeente Terneuzen, dat der omliggende gemeenten, wanneer in
                die gemeenten geen K.N.B. R.D. aangesloten reddingsbrigade bestaat.</p>
            <h1>&nbsp;</h1>
            <h3>LIDMAATSCHAP</h3>
            <p><strong>Artikel 2.</strong></p>
            <p>Niemand der leden kan uit hoofde van zijn lidmaatschap verplicht worden eigen leven in de
                waagschaal te stellen.</p>
            <p><strong>Artikel 3.</strong></p>
            <p>Als werkend lid kunnen toetreden personen, die op 1 januari de leeftijd van 16 jaar hebben
                bereikt en als aspirant-lid zij, die op 1 januari de leeftijd van 16 jaar nog niet hebben
                bereikt doch minstens 6 jaar oud zijn.</p>
            <h1>&nbsp;</h1>
            <h3>CONTRIBUTIE</h3>
            <p><strong>Artikel 4.</strong></p>
            <p>Door het bestuur kan te allen tijde geheel of gedeeltelijk vrijstelling van
                contributiebetaling worden verleend. Het bestuur heeft het recht, voor het volgen van
                cursussen een waarborgsom te eisen, welke naderhand verrekend kan worden. Ereleden, leden
                van verdienste en leden der medische commissie betalen geen contributie. De bijdrage van
                donateurs bedraagt minimum ƒ 5,OO per jaar, die voor ondersteunende verenigingen minstens f
                10,00 per jaar.De contributie voor werkende leden en aspirant-leden wordt telkenjare op de
                algemene vergadering vastgesteld. Zij, die als lid toetreden, wordt een exemplaar van
                statuten en huishoudelijk reglement verstrekt.</p>
            <h1>&nbsp;</h1>
            <h3>BESTUUR</h3>
            <p><strong>Artikel 5.</strong></p>
            <p>Het brigadebestuur wordt gekozen door de algemene vergadering, bedoeld in artikel 15 der
                Statuten.<br>
                Het bestuur bestaat tenminste uit 5 meerderjarige personen, te weten: een voorzitter, een
                secretaris, een penningmeester, een vice-voorzitter, een 2e secretaris en een commissaris.
                Het dagelijks bestuur zal in de kom van Terneuzen woonachtig moeten zijn.<br>
                Het aantal commissarissen kan naar behoefte worden uitgebreid.<br>
                De eerste drie genoemden vormen het D.B..Geen bestuurslid mag meer dan één bestuursfunctie
                vervullen, tenzij door het ontstaan van tussentijdse vacatures hiervan tijdelijk moet worden
                afgeweken. Elk jaar treedt 1/3 of zo na mogelijk af. Wil het bestuur “en bloc” aftreden, dan
                is het verplicht aan te blijven tot de eerstvolgende algemene vergadering.</p>
            <h1>&nbsp;</h1>
            <h3>DAGELIJKS BESTUUR</h3>
            <p><strong>Artikel 6.</strong><br>
                <strong>&nbsp;</strong><br>
                Het dagelijks bestuur regelt de dagelijkse zaken en treedt in spoedeisende gevallen op,
                onder nadere goedkeuring van het bestuur</p>
            <h1>&nbsp;</h1>
            <h3>DE VOORZITTER</h3>
            <p><strong>Artikel 7.</strong></p>
            <p>De voorzitter leidt de vergaderingen en bijeenkomsten.Hij zorgt voor de uitvoering en
                naleving der genomen besluiten, bepaalt in overleg met de secretaris data en plaats der
                vergaderingen en ondertekent mede de notulen, welke door de vergadering zijn goedgekeurd.
                Hij zal leiding geven aan het beheer der brigade en een wakend oog houden op haar belangen.
                Alle officiële stukken zullen mede door hem ondertekend worden.</p>
            <p><strong>Artikel 8.</strong></p>
            <p>De vice-voorzitter vervangt de voorzitter bij diens ontstentenis&nbsp; en treedt dan in diens
                rechten en&nbsp; verplichtingen betreffende de vereniging.</p>
            <h1>&nbsp;</h1>
            <h3>DE SECRETARIS</h3>
            <p><strong>Artikel 9.</strong></p>
            <p>De secretaris is belast met alle correspondentie de brigade betreffende, het bijhouden der
                ledenlijsten en alle nodige statistische gegevens. Voorts is hij belast met het uitschrijven
                van vergaderingen en bijeenkomsten, het bijhouden van het archief en alle verdere
                werkzaamheden, die tot zijn funktie behoren. Hij is verplicht kopie te houden van de
                verzonden brieven. Aan het einde van elk verenigingsjaar maakt hij een jaarverslag dat op de
                jaarlijkse algemene vergadering wordt uitgebracht.</p>
            <p><strong>Artikel 10.</strong></p>
            <p>De 2e secretaris staat de secretaris zonodig bij in de uitvoering van diens functie.</p>
            <h1>&nbsp;</h1>
            <h3>DE PENNINGMEESTER</h3>
            <p><strong>Artikel 11.</strong></p>
            <p>De penningmeester beheert de gelden der brigade; voor uitgaven boven f 100,00 behoeft hij de
                machtiging van het dagelijks bestuur. Hij brengt minstens eens in het jaar een financiee1
                jaaroverzicht uit en maakt een begroting voor het volgend jaar. Hij houdt geregeld boek van
                alle inkomsten en uitgaven.<br>
                Wanneer de voorzitter en één of meer bestuursleden dat nodig achten, is de penningmeester
                gehouden hen inzage van de kas, boeken en bescheiden te verstrekken. De penningmeester
                belegt de gelden op aanwijzing van het bestuur.</p>
            <h1>&nbsp;</h1>
            <h3>COMMISSIES</h3>
            <p><strong>Artikel 12.</strong></p>
            <p>Het bestuur kan zich door commissies laten bijstaan. De commissies zijn te allen tijde
                verantwoording verschuldigd De kommissies vergaderen zo dikwijls als voor een goede gang&nbsp;
                van zaken noodzakelijk wordt geacht.</p>
            <h1>&nbsp;</h1>
            <h3>MEDISCHE COMMISSIE</h3>
            <p><strong>Artikel 13.</strong></p>
            <p>De medische commissie bestaat uit een onbeperkt aantal medici, die door het brigadebestuur
                zijn aangezocht zitting te nemen. Zij dient het bestuur, al of niet gevraagd van advies.<br>
                De leiding van cursussen in de eerste hulpverlening, zomede alles wat daarmede verband
                houdt, berust bij de medische commissie .</p>
            <h1>&nbsp;</h1>
            <h3>TECHNISCHE COMMISSIE</h3>
            <p><strong>Artikel 14.</strong></p>
            <p>De technische commissie bestaat uit een oneven aantal en tenminste 3 leden, bij voorkeur in
                het zwemend redden gediplomeerd. Het bestuur is belast met de samenstelling. De technische
                commissie dient het bestuur al of niet gevraagd van advies. Zij is verantwoording schuldig
                aan het brigadebestuur.<br>
                Aan het hoofd der technische commissie staat een technisch leider.<br>
                De technische commissie heeft de leiding van de cursussen in het zwemmend redden en alles
                wat daarmede verband houdt. Instructeurs (trices) worden al of niet op voordracht van de
                technische commissie door het brigadebestuur benoemd en ontslagen.</p>
            <h1>&nbsp;</h1>
            <h3>KASCOMMISSIE</h3>
            <p><strong>Artikel 15.</strong></p>
            <p>De kascommissie zal bestaan uit drie leden.<br>
                Zij heeft de financiële controle en neemt kas en bescheiden op van de penningmeester en
                brengt schriftelijk of mondeling hiervan verslag uit aan de algemene vergadering .</p>
            <h1>&nbsp;</h1>
            <h3>VERGADERINGEN</h3>
            <p><strong>Artikel 16.</strong></p>
            <p>Op de agenda der jaarlijkse algemene vergadering, bedoeld in artikel 14 der statuten, moeten
                onder andere de volgende punten worden vermeld:</p>
            <ol type="a" start="1">
                <li>jaarverslag van de secretaris;</li>
                <li>verslag van de penningmeester over het afgelopen jaar en de begroting voor het komende
                    jaar;
                </li>
                <li>rapport van de kascommissie;</li>
                <li>vaststellen der contributie;</li>
                <li>verkiezing van bestuur- en commissieleden;</li>
                <li>voorstellen welke op de voorgeschreven wijze zijn ingediend.</li>
            </ol>
            <p>&nbsp;</p>
            <p>Voorstellen voor deze vergadering moeten minstens 2 dagen voor de vergadering schriftelijk
                bij de secretaris worden ingediend. De convocatie voor deze vergadering zal minstens één
                week van te voren aan de leden worden toegezonden of bekend gemaakt worden in een blad.</p>
            <p><strong>Artikel 17.</strong></p>
            <p>Er wordt naast de algemene vergadering zo dikwijls vergaderd als door het bestuur nodig wordt
                geoordeeld en voorts op schriftelijke aanvraag van minstens 10 stemgerechtigde leden, onder
                opgave van de punten van behandeling. In dit geval is het bestuur verplicht binnen een maand
                na het inkomen van een dergelijk verzoek een algemene vergadering uit te schrijven.</p>
            <p><strong>Artikel 18.</strong></p>
            <p>In elke vergadering, nadat deze door de voorzitter is geopend, worden de notulen van de
                vorige vergadering door de secretaris voorgelezen en na goedkeuring door hem en de
                voorzitter getekend. De voorzitter heeft het recht de beraadslagingen te sluiten, tenzij de
                volstrekte meerderheid der aanwezige stemgerechtigde leden zich daartegen verklaart. Voor
                vergaderingen, waar reglementswijzigingen of aanvullingen zullen worden behandeld, is
                hetzelfde van toepassing als genoemd in artikel 16 der statuten.</p>
            <p><strong>&nbsp;</strong></p>
            <h1>&nbsp;</h1>
            <h3>STEMMINGEN</h3>
            <p><strong>Artikel 19.</strong></p>
            <p>Het stembureau op een vergadering wordt gevormd door drie, door de voorzitter aan te wijzen
                personen, welke stemrecht hebben.Het stembureau beslist omtrent de waarde van het
                stembiljet, terstond als dit geopend is.<br>
                Van onwaarde zijn in alle gevallen de stembiljetten :</p>
            <ol>
                <li>die de persoon niet duidelijk aanwijzen of waarover twijfel kan bestaan</li>
                <li>waarop meer namen dan het te verkiezen aantal personen voorkomen;</li>
                <li>die ondertekend zijn.</li>
            </ol>
            <p>&nbsp;</p>
            <p>De stemmen van onwaarde worden beschouwd niet te zijn uitgebracht.</p>
            <p><strong>Artikel 20.</strong></p>
            <p>De stemmingen over personen geschieden schriftelijk met gesloten stembiljetten, tenzij niet
                meer kandidaten gesteld worden dan in de vacatures is te voorzien.&nbsp; In het laatste
                geval kan de kandidaat bij acclamatie gekozen worden verk1aard, mits geen der aanwezige
                stemgerechtigde leden schriftelijke stemming ver1angt. De stemmingen over zaken geschieden
                in de regel mondeling.<br>
                Tenzij statuten of huishoudelijk reglement anders bepalen, worden benoemingen gedaan en
                besluiten genomen met meerderheid van het aantal uitgebrachte geldige stemmingen. Indien bij
                een herstemming de stemmen staken&nbsp; beslist bij personen het lot , bij zaken de stem van
                de voorzitter.</p>
            <p><strong>Artikel 21.</strong></p>
            <p>Het bestuur stelt op de algemene vergadering voor de afgevaardigden en hun plaatsvervangers
                voor de algemene vergaderingen van de organisaties, waarbij de brigade is aangesloten. Het
                bestuur geeft hen als regel vrij mandaat behalve wanneer het de financiën betreft.De
                afgevaardigden brengen verslag uit op een algemene vergadering.<br>
                De afgevaardigden kunnen een redelijke vergoeding van reis- en verblijfskosten verlangen.
                Voor reizen per trein mogen zij niet meer dan tweede klas in rekening brengen.</p>
            <h1>&nbsp;</h1>
            <h3>ONDERSCHEIDINGEN , ENZ.</h3>
            <p><strong>Artikel 22.</strong></p>
            <p>Door het brigadebestuur kunnen onderscheidingen, beloningen en/of schadevergoedingen worden
                toegekend aan hen~ die zich door moed en vastberadenheid hebben onderscheiden.<br>
                Deze beloningen, onderscheidingen of schadevergoedingen mogen alleen betrekking hebben op
                het reddingwezen in het algemeen.</p>
            <h1>&nbsp;</h1>
            <h3>SCHORSING EN ROYEMENT</h3>
            <p><strong>Artikel 23.</strong></p>
            <p>Leden, geschorst op grond van artikel 8 der statuten, kunnen mits met een meerderheid van
                minstens 2/3 der uitgebrachte geldige stemmen op een algemene vergadering van hun
                lidmaatschap vervallen worden verklaard.</p>
            <p>&nbsp;</p>
            <p>De door het bestuur geschorste leden hebben beroep op een algemene vergadering.<br>
                Hun beroep dienen zij schriftelijk bij de secretaris minstens tweemaal 24 uur voor het
                aanvangsuur der algemene vergadering te hebben ingediend behoorlijk met redenen omkleed,
                welke hebben geleid tot het inzenden van zulk een beroep. Dit beroep moet dan op de
                eerstvo1gende algemene vergadering worden behandeld, waarbij zo mogelijk tijdens de
                vergadering uitspraak in de schorsing wordt gedaan.</p>
            <p><strong>Artikel 24.</strong></p>
            <p>Zij die achterblijven in het betalen van contributie, kunnen zonder meer, na driemaal,
                waarvan minstens éénmaa1 schriftelijk tot betaling te zijn gemaand, door het bestuur worden
                geroyeerd. Alvorens zulke leden weder lid kunnen worden van de brigade, behoren zij de
                achterstallige contributie bijbetaald te hebben.</p>
            <h1>&nbsp;</h1>
            <h3>ALGEMENE BEPALINGEN</h3>
            <p><strong>Artikel 25.</strong></p>
            <p>Bij het eindigen van het lidmaatschap vervallen alle rechten en aanspraken op de bezittingen
                van de brigade.</p>
            <p><strong>Artikel 26.</strong></p>
            <p>In alle gevallen, waarin het reglement niet voorziet, beslist het bestuur.<br>
                Aldus vastgesteld in de algemene vergadering van 13 februari 1975</p>
            <p><strong>REDDINGBRIGADE “LUCTOR ET EMERGO”.</strong></p>
        </div>
    </div>
    <div class="m-row-striped text-left">
        <a id="hide3" onclick="clickedActivity(this)" class="d-flex">
            <div class="col-10">
                <h5>
                    <strong>Statuten</strong>
                </h5>
            </div>
            <div class="col-2">
                <div id="symbolActivity3">
                    <i class="fas fa-plus"></i>
                </div>
            </div>
        </a>
        <div class="details" id="details3">
            <p><strong>VERENIGING:</strong> Reddingsbrigade “Luctor et Emergo”, te Terneuzen</p>
            <p><strong>Artikel 1</strong>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                De vereniging draagt de naam: Reddings-brigade “Luctor et Emergo”, verkort aangeduid met
                R.B. L.E.E., is opgericht op 5 september 1968 en is gevestigd te Terneuzen.<br>
                Te rekenen van 5 september 1968 is de duur der vereniging nader vastgesteld voor een tijdvak
                van 29 jaren en 11 maanden, derhalve eindigend 4 augustus 1998.<br>
                Volgens mededeling van de Kamer van Koophandel en Fabrieken voor Zeeuwsch-Vlaanderen d.d. 17
                januari 1995 is per 1 september 1994 een wetswijziging in werking getreden die bepaalt dat
                rechtspersonen voortaan voor onbepaalde tijd kunnen worden opgericht. Derhalve betekent dit
                dat de vereniging niet ontbonden wordt en vanaf 1 september 1994 voor onbeperkte duur te
                zijn opgericht.</p>
            <p><strong>Artikel 2</strong>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                De vereniging stel zich ten doel hulp te verlenen aan drenkelingen.</p>
            <p><strong>Artikel 3</strong>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                Zij tracht dit doel te bereiken langs wettige weg, en wel door:</p>
            <ul>
                <li>de praktische opleiding tot het redden van drenkelingen, alsmede het houden van
                    cursussen in “het opwekken van levensgeesten en eerste hulp bij ongelukken”;
                </li>
                <li>de aanwezig zijnde reddingsmiddelen te toetsen aan de behoefte en, indien nodig uit te
                    breiden of te doen uitbreiden, zo nodig in overleg of samenwerking met plaatselijke
                    autoriteiten;
                </li>
                <li>een oproepdienst samen te stellen of mede te werken hieraan, zo nodig in samenwerking
                    met plaatselijke autoriteiten;
                </li>
                <li>het uitreiken van diploma’s en insignes aan hen, die aan de eisen, vastgesteld door het
                    bestuur der brigade, hebben voldaan.
                </li>
                <li>het bevorderen van het deelnemen aan examens op het gebied van het redden van
                    drenkelingen en eerste hulp bij ongelukken;
                </li>
                <li>het aanleren en verbeteren van zwemmethoden;</li>
                <li>het maken van propaganda, ten einde het zwemmen in het algemeen en de geschiktheid tot
                    het redden van drenkelingen in het bijzonder als noodzakelijk aan een ieder te doen
                    inzien, door het houden van lezingen, tentoonstellingen, demonstraties en wedstrijden;
                </li>
                <li>andere wettige middelen, die voor het bereiken van het doel bevorderlijk zijn.</li>
            </ul>
            <h3>&nbsp;</h3>
            <p><strong>VERENIGINGSJAAR</strong></p>
            <p><strong>Artikel 4:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                Het verenigingsjaar loopt van 1 januari tot en met 31 december.</p>
            <p><strong>Artikel 5:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                De vereniging kan zich aansluiten bij bonden, stichtingen, verenigingen of andere vormen van
                organisaties, mits hiertoe door de algemene ledenvergadering wordt besloten.</p>
            <h3>&nbsp;</h3>
            <p><strong>LIDMAATSCHAP</strong></p>
            <p><strong>Artikel 6:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                De vereniging bestaat uit:</p>
            <ul>
                <li>werkende leden;</li>
                <li>aspirant-leden;</li>
                <li>ondersteunende verenigingen, donateurs en donatrices;</li>
                <li>leden van de raad van bijstand, leden der medischecommissie;</li>
                <li>ereleden;</li>
                <li>leden van verdienste.</li>
            </ul>
            <p>Werkende leden en aspirant–leden zijn zij, die op hun daartoe aan de secretaris van de
                vereniging gericht schriftelijk verzoek na ballotage als zodanig door het bestuur zijn
                aangenomen.<br>
                Een eventuele weigering tot opname als lid behoeft niet nader met redenen te worden omkleed.<br>
                De raad van bijstand is een facultatieve commissie van advies, waarin zitting hebben
                personen, daartoe toegetreden op verzoek van het bestuur.<br>
                De medische commissie is een commissie van geneesheren, die door het bestuur tot zitting
                nemen in deze commissie worden uitgenodigd.<br>
                Ondersteunende verenigingen zijn verenigingen, welke een jaarlijkse subsidie of bijdrage
                geven van een bij huishoudelijk reglement vast te stellen minimumbedrag.<br>
                Donateurs (trices) zijn zij, die zich bereid verklaren de vereniging te steunen door een
                bijdrage, waarvan het minimumbedrag nader bij huishoudelijk reglement wordt vastgesteld.<br>
                Ereleden zijn leden der vereniging, aan wie uit hoofde van hun bijzondere verdiensten aan de
                vereniging bewezen, het erelidmaatschap door de algemene ledenvergadering op voordracht van
                het bestuur of 10 leden is verleend.<br>
                Leden van verdienste zijn zij, die uit hoofde van bijzondere reddingen of daden van moed van
                het bestuur het lidmaatschap van verdienste hebben verkregen.</p>
            <p><strong>Artikel 7:&nbsp; </strong><br>
                Het lidmaatschap eindigt door:</p>
            <ul>
                <li>overlijden en, zover het betreft ondersteunende verenigingen, door ontbinding
                    daarvan;
                </li>
                <li>schriftelijke opzegging aan de secretaris van de vereniging minstens 1 maand vóór
                    het einde van het verenigingsjaar;
                </li>
                <li>royement krachtens besluit der algemene ledenvergadering met ten minste 2/3 van het
                    aantal uitgebrachte geldige stemmen;
                </li>
                <li>royement door het bestuur wegens wanbetaling</li>
            </ul>
            <p>In alle gevallen, behalve wanneer het bestuur anders beslist, is voldoening der contributie
                voor het gehele jaar verplicht.<br>
                Bij het eindigen van het lidmaatschap vervallen alle rechten, aan het lidmaatschap
                verbonden.</p>
            <p><strong>Artikel 8:&nbsp; </strong><br>
                Het bestuur heeft het recht leden, genoemd in artikel 6, te schorsen wegens wangedrag of
                handelingen, nadelig vor de goede naam der vereniging.<br>
                Hangende het onderzoek kan het lid de rechten, verbonden aan het lidmaatschap, niet
                uitoefenen, behoudens het beroep op de ledenvergadering.</p>
            <p><strong>Artikel 9:</strong>&nbsp;<br>
                De leden genoemd in artikel 8, sub a. en c., hebben stemrecht, terwijl de leden, genoemd in
                artikel 6, sub d. en f., een adviserende stem hebben.<br>
                Alle in artikel 6 genoemde leden hebben recht van toegang tot bijeenkomsten, oefenuren en
                vergaderingen.</p>
            <h3>&nbsp;</h3>
            <p><strong>BESTUUR</strong></p>
            <p><strong>&nbsp;</strong><strong>Artikel 10:&nbsp; </strong><br>
                Het bestuur zal bestaan uit minstens 5 meerderjarige leden, waaronder zo mogelijk een
                geneeskundige.<br>
                Het bestuur wordt door en uit de stemgerechtigde leden gekozen op de wijze, zoals bij het
                huishoudelijk reglement bepaald.<br>
                Het bestuur vertegenwoordigt de vereniging zowel in als buiten rechten.<br>
                De voorzitter wordt rechtstreeks door de algemene vergadering verkozen, terwijl de overige
                functies door het bestuur onderling worden verdeeld op de wijze, zoals bij huishoudelijk
                reglement vastgesteld.<br>
                De wijze van aftreding der bestuursleden en de verdere verdeling der werkzaamheden worden
                bij huishoudelijk reglement vastgesteld.<br>
                De bestuursleden zijn te allen tijde herkiesbaar.</p>
            <p><strong>Artikel 11:</strong>&nbsp;<br>
                Het bestuur kan zich doen bijstaan door een commissie en zo nodig door de raad van bijstand.
                De samenstelling en benoemingen der commissies worden bij huishoudelijk reglement nader
                geregeld.</p>
            <h3>&nbsp;</h3>
            <p><strong>HUISHOUDELIJK REGLEMENT</strong></p>
            <p><strong>&nbsp;</strong><strong>Artikel 12:</strong>&nbsp;<br>
                Het huishoudelijk reglement der vereniging, dat zal worden vastgesteld door de algemene
                ledenvergadering, mag geen bepalingen bevatten, strijdig met deze statuten.</p>
            <h3>&nbsp;</h3>
            <p><strong>GELDMIDDELEN</strong></p>
            <p><strong>&nbsp;</strong><strong>Artikel 13:</strong>&nbsp;<br>
                De geldmiddelen der vereniging bestaan uit:</p>
            <ul>
                <li>contributies;</li>
                <li>bijdragen van donateurs (trices) en ondersteunende verenigingen;</li>
                <li>bijdragen van de leden van de raad van bijstand;</li>
                <li>erfstellingen, legaten, schenkingen, subsidies en andere toevallige baten.</li>
            </ul>
            <p>Het beheer der geldmiddelen wordt geregeld bij huishoudelijk reglement.</p>
            <h3>&nbsp;</h3>
            <p><strong>VERGADERINGEN</strong></p>
            <p><strong>Artikel 14: </strong>&nbsp;<br>
                Binnen 3 maanden na aanvang van het verenigingsjaar wordt een algemene ledenvergadering
                gehouden.<br>
                Het huishoudelijk reglement regelt alles, wat betreft het bijeenroepen en het houden van
                vergaderingen, alsmede de wijze van stemmen.</p>
            <h3>&nbsp;</h3>
            <p><strong>ONTBINDING EN VEREFFENING</strong></p>
            <p><strong>Artikel 15:</strong>&nbsp;<br>
                Tot ontbinding der vereniging kan worden besloten bij meerderheid van stemmen, indien het
                aantal stemgerechtigde leden minder dan 5 bedraagt, of op een algemene ledenvergadering,
                waar ten minste 2/3 van het aantal stemgerechtigde leden aanwezig is, mits dit voorstel op
                de agenda voorkomt en minsten 14 dagen van tevoren is aangekondigd.<br>
                Een meerderheid van 2/3 der uitgebrachte geldige stemmen zal worden vereist. Is op deze
                algemene ledenvergadering niet het vereiste aantal leden tegenwoordig, dan wordt binnen 1
                maand een tweede vergadering uitgeschreven.<br>
                Op de convocatie hiervoor wordt duidelijk het doel aangegeven; deze tweede vergadering is
                met een meerderheid van 2/3 der uitgebrachte geldige stemmen tot ontbinding gerechtigd, ook
                al is 2/3 van het aantal stemgerechtigde leden niet aanwezig.<br>
                Bij ontbinding der vereniging heeft vereffening van de fondsen plaats door het bestuur in
                dier voege dat een eventueel batig saldo aan een door de algemene ledenvergadering aan te
                wijzen sociale instelling wordt vermaakt.<br>
                Voor zover in dit artikel niet anders is bepaald, is bij ontbinding der vereniging artikel
                1702 van het Burgerlijk Wetboek toepasselijk.</p>
            <h3>&nbsp;</h3>
            <p><strong>WIJZIGINGEN</strong></p>
            <p><strong>&nbsp;</strong><strong>Artikel 16:</strong>&nbsp;<br>
                Wijzigingen in de bepalingen dezer statuten kunnen niet anders plaatshebben dan in een
                algemene ledenvergadering, terwijl de voorgestelde wijzigingen duidelijk op de convocatie
                moeten worden vermeld.<br>
                De voorgestelde wijzigingen zullen minstens 14 dagen tevoren ter visie van de leden
                liggen.<br>
                Op de vergadering zal minstens 2/3 van het aantal stemgerechtigde leden aanwezig moeten zijn
                om de besluiten te kunnen nemen.&nbsp; Een meerderheid van 2/3 der uitgebrachte geldige
                stemmen zal worden vereist.<br>
                Is op deze vergadering het vereiste aantal leden niet aanwezig, dan zal na 8 dagen, doch
                binnen 30 dagen, een nieuwe vergadering worden belegd, welke in ieder geval met een
                meerderheid van 2/3 der uitgebrachte geldige stemmen gerechtigd zal zijn besluiten te nemen.
                Alle wijzigingen reden in werking, onmiddellijk nadat daarop de Koninklijke goedkeuring is
                verkregen.</p>
            <p>&nbsp;&nbsp;&nbsp; Goedgekeurd bij Koninklijk besluit d.d. 16 september 1975, nr. 22.</p>
            <p>Mij bekend.<br>
                De Staatssecretaris van Justitie.<br>
                Namens de Staatssecretaris:<br>
                Het hoofd van de Hoofdafdeling Privaatrecht,<br>
                J.v. Rijn van Alkemade.</p>
        </div>
    </div>
@endsection

@section('customJS')
    <script src="js/mobile/m.agenda.js"></script>
@endsection
