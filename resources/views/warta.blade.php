<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Warta Gereja Terbaru</title>
</head>
<body style="text-align:center; font-family:Arial, sans-serif; padding:2rem;">
  <h1>📖 Warta Gereja Mingguan</h1>

  @if($latestWarta)
    <p><strong>{{ $latestWarta->judul }}</strong></p>
    <p>Tanggal: {{ \Carbon\Carbon::parse($latestWarta->tanggal)->translatedFormat('d F Y') }}</p>

    <iframe src="{{ asset('storage/' . $latestWarta->file_path) }}" width="90%" height="600" style="border:1px solid #ccc; border-radius:10px;"></iframe>
    <br><br>
    <a href="{{ asset('storage/' . $latestWarta->file_path) }}" download>⬇️ Unduh PDF</a>
  @else
    <p>Belum ada warta yang diunggah.</p>
  @endif
</body>
</html>
