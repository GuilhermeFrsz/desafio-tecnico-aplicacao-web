
$(document).on('click', '.btn-delete', function () {

    if (!confirm('Deseja realmente excluir este usuário?')) {
        return;
    }

    let id = $(this).data('id');
    let token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: `/users/${id}`,
        type: 'DELETE',
        data: {
            _token: token
        },
        success: function () {
            location.reload();
        },
        error: function () {
            alert('Erro ao excluir usuário.');
        }
    });
});
