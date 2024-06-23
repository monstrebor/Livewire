<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/final_logo-removebg-preview-removebg-preview.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="FAQs.css">
    <script src="FAQs.js"></script>
    <title>FAQs</title>
</head>
<body>

    @include('Partials.navbar')

    <div class="image1 w-full h-80 py-4 bg-slate-500 shadow-2xl bg-cover">
        <div class="lg:w-2/5 w-96 h-64 pt-1 bg-slate-300 bg-opacity-70 ml-12 lg:ml-20 my-5 shadow-lg rounded-xl flex justify-center">
            <p class="ml-10 m-5 font-bold text-slate-700 text-4xl tracking-wide text-center lg:my-10 flex items-center justify-center">Frequently Asked Questions</p>
        </div>
    </div>

    <div class="p-2.5 mt-8 px-4 flex items-center justify-center">
        <span class="font-bold text-4xl text-slate-700 tracking-wide">Frequently Asked Questions</span>
        <i class="bi bi-question-circle"></i>
    </div>

    <div class="mt-11">
        <div class="flex items-center justify-center mb-7">
            <div class="boxShadow w-11/12 bg-white p-4 px-7 rounded-lg" onclick="toggleVisibility('questionText1')">
                <h1 class="text-xl font-semibold mb-4 text-slate-600">Sino and nagmamay-ari at may kapangyarihan sa pagpapatakbo ng kooperatiba?</h1>
                <p id="questionText1" class="text-slate-600 indent-4 pb-4 text-md">Ang Kooperatiba ay pag-aari ng lahat ng mga kasapi. Ang General Assembly ang may huling pagpapasya sa mga mahahalagang bagay na may kinalaman sa pagpapatakbo ng Kooperatiba</p>
            </div>
        </div>

        <div class="flex items-center justify-center mb-7">
            <div class="boxShadow w-11/12 bg-white p-4 px-7 rounded-lg" onclick="toggleVisibility('questionText2')">
                <h1 class="text-xl font-semibold mb-4 text-slate-600">A<span class="lowercase">NO ANG ANNUAL GENERAL ASSEMBLY O TAUNANG PANGKALAHATANG PAGPUPULONG?</span></h1>
                <p id="questionText2" class="text-slate-600 indent-4 pb-4 text-md">Ito ang taunang pagtitipon ng mga kasapi ng Kooperatiba kung saan nagagamit nila ang kanilang karapatan sa pagpapasya sa mga mahalagang bagay na may kaugnayan sa pagpapatakbo o pamamahala ng Kooperatiba. Ginaganap ito minsan isang taon sa lugar at petsa na pagpapasyahan ng Lupong Patnugutan.</p>
            </div>
        </div>

        <div class="flex items-center justify-center mb-7">
            <div class="boxShadow w-11/12 bg-white p-4 px-7 rounded-lg" onclick="toggleVisibility('questionText3')">
                <h1 class="text-xl font-semibold mb-4 text-slate-600">S<span class="lowercase">INU-SINO ANG NAMAMAHALA SA KOOPERATIBA?</span></h1>
                
                <div id="questionText3">
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">1. LUPONG PATNUGUTAN (Board of Directors) - ang lupong nangangasiwa sa pangkalahatang kaayusan at bumabalangkas ng mga alituntunin para sa ikauunlad ng Kooperatiba.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">2. LUPON SA PAGPAPAUTANG (Credit Committee) - ang lupong itinalaga ng Lupong Patnugutan para maipatupad ang mga alituntunin sa pagpapautang na kanilang pinagtibay. Sila rin ang sumusuri sa kakayahan sa pagbabayad ng mga kasapi. Ito ay may tatlong ( 3 ) kasapi na hinihirang ng Lupong Patnugutan</h2>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center mb-7">
            <div class="boxShadow w-11/12 bg-white p-4 px-7 rounded-lg" onclick="toggleVisibility('questionText4')">
                <h1 class="text-xl font-semibold mb-4 text-slate-600">Sino ang maaaring sumapi sa MNSMPC?</h1>
                
                <div id="questionText4">
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">Ang mga uri ang Kasapian sa MNSMPC:</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">A. Bilang Regular Member</h2>
                    <p class="text-slate-600 indent-8 pb-4 text-md">1. Naninirahan sa Marilao, Bulacan.</p>
                    <p class="text-slate-600 indent-8 pb-4 text-md">2. May gulang na 18 - 60 taong gulang may kakayahang makapagkontrata nang naaayon sa batas at may pinagkakakitaan.</p>
                    <p class="text-slate-600 indent-8 pb-4 text-md">3. May pirmihang hanapbuhay o pinagkakakitaan</p>

                    <h2 class="text-slate-600 indent-4 pb-4 text-md mt-5">B. Bilang Associate Member</h2>
                    <p class="text-slate-600 indent-8 pb-4 text-md">1. May edad na 17 pababa hanggang 60 taong gulang</p>
                    <p class="text-slate-600 indent-8 pb-4 text-md">2. Maaring mag-impok o mamuhunan sa ating Kooperatiba.</p>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center mb-7">
            <div class="boxShadow w-11/12 bg-white p-4 px-7 rounded-lg" onclick="toggleVisibility('questionText5')">
                <h1 class="text-xl font-semibold mb-4 text-slate-600">Paano ang pagsapi sa MNSMPC?</h1>
                
                <div id="questionText5">
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">1. Dumalo sa Pre-Membership Seminar (PMES) na ginaganap tuwing ikalawang ( 2 ) Sabado ng buwan ika 9:00 ng umaga sa tanggapan ng Mahal na Señor Multipurpose Cooperative.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">2. Lumagda sa application for Membership Form at mag-submit ng mga sumusunod:</h2>
                    <p class="text-slate-600 indent-8 pb-4 text-md">A. Naninirahan sa Marilao, Bulacan</p>
                    <p class="text-slate-600 indent-8 pb-4 text-md">B. Proof of Billing</p>
                    <p class="text-slate-600 indent-8 pb-4 text-md">C. Community Tax Certificate/TIN</p>
                    <p class="text-slate-600 indent-8 pb-4 text-md">D. 2 x 2 picture</p>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">3. Magbayad ng Membership Fee na Isang daan Piso (P 100.00) at minimum Share Capital na apat na Libong Piso (P 4,000.00).</h2>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center mb-7">
            <div class="boxShadow w-11/12 bg-white p-4 px-7 rounded-lg" onclick="toggleVisibility('questionText6')">
                <h1 class="text-xl font-semibold mb-4 text-slate-600">A<span class="lowercase">NU-ANO ANG MGA TUNGKULIN NG MGA KASAPI?</span></h1>
                
                <div id="questionText6">
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">1. Dumalo sa General Assembly na ginaganap minsan sa isang taon;</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">2. Magbayad ng utang sa takdang panahon at patuloy na mag-impok;</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">3. Panagutan ang pagkakautang sa Kooperatiba kabilang ang pananagutan sa pagiging Comaker</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">4. Maghalal ng mga opisyal na mabubuti, tapat, maaasahan at may panahong maglingkod sa samahan;</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">5. Mag-anyaya ng iba pang maaaring maging mabubuting kasapi;</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">6. Makiisa sa mga pag-aaral tungkol sa ikauunlad ng Kooperatiba.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">7. Maghulog ng palagian sa Share Capital o Saping Puhunan.</h2>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center mb-7">
            <div class="boxShadow w-11/12 bg-white p-4 px-7 rounded-lg" onclick="toggleVisibility('questionText7')">
                <h1 class="text-xl font-semibold mb-4 text-slate-600">A<span class="lowercase">NU-ANO ANG URI NG LAGAK SA KOOPERATIBA?</span></h1>
                
                <div id="questionText7">
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">1. SHARE CAPITAL - ito ang tinatawag na Saping Puhunan na hindi maaring mawithdraw maliban kung magbibitiw na sa pagiging kasapi. Ang patubo sa lagak na ito ay batay sa kinikita ng Kooperatiba sa loob ng isang taon. Dito din ibinabatay ang halaga ng maaring mautang ng isang kasapi.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">2. SAVINGS DEPOSIT ( o sariling pag-iimpok ) - Ito ang lagak na maaaring ma-withdraw anumang oras na bukas ang tanggapan. Ito ay kumikita ng tubong higit na mataas kaysa bigay ng bangko at walang withholding tax.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">3. TIME DEPOSIT- Ito ay lagak na may takdang panahon bago ma-withdraw at higit na mataas ang patubo kaysa bangko at walang withholding tax. Maaaring gamitin itong collateral sa loan.</h2>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center mb-7">
            <div class="boxShadow w-11/12 bg-white p-4 px-7 rounded-lg" onclick="toggleVisibility('questionText8')">
                <h1 class="text-xl font-semibold mb-4 text-slate-600">A<span class="lowercase">NU-ANO ANG MGA URI NG PAUTANG?</span></h1>
                
                <div id="questionText8">
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">1. CHARACTER LOAN – utang na ang panagot lamang ay ang pagkatao ng kasapi:</h2>
                    <p class="text-slate-600 indent-10 pb-4 text-md">❖ Nakabatay sa Share Capital.</p>
                    <p class="text-slate-600 indent-10 pb-4 text-md">❖ May 2 Co-makers.</p>

                    <h2 class="text-slate-600 indent-8 pb-4 text-md">A. BACK TO BACK LOAN</h2>
                    <p class="text-slate-600 indent-10 pb-4 text-md">❖ utang ang panagot ay ang Share Capital ng kasaping nangungutang</p>
                    <p class="text-slate-600 indent-10 pb-4 text-md">❖ utang na ang panagot ay Time Deposit</p>

                    <h2 class="text-slate-600 indent-8 pb-4 text-md">B. EMERGENCY LOAN – utang na ginagamit na pambayad sa ospital o pambili ng gamot.</h2>
                    <h2 class="text-slate-600 indent-8 pb-4 text-md">C. EDUCATIONAL LOAN – utang na ginagamit na pangmatrikula sa paaralan na may maximum na P25,000.00 bawat estudyante isang semester.</h2>
                    <h2 class="text-slate-600 indent-8 pb-4 text-md">D. MICRO-FINANCE LOAN – utang para sa mga maliliit na namumuhunan o nagnenegosyo.</h2>
                    <h2 class="text-slate-600 indent-8 pb-4 text-md">E. SALARY LOAN – utang na maaring ma-avail ng mga empleyado, namumuno at ng Management Staff ng pampubliko at pribadong tanggapan. </h2>
                    <h2 class="text-slate-600 indent-8 pb-4 text-md">F. CONSUMER LOAN – utang para sa pambili ng kagamitan o kasangkapan sa bahay/ pang travel at iba pa.</h2>

                    <h2 class="text-slate-600 indent-4 pb-4 text-md">2. COLLATERIZED LOAN - utang na ang panagot ay titulo ng lupa. at iba pa</h2>
                    <p class="text-slate-600 indent-10 pb-4 text-md">❖  REGULAR COLL.LOAN – maximum 3 years term at hanggang sa P500,000.00.</p>
                    <p class="text-slate-600 indent-10 pb-4 text-md">❖ JEWELRY COLLATERAL LOAN – utang na ang panagot ay alahas.</p>
                    <p class="text-slate-600 indent-10 pb-4 text-md">❖ OVERNIGHT LOAN – maaring ma-avail ng mga kasaping may collateralized loan na may interest na 3% maximum of 10 days at Post Dated Check (PDC)</p>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center mb-7">
            <div class="boxShadow w-11/12 bg-white p-4 px-7 rounded-lg" onclick="toggleVisibility('questionText9')">
                <h1 class="text-xl font-semibold mb-4 text-slate-600">P<span class="lowercase">AANO AT KAILAN MAKAKAUTANG ANG MGA KASAPI?</span></h1>
                
                <div id="questionText9">
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">1. Ang Kasapi lamang ang maaring mangutang sa Kooperatiba.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">2. Basahing mabuti at sagutin ang lahat ng mga katanungan sa Loan Application Form na makukuha sa tanggapan ng Mahal na Señor Multipurpose Cooperative.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">3. Tuusin kung makakayanan ang takdang hulog sa utang ayon sa nakalagay sa loan application form.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">4. Kumuha ng Dalawang (2) Co-Maker o Ka-ako at papirmahin sa Co-Maker’s Statement Form.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">5. Alamin at tiyakin kung kalian ibabalik ang sinagutang Loan Application Form para masimulan ang Credit Investigation at ang interview ng Credit Committee na magpapatibay sa pag-utang.</h2>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center mb-7">
            <div class="boxShadow w-11/12 bg-white p-4 px-7 rounded-lg" onclick="toggleVisibility('questionText10')">
                <h1 class="text-xl font-semibold mb-4 text-slate-600">A<span class="lowercase">NU-ANO ANG IBINABAWAS SA INUUTANG NG ISANG KASAPI?</span></h1>
                
                <div id="questionText10">
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">❖ INTEREST – 2% kada buwan o 24% isang taon base sa halaga ng inuutang.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">❖ SERVICE FEE – 3% ng halagang inuutang.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">❖ CAPITAL BUILD-UP – 3% ng halagang inuutang na idinadagdag sa share capital ng kasaping umuutang.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">❖ FILING FEES – P150.00 fixed rate applicable to salary loans only.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">❖ INSURANCE – 1% ng halagang inuutang.</h2>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center mb-7">
            <div class="boxShadow w-11/12 bg-white p-4 px-7 rounded-lg" onclick="toggleVisibility('questionText11')">
                <h1 class="text-xl font-semibold mb-4 text-slate-600">B<span class="lowercase">ATAYAN SA PAGPAPASIYA NG CREDIT COMMITTEE</span></h1>
                
                <div id="questionText11">
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">1. Character o katauhan ng Kasapi</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">2. Capacity to pay o kakayahang magbayad ng kasapi</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">3. Collateral o panagot sa utang</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">4. Credit standing o tala sa pagbabayad ng kasapi</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">5. Co-Makers/ Ka-ako (2)</h2>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center mb-7">
            <div class="boxShadow w-11/12 bg-white p-4 px-7 rounded-lg" onclick="toggleVisibility('questionText12')">
                <h1 class="text-xl font-semibold mb-4 text-slate-600">P<span class="lowercase">AANO ANG PAGBABAYAD NG UTANG?</span></h1>
                <p id="questionText12" class="text-slate-600 indent-4 pb-4 text-md">Ang pagbabayad ng utang ay buwanan (monthly/lump sum amortization) batay sa sistemang straight linemethod. Bilang kaluwagan sa kasapi, binibigyan siya ng 30 araw na palugit (grace period ) sa Character Loan at labinlimang ( 15 ) araw naman sa Collateralized Loan, sa pagbabayad. May multang 1% na ipapataw kapag lumampas sa palugit na araw ng pagbabayad (duedate ).</p>
            </div>
        </div>

        <div class="flex items-center justify-center mb-7">
            <div class="boxShadow w-11/12 bg-white p-4 px-7 rounded-lg" onclick="toggleVisibility('questionText13')">
                <h1 class="text-xl font-semibold mb-4 text-slate-600">M<span class="lowercase">GA PRINSIPYO NG KOOPERATIBA</span></h1>
                
                <div id="questionText13">
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">1. Bukas at malayang kaisipan – hindi pinipilit ngunit sinusuri ang nais sumapi upang maging matagumpay ang samahan.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">2. Demokratikong pamamahala – ang mga namamahala ay inihahalal ng mga kasaping may karapatang bumoto.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">3. Walang pagtatangi – bawat kasapi ay may pantay na karapatan.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">4. Paglilingkod sa mga kasapi – ang lahat ng patakaran at pagkilos ay nakatuon sa paglilingkod para sa ikauunlad ng mga kasapi at buong kilusan.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">5. Pagbabahagi ng pag-unlad at pananagutan sa mga kasapi – ibinabahagi sa mga kasapi ang pag-unlad ng kooperatiba, gayundin ang kabiguang maaaring ibunga ng mga pagkilos.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">6. Pagbuo sa katatagang pinansyal - ang pagbabalangkas ng mga programang magpapalago at magpapatatag sa pinansyal na kalagayan ng kilusan ay isinasaalang-alang sa paggawa ng mga patakaran.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">7. Pakikiugnay sa iba pang kooperatiba – ang mga kooperatiba ay nagtutulungan at nagkakaugnay sa pamamagitan ng mga pederasyon at union.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">8. Patuloy na pag-aaral – sa lahat ng larangan, ang susi ng tagumpay ay ang patuloy na pag-aaral.</h2>
                    <h2 class="text-slate-600 indent-4 pb-4 text-md">9. Pananagutan sa komunidad – ang kooperatiba ay dapat nakikisangkot sa mga programa at pagkilos tungo sa pag-unlad ng pamayanan.</h2>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center mb-7">
            <div class="boxShadow w-11/12 bg-white p-4 px-7 rounded-lg" onclick="toggleVisibility('questionText14')">
                <h1 class="text-xl font-semibold mb-4 text-slate-600">P<span class="lowercase">AANO ANG PAGBABAYAD NG UTANG?</span></h1>

                <div id="questionText14">
                    <p class="text-slate-600 indent-4 pb-4 text-md">● Dumalo sa Pre-Membership Education Seminar (PMES) na ginaganap tuwing ikalawang ( 2 ) Sabado ng buwan ika 9:00 ng umaga sa tanggapan ng Mahal na Señor Multipurpose Cooperative.</p>
                    <p class="text-slate-600 indent-4 pb-4 text-md">● Lumagda sa application for Membership Form at mag-submit ng mga sumusunod: </p>
                    <p class="text-slate-600 indent-10 pb-4 text-md">a. Valid ID’s (2)</p>
                    <p class="text-slate-600 indent-10 pb-4 text-md">b. Proof of Billing </p>
                    <p class="text-slate-600 indent-10 pb-4 text-md">c. CTC/TIN No. </p>
                    <p class="text-slate-600 indent-10 pb-4 text-md">d. 2 x 2 picture </p>
                    <p class="text-slate-600 indent-4 pb-4 text-md">● Magbayad ng Membership Fee na Isang daan Piso (P 100.00) at initial Share Capital na Isang Libong Piso (P 1,000.00). </p>
                </div>
            </div>
        </div>
    </div>

    @include('Partials.footer')
    
</body>
</html>