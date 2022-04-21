<div class="container">
	<div class="row">
		<div class="col-md-4 mt-3">
			<div class="card text-center magang">
				<div class="card-header">
					Riwayat Magang
				</div>
				<div class="card-body">
					<h5 class="card-title">PT Disty Teknologi Indonesia</h5>
					<img src="https://distyindonesia.com/assets/img/disty.png" class="disty">
					<p class="card-text">Mengikuti program Magang dan Studi Independen (MSIB) Batch 2 yang diadakan oleh Kemendikbud Ristek
						pada posisi Web Developer <br><br> Periode Magang : 14 Februari 2022 - 29 Juli 2022
					</p>
				</div>
				<hr size="10px">
				<div class="card-body">
					<h5 class="card-title">Kejaksaan Tinggi Jawa Timur</h5>
					<img src="https://kejati-jatim.go.id/wp-content/uploads/2020/04/cropped-Screen-Shot-2020-04-25-at-22.07.19-e1587827349622.png" class="disty">
					<p class="card-text">Magang mandiri yang dilaksanakan selama satu bulan pada bidang Pembinaan Kejaksaan Tinggi Jawa Timur <br><br> Periode Magang : 1 Juli 2021 - 31 Juli 2021
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 mt-3">
			<div class="card">
				<img src="public/bias1.jpg" class="card-img-top foto1" alt="...">
				<img src="public/bias.jpg" class="card-img-midle foto2" alt="...">
				<div class="card-body">
					<div class="d-grid gap-2">
						<button class="btn btn-primary" id="tblfoto1" type="button">Ganti Foto</button>
						<button class="btn btn-primary" id="tblfoto2" type="button">Ganti Foto</button>
						<button class="btn btn-primary" id="tombol" type="button">Hide Details</button>
						<button class="btn btn-primary" id="tombol1" type="button">Show Details</button>
					</div>
					<form class="form">
						<fieldset disabled>
							<div class="mb-3 mt-2">
								<label for="disabledTextInput" class="form-label">Nama Lengkap</label>
								<input type="text" id="disabledTextInput" class="form-control" placeholder="Achmad Bias Firmansyah">
							</div>
							<div class="mb-3">
								<label for="disabledTextInput" class="form-label">Hobi</label>
								<input type="text" id="disabledTextInput" class="form-control" placeholder="Makan">
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-4 mt-3">
			<div class="card text-center magang">
				<div class="card-header">
					Riwarat Organisasi
				</div>
				<div class="card-body">
					<h5 class="card-title">Himpunan Mahasiswa Sistem Informasi <br>UPN "Veteran" Jawa Timur</h5>
					<img src="https://media-exp1.licdn.com/dms/image/C560BAQFG4Az7jhoSVA/company-logo_200_200/0/1592767624384?e=2159024400&v=beta&t=NgcZ4_wCUs9OYIU9wpcaDUla3NE8DzTTAorn_WfU1sI" class="himasifo">
					<p>Sekretaris 1 <br>
						Periode : April 2021-Sekarang</p>
					<p> Tugas Pokok dan Fungsi
					<ul class="text-start">
						<li>Menyusun dan mengawasi pelaksanaan Standar Operasional Prosedur (SOP) organisasi</li>
						<li>Mendokumentasikan seluruh surat masuk dan keluar serta inventaris organisasi</li>
						<li>Membuat laporan pertanggungjawaban akhir kepengurusan</li>
					</ul>
					</p>
					<hr size="7px">
					<p>Sekretaris 2 <br>
						Periode : Januari 2020-Maret 2021
					</p>
					<p> Tugas Pokok dan Fungsi
					<ul class="text-start">
						<li>Mengatur jadwal pelaksanaan 20 program kerja himpunan selama masa kepengurusan</li>
						<li>Melakukan cek dan validasi seluruh dokumen program kerja</li>
					</ul>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<script language="javascript">
	function sembunyi() {
		$(".form").hide();
		$("#tombol").hide();
		$(".foto2").hide();
		$("#tblfoto2").hide();
		$(".magang").hide();
	}
	$("#tombol").click(function() {
		$(".form").hide();
		$("#tombol1").show();
		$("#tombol").hide();
		$(".magang").hide();

	});
	$("#tombol1").click(function() {
		$(".form").fadeIn(2000);
		$("#tombol1").hide();
		$("#tombol").show();
		$(".magang").fadeIn(2000);
	});
	$("#tblfoto1").click(function() {
		$("#tblfoto1").hide();
		$("#tblfoto2").show();
		$(".foto1").show();
		$(".foto2").hide();
	});
	$("#tblfoto2").click(function() {
		$("#tblfoto1").show();
		$("#tblfoto2").hide();
		$(".foto1").hide();
		$(".foto2").show();
	});
</script>