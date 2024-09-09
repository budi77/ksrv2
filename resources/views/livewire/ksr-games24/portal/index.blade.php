<div>



<div class="container">

<div class="row">
    <div class="text-center">

        <img src="{{ URL::asset('assets/images/KSR.png') }}" alt="" class="rounded avatar-xl" >
    </div>

<div class="text-center h4 pt-4">KSR GAMES 2024</div>
<!-- <p class="text-center h4 text-muted">PROGRAM</p> -->


    <!-- Buttons Grid -->
<div class="d-grid gap-2 pt-2" >
    <button class="btn btn-warning bg-gradient btn-lg" type="button">ATURCARA MAJLIS</button>
    <a class="btn btn-primary bg-gradient btn-lg" href="{{route('ksrgames24.program')}}" role="button">PROGRAM</a>
    <!-- <a class="btn btn-primary" href="{{route('ksrgames24.program')}}" role="button">PROGRAM</a> -->
    <a class="btn btn-danger bg-gradient btn-lg" href="{{route('ksrgames24.program')}}" role="button">SYARAT-SYARAT</a>
    <a class="btn btn-info bg-gradient btn-lg" data-bs-toggle="modal" data-bs-target="#contact" role="button">SENARAI UNTUK DIHUBUNGI</a>
    <a class="btn btn-warning bg-gradient btn-lg"   data-bs-toggle="modal" data-bs-target="#solat" role="button">WAKTU SOLAT</a>

    
</div>

</div>

</div>

<!-- Modal trigger button -->
<!-- <button
    type="button"
    class="btn btn-primary btn-lg"
    data-bs-toggle="modal"
    data-bs-target="#solat"
>
    Launch
</button> -->

<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div
    class="modal fade"
    id="solat"
    tabindex="-1"
    data-bs-backdrop="static"
    data-bs-keyboard="false"
    
    role="dialog"
    aria-labelledby="modalTitleId"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-fullscreen"
        role="document"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    WAKTU SOLAT UNTUK KAWASAN SHAH ALAM
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
            <div class="text-center">
                <iframe marginheight="0" marginwidth="0" scrolling="no"  src="https://www.e-solat.gov.my/portalassets/www2/roxy.php?kod=SGR01&lang=BM&url=http:/www.islam.gov.my" width=500 height=600 frameborder=0></iframe>

            </div>

            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    Tutup
                </button>
                <!-- <button type="button" class="btn btn-primary">Save</button> -->
            </div>
        </div>
    </div>
</div>

<!-- contact -->



<!-- Modal -->
<div
    class="modal fade"
    id="contact"
    tabindex="-1"
    role="dialog"
    aria-labelledby="modalTitleId"
    aria-hidden="true"
>
    <div
        class="modal-dialog modal-fullscreen modal-dialog-scrollable"
        role="document"
    >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    SENARAI UNTUK DIHUBUNGI
                </h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <div class="h6 text-center">SENARAI AHLI JAWATANKUASA (KSR)</div>
                <div class="h6 text-center">PROGRAM PENGUKUHAN JATI DIRI SPRM TAHUN 2024</div>

                <div
                    class="table-responsive"
                >
                    <table
                        class="table table-sm"
                    >
                        <thead>
                            <tr class="bg-primary text-white table-striped">
                                <th scope="col" width="5%">BIL</th>
                                <th scope="col" width="70%">AJK KSR</th>
                                <th scope="col" width="25%">NO TEL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td scope="row">1</td>
                                <td>PKPj MOHD FADZIL BIN MD AMIN (PRESIDEN KSR)</td>
                                <td>
                                <a href="tel:019-6000981">019-6000981</a>

                                   
                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">2</td>
                                <td>PsK SAIFUL AZRI BIN MOHAMAD (KETUA PENYELARAS PROGRAM)</td>
                                <td>
                                <a href="tel:012-6853455">012-6853455</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">3</td>
                                <td>PsK ZATUN NAJMIAH BINTI MOHD SABRI</td>
                                <td>
                                <a href="tel:013-3332908">013-3332908</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">4</td>
                                <td>Ps ANIS SABIRIN BINTI AHMAD</td>
                                <td>
                                <a href="tel:017-5586083">017-5586083</a>

                                    
                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">5</td>
                                <td>PPs NUR HIDAYAHTUL AYU BINTI ABDUL RAHMAN</td>
                                <td>017-4038868</td>
                            </tr>
                            <tr class="">
                                <td scope="row">6</td>
                                <td>PsK SITI ZAHARAH BINTI HJ ALIAS</td>
                                <td>013-3405637</td>
                            </tr>
                            <tr class="">
                                <td scope="row">7</td>
                                <td>Ps SITI AZYYATI BINTI AB. AZIZ</td>
                                <td>012-9339113</td>
                            </tr>
                            <tr class="">
                                <td scope="row">8</td>
                                <td>Ps OMAR MOKHTAR BIN JAHARI</td>
                                <td>017-2611004</td>
                            </tr>
                            <tr class="">
                                <td scope="row">9</td>
                                <td>KPKPs KAMSIAH BINTI AHMAD</td>
                                <td>014-6888004</td>
                            </tr>
                            <tr class="">
                                <td scope="row">10</td>
                                <td>PKPs NUR ‘AZIM BIN AFNI</td>
                                <td>012-6146864</td>
                            </tr>
                            <tr class="">
                                <td scope="row">11</td>
                                <td>PKPs AZRI BIN MOHAMED</td>
                                <td>013-4707069</td>
                            </tr>
                            <tr class="">
                                <td scope="row">12</td>
                                <td>PKPs ROAZFANIZA BINTI ROSLIM</td>
                                <td>019-4980898</td>
                            </tr>
                            <tr class="">
                                <td scope="row">13</td>
                                <td>EN. SYAMAIZA BIN MOHD NAWI</td>
                                <td>011-17928186</td>
                            </tr>
                            <tr class="">
                                <td scope="row">14</td>
                                <td>PsK HARUSSANI BIN HAMZAH</td>
                                <td>012-4844521</td>
                            </tr>
                            <tr class="">
                                <td scope="row">15</td>
                                <td>Ps BALQIS HAFIZAH BINTI IDRIS</td>
                                <td>019-9467202</td>
                            </tr>
                            <tr class="">
                                <td scope="row">16</td>
                                <td>Ps MOHD NAZRI BIN ISMAIL</td>
                                <td>019-6672263</td>
                            </tr>
                            <tr class="">
                                <td scope="row">17</td>
                                <td>KPKPs HOSSEN BIN ABDUL RAHIM</td>
                                <td>019-8182284</td>
                            </tr>
                        </tbody>
                    </table>
                </div>



                <!-- <div class="h6 text-center">SENARAI AHLI JAWATANKUASA (KSR)</div> -->
                <!-- <div class="h6 text-center">PROGRAM PENGUKUHAN JATI DIRI SPRM TAHUN 2024</div> -->

                <div
                    class="table-responsive"
                >
                    <table
                        class="table table-sm"
                    >
                        <thead>
                            <tr class="bg-primary text-white table-striped">
                                <th scope="col" width="5%">BIL</th>
                                <th scope="col" width="55%">NAMA</th>
                                <th scope="col" width="20%">JK</th>
                                <th scope="col" width="20%">NO TEL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td scope="row">1</td>
                                <td>PPj NOR AZLIZAWATI BINTI MAT LAZIM</td>
                                <td>INDUK</td>
                                <td>
                                <a href="tel:013-2165313">013-2165313</a>

                                   
                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">2</td>
                                <td>PPs MUHAMMAD FIRDAUS HASMI</td>
                                <td>INDUK</td>

                                <td>
                                <a href="tel:016-7922889">016-7922889</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">3</td>
                                <td>Ps MOHAMAD ZAMRI BIN ZAKARIA</td>
                                <td>KESELAMATAN & KECEMASAN</td>

                                <td>
                                <a href="tel:019-2135151">019-2135151</a>

                                </td>
                            </tr>
   
                            <tr class="">
                                <td scope="row">4</td>
                                <td>PKPs SHAHRUL ZACHARY @ SHAHRUL KHAIRY BIN NOR BASHA</td>
                                <td>KESELAMATAN & KECEMASAN</td>

                                <td>
                                <a href="tel:013-2985106">013-2985106</a>

                                </td>
                            </tr>
   
                            <tr class="">
                                <td scope="row">5</td>
                                <td>PKPj NURHASMAH BINTI MOHAMED KASSIM</td>
                                <td>PENGINAPAN</td>
                                <td>
                                <a href="tel:013-6980418">013-6980418</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">6</td>
                                <td>PsK NOR AZAMAWATI BINTI MISWAN</td>
                                <td>PENGINAPAN</td>
                                <td>
                                <a href="tel:016-2569090">016-2569090</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">7</td>
                                <td>PsK NUR IRWAN BIN ABD RAHMAN</td>
                                <td>MAKANAN</td>
                                <td>
                                <a href="tel:011-26915066">011-26915066</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">8</td>
                                <td>PsK EDAYAH BINTI BROW</td>
                                <td>MAKANAN</td>
                                <td>
                                <a href="tel:019-2320814">019-2320814</a>

                                </td>
                            </tr>
   
                     
                        </tbody>
                    </table>
                </div>




                <div class="h6 text-center">SENARAI PENGELOLA ACARA SUKAN (SPRM)</div>
                <div class="h6 text-center">PROGRAM PENGUKUHAN JATI DIRI SPRM TAHUN 2024</div>

                <div
                    class="table-responsive"
                >
                    <table
                        class="table table-sm"
                    >
                        <thead>
                            <tr class="bg-primary text-white table-striped">
                                <th scope="col" width="5%">BIL</th>
                                <th scope="col" width="55%">NAMA</th>
                                <th scope="col" width="20%">ACARA</th>
                                <th scope="col" width="20%">NO TEL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td scope="row">1</td>
                                <td>PKPs MOHAMMAD RIDUWAN BIN M. RADZI</td>
                                <td>BADMINTON</td>
                                <td>
                                <a href="tel:016-4603096">016-4603096</a>

                                   
                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">2</td>
                                <td>PKPs EKASUZIEANA BINTI SHAFRI </td>
                                <td>BOLA JARING</td>

                                <td>
                                <a href="tel:012-3155102">012-3155102</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">3</td>
                                <td>PPj AHMAD RIZAL BIN SAMAT</td>
                                <td>KAROM</td>

                                <td>
                                <a href="tel:013-4334500">013-4334500</a>

                                </td>
                            </tr>
   
                            <tr class="">
                                <td scope="row">4</td>
                                <td>KPKPs KHAIRUDIN BIN KILAU</td>
                                <td>BOLA SEPAK</td>

                                <td>
                                <a href="tel:019-9491509">019-9491509</a>

                                </td>
                            </tr>
   
                            <tr class="">
                                <td scope="row">5</td>
                                <td>KPKPs MUHAMAD SUFIAN BIN SHAFIE</td>
                                <td>TARIK TALI</td>
                                <td>
                                <a href="tel:012-5019711">012-5019711</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">6</td>
                                <td>KPKPs SHAHRUL AZRAI BIN SHAHARUDIN </td>
                                <td>BOLA TAMPAR</td>
                                <td>
                                <a href="tel:019-6001754">019-6001754</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">7</td>
                                <td>PPs MUNIR BIN ISMAIL</td>
                                <td>FUTSAL</td>
                                <td>
                                <a href="tel:010-5439002">010-5439002</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">8</td>
                                <td>Ps MOHD NAZRI BIN ISMAIL </td>
                                <td>PING PONG</td>
                                <td>
                                <a href="tel:019-6672263">019-6672263</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">9</td>
                                <td>PKPs ISWANDI IKBAL BIN YAACUB </td>
                                <td>TAKRAW</td>
                                <td>
                                <a href="tel:012-2306230">012-2306230</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">10</td>
                                <td>PsK SHAMSUL RIZA BIN SAHAR </td>
                                <td>BOLING</td>
                                <td>
                                <a href="tel:012-6415777">012-6415777</a>

                                </td>
                            </tr>
                            
                            <tr class="">
                                <td scope="row">11</td>
                                <td>Ps OMAR MOKHTAR BIN JAHARI </td>
                                <td>BALAPAN</td>
                                <td>
                                <a href="tel:017-2611004">017-2611004</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">12</td>
                                <td>PsK HARUSSANI BIN HAMZAH </td>
                                <td>PERBARISAN</td>
                                <td>
                                <a href="tel:012-4844521">012-4844521</a>

                                </td>
                            </tr>
   
                     
                        </tbody>
                    </table>
                </div>





                
                <div class="h6 text-center">SENARAI PENYELARAS (UiTM)</div>
                <div class="h6 text-center">PROGRAM PENGUKUHAN JATI DIRI SPRM TAHUN 2024</div>

                <div
                    class="table-responsive"
                >
                    <table
                        class="table table-sm"
                    >
                        <thead>
                            <tr class="bg-primary text-white table-striped">
                                <th scope="col" width="5%">BIL</th>
                                <th scope="col" width="55%">PENYELARAS</th>
                                <th scope="col" width="20%">ACARA</th>
                                <th scope="col" width="20%">NO TEL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td scope="row">1</td>
                                <td>MUHAMMAD KHAIRUL AKHYAR BIN HUSAIN</td>
                                <td>BOLA SEPAK </td>
                                <td>
                                <a href="tel:013-9191418">013-9191418</a>

                                   
                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">2</td>
                                <td>NOR SHUHADA BINTI MD YUSOF </td>
                                <td>BOLA TAMPAR </td>

                                <td>
                                <a href="tel:019-3747868">019-3747868</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">3</td>
                                <td>KU HADZRILL JEEFFRY BIN KU HAMZAH</td>
                                <td>JURI PERBARISAN</td>

                                <td>
                                <a href="tel:019-3813863">019-3813863</a>

                                </td>
                            </tr>
   
                            <tr class="">
                                <td scope="row">4</td>
                                <td>SHAMSUL BIN NORDIN</td>
                                <td>BADMINTON</td>

                                <td>
                                <a href="tel:017-6485612">017-6485612</a>

                                </td>
                            </tr>
   
                            <tr class="">
                                <td scope="row">5</td>
                                <td>MUHAMMAD HAZEQ BIN NORDIN</td>
                                <td>PING PONG </td>
                                <td>
                                <a href="tel:018-3912436">018-3912436</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">6</td>
                                <td>MOHD EFFEDI BIN MD NASIR </td>
                                <td>SEPAK TAKRAW </td>
                                <td>
                                <a href="tel:013-2001986">013-2001986</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">7</td>
                                <td>MOHD FAUZI BIN ABDUL MANAF</td>
                                <td>KAROM </td>
                                <td>
                                <a href="tel:017-6369776">017-6369776</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">8</td>
                                <td>MOHAMMAD EZUAN BIN OTHMAN </td>
                                <td>FUTSAL</td>
                                <td>
                                <a href="tel:010-5406205">010-5406205</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">9</td>
                                <td>AHMAD MUAZZAM IMAN BIN MUSTAFFA KAMAL</td>
                                <td>BALAPAN </td>
                                <td>
                                <a href="tel:017-7290807">017-7290807</a>

                                </td>
                            </tr>
                            <tr class="">
                                <td scope="row">10</td>
                                <td>ADDE SHAH NADDRA BINTI DIN </td>
                                <td>BOLA JARING </td>
                                <td>
                                <a href="tel:019-6555179">019-6555179</a>

                                </td>
                            </tr>
                            
                            <tr class="">
                                <td scope="row">11</td>
                                <td>MOHD HARIREE BIN MOHD ISA </td>
                                <td>TARIK TALI </td>
                                <td>
                                <a href="tel:012-6660042">012-6660042</a>

                                </td>
                            </tr>
                           
                     
                        </tbody>
                    </table>
                </div>




                
            </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                >
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>





</div>
