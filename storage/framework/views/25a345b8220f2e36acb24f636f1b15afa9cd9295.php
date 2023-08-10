<!DOCTYPE html>
<html>
<head>
    <title>BORANG PENYERTAAN PERTANDINGAN NYANYIAN LAGU PATRIOTIK SEMPENA SAMBUTAN ULANGTAHUN SPRM KE 56 TAHUN 2023.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    

</head>

<body>
    
    <div class="text-center">
        <h6>BORANG PENYERTAAN PERTANDINGAN NYANYIAN LAGU PATRIOTIK SEMPENA SAMBUTAN ULANGTAHUN SPRM KE 56 TAHUN 2023.</h6>
    </div>
    <hr>
    

    <div class="mb-3">
      <label for="" class="form-label fw-bold">KATEGORI</label>
      <p>    <?php echo e($result['penyertaan']); ?></p>
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">NAMA PESERTA / KUMPULAN</label>
      <p>    <?php echo e($result['nama']); ?></p>
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">BILANGAN PESERTA</label>
      <p>    <?php echo e($result['penyanyi']); ?></p>
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">BAHAGIAN</label>
      <p>    <?php echo e($result['department']['name']); ?></p>
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">ALAMAT PEJABAT</label>
      <p>    <?php echo e($result['alamat']); ?></p>
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">PEGAWAI DIHUBUNGI</label>
      <p>    <?php echo e($result['extra1']); ?></p>
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">TELEFON</label>
      <p>    <?php echo e($result['telefon']); ?></p>
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">EMEL</label>
      <p>    <?php echo e($result['emel']); ?></p>
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">TAJUK LAGU</label>
      <p>    <?php echo e($result['tajuk_lagu']); ?></p>
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">PAUTAN VIDEO</label>
      <p>    <?php echo e($result['pautan']); ?></p>
    </div>
    <div class="mb-3">
      <label for="" class="form-label fw-bold">TIMESTAMP DAFTAR</label>
      <p>    <?php echo e($result['created_at']); ?></p>
    </div>

  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html><?php /**PATH D:\laragon\www\ksrv2\resources\views/pdf/patriotik.blade.php ENDPATH**/ ?>