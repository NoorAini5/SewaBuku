
            <?php
                $judul = $_POST['judulbuku'];
                $pengarang = $_POST['pengarang'];
                $genre = $_POST['genre'];
                $halaman = $_POST['halaman'];
                $tanggal = $_POST['tanggal'];
                $harga = $_POST['harga'];

                if($judul=="" || $pengarang=="" || $genre=="" || $halaman=="" || $tanggal==""|| $harga=="" || $_FILES['gambar']['name']=="")
                {
                    $file="";
                    $uploadfile="";
                }else
                {
                    $file = "file/text.txt";
                    $openfile = fopen($file, 'a') or die("File doesn't exist");
                    fputs($openfile, "Judul : $judul\n");
                    fputs($openfile, "Nama Pengarang : $pengarang\n");
                    fputs($openfile, "Genre : $genre\n");
                    fputs($openfile, "Jumlah Halaman : $halaman Halaman\n");
                    fputs($openfile, "Penerbit : $tanggal\n");
                    fputs($openfile, "Harga Sewa : Rp $harga\n");
                    fputs($openfile, "-------------------------------\n");
                    fclose($openfile);

                    $uploaddir = 'file/';
                    $uploadfile = $uploaddir . $_FILES['gambar']['name'];
                }

                if($file=="" || $uploadfile=="")
                {
                    $bukti = "Data dan File Gagal diupload !!";
                }else
                {
                    move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadfile);
                    $bukti = "Data dan File telah berhasil di upload !!";
                }
                ?>
            <div class="upload">
                <?php
                    echo $bukti;
                ?>
            </div>

</section>
