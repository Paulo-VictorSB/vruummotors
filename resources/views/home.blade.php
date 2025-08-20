@extends('layouts.home_layout')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/images/vrummotors.png') }}" alt="Logo" height="100px">
            </a>
            <form class="d-flex ms-auto">
                <input class="form-control me-2" type="search" placeholder="Pesquisar veículo" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Buscar</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-3 sidebar border-end p-3 shadow">
                <h6 class="bg-primary text-white text-center p-2 rounded">Busca</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none">Todos os veículos</a></li>
                    <li><a href="#" class="text-decoration-none">Apenas promoções</a></li>
                </ul>

                <hr>

                <h6>Marca</h6>
                <select class="form-select mb-3">
                    <option value="">Selecione a marca</option>
                    <option value="volkswagen">Volkswagen</option>
                    <option value="fiat">Fiat</option>
                    <option value="ford">Ford</option>
                </select>

                <h6>Cor</h6>
                <select class="form-select mb-3">
                    <option value="">Selecione a cor</option>
                    <option value="preto">Preto</option>
                    <option value="branco">Branco</option>
                    <option value="vermelho">Vermelho</option>
                </select>

                <h6>Preço</h6>
                <form class="mb-3">
                    <div class="mb-2">
                        <input type="number" class="form-control" placeholder="Mínimo">
                    </div>
                    <div class="mb-2">
                        <input type="number" class="form-control" placeholder="Máximo">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Aplicar filtros</button>
                    <button type="reset" class="btn btn-secondary w-100 mt-2">Limpar filtros</button>
                </form>
            </div>

            <div class="col-md-9 px-3 pb-3">

                <div class="d-flex justify-content-end mb-3">
                    <select class="form-select w-auto">
                        <option value="novidades">Novidades</option>
                        <option value="menor_preco">Menor preço</option>
                        <option value="maior_preco">Maior preço</option>
                        <option value="nome_az">Nome A-Z</option>
                        <option value="nome_za">Nome Z-A</option>
                        <option value="maior_desconto">Maior desconto</option>
                        <option value="destaques">Destaques</option>
                    </select>
                </div>

                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="card position-relative shadow">
                            <img src="veiculo.jpg" class="card-img-top" alt="Veículo">
                            <span class="badge bg-danger badge-desconto">-15%</span>
                            <div class="card-body">
                                <h5 class="card-title">Modelo do Veículo</h5>
                                <p class="card-text fipe">R$ 50.000,00</p>
                                <p class="card-text fw-bold">R$ 42.500,00</p>
                                <a href="#" class="btn btn-primary w-100">Ver detalhes</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card position-relative shadow">
                            <img src="veiculo.jpg" class="card-img-top" alt="Veículo">
                            <span class="badge bg-danger badge-desconto">-15%</span>
                            <div class="card-body">
                                <h5 class="card-title">Modelo do Veículo</h5>
                                <p class="card-text fipe">R$ 50.000,00</p>
                                <p class="card-text fw-bold">R$ 42.500,00</p>
                                <a href="#" class="btn btn-primary w-100">Ver detalhes</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card position-relative shadow">
                            <img src="veiculo.jpg" class="card-img-top" alt="Veículo">
                            <span class="badge bg-danger badge-desconto">-15%</span>
                            <div class="card-body">
                                <h5 class="card-title">Modelo do Veículo</h5>
                                <p class="card-text fipe">R$ 50.000,00</p>
                                <p class="card-text fw-bold">R$ 42.500,00</p>
                                <a href="#" class="btn btn-primary w-100">Ver detalhes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
