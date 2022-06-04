<h3> Tambah Buku </h3>
        </div>
        <div align="center">
                        <form enctype="multipart/form-data" method="post" action="index.php?target=upload">
                            <input type="hidden" name="MAX_FILE_SIZE" value="100000000" />

                            <label>Judul Buku</label>
                            <input type="text" name="judulbuku"/>

                            <label>Nama Pengarang</label>
                            <input type="text" name="pengarang"/>

                            <label>Genre</label>
                            <input type="text" name="genre"/>

                            <label>Jumlah Halaman</label>
                            <input type="number" name="halaman"/>

                            <label>Penerbit</label>
                            <input type="text" name="tanggal" /> 

                            <label>Harga Sewa</label>
                            <input type="number" name="harga" />

                            <label>Gambar</label>
                            <input type="file" accept="image/*" name="gambar"/>
                            
                            <input type="submit" value="Upload">
                        </form>
            </div>
        </div>
    </div>
</section>
<script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'dd MM yy'
    });
  } );
</script>