@extends('layouts.app')
        
<div class="container mt-9">
    <form id="formLogin">
        @csrf
        <div class="card-box">
            <div class="col-md-10 m-auto">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <div class="input-group input-group-alternative">
                        <input type="text" name="email" id="" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="col-md-10 m-auto">
                <div class="form-group">
                    <label for="nome">Senha</label>
                    <div class="input-group input-group-alternative">
                        <input type="password" name="password" id="" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="col-md-10 m-auto">
                <div class=" row justify-content-center mb-2">
                    <a href=""data-toggle="modal" data-target="#createContaModal">Criar Conta</a>
                </div>
                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </div>
        </div>
    </form>
</div>

<div class="modal fade" id="createContaModal" tabindex="-1" role="dialog" aria-labelledby="createContaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createContaModalLabel">Cadastrar Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form  id="createUser">
                @csrf
                <div class="modal-body">
                    <div class="form-group ">
                        <div class="input-group input-group-alternative">
                            <input class="form-control" type="text" name="name" id="Nome" required placeholder="Nome">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <input class="form-control" type="email" name="email" id="email" required placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="input-group input-group-alternative">
                            <input class="form-control" type="password" name="password" id="password" required placeholder="Senha">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>


