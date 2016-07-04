# GDA Admin - Client

## Instruções

Esse pacote é para adicionar a função Client(Clientes) na aplicação GDA Admin

## Instalação

composer require gdadesenv/adminclient

Adicione o seguinte service provider em seu arquivo config/app.php:

```php
'providers' => [
    //...
    GdaDesenv\AdminClient\Providers\GdaClientServiceProvider::class
]
```

Adicione o seguinte código ao arquivo resources/views/sidebar.blade.php:

```php
<li class="{{ setActiveMenu('client') }}">
  <a href="{{route('client')}}">
    <i class="fa fa-info-users"></i> <span>Clientes</span>
  </a>
</li>
```

Rode o seguinte comando no artisan:

```bash
php artisan vendor:publish
```

Rode as migrações

```bash
php artisan migration
```
