<?php snippet('header') ?>
<main class="flex-1">
    <section class="w-full pt-32 pb-40 px-6">
        <div class="max-w-4xl mx-auto text-center space-y-10">
            <div
                class="inline-block px-4 py-1 text-[#F67E7D] text-[11px] font-black tracking-[0.2em] uppercase border-b-2 border-[#F67E7D] mb-4">
                Our Mission
            </div>
            <h1 class="text-5xl md:text-8xl font-black leading-[0.95] tracking-tighter text-[#FFB997] font-sans">
                Honoring the architects of visual culture.
            </h1>
            <p class="text-xl md:text-2xl text-[#F67E7D] font-serif leading-relaxed max-w-2xl mx-auto italic">
                A curated celebration of Black excellence in design, spotlighting one visionary creator every
                day of February.
            </p>
        </div>
    </section>
    <section class="w-full bg-[#621940] py-32 border-y border-white/10">
        <div class="max-w-[1000px] mx-auto px-8">
            <div class="grid grid-cols-1 gap-12 text-center md:text-left">
                <p class="text-2xl md:text-3xl leading-snug text-[#FFB997] font-serif">
                    "This project isn't just about a single month. It's about building a permanent archive of
                    talent that has historically been overlooked, ensuring the next generation of designers sees
                    themselves reflected in the industry's history."
                </p>
            </div>
        </div>
    </section>
    <!-- More static content... leaving as HTML for now -->
    <section class="w-full py-40 px-6 bg-[#0b032d]">
        <!-- Using a static highlighted person for now, or could map to a field -->
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row items-start gap-16 md:gap-32">
                <div class="w-full md:w-5/12">
                    <div class="relative group">
                        <img alt="Marcus J. Thompson"
                            class="w-full aspect-[4/5] object-cover rounded-custom shadow-2xl grayscale hover:grayscale-0 transition-all duration-700"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKzNM87cQpeUH1Q2o5diulBSuGisODSjYwyzwyIXRxPJ3LSslFNb1lmzrrkbMP19VJ6uKFrqu4bop254OC_vlfsboYrfQ9CiWw8E1P9GpgH7ii9PzJX0kJZ_uIVl-3OCWLVIzCQMIgUfZ_FNzMm7ZJ_b978ZK6irGSFfcGymTbfKmEtsreGDB_UHnFHGekfFLX5zSx59kEsws8T_nvArcU-a0xjkyaXefhwjj9zR-Rd8BAQHMAQST7GA2eCrTMYwFtKWcU5cCSdw" />
                        <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-[#F67E7D]/10 -z-10 rounded-custom">
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-7/12 space-y-10">
                    <div class="space-y-4">
                        <h2 class="text-5xl font-black tracking-tight font-sans text-[#FFB997]">Marcus J.
                            Thompson</h2>
                        <p class="text-[#F67E7D] text-[11px] font-black tracking-[0.2em] uppercase">Founder
                            &amp; Creative Director</p>
                    </div>
                    <div class="space-y-8 text-[#F67E7D] leading-relaxed text-lg font-serif">
                        <p>
                            Marcus started '28 Days of Black Designers' in 2021 as a personal catalog to keep
                            track of the incredible talent he encountered daily. What began as a simple list
                            quickly evolved into a platform dedicated to bridging the visibility gap in the
                            technology and creative industries.
                        </p>
                        <p>
                            With over 12 years of experience building digital products for global brands, Marcus
                            focuses on the intersection of accessible design and high-performance engineering.
                            He believes that documentation is a form of activism.
                        </p>
                    </div>
                    <div class="flex items-center gap-4 pt-4">
                        <!-- Socials -->
                        <a class="w-12 h-12 rounded-full border border-[#F67E7D]/30 text-[#F67E7D] flex items-center justify-center hover:bg-[#F67E7D] hover:text-[#0b032d] transition-all"
                            href="#">
                            <span class="material-symbols-outlined text-lg">language</span>
                        </a>
                        <!-- ... -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <!-- ... reusing footer code or static ... -->
</main>
<footer class="w-full py-20 px-8 border-t border-white/10 bg-[#0b032d]">
    <div class="max-w-[1400px] mx-auto flex flex-col md:flex-row justify-between items-center gap-12">
        <div class="flex flex-col gap-6 text-center md:text-left">
            <!-- ... -->
            <span class="font-black text-xl tracking-tight uppercase text-white">28 Days</span>
        </div>
        <div class="flex gap-12">
            <a class="text-xs font-bold tracking-widest text-white/70 hover:text-[#F67E7D] transition-colors uppercase"
                href="#">Twitter</a>
            <a class="text-xs font-bold tracking-widest text-white/70 hover:text-[#F67E7D] transition-colors uppercase"
                href="#">Instagram</a>
            <a class="text-xs font-bold tracking-widest text-white/70 hover:text-[#F67E7D] transition-colors uppercase"
                href="#">Contact</a>
        </div>
    </div>
</footer>

</body>

</html>