# Laravel Lang em
## _Livre para fazer o download, alterar, editar_

Após alguma procura encontrei alguns ficheiros em pt_BR e estavam incompletos,

Decidi colocar estes ficheiros de traduções à disposição e tentarei matê-los atualizados.

## O que foi feito

- Para além de algumas traduções estarem a faltar, haviam outras que estavam mal traduzidas que foram corrigidas.
- Utilizei os ficheiros originais da pasta ('en') e usei o google tradutor para agilizar o processo ao qual fui copiando e colando ao mesmo tempo que ia corrigindo algumas traduções que vêm inevitavelmente em brasileiro.


## Instalação / Configuração

Esta pasta _'pt'_ foi criada para ser usada num projeto Laravel. Para iniciar usei o Laravel 10.x

Após as inicializações que dependem de cada um e de cada projeto, partindo do princípio que já têem o projeto funcional, podem encontrar a pasta 'lang' na raiz do projeto. Caso não a encontrem correr este comando:

```sh
php artisan lang:publish
```

Isto irá criar a pasta _'lang'_ com outra pasta _'en'_ lá dentro.
Basta copiar a pasta deste repositório _'pt'_ para dentro dessa pasta.

**NOTA:** Não esquecer de alterar as configurações de localização no ficheiro: **config/app.php**:
```sh
'locale' => 'pt',
```
