
	<!-- Libs JS -->
<script src="<?= base_url('assets/libs/apexcharts/dist/apexcharts.min.js?1738096685') ?>" defer></script>
<script src="<?= base_url('assets/libs/jsvectormap/dist/jsvectormap.min.js?1738096685') ?>" defer></script>
<script src="<?= base_url('assets/libs/jsvectormap/dist/maps/world.js?1738096685') ?>" defer></script>
<script src="<?= base_url('assets/libs/jsvectormap/dist/maps/world-merc.js?1738096685') ?>" defer></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
			<!-- Tabler Core -->
<script src="<?= base_url('assets/js/tabler.min.js?1738096685') ?>" defer></script>
<script src="<?= base_url('aseets/js/demo.min.js?1738096685') ?>" defer></script>
	<!-- Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if(isset($_SESSION['gagal'])) { ?>
	<script>
    	Swal.fire({
  			icon: "error",
  			title: "Oops...",
  			text: "<?= $_SESSION['gagal']; ?>",
		});
	</script>
	
	<?php unset($_SESSION['gagal']); ?>

<?php } ?>

<!-- Alert berhasil -->
<? if(isset($_SESSION['berhasil'])) : ?>
	<script>
		const Berhasil = Swal.mixin({
			toast: true,
			position: "center",
			showConfirmButton: false,
			timer: 3000,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.onmouseenter = Swal.stopTimer;
				toast.onmouseleave = Swal.resumeTimer;
			}
		});
		Berhasil.fire({
			icon: "success",
			title: "<?= $_SESSION['berhasil'] ?>"
		});
	</script>
	<?php unset($_SESSION['berhasil']); ?>

<? endif; ?>


<!-- Alert validasi -->
<? if(isset($_SESSION['validasi'])) : ?>
	<script>
		const Toast = Swal.mixin({
			toast: true,
			position: "center",
			showConfirmButton: false,
			timer: 3000,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.onmouseenter = Swal.stopTimer;
				toast.onmouseleave = Swal.resumeTimer;
			}
		});
		Toast.fire({
			icon: "error",
			title: "<?= $_SESSION['validasi'] ?>"
		});
	</script>
	<?php unset($_SESSION['validasi']); ?>

<? endif; ?>

<script>
	$('.tombol-hapus').on('click', function() {
		var getlink = $(this).attr('href');
		Swal.fire({
			title: "Yakin untuk menghapus?",
			text: "Datab yang sudah dihapus tidak bisa dikembalikan lagi",
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			confirmButtonText: "Hapus"
		}).then((result) => {
			if (result.isConfirmed) {
				window.location.href = getlink
			}
		})
		return false;
	});

</script>
</body>
</html>
