                        <p>Anda telah terdaftar dalam acara CCI SUMMIT 2018, berikut ini adalah data diri anda :</p>
                        <p><label for="">Nama           : </label>
                        {{ $nama }}</p>
			<p><label for="">NIM            : </label>
                        {{ $nim }}</p>
                        <p><label for="">ID LINE        : </label>
                        {{ $id_line }}</p>
                        <p><label for="">NO HP          : </label>
                        {{ $no_hp }}</p>
                        <p><label for="">Email          : </label>
                        {{ $email }}</p>
                        <p><label for="">Tanggal Daftar : </label>
                        {{ $tgl_daftar }}</p>
                        <img src="{!!$message->embedData(QrCode::format('png')->size(200)->generate('CCISUMMIT-'.$nim), 'QrCode.png', 'image/png')!!}"></p>
                        <p>QR CODE INI DIPAKAI SEBAGAI TIKET MASUK</p>
                        <p>SIMPAN EMAIL INI BAIK-BAIK SEBAGAI TIKET YANG KALIAN TERIMA</p>
                        <p>JANGAN LUPA UNTUK MEMBAWA KARTU IDENTITAS UNTUK MEMBUKTIKAN KEPEMILIKAN DARI QR CODE YANG DIBAWA</p>
                        <p>SEBELUM ANDA MENGIKUTI CCI SUMMIT PASTIKAN SUDAH MEMILIKI DAN MENG-INSTALL APLIKASI PADA LINK BERIKUT :</p>
                        <p><a href="https://bit.ly/CCISummitSoftware"></a>bit.ly/CCISummitSoftware</p>
                        <br>
                        <p>NOTE :</p>
                        <p>QR CODE INI HANYA BISA DIPAKAI OLEH PEMILIK SESUAI IDENTITAS DIATAS, JIKA ADA PERMASALAHAN HUBUNGI CONTACT PERSON YANG TERTERA DIBAWAH.</p>
                        <p>CP 1</p>
                        <p>LINE  : dmhi</p>
                        <p>WA    : 087842150371</p>
                        <p>CP 2</p>
                        <p>LINE  : rianiresky</p>
                        <p>WA    : 082110230153</p>


