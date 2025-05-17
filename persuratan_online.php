<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Iamrnldo</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/logo.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
  <style>
    body {
      background: linear-gradient(135deg, #28a745, #218838);
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }
    .container {
      text-align: center;
      position: relative;
    }
    .title {
      background: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      display: inline-block;
      margin-bottom: 20px;
      font-size: 24px;
      font-weight: bold;
      color: #28a745;
    }
    .button-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      max-width: 600px;
      margin: 0 auto;
    }
    .btn-custom {
      background: rgba(255, 255, 255, 0.2);
      border: 2px solid #fff;
      color: #fff;
      font-size: 14px;
      padding: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: left;
      border-radius: 10px;
      transition: background 0.3s;
    }
    .btn-custom:hover {
      background: rgba(255, 255, 255, 0.4);
    }
    .btn-custom iconify-icon {
      margin-right: 8px;
    }
    .decor {
      position: absolute;
      width: 200px;
      height: 200px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      bottom: -100px;
      left: -100px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="decor"></div>
    <h1 class="title">PERSURATAN ONLINE</h1>
    <div class="button-grid">
      <button class="btn-custom" onclick="downloadFile('Surat Pengantar Nikah')">
        <i class="ti ti-file-text"></i>
        <span>Surat Pengantar Nikah</span>
      </button>
      <button class="btn-custom" onclick="downloadFile('Surat Pernyataan Belum Memiliki Rumah Milik')">
        <i class="ti ti-file-text"></i>
        <span>Surat Pernyataan Belum Memiliki Rumah Milik</span>
      </button>
      <button class="btn-custom" onclick="downloadFile('Surat Keterangan Ahli Waris')">
        <i class="ti ti-file-text"></i>
        <span>Surat Keterangan Ahli Waris</span>
      </button>
      <button class="btn-custom" onclick="downloadFile('Surat Pernyataan Belum Pernah Menikah')">
        <i class="ti ti-file-text"></i>
        <span>Surat Pernyataan Belum Pernah Menikah</span>
      </button>
      <button class="btn-custom" onclick="downloadFile('Surat Keterangan Domisili')">
        <i class="ti ti-file-text"></i>
        <span>Surat Keterangan Domisili</span>
      </button>
      <button class="btn-custom" onclick="downloadFile('Surat Permohonan Penerbitan BPKB')">
        <i class="ti ti-file-text"></i>
        <span>Surat Permohonan Penerbitan BPKB</span>
      </button>
      <button class="btn-custom" onclick="downloadFile('Surat Pernyataan Penghasilan Untuk Non Formal')">
        <i class="ti ti-file-text"></i>
        <span>Surat Pernyataan Penghasilan Untuk Non Formal</span>
      </button>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script>
    function downloadFile(filename) {
      const content = `This is a sample ${filename} document. Replace with actual content or file path.`;
      const blob = new Blob([content], { type: 'text/plain' });
      const url = window.URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = `${filename}.txt`;
      a.click();
      window.URL.revokeObjectURL(url);
    }
  </script>
</body>

</html>