<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Define o conjunto de caracteres como UTF-8 -->
    <meta charset="UTF-8">

    <!-- Define a viewport para garantir que o layout seja adequado em dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Importa o CSS do Bootstrap 5 de uma CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Importa os ícones do Bootstrap -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>

    <!-- Importa um arquivo CSS personalizado -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Define o título da página -->
    <title>David - FullCalendar</title>
</head>

<body>

    <!-- Elemento onde o calendário será renderizado -->
    <div id='calendar'></div>

    <!-- Modal Visualizar - Janela modal para exibir detalhes de um evento -->
    <div class="modal fade" id="visualizarModal" tabindex="-1" aria-labelledby="visualizarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Cabeçalho do modal, com o título e o botão de fechar -->
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="visualizarModalLabel">Detalhes do Evento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Corpo do modal, onde os detalhes do evento serão exibidos -->
                <div class="modal-body">
                    <dl class="row">
                        <dt class="col-sm-3">ID:</dt>
                        <dd class="col-sm-9" id="vizualizar_id"></dd>

                        <dt class="col-sm-3">Título:</dt>
                        <dd class="col-sm-9" id="vizualizar_title"></dd>

                        <dt class="col-sm-3">Início:</dt>
                        <dd class="col-sm-9" id="vizualizar_start"></dd>

                        <dt class="col-sm-3">Fim:</dt>
                        <dd class="col-sm-9" id="vizualizar_end"></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal cadastrar - Janela modal cadastrar detalhes de um evento -->
    <div class="modal fade" id="cadastrarModal" tabindex="-1" aria-labelledby="cadastrarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Cabeçalho do modal, com o título e o botão de fechar -->
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="cadastrarModalLabel">Cadastrar o Evento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Corpo do modal, onde os detalhes do evento serão exibidos -->
                <div class="modal-body">
                    <form>

                        <div class="row mb-3">
                            <label for="cad_title" class="col-sm-2 col-form-label">Título</label>
                            <div class="col-sm-10">
                                <input type="text" name="cad_title" class="form-control" id="cad_title" placeholder="Título do evento">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cad_start" class="col-sm-2 col-form-label">Início</label>
                            <div class="col-sm-10">
                                <input type="text" name="cad_start" class="form-control" id="cad_start">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cad_end" class="col-sm-2 col-form-label">Fim</label>
                            <div class="col-sm-10">
                                <input type="text" name="cad_end" class="form-control" id="cad_end" evento">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cad_title" class="col-sm-2 col-form-label">Título</label>
                            <div class="col-sm-10">
                                <input type="text" name="cad_title" class="form-control" id="cad_title" placeholder="Título do evento">
                            </div>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>

    <!-- Importa o JavaScript do Bootstrap 5, incluindo Popper.js, de uma CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- Importa o CSS do Bootstrap 5 de uma CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Importa o JavaScript do Bootstrap 5, incluindo Popper.js, de uma CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <!-- Importa o JavaScript do FullCalendar -->
    <script src='js/index.global.min.js'></script>

    <!-- Importa o JavaScript do tema Bootstrap 5 para o FullCalendar -->
    <script src="js/bootstrap5/index.global.min.js"></script>

    <!-- Importa os locais (idiomas) do FullCalendar -->
    <script src='js/core/locales-all.global.min.js'></script>

    <!-- Importa um arquivo JavaScript personalizado -->
    <script src='js/custom.js'></script>

</body>

</html>