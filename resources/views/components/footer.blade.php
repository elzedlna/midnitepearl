{{-- resources/views/components/footer.blade.php --}}
<footer class="bg-[#f5f3e9] text-neutral-800 font-serif">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-8">

      {{-- LEFT: category lists --}}
      <div class="flex w-full lg:w-1/2 gap-8">
        <div class="min-w-[140px]">
          <h4 class="text-l font-semibold mb-3">Pearls</h4>
          <ul class="text-sm space-y-2">
            <li><a href="#" class="hover:underline">All products</a></li>
            <li><a href="#" class="hover:underline">Bracelets</a></li>
            <li><a href="#" class="hover:underline">Brooches</a></li>
            <li><a href="#" class="hover:underline">Best Sellers</a></li>
          </ul>
        </div>

        <div class="min-w-[140px]">
          <h4 class="text-l font-semibold mb-3">Services</h4>
          <ul class="text-sm space-y-2">
            <li><a href="#" class="hover:underline">About Us</a></li>
            <li><a href="#" class="hover:underline">Order Tracking</a></li>
            <li><a href="#" class="hover:underline">My Account</a></li>
            <li><a href="#" class="hover:underline">Refund Policy</a></li>
          </ul>
        </div>
      </div>

      {{-- CENTER: brand + socials --}}
      <div class="flex-shrink-0 flex flex-col items-center text-center">
        {{-- Brand name (replace with <img> if you want a logo image) --}}
        <a href="{{ url('/') }}" class="text-base font-semibold mb-4">Midnite Pearl</a>

        {{-- Social icons --}}
        <div class="flex items-center gap-3">
          {{-- Instagram --}}
          <a href="#" aria-label="Instagram" class="p-2 border rounded text-emerald-400">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="3" y="3" width="18" height="18" rx="4"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><path d="M17.5 6.5h.01"/></svg>
          </a>

          {{-- TikTok placeholder --}}
          <a href="#" aria-label="TikTok" class="p-2 border rounded text-emerald-400">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 18a4 4 0 100-8v8z"/><path d="M9 6v2.5a4.5 4.5 0 004.5 4.5H16"/></svg>
          </a>

          {{-- Email --}}
          <a href="mailto:hello@example.com" class="p-2 border rounded text-emerald-400" aria-label="Email">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M3 8.5v7a2 2 0 002 2h14a2 2 0 002-2v-7"/><path d="M21 8.5l-9 6-9-6"/></svg>
          </a>
        </div>
      </div>

      {{-- RIGHT: small links stacked or inline on desktop --}}
      <div class="flex w-full lg:w-auto justify-start lg:justify-end items-start">
        <ul class="text-l space-y-2 lg:space-y-0 lg:flex lg:gap-6">
          <li><a href="#" class="hover:underline">Contact Us</a></li>
          <li><a href="#" class="hover:underline">Blog</a></li>
          <li><a href="#" class="hover:underline">FAQ</a></li>
        </ul>
      </div>

    </div>

    {{-- bottom row: left currency / copyright right --}}
    <div class="mt-8 border-t border-gray-200 pt-6 flex flex-col md:flex-row items-center justify-between gap-4">
      <div class="flex items-center gap-3">
        <button class="text-xs px-3 py-1 border rounded text-emerald-500">RM MYR</button>
      </div>

      <div class="text-sm font-semibold">
        © Midnite Pearl {{ date('Y') }}
      </div>
    </div>
  </div>
</footer>


