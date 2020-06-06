const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire({
		title: 'Data',
		text: 'Berhasil ' + flashData,
		icon: 'success'
	});
} else if (flashData) {
	Swal.fire({
		title: 'Data',
		text: flashData + ' dilaksanakan ',
		icon: 'error'
	});
}


$('.tombol-hapus').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah anda Yakin?',
		text: "data akan dihapus!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});
