<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex flex-wrap justify-center px-24 py-12 gap-x-8 gap-y-8">


        <x-card.produk-card></x-card.produk-card>
        <x-card.produk-card></x-card.produk-card>
        <x-card.produk-card></x-card.produk-card>
        <x-card.produk-card></x-card.produk-card>
        <x-card.produk-card></x-card.produk-card>
        <x-card.produk-card></x-card.produk-card>
        <x-card.produk-card></x-card.produk-card>
        <x-card.produk-card></x-card.produk-card>
    </div>



</x-app-layout>

git config --global user.name "rexuentus-viix"
git config --global user.email "muhammadabdie180607@gmail.com"
git remote add origin https://github.com/rexuentus-viix/zhulproperty.git
