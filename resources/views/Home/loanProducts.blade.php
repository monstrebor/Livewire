<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/final_logo-removebg-preview-removebg-preview.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="onlineMenbership.css">
    <title>Loan Products</title>
</head>
<body>

    @include('Partials.navbar')

    <div class="image1 w-full h-80 py-4 bg-slate-500 shadow-2xl bg-cover">
        <div class="lg:w-2/5 w-96 h-64 pt-1 bg-slate-300 bg-opacity-70 ml-12 lg:ml-20 my-5 shadow-lg rounded-xl flex justify-center">
            <p class="ml-10 m-5 font-bold text-slate-700 text-3xl tracking-wide text-center lg:my-10">We help you experience well-financed and unforgettable memories!</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 sm:px-24 mt-10 gap-10">
        <div class="col-span-2 p-4">
            <h1 class="font-bold text-4xl text-slate-700 tracking-wide mb-14">LOAN PRODUCTS</h1>

            <section>
                <h2 class="mt-4 font-semibold text-3xl text-slate-700">Character Loan</h2><br>
                <p class="text-base sm:text-lg flex items-center text-slate-600 font-normal mb-5">– utang na ang panagot lamang ay ang pagkatao ng kasapi:</p>

                <ul class="list-disc list-inside sm:text-lg text-slate-600 font-normal mb-10">
                    <li class="mb-4">Nakabatay sa Share Capital</li>
                    <li>May 2 Co-makers</li>
                </ul>
            </section>

            <section>
                <h2 class="mt-4 font-semibold text-3xl text-slate-700">Back To Back Loan</h2><br>
                <ul class="list-disc list-inside sm:text-lg text-slate-600 font-normal mb-10">
                    <li class="mb-4">Utang ang panagot ay ang Share Capital ng kasaping nangungutang.</li>
                    <li>Utang na ang panagot ay Time Deposit</li>
                </ul>
            </section>

            <section>
                <h2 class="mt-4 font-semibold text-3xl text-slate-700">Emergency Loan</h2><br>
                <p class="text-base sm:text-lg flex items-center text-slate-600 font-normal mb-10"> – Utang na ginagamit na pambayad sa ospital o pambili ng gamot.</p>
            </section>

            <section>
                <h2 class="mt-4 font-semibold text-3xl text-slate-700">Educational Loan</h2><br>
                <p class="text-base sm:text-lg flex items-center text-slate-600 font-normal mb-10"> – Utang na ginagamit na pangmatrikula sa paaralan na may maximum na P25,000.00 bawat estudyante isang semester</p>
            </section>

            <section>
                <h2 class="mt-4 font-semibold text-3xl text-slate-700">Salary Loan</h2><br>
                <p class="text-base sm:text-lg flex items-center text-slate-600 font-normal mb-10"> – Utang na maaring ma-avail ng mga empleyado, namumuno at ng Management Staff ng pampubliko at pribadong tanggapan. </p>
            </section>

            <section>
                <h2 class="mt-4 font-semibold text-3xl text-slate-700">Consumer Loan</h2><br>
                <p class="text-base sm:text-lg flex items-center text-slate-600 font-normal mb-10"> – Utang para sa pambili ng kagamitan o kasangkapan sa bahay/ pang travel at iba pa.</p>
            </section>

            <section>
                <h2 class="mt-4 font-semibold text-3xl text-slate-700">Collaterized Loan</h2><br>
                <p class="text-base sm:text-lg flex items-center text-slate-600 font-normal mb-5">– Utang na ang panagot ay titulo ng lupa, at iba pa.</p>

                <ul class="list-disc list-inside sm:text-lg text-slate-600 font-normal mb-10">
                    <li class="mb-4">Regular Collateral Loan – maximum 3 years term at hanggang sa P500,000.00</li>
                    <li class="mb-4">Jewelry Collateral Loan utang na ang panagot ay alahas.</li>
                    <li>Overnight Loan – maaring ma-avail ng mga kasaping may collateralized loan na may interest na 3% maximum of 10 days at Post Dated Check (PDC)</li>
                </ul>
            </section>
        </div>
    </div>

    @include('Partials.footer')

</body>
</html>