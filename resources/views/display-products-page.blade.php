<livewire:components.navigation />
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Inria+Serif:wght@300;400;700&display=swap" rel="stylesheet">

        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            body { font-family: 'Lato', sans-serif; }
            h1, h2, h3, h4, h5 { font-family: 'Inria Serif', serif; }
        </style>

        <title>Static Page</title>
    </head>

    <body class="bg-[#FAF7EE] min-h-screen">
        <div class="w-full max-w-screen mx-auto">
            <div class="flex flex-col md:flex-row">
                <aside class="w-full md:w-56 pt-8 md:pt-16 ml-8 pl-10 space-y-6 text-[#333] md:block flex flex-row justify-around md:flex-col">
                    <a class="block text-lg font-serif" href="#">About Us</a>
                    <a class="block text-lg font-serif" href="#">Pearls</a>
                    <a class="block text-lg font-serif" href="#">Best Sellers</a>
                    <a class="block text-lg font-serif" href="#">Contact</a>
                </aside>

                <main class="flex-1 pt-6 md:pt-12 md:pl-10 px-4">
                    <div class="max-w-3xl m-auto md:pl-10">
                        <img 
                            src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=1600&q=80"
                            class="w-full object-cover rounded-xl"
                            alt="Pearl Jewelry"
                        >
                    </div>
                    
                    <div class="max-w-2xl mx-auto mt-6 md:pl-1">
                        <h2 class="font-serif text-2xl md:text-3xl text-[#333]">
                            Born from Lombok's Waters
                        </h2>

                        <p class="mt-3 text-gray-700 leading-relaxed">
                            Each pearl tells a story of the sea. <br>
                            Hand-harvested from the crystal waters of Lombok, our pearls are nurtured naturally,
                            reflecting the calm beauty of the island and the artistry of its people.
                        </p>
                    </div>
                </main>
            </div>

            <section class="grid md:grid-cols-2 mt-16">
                <!-- Left side - Text content -->
                <div class="bg-[#7DD4CA] p-12 md:p-16 flex items-center">
                    <div class="max-w-md">
                        <h2 class="font-serif text-3xl md:text-4xl text-white mb-6" style="font-family: 'Inria Serif', serif;">
                            The Art of Natural Elegance
                        </h2>
                        <p class="text-white leading-relaxed" style="font-family: 'Lato', sans-serif;">
                            True beauty doesn't shout—it glows. Each Lombok pearl is chosen for its natural luster, untouched by artificial perfection, bringing you jewelry that feels pure and timeless.
                        </p>
                    </div>
                </div>

                <!-- Right side - Images -->
                <div class="grid grid-rows-2">
                    <!-- Top image -->
                    <div class="bg-gray-200 overflow-hidden">
                        <img 
                            src="YOUR_IMAGE_URL_HERE" 
                            alt="Pearl brooch"
                            class="w-full h-full object-cover"
                        >
                    </div>
                    
                    <!-- Bottom image -->
                    <div class="bg-blue-300 overflow-hidden">
                        <img 
                            src="YOUR_IMAGE_URL_HERE" 
                            alt="Pearl ring on hand"
                            class="w-full h-full object-cover"
                        >
                    </div>
                </div>
            </section>

            {{-- Carousel (Alpine + Tailwind) --}}
            <section class="mt-10 py-10">
                 {{-- Heading --}}
                <h2 class="text-xl font-bold tracking-widest text-black text-center mb-6">Our Collections</h2>
                <div x-data="carousel()" x-init="init()" x-on:mouseenter="pause()" x-on:mouseleave="play()" class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="relative overflow-hidden rounded-lg">
                    {{-- Slides wrapper (flex, will be translated) --}}
                    <div
                        class="flex transition-transform duration-700 ease-in-out"
                        :style="`transform: translateX(-${current * (100 / slides.length)}%); width: calc(${slides.length} * 100%);`"
                    >
                        <template x-for="(slide, i) in slides" :key="i">
                        <div class="relative" :style="`width: 100%;`">
                            <img :src="slide.src" :alt="slide.title" class="w-full h-56 sm:h-72 md:h-96 object-cover">
                            {{-- overlay --}}
                            <div class="absolute inset-0 flex items-end">
                            <div class="w-full bg-gradient-to-t from-black/50 to-transparent p-4 sm:p-6 md:p-8">
                                <div class="max-w-xl text-left text-white font-serif">
                                <h3 class="text-lg sm:text-xl md:text-2xl font-semibold" x-text="slide.title"></h3>
                                <p class="mt-2 text-sm sm:text-base" x-text="slide.subtitle"></p>
                                <a :href="slide.href" class="inline-block mt-4 bg-white text-gray-900 px-4 py-2 rounded shadow-sm text-sm">Shop now</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        </template>
                    </div>

                    {{-- Prev / Next controls --}}
                    <button @click="prev()" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white/100 rounded-full p-2 shadow hidden sm:inline-flex">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <button @click="next()" class="absolute right-3 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white/100 rounded-full p-2 shadow hidden sm:inline-flex">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>

                    {{-- Indicators --}}
                    <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex space-x-2">
                        <template x-for="(slide, i) in Math.ceil(slides.length / slidesToShow)" :key="i">
                        <button
                            @click="goTo(i)"
                            :class="{'bg-white': Math.floor(current / slidesToShow) === i, 'bg-white/50': Math.floor(current / slidesToShow) !== i }"
                            class="w-8 h-1 rounded-full transition-colors"
                        ></button>
                        </template>
                    </div>
                    </div>
                </div>
            </section>
            @include('components.newsletter')
        </div>
        @include('components.footer')
    </body>
       
    <script>
        function carousel(){
            return {
            slidesToShow: 1,            
            current: 0,
            slides: [
                { src: '{{ asset("images/landing/carousel1.jpg") }}', title: 'Title One', subtitle: 'Short description one', href: '#' },
                { src: '{{ asset("images/landing/carousel1.jpg") }}', title: 'Title One', subtitle: 'Short description one', href: '#' },
            ],
            timer: null,
            init(){
                // make slidesToShow responsive: 1 on small, 1 on sm, 2 on lg
                const update = () => {
                const w = window.innerWidth;
                this.slidesToShow = w >= 1; 
                };
                update();
                window.addEventListener('resize', update);

                // start autoplay
                this.play();
            },
            play(){
                this.pause();
                this.timer = setInterval(()=>{ this.next() }, 4000);
            },
            pause(){
                if(this.timer) { clearInterval(this.timer); this.timer = null; }
            },
            prev(){
                this.current = (this.current - 1 + this.slides.length) % this.slides.length;
            },
            next(){
                this.current = (this.current + 1) % this.slides.length;
            },
            goTo(index){
                this.current = index * (this.slidesToShow);
            }
            }
        }
    </script>
</html>
