<div>


<div class="container-fluid">

    
    <div class="row pt-2">
        <div class="col-lg-12">
            <div class="text-center mt-sm-2 mb-2 text-dark-50">
                <div>
                    <a href="index" class="d-inline-block auth-logo">
                        <img src="<?php echo e(URL::asset('assets/images/KSR.png')); ?>" alt="" height="90">
                    </a>
                </div>
                <p class="mt-1 fs-18 fw-bold"> BORANG PENYERTAAN PERTANDINGAN NYANYIAN LAGU PATRIOTIK SEMPENA SAMBUTAN ULANGTAHUN SPRM KE 56 TAHUN 2023.</p>
                
            </div>
        </div>
    </div>

<div class="container">

    <div class="alert alert-primary alert-dismissible alert-additional fade show" role="alert">
        <div class="alert-body">
        <div class="d-flex">
        <div class="flex-shrink-0 me-3">
        <i class="ri-information-line fs-18 align-middle"></i>
        </div>
    <div class="flex-grow-1">
    <h5 class="alert-heading">PERHATIAN!</h5>
    <p class="mb-0">Borang ini hendaklah dihantar bersama pautan google drive video persembahan nyanyian sebelum atau pada 11 Ogos 2023 (Jumaat) sebelum jam 12.00 tengahari.</p>
    <p class="mb-0">
    Sebarang pertanyaan boleh hubungi Ps Harussani Bin Hamzah ditalian 03-88911791 / 012-4844521 atau Ps Omar Mokhtar Bin Jahari 03-88911801 / 017-2611004
    <!-- Button trigger modal -->
    
    </p>
    </div>
</div>
</div>
<div class="alert-content">
<p class="mb-0">
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalId">
    <i class="ri-todo-line fs-14 align-middle"></i>  LIHAT SYARAT SYARAT PERTANDINGAN
        </button>
</p>
</div>
</div>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

    <div class="card">
   <div class="card-header bg-success bg-gradient">
                    
                    <h6 class="card-title mb-0">MAKLUMAT PESERTA</h6>
                </div>
    <div class="card-body">
            <div class="row mb-3">
            <div class="col-lg-3">
            <label for="nameInput" class="form-label">KATEGORI</label>
            </div>
            <div class="col-lg-9">
             <select class="form-select mb-3" wire:model.defer="penyertaan">
                <option selected>-- Sila Pilih --</option>
                <option value="SOLO">SOLO</option>
                <option value="BERKUMPULAN">BERKUMPULAN</option>
                
                </select>
            </div>
            </div>

        <div class="row mb-3">
            <div class="col-lg-3">
                <label for="websiteUrl" class="form-label">NAMA PESERTA / NAMA KUMPULAN</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" wire:model.defer="nama"  >
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-3">
                <label for="websiteUrl" class="form-label">BILANGAN PESERTA</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" wire:model.defer="penyanyi" placeholder="Maksimum 20 peserta" >
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-3">
                <label for="websiteUrl" class="form-label">BAHAGIAN / NEGERI</label>
            </div>
            <div class="col-lg-9">
                <select class="form-select mb-3" wire:model.defer="department_id">
                <option selected>-- Sila Pilih --</option>
                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>



        <div class="row mb-3">
            <div class="col-lg-3">
            <label for="meassageInput" class="form-label">ALAMAT PEJABAT</label>
            </div>
            <div class="col-lg-9">
            <textarea class="form-control"  rows="5" wire:model.defer="alamat"></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-3">
                <label for="websiteUrl" class="form-label">PEGAWAI UNTUK DIHUBUNGI</label>
            </div>
            <div class="col-lg-9">
                <input type="text" class="form-control" wire:model.defer="extra1">
            </div>
        </div>



        <div class="row mb-3">
            <div class="col-lg-3">
            <label for="contactNumber" class="form-label">NO. TELEFON</label>
            </div>
            <div class="col-lg-9">
            <input type="text" class="form-control" wire:model.defer="telefon">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-3">
            <label for="leaveemails" class="form-label">EMEL</label>
            </div>
            <div class="col-lg-9">
            <input type="email" class="form-control" wire:model.defer="emel">
            </div>
        </div>


        
    </div>
    </div> 


    <div class="card">
   <div class="card-header bg-info bg-gradient">
                    
                    <h6 class="card-title mb-0">MAKLUMAT LAGU</h6>
                </div>
    <div class="card-body">
       
            <div class="row mb-3">
            <div class="col-lg-3">
            <label for="nameInput" class="form-label">TAJUK LAGU</label>
            </div>
            <div class="col-lg-9">
                <select class="form-select mb-3" wire:model.defer="tajuk_lagu">
                    <option selected>-- Sila Pilih --</option>
                    <option value="Warisan - Sudirman Hj Arshad">Warisan - Sudirman Hj Arshad</option>
                    <option value="Standing In The Eyes Of The World - Ella">Standing In The Eyes Of The World - Ella</option>
                    <option value="Negaraku - Joe Flizzow, Altimet, SonaOne dan Faizal Tahir ">Negaraku - Joe Flizzow, Altimet, SonaOne dan Faizal Tahir</option>
                    <option value="Fikirkan Boleh ">Fikirkan Boleh</option>
                    <option value="Sejahtera Malaysia">Sejahtera Malaysia</option>
                    
                    </select>
            </div>
            </div>

        

        


        <div class="row mb-3">
            <div class="col-lg-3">
                <label for="websiteUrl" class="form-label">PAUTAN VIDEO</label>
            </div>
            <div class="col-lg-9">
                <input type="url" class="form-control" wire:model.defer="pautan">
            </div>
        </div>






        <div class="text-end">
        <button  class="btn btn-primary" wire:click="store">HANTAR</button>
        </div>
 
    </div>
    </div> 


    
    </div>






</div>



<!-- Modal -->
<div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Syarat syarat pertandingan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                

                <ol>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Pertandingan Nyanyian Lagu Patriotik ini dianjurkan oleh Kelab Sukan dan Rekreasi SPRM sempena Sambutan Ulangtahun SPRM ke 56.</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Setiap Bahagian/Negeri <strong>diwajibkan</strong> untuk menghantar <strong>1 penyertaan</strong> sahaja. Penyertaan boleh secara <strong>solo atau berkumpulan</strong>.</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Peserta hendaklah memilih dan menyanyikan satu lagu patriotik yang ditetapkan oleh pihak penganjur. Senarai lagu patriotik sepertimana di para 7.</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Peserta perlu merakamkan video nyanyian yang berdurasi <strong><em>tidak lebih 6 minit</em></strong>. Setiap video nyanyian perlulah dimuatnaik ke google drive. Link google drive hendaklah dimasukkan bersama borang permohonan sebelum atau pada 11 Ogos 2023 (Jumaat) jam 12.00 tengahari. </span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Peserta dibenarkan untuk menyunting rakaman video seperti meletakkan latar belakang yang bertemakan patriotik bagi mencantikkan persembahan <strong>tanpa mengubah suara asal penyanyi (peserta)</strong>.</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Setiap penyertaan (video) akan melalui proses saringan yang akan dinilai oleh juri profesional. Hanya 10 sahaja peserta yang layak akan dipilih ke peringkat akhir yang akan diadakan pada bulan September 2023 bertempat di Ibu Pejabat SPRM. Peserta yang layak akan membuat persembahan secara langsung (<em>live</em>) di hadapan penonton menggunakan lagu yang sama seperti penyertaaan video. </span></span></li>
                </ol>
                
                <p style="margin-left:48px; text-align:justify">&nbsp;</p>
                
                <ol start="7">
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt"><strong>Pemilihan lagu:</strong></span></span></li>
                </ol>
                
                <ol style="list-style-type:lower-alpha">
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Genre dan tema lagu yang dinyanyikan haruslah berunsurkan patriotik.</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Peserta hendaklah memilih satu lagu yang disenaraikan oleh pihak penganjur. Senarai lagu adalah seperti berikut:-</span></span></li>
                </ol>
                
                <ol style="list-style-type:lower-roman">
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><strong><span style="font-size:11pt">Warisan &ndash; nyanyian Sudirman Hj Arshad</span></strong></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><strong><span style="font-size:11pt">Standing In The Eyes Of The World&rsquo; &ndash; Ella</span></strong></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><strong><span style="font-size:11pt">&lsquo;Negaraku&rsquo; - Joe Flizzow, Altimet, SonaOne dan Faizal Tahir&nbsp; </span></strong></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><strong><span style="font-size:11pt">Fikirkan Boleh</span></strong></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><strong><span style="font-size:11pt">Sejahtera Malaysia</span></strong></span></li>
                </ol>
                
                <p style="margin-left:144px; text-align:justify">&nbsp;</p>
                
                <ol start="8">
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt"><strong>Syarat-syarat nyanyian:</strong></span></span></li>
                </ol>
                
                <ol style="list-style-type:lower-alpha">
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Peserta hanya terdiri daripada kakitangan dan pegawai SPRM sahaja.</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Peserta hendaklah menggunakan suara asal tanpa melalui proses pengubahsuaian (<em>editing</em>).</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Peserta diberi masa selama enam (6) minit sahaja dan dilaksanakan secara rakaman video.</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Peserta boleh memakai kostum yang bersesuaian dan menggunakan <em>props </em>dalam persembahan mengikut kreativiti peserta.</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Peserta dibenarkan untuk menyunting rakaman video seperti meletakkan latar belakang yang bertemakan Ulangtahun SPRM ke 56 bagi mencantikkan persembahan.</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Kandungan video mestilah mengandungi unsur-unsur patriotik dan cinta akan negara yang tidak menyentuh isu politik, bangsa dan agama.</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Lagu hendaklah dinyanyikan secara <em>&ldquo;minus one&rdquo;</em>.</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Penyertaan akan dibatalkan sekiranya peserta :-</span></span></li>
                </ol>
                
                <ol style="list-style-type:lower-roman">
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Suara peserta telah melalui proses pengubahsuaian.</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Menyentuh isu-isu politik, budaya , bangsa dan agama.</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Memakai pakaian yang menjolok mata.</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Tidak menepati tema yang ditetapkan.</span></span></li>
                </ol>
                
                <p style="margin-left:120px; text-align:justify">&nbsp;</p>
                
                <ol start="9">
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt"><strong>Pemarkahan:</strong></span></span></li>
                </ol>
                
                <table cellspacing="0" class="MsoTableGrid" style="border-collapse:collapse; border:none; margin-left:48px">
                    <tbody>
                        <tr>
                            <td style="background-color:#bfbfbf; border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:278px">
                            <p style="text-align:center"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt"><strong><span style="color:black">KRITERIA</span></strong></span></span></p>
                            </td>
                            <td style="background-color:#bfbfbf; border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:275px">
                            <p style="text-align:center"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt"><strong><span style="color:black">MARKAH</span></strong></span></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:278px">
                            <p style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Nada dan tona suara (pitching)</span></span></p>
                            </td>
                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:275px">
                            <p style="text-align:center"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">30</span></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:278px">
                            <p style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Teknik vocal (vibrato, slur dan lain-lain)</span></span></p>
                            </td>
                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:275px">
                            <p style="text-align:center"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">30</span></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:278px">
                            <p style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Gaya persembahan</span></span></p>
                            </td>
                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:275px">
                            <p style="text-align:center"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">10</span></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:278px">
                            <p style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Suara (Dinamik dan Tempo)</span></span></p>
                            </td>
                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; height:5px; vertical-align:top; width:275px">
                            <p style="text-align:center"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">10</span></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:278px">
                            <p style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Kreativiti (Improvisasi)</span></span></p>
                            </td>
                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:275px">
                            <p style="text-align:center"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">20</span></span></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p style="margin-left:48px; text-align:justify">&nbsp;</p>
                
                <ol start="10">
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt"><strong>Penjurian:</strong></span></span></li>
                </ol>
                
                <ol style="list-style-type:lower-alpha">
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Kesemua Juri yang dilantik adalah merupakan Juri professional.</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Keputusan Juri adalah MUKTAMAD.</span></span></li>
                </ol>
                
                <p style="margin-left:72px; text-align:justify">&nbsp;</p>
                
                
                
                <p style="margin-left:72px; text-align:justify">&nbsp;</p>
                
                <ol start="11">
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt"><strong>Hadiah :</strong></span></span></li>
                </ol>
                
                <table cellspacing="0" class="MsoTableGrid" style="border-collapse:collapse; border:none; margin-left:48px">
                    <tbody>
                        <tr>
                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:301px">
                            <p style="text-align:center"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt"><strong>Johan</strong></span></span></p>
                            </td>
                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:301px">
                            <p style="text-align:center"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">RM1,000.00 beserta sijil dan trofi</span></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:301px">
                            <p style="text-align:center"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt"><strong>Naib Johan</strong></span></span></p>
                            </td>
                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:301px">
                            <p style="text-align:center"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">RM700.00 beserta sijil dan trofi</span></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:301px">
                            <p style="text-align:center"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt"><strong>Tempat Ketiga</strong></span></span></p>
                            </td>
                            <td style="border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:301px">
                            <p style="text-align:center"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">RM500.00 beserta sijil dan trofi</span></span></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p style="margin-left:48px; text-align:justify">&nbsp;</p>
                
                <ol start="12">
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt"><strong>Tarikh tutup:</strong></span></span></li>
                </ol>
                
                <ol style="list-style-type:lower-alpha">
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Tarikh tutup menghantar borang penyertaan dan video pertandingan adalah pada sebelum atau pada 11 Ogos 2023 (Jumaat) sebelum jam 12.00 tengahari.</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Urusetia berhak menolak mana-mana penyertaan yang tidak menepati syarat penyertaan pertandingan yang ditetapkan.</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Pihak Penganjur berhak mengubah syarat-syarat pertandingan yang dinyatakan dari masa ke semasa.</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Sebarang pertanyaan pertandingan bolehlah menghubungi :-</span></span></li>
                </ol>
                
                <ol style="list-style-type:lower-roman">
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Ps Harussani Bin Hamzah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 03-88911791 atau 012-4844521</span></span></li>
                    <li style="text-align:justify"><span style="font-family:Tahoma,Geneva,sans-serif"><span style="font-size:11pt">Ps Omar Mokhtar Bin Jahari&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;03-88911801 atau 017-2611004</span></span></li>
                </ol>
                



                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                
            </div>
        </div>
    </div>
</div>






</div>
<?php /**PATH D:\laragon\www\ksrv2\resources\views/livewire/patriotik/index.blade.php ENDPATH**/ ?>