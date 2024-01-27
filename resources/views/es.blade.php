<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<link rel="icon" type="image/svg+xml" href="/favicon.ico">
<meta name="generator" content="Astro v4.0.9">
<meta name="description" content="Admisa Group">
<title></title>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{URL::asset('_astro/admin.7l51zh2b.css')}}" />

<style>
  :root {
    --color-bg: 255 255 255;
    --color-border: 255 255 255;
    --color-box: 255 255 255;
    --box-border: 229 231 235;
    --box-sd: 226 232 240 / .5;
    --heading-1: 23 37 84;
    --heading-2: 31 41 55;
    --heading-3: 55 65 81
  }

  html {
    scroll-behavior: smooth
  }

  body {
    font-family: Raleway, sans-serif
  }

  [data-toggle-nav][data-open-nav=true] #line1 {
    transform: translateY(.375rem) rotate(40deg)
  }

  [data-toggle-nav][data-open-nav=true] #line2 {
    transform: scaleX(0);
    opacity: 0
  }

  [data-toggle-nav][data-open-nav=true] #line3 {
    transform: translateY(-.375rem) rotate(-40deg)
  }

  [data-nav-overlay][data-is-visible=true] {
    visibility: visible;
    display: flex
  }

  -webkit-backdrop-filter: blur(5px);
  backdrop-filter: blur(5px);

    {}
</style>
<script type="module">const e = document.querySelector("[data-toggle-nav]"), t = document.querySelector("[data-navbar]"), a = document.querySelector("[data-nav-overlay]"); e && (e.addEventListener("click", s => { s.preventDefault(), e.getAttribute("data-open-nav") === "false" ? (e.setAttribute("data-open-nav", "true"), a.setAttribute("data-is-visible", "true"), document.body.classList.add("!overflow-y-hidden"), t.style.height = `${t.scrollHeight}px`) : (e.setAttribute("data-open-nav", "false"), a.setAttribute("data-is-visible", "false"), document.body.classList.remove("!overflow-y-hidden"), t.style.height = "0px") }), t.addEventListener("click", () => { e.setAttribute("data-open-nav", "false"), a.setAttribute("data-is-visible", "false"), document.body.classList.remove("!overflow-y-hidden"), t.style.height = "0px" }), a.addEventListener("click", () => { e.setAttribute("data-open-nav", "false"), a.setAttribute("data-is-visible", "false"), document.body.classList.remove("!overflow-y-hidden"), t.style.height = "0px" }));
</script>

<body class="overflow-auto overflow-y-auto bg-body" data-astro-cid-a37b627t>
  <header class="absolute inset-x-0 z-50 py-6">
    <div class="mx-auto max-w-7xl w-full px-5 sm:px-8 md:px-14 lg:px-5 undefined">
      <div data-nav-overlay aria-hidden="true"
        class="fixed hidden inset-0 lg:!hidden bg-box-bg bg-opacity-50 backdrop-filter backdrop-blur-xl"></div>
      <div data-navbar
        class="flex h-0 align-items-center overflow-auto lg:!h-auto lg:scale-y-100 duration-300 ease-linear flex-col gap-y-6 gap-x-4 lg:flex-row w-full lg:justify-between lg:items-center absolute lg:relative top-full lg:top-0 bg-body lg:bg-transparent border-x border-x-box-border lg:border-x-0">
        <nav class="flex justify-between gap-6">
          <div class="min-w-max inline-flex"> <a href="/" class="relative flex items-center gap-3"> <img
                src="{{URL::asset('img/LOGO-PNG.png')}}" alt="Admisa Group Isologo" class="w-21 h-12 trounded-xl"> <!-- <div class="inline-flex text-lg font-semibold text-center text-heading-1 top-0">
                          Admisa Group
                        </div> --> </a> </div>
        </nav>
        <ul
          class="border-t border-box-border align-items-center lg:border-t-0 px-6 lg:px-0 pt-6 lg:pt-0 flex flex-col lg:flex-row gap-y-4 gap-x-3 text-lg text-heading-2 w-full lg:justify-center lg:items-center">
          <li> <a href="#" class="duration-300 font-medium ease-linear hover:text-primary py-3"> Inicio </a> </li>
          <li> <a href="#services" class="duration-300 font-medium ease-linear hover:text-primary py-3"> Nuestros
              Servicios </a> </li>
          <li> <a href="#about-us" class="duration-300 font-medium ease-linear hover:text-primary py-3"> Acerca de
              Nosotros </a> </li>
          <li> <a href="#exp" class="duration-300 font-medium ease-linear hover:text-primary py-3"> Experiencia </a>
          </li>
        </ul>
        <div
          class="lg:min-w-max flex items-center sm:w-max w-full pb-6 lg:pb-0 border-b border-box-bg lg:border-0 px-6 lg:px-0">
          <a href="#cta"
            class="px-6 py-3 rounded-full outline-none relative overflow-auto border duration-300 ease-linear
                    after:absolute after:inset-x-0 after:aspect-square after:scale-0 after:opacity-70 after:origin-center after:duration-300 after:ease-linear after:rounded-full after:top-0 after:left-0 after:bg-[#71c3b5]
                    bg-primary border-transparent relative after:bg-[#71c3b5] hover:border-[#71c3b5] hover:after:opacity-100 hover:after:scale-[2.5] flex justify-center w-full sm:w-max">
            <span class="relative text-white z-10"> Contáctanos </span> </a> </div>
      </div> <button data-toggle-nav data-open-nav="false"
        class="lg:hidden lg:invisible outline-none w-7 h-auto flex flex-col relative"> <span id="line1"
          class="w-6 h-0.5 rounded-full bg-heading-2 transition-all duration-300 ease-linear"></span> <span id="line2"
          class="w-6 origin-center  mt-1 h-0.5 rounded-ful bg-heading-2 transition-all duration-300 ease-linear"></span>
        <span id="line3" class="w-6 mt-1 h-0.5 rounded-ful bg-heading-2 transition-all duration-300 ease-linear"></span>
        <span class="sr-only">togglenav</span> </button>
    </div>
  </header>
  <main class="flex flex-col gap-y-20 md:gap-y-32 overflow-auto">
    <section class="relative pt-32 lg:pt-36">
      <div class="mx-auto max-w-7xl w-full px-5 sm:px-8 md:px-14 lg:px-5 flex flex-col lg:flex-row gap-10 lg:gap-12">
        <div class="absolute w-full lg:w-1/2 inset-y-0 lg:right-0 "> <span
            class="absolute -left-6 md:left-4 top-24 lg:top-28 w-24 h-24 rotate-90 skew-x-12 rounded-3xl bg-heading-5 blur-xl opacity-60 lg:opacity-95 lg:block hidden"></span>
          <span class="absolute right-4 bottom-12 w-24 h-24 rounded-3xl bg-heading-5 blur-xl opacity-80"></span> </div>
        <span
          class="w-4/12 lg:w-2/12 aspect-square bg-gradient-to-tr from-heading-5 bg-heading-5 absolute -top-5 lg:left-0 rounded-full skew-y-12 blur-2xl opacity-40 skew-x-12 rotate-90"></span>
        <div class="relative flex flex-col items-center text-center lg:text-left lg:py-7 xl:py-8 
        lg:items-start lg:max-w-none max-w-3xl mx-auto lg:mx-0 lg:flex-1 lg:w-1/2">
          <h1 class="text-3xl/tight sm:text-4xl/tight md:text-5xl/tight xl:text-6xl/tight
             font-bold text-combine text-combine-up text-heading-1">
            Servicios <span class="text-heading-4 text-combine text-combine-up">Administrativos</span> Para
            Microempresas.
          </h1>
          <p class="md:text-xl text-heading-3 mt-8">
            Brindamos soporte administrativo y de marketing en redes sociales a micro y medianas empresas, ayudándolas a
            mejorar su productividad y eficiencia.
          </p>
          <div class="mt-10  w-full flex max-w-md mx-auto lg:mx-0">
            <div class="flex sm:flex-row flex-col gap-5 w-full"></div>
          </div>
        </div>
        <div class="flex flex-1 lg:w-1/2 lg:h-auto relative lg:max-w-none lg:mx-0 mx-auto max-w-3xl"> <img
            src="{{URL::asset('img/exitosofeliz.png')}}" alt="Hero image" width="2350" height="2359"
            class="lg:absolute lg:w-full lg:h-full rounded-3xl object-cover lg:max-h-none max-h-96"> </div>
      </div>
    </section>
    <section id="services">
      <div class="mx-auto max-w-7xl w-full px-5 sm:px-8 md:px-14 lg:px-5 space-y-10 md:sapce-y-12">
        <div class="text-center max-w-3xl mx-auto space-y-4">
          <h1 class="text-heading-1 font-semibold text-2xl sm:text-3xl md:text-4xl">
            Nuestros Servicios
          </h1>
          <p class="md:text-xl text-heading-3 undefined"> <span class="text-heading-4 font-bold">Admisa</span><span
              class="text-heading-1 font-bold"> Group</span> ofrece una amplia gama de servicios administrativos que se
            adaptan a las necesidades de sus clientes.
          </p>
        </div>
        <div class="grid sm:grid-cols-4 lg:grid-cols-3 gap-6 lg:gap-8">
          <div
            class="p-4 sm:p-8 lg:p-8 rounded-3xl border border-box-border bg-box-bg shadow-lg shadow-box-shadow relative overflow-auto">
            <div class="rounded-xl p-3 text-heading-1 w-max relative"> <svg xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-credit-card" width="36" height="36" viewBox="0 0 24 24"
                stroke-width="1" stroke="#F0871A" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />
                <path d="M3 10l18 0" />
                <path d="M7 15l.01 0" />
                <path d="M11 15l2 0" />
              </svg> </div>
            <div class="mt-8 space-y-4 relative">
              <h2 class="text-lg md:text-xl font-semibold text-heading-2"> Book keeping </h2>
              <p class="md:text-xl text-heading-3 undefined"> Systematically record, organize and maintain financial
                transactions and records of the business. We aim to maintain the accuracy and currency of financial
                records, enabling us present a well organized report. </p>
            </div> <span class="absolute w-32 aspect-square -bottom-16 -right-16 bg-primary/10 rounded-full"></span>
          </div>
          <div
            class="p-4 sm:p-8 lg:p-8 rounded-3xl border border-box-border bg-box-bg shadow-lg shadow-box-shadow relative overflow-auto">
            <div class="rounded-xl p-3 text-heading-1 w-max relative"> <svg xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-file-invoice" width="36" height="36" viewBox="0 0 24 24"
                stroke-width="1" stroke="#F0871A" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                <path d="M9 7l1 0" />
                <path d="M9 13l6 0" />
                <path d="M13 17l2 0" />
              </svg> </div>
            <div class="mt-8 space-y-4 relative">
              <h2 class="text-lg md:text-xl font-semibold text-heading-2"> Invoice processing </h2>
              <p class="md:text-xl text-heading-3 undefined"> Processing the end-to-end management of vendor invoices,
                beginning with receipt and culminating with payment, followed y the recording in the general ledger.
              </p>
            </div> <span class="absolute w-32 aspect-square -bottom-16 -right-16 bg-primary/10 rounded-full"></span>
          </div>
          <div
            class="p-4 sm:p-8 lg:p-8 rounded-3xl border border-box-border bg-box-bg shadow-lg shadow-box-shadow relative overflow-auto">
            <div class="rounded-xl p-3 text-heading-1 w-max relative"> <svg xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-mail-opened" width="36" height="36" viewBox="0 0 24 24"
                stroke-width="1" stroke="#F0871A" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 9l9 6l9 -6l-9 -6l-9 6" />
                <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                <path d="M3 19l6 -6" />
                <path d="M15 13l6 6" />
              </svg> </div>
            <div class="mt-8 space-y-4 relative">
              <h2 class="text-lg md:text-xl font-semibold text-heading-2"> Business Optimization </h2>
              <p class="md:text-xl text-heading-3 undefined"> We handle document management, including organizing vendor
                files and employee files. We provide assistance in the process of requesting, renewing and maintaining
                permits. </p>
            </div> <span class="absolute w-32 aspect-square -bottom-16 -right-16 bg-primary/10 rounded-full"></span>
          </div>
          <div
            class="p-4 sm:p-8 lg:p-8 rounded-3xl border border-box-border bg-box-bg shadow-lg shadow-box-shadow relative overflow-auto">
            <div class="rounded-xl p-3 text-heading-1 w-max relative"> <svg xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-file-dots" width="36" height="36" viewBox="0 0 24 24"
                stroke-width="1" stroke="#F0871A" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                <path d="M9 14v.01" />
                <path d="M12 14v.01" />
                <path d="M15 14v.01" />
              </svg> </div>
            <div class="mt-8 space-y-4 relative">
              <h2 class="text-lg md:text-xl font-semibold text-heading-2"> Project management </h2>
              <p class="md:text-xl text-heading-3 undefined"> We assist in preparing project estimates to be delivered
                to clients, establish project timelines, budget and calendars. </p>
            </div> <span class="absolute w-32 aspect-square -bottom-16 -right-16 bg-primary/10 rounded-full"></span>
          </div>
          <div
            class="p-4 sm:p-8 lg:p-8 rounded-3xl border border-box-border bg-box-bg shadow-lg shadow-box-shadow relative overflow-auto">
            <div class="rounded-xl p-3 text-heading-1 w-max relative"> <svg xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-receipt-2" width="36" height="36" viewBox="0 0 24 24"
                stroke-width="1" stroke="#F0871A" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" />
                <path d="M14 8h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5m2 0v1.5m0 -9v1.5" />
              </svg> </div>
            <div class="mt-8 space-y-4 relative">
              <h2 class="text-lg md:text-xl font-semibold text-heading-2"> Social media </h2>
              <p class="md:text-xl text-heading-3 undefined"> Create and establish social media platform page. Through
                research we identify and establish content strategies. </p>
            </div> <span class="absolute w-32 aspect-square -bottom-16 -right-16 bg-primary/10 rounded-full"></span>
          </div>
          <div
            class="p-4 sm:p-8 lg:p-8 rounded-3xl border border-box-border bg-box-bg shadow-lg shadow-box-shadow relative overflow-auto">
            <div class="rounded-xl p-3 text-heading-1 w-max relative"> <svg xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-building-bank" width="36" height="36" viewBox="0 0 24 24"
                stroke-width="1" stroke="#F0871A" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 21l18 0" />
                <path d="M3 10l18 0" />
                <path d="M5 6l7 -3l7 3" />
                <path d="M4 10l0 11" />
                <path d="M20 10l0 11" />
                <path d="M8 14l0 3" />
                <path d="M12 14l0 3" />
                <path d="M16 14l0 3" />
              </svg> </div>
            <div class="mt-8 space-y-4 relative">
              <h2 class="text-lg md:text-xl font-semibold text-heading-2"> Consumer services </h2>
              <p class="md:text-xl text-heading-3 undefined"> Document Translation Assistance in completing government
                forms, Income Tax Preparation, Tax ID(ITIN) Application, USCIS Filings. </p>
            </div> <span class="absolute w-32 aspect-square -bottom-16 -right-16 bg-primary/10 rounded-full"></span>
          </div>
          <div
            class="p-4 sm:p-8 lg:p-8 rounded-3xl border border-box-border bg-box-bg shadow-lg shadow-box-shadow relative overflow-auto">
            <div class="rounded-xl p-3 text-heading-1 w-max relative"> <svg xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-brand-wechat" width="36" height="36" viewBox="0 0 24 24"
                stroke-width="1" stroke="#F0871A" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M16.5 10c3.038 0 5.5 2.015 5.5 4.5c0 1.397 -.778 2.645 -2 3.47l0 2.03l-1.964 -1.178a6.649 6.649 0 0 1 -1.536 .178c-3.038 0 -5.5 -2.015 -5.5 -4.5s2.462 -4.5 5.5 -4.5z" />
                <path
                  d="M11.197 15.698c-.69 .196 -1.43 .302 -2.197 .302a8.008 8.008 0 0 1 -2.612 -.432l-2.388 1.432v-2.801c-1.237 -1.082 -2 -2.564 -2 -4.199c0 -3.314 3.134 -6 7 -6c3.782 0 6.863 2.57 7 5.785l0 .233" />
                <path d="M10 8h.01" />
                <path d="M7 8h.01" />
                <path d="M15 14h.01" />
                <path d="M18 14h.01" />
              </svg> </div>
            <div class="mt-8 space-y-4 relative">
              <h2 class="text-lg md:text-xl font-semibold text-heading-2"> Notary Public Services </h2>
              <p class="md:text-xl text-heading-3 undefined"> Notarization of document, Administering Oaths and
                Affirmations, Certified copies of original documents. </p>
            </div> <span class="absolute w-32 aspect-square -bottom-16 -right-16 bg-primary/10 rounded-full"></span>
          </div>
        </div>
      </div>
    </section>
    <section id="about-us">
      <div class="mx-auto max-w-7xl w-full px-5 sm:px-8 md:px-14 lg:px-5 flex flex-col midmd:flex-row gap-10 lg:gap-12">
        <div
          class="max-w-md mx-auto midmd:max-w-none lg:mx-0  lg:pr-10 xl:pr-2 flex-1 flex w-11/12 midmd:w-5/12 lg:w-1/2 midmd:h-auto">
          <div class="w-full h-80 sm:h-96 midmd:h-full relative">
            <div
              class="absolute rotate-45 -left-5 md:-left-10 lg:-left-20 xl:-left-24 p-1 top-1/2 w-16 h-16 bg-gradient-to-br from-primary to-orange-400 blur-3xl opacity-50">
            </div>
            <div
              class="absolute  p-1 -top-4 md:-top-10 right-0 w-20 h-20 bg-gradient-to-br bg-heading-5 rounded-full blur-3xl opacity-60">
            </div> <span
              class="absolute w-full aspect-[16/5] -skew-x-12 rounded-full bg-heading-5 blur-2xl left-0 bottom-0"></span>
            <img src="{{URL::asset('img/confianza-empresaria.jpg')}}" alt="banner image" width="1240" height="4000"
              class="w-auto left-1/2 -translate-x-1/2 absolute bottom-0 max-h-full">
          </div>
        </div>
        <div class="flex-1 flex midmd:w-7/12 lg:w-1/2 flex-col">
          <h1 class="text-heading-1 font-semibold text-2xl sm:text-3xl md:text-4xl">
            Acerca de Nosotros
          </h1>
          <p class="md:text-xl text-heading-3 mt-8">
            Admisa Group es una empresa que ofrece servicios administrativos, contables y de marketing a pequeñas
            empresas para optimizar sus recursos y mejorar su productividad. <br>Nuestro equipo está conformado por
            profesionales especializados en diversas áreas tales como: administrativa, contable y marketing.
          </p>
          <div class="pt-8 grid grid-cols-2 items-center gap-4 max-w-3xl md:max-w-[none]">
            <div
              class="p-5 sm:p-6 lg:p-8 rounded-3xl border border-box-border bg-box-bg shadow-lg shadow-box-shadow relative overflow-auto">
              <div class="rounded-xl p-3 text-heading-1 w-max relative"> <span> <svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-medal" width="36" height="36" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="#F0871A" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 4v3m-4 -3v6m8 -6v6"></path>
                    <path d="M12 18.5l-3 1.5l.5 -3.5l-2 -2l3 -.5l1.5 -3l1.5 3l3 .5l-2 2l.5 3.5z"></path>
                  </svg> </span> </div>
              <h2 class="md:text-xl font-semibold text-heading-2 mt-6 mb-4"> Objetive </h2>
              <p class="md:text-xl text-heading-3 undefined"> Work as a team with our clients to improve their internal
                productivity, achieve their goals and objectives effectively, improving their presence on social
                networks and digital platforms. </p>
            </div>
            <div
              class="p-5 sm:p-6 lg:p-8 rounded-3xl border border-box-border bg-box-bg shadow-lg shadow-box-shadow relative overflow-auto">
              <div class="rounded-xl p-3 text-heading-1 w-max relative"> <span> <svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-medal" width="36" height="36" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="#F0871A" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 4v3m-4 -3v6m8 -6v6"></path>
                    <path d="M12 18.5l-3 1.5l.5 -3.5l-2 -2l3 -.5l1.5 -3l1.5 3l3 .5l-2 2l.5 3.5z"></path>
                  </svg> </span> </div>
              <h2 class="md:text-xl font-semibold text-heading-2 mt-6 mb-4"> Objetive </h2>
              <p class="md:text-xl text-heading-3 undefined"> Provide efficient, reliable and professional support in
                the management of administrative tasks and operations. </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="exp">
      <div class="mx-auto max-w-7xl w-full px-5 sm:px-8 md:px-14 lg:px-5 flex flex-col midmd:flex-row gap-10 lg:gap-12">
        <div class="flex-1 flex midmd:w-7/12 lg:w-1/2 flex-col">
          <h1 class="text-heading-1 font-semibold text-2xl sm:text-3xl md:text-4xl">
            Nuestra Experiencia
          </h1>
          <p class="md:text-xl text-heading-3 mt-8">
            He adquirido mi experiencia a través de
            administración de mi propio negocio. A lo largo de los años, yo
            han asumido diversas responsabilidades como la gestión
            finanzas, supervisión de operaciones, trato con clientes
            relaciones y desarrollar planes estratégicos. <br> Estas manos
            La experiencia me ha dado una profunda comprensión de
            Las complejidades involucradas en el manejo de un negocio.
            eficientemente. En general, administrar mi propio negocio.
            me ha proporcionado conocimientos invaluables y
            experiencia que ahora puedo aplicar para ayudar a otras empresas
            propietarios.
          </p>
          <ul class="mt-8 space-y-4 text-heading-3 font-medium">
            <li> <span
                class="font-bold bg-box-bg rounded-full w-8 h-8 mr-3 text-primary inline-flex justify-center items-center">&checkmark;</span>
              20 años de experiencia.
            </li>
            <li> <span
                class="font-bold bg-box-bg rounded-full w-8 h-8 mr-3 text-primary inline-flex justify-center items-center">&checkmark;</span>
              Asistente Legal.
            </li>
            <li> <span
                class="font-bold bg-box-bg rounded-full w-8 h-8 mr-3 text-primary inline-flex justify-center items-center">&checkmark;</span>
              Tengo una certificación de Salesforce.
            </li>
            <li> <span
                class="font-bold bg-box-bg rounded-full w-8 h-8 mr-3 text-primary inline-flex justify-center items-center">&checkmark;</span>
              Pasión por ayudarte.
            </li>
          </ul>
        </div>
        <div
          class="max-w-md mx-auto midmd:max-w-none lg:mx-0  lg:pr-10 xl:pr-2 flex-1 flex w-11/12 midmd:w-5/12 lg:w-1/2 midmd:h-auto">
          <div class="w-full h-80 sm:h-96 midmd:h-full relative">
            <div
              class="absolute rotate-45 -left-5 md:-left-10 lg:-left-20 xl:-left-24 p-1 top-1/2 w-16 h-16 bg-gradient-to-br from-primary to-orange-400 blur-3xl opacity-50">
            </div>
            <div
              class="absolute  p-1 -top-4 md:-top-10 right-0 w-20 h-20 bg-gradient-to-br from-primary to-orange-400 rounded-full blur-3xl opacity-60">
            </div> <span
              class="absolute w-full aspect-[16/5] -skew-x-12 rounded-full bg-gradient-to-tr bg-heading-5 opacity-40 blur-2xl left-0 bottom-0"></span>
            <img src="{{URL::asset('img/isamart.png')}}" alt="banner image" width="1240" height="1385"
              class="w-auto left-1/2 top-0/2 -translate-x-1/2 absolute bottom max-h-full">
          </div>
        </div>
      </div>
    </section>
    <section id="cta" class="pb-20">
      <div class="mx-auto max-w-7xl w-full px-5 sm:px-8 md:px-14 lg:px-5 undefined">
        <div class="w-full relative py-8 md:py-10 px-6 md:px-8 rounded-2xl bg-gradient-to-tr from-gray-100 to-gray-200">
          <div class="absolute right-0 top-0 h-full w-full flex justify-end">
            <div class="w-28 h-28 overflow-auto flex rounded-xl relative blur-2xl"> <span
                class="absolute w-16 h-16 -top-1 -right-1 bg-heading-5 rounded-md rotate-45"></span> <span
                class="absolute w-16 h-16 -bottom-1 -right-1 bg-heading-5 rounded-md rotate-45"></span> <span
                class="absolute w-16 h-16 -bottom-1 -left-1 bg-heading-5 rounded-md rotate-45"></span> </div>
          </div>
          <div class="absolute left-0 bottom-0 h-full w-full flex items-end">
            <div class="w-28 h-28 overflow-auto flex rounded-xl relative blur-2xl"> <span
                class="absolute w-16 h-16 -top-1 -right-1 bg-heading-5 rounded-md rotate-45"></span> <span
                class="absolute w-16 h-16 -bottom-1 -right-1 bg-heading-5 rounded-md rotate-45"></span> <span
                class="absolute w-16 h-16 -bottom-1 -left-1 bg-heading-5 rounded-md rotate-45"></span> </div>
          </div>
          <div class="mx-auto text-center max-w-xl md:max-w-2xl relative">
            <h1 class="text-3xl/tight sm:text-4xl/tight md:text-5xl/tight
          font-bold text-heading-1">
              Contáctanos <span class="text-heading-4">Ahora</span> </h1>
            <form method="POST"  action="/registro" class="mx-auto max-w-md sm:max-w-xl pt-10">
            @csrf    
            <input type="text"
                placeholder="Tu Nombre" name="firstName" id="firstName"
                class="w-full p-3 mt-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
              <input type="text" placeholder="Tu Apellido" name="lastName" id="lastName"
                class="w-full p-3 mt-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
              <input type="email" placeholder="Tu Correo Electrónico" name="email" id="email"
                class="w-full p-3 mt-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
              <!-- <PhoneInput /> -->
              <div class="flex flex-col"> <input type="tel" placeholder="Tu Número Telefónico" name="phone" id="phone"
                  class="telephone mb-4 w-full p-3 mt-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary"> <!-- <Button variant={"primary"}>
              <span class="text-white relative z-[5]">Go</span>
            </Button> --> <!-- <pre>
              {JSON.stringify(localStorage.getItem('user'), null, 2)}
            </pre> --> <button class="text-center
              px-6
              py-3
              rounded-full
              outline-none
              relative
              overflow-auto
              border
              duration-300
              ease-linear
              after:absolute
              after:inset-x-0
              after:aspect-square
              after:scale-0
              after:opacity-70
              after:origin-center
              after:duration-300
              after:ease-linear
              after:rounded-full
              after:top-0
              after:left-0
              after:bg-[#71c3b5]
              bg-primary
              border-transparent
              relative
              after:bg-[#71c3b5]
              hover:border-[#71c3b5]
              hover:after:opacity-100
              hover:after:scale-[2.5]
              min-w-max
              text-white" onclick="handleStoreUserLocally()"> <span
                    class="text-center hidden sm:flex relative z-[5]">Enviar</span> <span
                    class="flex sm:hidden relative z-[5]"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                      viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5">
                      </path>
                    </svg> </span> </button> <!-- <button
              class={`px-6 py-3 rounded-full outline-none relative overflow-auto border duration-300 ease-linear
              after:absolute after:inset-x-0 after:aspect-square after:scale-0 after:opacity-70 after:origin-center after:duration-300 after:ease-linear after:rounded-full after:top-0 after:left-0 after:bg-[#71c3b5] hover:after:opacity-100 hover:after:scale-[2.5]`}
              onclick="handleStoreUserLocally()"
            > --> <!-- <span class="text-white relative z-[5]">Go</span> --> </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <div class="mt-16"></div>
  <footer class="relative  bg-gradient-to-tr pt-28 rounded-t-3xl from-gray-100 to-gray-200">
    <div class="absolute right-0 top-0 h-full w-full flex justify-end from-gray-100 to-gray-200">
      <div class="w-28 h-28 overflow-auto flex rounded-xl relative blur-2xl"> <span
          class="absolute w-16 h-16 -top-1 -right-1 bg-heading-5 rounded-md rotate-45"></span> <span
          class="absolute w-16 h-16 -bottom-1 -right-1 bg-heading-5 rounded-md rotate-45"></span> <span
          class="absolute w-16 h-16 -bottom-1 -left-1 bg-heading-5 rounded-md rotate-45"></span> </div>
    </div>
    <div class="absolute left-0 bottom-0 h-full w-full flex items-end">
      <div class="w-28 h-28 overflow-auto flex rounded-xl relative blur-2xl"> <span
          class="absolute w-16 h-16 -top-1 -right-1 bg-heading-5 rounded-md rotate-45"></span> <span
          class="absolute w-16 h-16 -bottom-1 -right-1 bg-heading-5 rounded-md rotate-45"></span> <span
          class="absolute w-16 h-16 -bottom-1 -left-1 bg-heading-5 rounded-md rotate-45"></span> </div>
    </div>
    <div class="mx-auto max-w-7xl w-full px-5 sm:px-8 md:px-14 lg:px-5 pb-8 relative overflow-auto"> <span
        class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 blur-2xl opacity-20 w-24 h-16 sm:w-48 sm:h-36 rounded-full rotate-12 skew-x-6 bg-primary"></span>
      <div class="grid grid-cols-2 lg:grid-cols-3 lg:items-stretch gap-8 relative">
        <div class="col-span-2 lg:col-span-1 h-auto flex flex-col">
          <div class="h-full"> <a href="#" class="relative flex items-center gap-3"> <img src="{{URL::asset('img/LOGO-PNG.png')}}"
                alt="Admisa Group Isologo" class="w-36 h-26 trounded-xl"> </a> </div> <!-- social links -->
          <div class="min-h-max flex items-center gap-6 text-heading-3 mt-8"> <a href="https://www.facebook.com/admisa.group"
              class="transition hover:text-heading-1 hover:scale-105" target="_blank"> <svg xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-brand-facebook-filled" width="36" height="36" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path
                  d="M18 2a1 1 0 0 1 .993 .883l.007 .117v4a1 1 0 0 1 -.883 .993l-.117 .007h-3v1h3a1 1 0 0 1 .991 1.131l-.02 .112l-1 4a1 1 0 0 1 -.858 .75l-.113 .007h-2v6a1 1 0 0 1 -.883 .993l-.117 .007h-4a1 1 0 0 1 -.993 -.883l-.007 -.117v-6h-2a1 1 0 0 1 -.993 -.883l-.007 -.117v-4a1 1 0 0 1 .883 -.993l.117 -.007h2v-1a6 6 0 0 1 5.775 -5.996l.225 -.004h3z"
                  stroke-width="0" fill="currentColor"></path>
              </svg> <span class="sr-only">social link</span> </a> <a href="#"
              class="transition hover:text-heading-1 hover:scale-105"> <svg xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-brand-tiktok-filled" width="32" height="32" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path
                  d="M16.083 2h-4.083a1 1 0 0 0 -1 1v11.5a1.5 1.5 0 1 1 -2.519 -1.1l.12 -.1a1 1 0 0 0 .399 -.8v-4.326a1 1 0 0 0 -1.23 -.974a7.5 7.5 0 0 0 1.73 14.8l.243 -.005a7.5 7.5 0 0 0 7.257 -7.495v-2.7l.311 .153c1.122 .53 2.333 .868 3.59 .993a1 1 0 0 0 1.099 -.996v-4.033a1 1 0 0 0 -.834 -.986a5.005 5.005 0 0 1 -4.097 -4.096a1 1 0 0 0 -.986 -.835z"
                  stroke-width="0" fill="currentColor"></path>
              </svg> <span class="sr-only">social link</span> </a> <a href="https://www.instagram.com/admisagroup/"
              class="transition hover:text-heading-1 hover:scale-105" target="_blank"> <svg xmlns="http://www.w3.org/2000/svg"
                class="icon icon-tabler icon-tabler-brand-instagram" width="32" height="32" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                <path d="M16.5 7.5l0 .01"></path>
              </svg> <span class="sr-only">social link</span> </a> </div>
        </div>
        <div class="grid md:grid-cols-2 gap-8 h-max">
          <nav class="space-y-6">
            <h2 class="capitalze font-semibold text-heading-1 text-xl"> Compañía </h2>
            <ul class="space-y-3 font-medium md:text-lg text-heading-3">
              <li> <a href="#services" class="transition hover:text-primary"> Nuestros Servicios </a> </li>
              <li> <a href="#about-us" class="transition hover:text-primary"> Acerca de Nosotros </a> </li>
              <li> <a href="#exp" class="transition hover:text-primary"> Experiencia </a> </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class=" bg-gradient-to-tl from-box-bg py-2 relative">
      <div class="mx-auto max-w-7xl w-full px-5 sm:px-8 md:px-14 lg:px-5 undefined">
        <div class="flex justify-between items-center gap-6 md:text-lg text-heading-3">
          <div>
            &copy; <span id="year"></span> Admisa Group. Todos los derechos reservados.
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>