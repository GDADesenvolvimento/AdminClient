<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use GdaDesenv\AdminClient\Entities\Client;

class ClientTest extends TestCase
{
    use DatabaseTransactions;


    public function test_create_client()
    {
        Client::create([
            'nome' => 'Cliente Teste',
            'cnpj' => '99.999.999/9999-99',
            'cpf' => '999.999.999-99',
            'email_contato' => 'teste@teste.com.br',
            'email_cobranca' => 'teste@teste.com.br',
            'telefone_contato' => '(99)9999-99',
            'telefone_cobranca' => '(99)9999-99',
            'endereco' => 'Rua Teste PHPUnit',
            'numero' => '999',
            'complemento' => 'casa teste',
            'bairro' => 'bairro teste',
            'municipio' => 'municipio teste',
            'uf' => 'TE'
        ]);

        $this->seeInDatabase('clients',['nome' => 'Cliente Teste', 'cnpj' => '99.999.999/9999-99']);
    }

    public function test_delete_client()
    {
        $client = Client::create([
            'nome' => 'Cliente Teste',
            'cnpj' => '99.999.999/9999-99',
            'cpf' => '999.999.999-99',
            'email_contato' => 'teste@teste.com.br',
            'email_cobranca' => 'teste@teste.com.br',
            'telefone_contato' => '(99)9999-99',
            'telefone_cobranca' => '(99)9999-99',
            'endereco' => 'Rua Teste PHPUnit',
            'numero' => '999',
            'complemento' => 'casa teste',
            'bairro' => 'bairro teste',
            'municipio' => 'municipio teste',
            'uf' => 'TE'
        ]);

        $this->seeInDatabase('clients',['nome' => 'Cliente Teste', 'cnpj' => '99.999.999/9999-99']);

        $client->destroy($client->id);

        $this->dontSeeInDatabase('clients', ['nome' => 'Cliente Teste']);
    }

    public function test_creating_client_using_form_with_errors()
    {
        \App\Entities\User::create([
            'name' => 'Admin Test',
            'login' => 'admin_test',
            'email' => 'admintest@admintest.com',
            'password' => bcrypt(12345678)
        ]);

        $this->visit('/')
            ->see('Efetuar Login')
            ->type('admin_test','login')
            ->type('12345678','password')
            ->press('Efetuar Login')
            ->dontSee('Login ou Password incorreto');

        $this->visit('/client/form')
            ->type('','nome')
            ->type('','cnpj')
            ->type('','cpf')
            ->type('','email_contato')
            ->type('','email_cobranca')
            ->type('','telefone_contato')
            ->type('','telefone_cobranca')
            ->type('','endereco')
            ->type('','numero')
            ->type('','complemento')
            ->type('','bairro')
            ->type('','municipio')
            ->type('','uf')
            ->press('Salvar Alterações')
            ->see('O campo nome é obrigatório.')
            ->see('O campo email contato é obrigatório.')
            ->see('O campo telefone contato é obrigatório.')
            ->see('O campo endereco é obrigatório.')
            ->see('O campo numero é obrigatório.')
            ->see('O campo complemento é obrigatório.')
            ->see('O campo bairro é obrigatório.')
            ->see('O campo municipio é obrigatório.')
            ->see('O campo uf é obrigatório.');
    }

    public function test_creating_client_using_form()
    {
        \App\Entities\User::create([
            'name' => 'Admin Test',
            'login' => 'admin_test',
            'email' => 'admintest@admintest.com',
            'password' => bcrypt(12345678)
        ]);

        $this->visit('/')
            ->see('Efetuar Login')
            ->type('admin_test','login')
            ->type('12345678','password')
            ->press('Efetuar Login')
            ->dontSee('Login ou Password incorreto');

        $this->visit('/client/form')
            ->type('Cliente Teste','nome')
            ->type('99.999.999/9999-99','cnpj')
            ->type('999.999.999-99','cpf')
            ->type('teste@teste.com.br','email_contato')
            ->type('teste@teste.com.br','email_cobranca')
            ->type('(99)9999-99','telefone_contato')
            ->type('(99)9999-99','telefone_cobranca')
            ->type('Rua Teste PHPUnit','endereco')
            ->type('999','numero')
            ->type('casa teste','complemento')
            ->type('bairro teste','bairro')
            ->type('municipio teste','municipio')
            ->type('TE','uf')
            ->press('Salvar Alterações');

        $this->seeInDatabase('clients',['nome' => 'Cliente Teste', 'cnpj' => '99.999.999/9999-99']);
    }

  public function test_updating_client_using_form()
  {
      \App\Entities\User::create([
          'name' => 'Admin Test',
          'login' => 'admin_test',
          'email' => 'admintest@admintest.com',
          'password' => bcrypt(12345678)
      ]);

      $this->visit('/')
          ->see('Efetuar Login')
          ->type('admin_test','login')
          ->type('12345678','password')
          ->press('Efetuar Login')
          ->dontSee('Login ou Password incorreto');

      $client = Client::create([
          'nome' => 'Cliente Teste',
          'cnpj' => '99.999.999/9999-99',
          'cpf' => '999.999.999-99',
          'email_contato' => 'teste@teste.com.br',
          'email_cobranca' => 'teste@teste.com.br',
          'telefone_contato' => '(99)9999-99',
          'telefone_cobranca' => '(99)9999-99',
          'endereco' => 'Rua Teste PHPUnit',
          'numero' => '999',
          'complemento' => 'casa teste',
          'bairro' => 'bairro teste',
          'municipio' => 'municipio teste',
          'uf' => 'TE'
      ]);

      $this->visit('/client/edit/'.$client->id)
          ->type('','nome')
          ->type('','cnpj')
          ->type('','cpf')
          ->type('','email_contato')
          ->type('','email_cobranca')
          ->type('','telefone_contato')
          ->type('','telefone_cobranca')
          ->type('','endereco')
          ->type('','numero')
          ->type('','complemento')
          ->type('','bairro')
          ->type('','municipio')
          ->type('','uf')
          ->press('Salvar Alterações')
          ->see('O campo nome é obrigatório.')
          ->see('O campo email contato é obrigatório.')
          ->see('O campo telefone contato é obrigatório.')
          ->see('O campo endereco é obrigatório.')
          ->see('O campo numero é obrigatório.')
          ->see('O campo complemento é obrigatório.')
          ->see('O campo bairro é obrigatório.')
          ->see('O campo municipio é obrigatório.')
          ->see('O campo uf é obrigatório.');

      $this->visit('/client/edit/'.$client->id)
          ->type('Cliente Teste2','nome')
          ->type('77.999.999/9999-99','cnpj')
          ->type('999.999.999-99','cpf')
          ->type('teste@teste.com.br','email_contato')
          ->type('teste@teste.com.br','email_cobranca')
          ->type('(99)9999-99','telefone_contato')
          ->type('(99)9999-99','telefone_cobranca')
          ->type('Rua Teste PHPUnit','endereco')
          ->type('999','numero')
          ->type('casa teste','complemento')
          ->type('bairro teste','bairro')
          ->type('municipio teste','municipio')
          ->type('TE','uf')
          ->press('Salvar Alterações');

      $this->seeInDatabase('clients',['nome' => 'Cliente Teste2', 'cnpj' => '77.999.999/9999-99']);
  }

  public function test_deleting_client_using_form()
  {
      \App\Entities\User::create([
          'name' => 'Admin Test',
          'login' => 'admin_test',
          'email' => 'admintest@admintest.com',
          'password' => bcrypt(12345678)
      ]);

      $this->visit('/')
          ->see('Efetuar Login')
          ->type('admin_test','login')
          ->type('12345678','password')
          ->press('Efetuar Login')
          ->dontSee('Login ou Password incorreto');

      $client = Client::create([
          'nome' => 'Cliente Teste',
          'cnpj' => '99.999.999/9999-99',
          'cpf' => '999.999.999-99',
          'email_contato' => 'teste@teste.com.br',
          'email_cobranca' => 'teste@teste.com.br',
          'telefone_contato' => '(99)9999-99',
          'telefone_cobranca' => '(99)9999-99',
          'endereco' => 'Rua Teste PHPUnit',
          'numero' => '999',
          'complemento' => 'casa teste',
          'bairro' => 'bairro teste',
          'municipio' => 'municipio teste',
          'uf' => 'TE'
      ]);

      $this->seeInDatabase('clients',['nome' => 'Cliente Teste', 'cnpj' => '99.999.999/9999-99']);

      $this->visit('/client/edit/'.$client->id)
          ->click('Remover Cliente')
          ->see('Cliente removido com sucesso!');

      $this->dontSeeInDatabase('clients', ['nome' => 'Cliente Teste']);
  }
}