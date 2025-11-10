<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Warta Gereja Terbaru</title>

  @vite('resources/css/app.css')

  </head>
<body class="bg-gray-100 font-sans antialiased text-gray-800">

  <div class="container mx-auto max-w-4xl my-8 px-4 sm:px-6 lg:px-8">
    
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
      <div class="p-6 sm:p-10 text-center">

        <h1 class="text-2xl sm:text-3xl font-bold text-gray-700 mb-2">
          📖 Warta Gereja Mingguan
        </h1>

        @if($latestWarta)
          <div class="mt-4 mb-6">
            <h2 class="text-xl sm:text-2xl font-semibold text-gray-800">
              {{ $latestWarta->judul }}
            </h2>
            <p class="text-sm text-gray-500 mt-1">
              Tanggal: {{ \Carbon\Carbon::parse($latestWarta->tanggal)->translatedFormat('d F Y') }}
            </p>
          </div>

          <div class="w-full h-[70vh] sm:h-[80vh] mb-6">
            <iframe 
              src="{{ asset('storage/' . $latestWarta->file_path) }}"
              class="w-full h-full border border-gray-200 rounded-lg shadow-inner"
            ></iframe>
          </div>

          <div class="
            flex flex-col sm:flex-row sm:justify-around items-center 
            gap-8 pt-6 border-t border-gray-200
          ">
            
            <div class="text-center">
              <p class="font-semibold text-gray-700 mb-2">
                Scan untuk Warta Terbaru
              </p>
              <div class="inline-block p-2 bg-white border rounded-lg">
                {!! \SimpleSoftwareIO\QrCode\Facades\QrCode::size(120)->generate(route('warta.redirect')) !!}
              </div>
            </div>

          </div>

        @else
          <div class="py-12">
            <p class="text-lg text-gray-500">
              Belum ada warta yang diunggah.
            </p>
          </div>
        @endif

      </div>
    </div>
  </div>

</body>
</html>