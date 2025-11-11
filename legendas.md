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
