const flashData = $('.flash-data').data('flashdata');

        if (flashData == true) {
                Swal({
                        title: 'Data Formulir',
                        text : 'berhasil' + flashData,
                        type : 'success'
                      });
        }