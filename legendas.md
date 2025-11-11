# Legendas dos arquivos em português

<b> Camada de Dominio > Enumeradores</p>

Status do presente -> Gift Status (Arquivo)

## Enumeradores 

- Avaliable -> Disponivel
- Reserved -> Reservado 
- Purchased -> Comprado 

# Lembretes

Retorna qualquer tipo de valor (mixed)

Execute este código dentro de um bloqueio para evitar que duas pessoas mexam na mesma coisa ao mesmo tempo

```php
 public function withLocked(int $id, callable $callback):mixed;
 ```

 Define quais campos podem ser preenchidos automaticamente
 **$fillable**

# Migrações

- Criar migração  (php artisan make:model Gift -m)
- Rodar a migração no container (docker exec -it nome_do_container_php php artisan migrate)
- Refazer tudo do zero (docker exec -it nome_do_container_php php artisan migrate:fresh)