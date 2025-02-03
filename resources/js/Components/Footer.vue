<script setup>
import {Link}  from '@inertiajs/vue3'
</script>

<template>
    <footer>
      <div class="container mx-auto max-w-[1600px]">
          <div class="grid grid-cols-1 xl:grid-cols-3 gap-10 py-5 justify-items-center px-2">
              <div class="rounded-xl p-4 border-2 w-full lg:max-w-[533px]">
                  <h3 class="text-2xl font-bold">Social Media</h3>
                  <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Twitter</li>
                  </ul>
              </div>
              <div class="rounded-xl p-4 border-2 w-full lg:max-w-[533px]">
                  <h3 class="text-2xl font-bold">Niewsbrief aanmelding</h3>
              </div>
              <div class="rounded-xl p-4 border-2 w-full lg:max-w-[533px]">
                  <h3 class="text-2xl font-bold">Klantenservice</h3>
                  <ul>
                      <li>Telefoon: 06-12345678</li>
                      <li>Email: info@commodum-copa.nl</li>
                        <li>Adres: Straatnaam 123, 1234 AB, Plaatsnaam</li>
                  </ul>
              </div>
          </div>
          </div>
        <section id="footer-links" class="border-t-2 py-5">
            <div class="container mx-auto max-w-7xl">
                <ul class="grid grid-cols-2 lg:grid-cols-4 justify-items-center gap-3">
                    <li><Link>Algemene voorwaarden</Link></li>
                    <li><Link>Levering & Verzending</Link></li>
                    <li><Link>Privacybeleid</Link></li>
                    <li><Link>Onze organisatie</Link></li>
                </ul>
            </div>
        </section>
    </footer>
</template>
