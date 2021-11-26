$(function () {
    
    $("#adicionar-formacao").click(function (e) {
        e.preventDefault();
        var linha = '<div class="row">'+
                    '    <div class=class="card-body">'+
                    '            <div class="row">'+
                    '            <div class="col-12 col-md-5">'+
                    '                <input type="text" class="form-control espaco-form" placeholder="Curso" name="formacao-curso[]">'+
                    '            </div>'+
                    '            <div class="col-12 col-md-3">'+
                    '                <input type="text" class="form-control espaco-form" placeholder="Instituição" name="formacao-instituicao[]">'+
                    '            </div>'+
                    '            <div class="col-12 col-md-3">'+
                    '                <input type="text" class="form-control espaco-form" placeholder="Conclusão" name="formacao-conclusao[]">'+
                    '            </div>'+
                    '            <div class="col-12 col-md-1">'+
                    '                <button type="button" class="btn btn-danger form-control btn-remover-item" title="Remover formação">&times;</button>'+
                    '            </div>'+
                    '            </div>'+
                    '    </div>'+
                    '</div>';
        

        
        $("#formacoes").append(linha);
    });
    
    $("#adicionar-experiencia").click(function (e) {
        e.preventDefault();
        var linha = '<div class="row">'+
                    '    <div class=class="card-body">'+
                    '        <div class="row">'+
                    '            <div class="col-12 col-md-4">'+
                    '                <input type="text" class="form-control espaco-form" placeholder="Empresa" name="experiencia-empresa[]">'+
                    '            </div>'+
                    '            <div class="col-12 col-md-3">'+
                    '                <input type="text" class="form-control espaco-form" placeholder="Função" name="experiencia-funcao[]">'+
                    '            </div>'+
                    '            <div class="col-6 col-md-2">'+
                    '                <input type="text" class="form-control espaco-form" placeholder="Início" name="experiencia-inicio[]">'+
                    '            </div>'+
                    '            <div class="col-6 col-md-2">'+
                    '                <input type="text" class="form-control espaco-form" placeholder="Fim" name="experiencia-fim[]">'+
                    '            </div>'+
                    '            <div class="col col-md">'+
                    '                <button type="button" class="btn btn-danger btn-remover-item form-control" title="Remover experiência">&times;</button>'+
                    '            </div>'+
                    '        </div>'+
                    '    </div>'+
                    '</div>';
        

        
        $("#experiencias").append(linha);
    });

    //Função responsável por remover html dinamicamente.
    $("#formacoes, #experiencias").on("click", ".btn-remover-item", function () {
        
        $(this).parent().parent().remove();
    })
});

