<x-layout-link>
    <x-slot:heading>
        LIST KERJA BANGUN PANDUKO JOHAN
    </x-slot:heading>

        @foreach ($pekerjaan as $kerja)
        <a href="list-kerja/{{ $kerja['id'] }}" class="text-blue-600 hover:underline">
            <li><b>{{ $kerja['judul'] }} :</b> {{ $kerja['gaji'] }} / bulan </li>
        </a>
        @endforeach
</x-layout-link>

<!--Bangun Panduko Johan K3522013-->