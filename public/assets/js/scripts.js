$(document).ready(function(){
    $('.cnpj').mask('00.000.000/0000-00');

    if ($('#formulario_contato').length > 0) {
        const addContato = (e, data) => {
            const div = $( ".row-contato" ).clone().show().removeClass('row-contato');
            if (typeof e !== 'undefined' && e) {
                div.find('.title').show();
            }

            const maskBehavior = (val) => {
                return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
            };

            div.find('.telefone').mask(maskBehavior, {
                onKeyPress: function(val, e, field, options) {
                    field.mask(maskBehavior.apply({}, arguments), options);
                }
            });

            div.insertBefore( "#novocontato" );
        }

        $('#novocontato').click(addContato);
        $(document).on('click', '.removecontato', (event) => {
            $(event.target).parents('.row').first().remove();
        });

        if (old && old.contato) {
            for (const i in old.nome) {
                addContato(i > 0);
                $($('[name="nome[]"]')[i]).val(old?.nome[i]);
                $($('[name="telefone[]"]')[i]).val(old?.telefone[i]);
                $($('[name="whatsapp[]"]')[i]).val(old?.whatsapp[i]);
                $($('[name="email[]"]')[i]).val(old?.email[i]);
                $($('[name="cargo[]"]')[i]).val(old?.cargo[i]);
            }
        } else {
            addContato();
        }
    }

    if (success) {
        Swal.fire({
            icon: 'success',
            title: 'Dados salvos com sucesso',
            timer: 1500
        }).then(() => {
            window.location.href = 'https://servimed.com.br';
        });
    }
});
