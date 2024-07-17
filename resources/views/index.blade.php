<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
            rel="stylesheet"
        />
        <title>GWA News</title>
    </head>
    <body class="bg-white">
        <x-header />
        <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8 mt-5">
            <section
                class="flex flex-col mx-auto space-y-6 md:flex-row md:items-center"
            >
                <div
                    class="flex flex-col items-center w-full md:flex-row md:w-1/2"
                >
                    <div class="max-w-lg md:order-2">
                        <div class="mb-2">Berita Terbaru</div>
                        <h1
                            class="text-3xl font-medium tracking-wide text-gray-800 dark:text-white md:text-4xl"
                        >
                            Hasil Timnas Indonesia Vs Filipina 6-0:
                            Arlyansyah-Iqbal Bersinar, Garuda Pesta
                        </h1>
                        <p class="mt-4 text-gray-600 dark:text-gray-300">
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Aut quia asperiores alias vero magnam
                            recusandae adipisci ad vitae laudantium quod rem
                            voluptatem eos accusantium cumque.
                        </p>
                        <div class="mt-6">
                            <a
                                href="#"
                                class="block px-4 py-3 font-semibold text-center text-white transition-colors duration-200 transform bg-blue-900 rounded-md md:inline hover:bg-blue-700"
                                >Selengkapnya</a
                            >
                        </div>
                    </div>
                </div>

                <div
                    class="flex items-center justify-center w-full h-75 md:w-1/2"
                >
                    <img
                        class="object-cover w-full h-full max-w-2xl rounded-lg"
                        src="https://images.unsplash.com/photo-1542490101-4be93d1756e0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="timnas day"
                    />
                </div>
            </section>
            <section>
                <div class="flex justify-between items-end mt-10">
                    <div class="text-2xl font-bold">Rekomendasi</div>
                    <div>Selengkapnya</div>
                </div>
                <div
                    class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-4 mb-10"
                >
                    <x-CardNews />
                    <x-CardNews />
                    <x-CardNews />
                    <x-CardNews />
                    <x-CardNews />
                    <x-CardNews />
                </div>
            </section>
        </div>
        <x-footer />
    </body>
</html>
