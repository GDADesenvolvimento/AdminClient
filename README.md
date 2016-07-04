# GDA Admin - Client

## Instruções

Esse pacote é para adicionar a função Client(Clientes) na aplicação GDA Admin

## Instalação

composer require gdadesenv/adminabout

Adicione o seguinte service provider em seu arquivo config/app.php:

```php
'providers' => [
    //...
    GdaDesenv\AdminAbout\Providers\GdaAboutServiceProvider::class
]
```

Adicione o seguinte código ao arquivo resources/views/sidebar.blade.php:

```php
<li class="{{ setActiveMenu('about') }}">
  <a href="{{route('about')}}">
    <i class="fa fa-info-circle"></i> <span>Sobre</span>
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
