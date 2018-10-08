<template>
    <div>
        <ul uk-accordion class="uk-text-small">
            <li class="uk-open">
                <hr class="uk-margin-small-top uk-margin-small-bottom">
                <a class="uk-accordion-title uk-text-bold" :style="s_font" href="#"> HIGHLIGHT</a>
                <div class="uk-accordion-content">
                    <ul class="uk-list uk-list-bullet">
                        <li>Bersepeda santai di kawasan persawahan</li>
                        <li>Pacu adrenalin dengan rafting di Sungai Ayung</li>
                        <li>Belajar bermain gamelan bersama warga lokal</li>
                        <li>Mengunjungi galeri seni </li>
                        <li>Belanja kerajinan tangan lokal untuk oleh-oleh</li>
                        <li>Bersantap kuliner lokal terbaik di restoran tepi sungai</li>
                    </ul>
                </div>
            </li>
            <li>
                <hr class="uk-margin-small-top uk-margin-small-bottom">
                <a class="uk-accordion-title uk-text-bold" :style="s_font" href="#">FASILITAS</a>
                <div class="uk-accordion-content">
                    <h6>TERMASUK</h6>
                    <ul class="uk-list uk-list-bullet">
                        <li>Penjemputan dari bandara/hotel menuju meeting point</li>
                        <li>Tiket masuk tempat wisata</li>
                        <li>Makan 3x sehari</li>
                        <li>Penginapan</li>
                        <li>Dokumentasi foto</li>
                        <li>Asuransi perjalanan</li>
                    </ul>
                    <h6>TIDAK TERMASUK</h6>
                    <ul class="uk-list uk-list-bullet">
                        <li>Tiket pesawat</li>
                    </ul>
                </div>
            </li>
            <li>
                <hr class="uk-margin-small-top uk-margin-small-bottom">
                <a class="uk-accordion-title uk-text-bold" :style="s_font" href="#">KEBIJAKAN PEMBATALAN</a>
                <div class="uk-accordion-content">
                    <ul class="uk-list uk-list-bullet">
                        <li>Pembatalan H-7 tur, uang kembali 100%</li>
                        <li>Pembatalan H-6,5,4 tur, uang kembali 50%</li>
                        <li>Pembatalan H-1, tidak ada pengembalian</li>
                    </ul>
                </div>
            </li>           
        </ul>

    </div>

</template>

<script>
    module.exports = {
        data: function () {
            return {
                s_font:{fontSize:'.875rem'},
                s_font2:{fontSize:'.850rem'},
            }
        }
    };
</script>